<?php

namespace App\Http\Controllers;

use App\PersonalBusiness;
use App\PersonalEmergencyContact;
use App\PhoneVerification;
use App\UserFile;
use Illuminate\Http\Request;
use App\LoanRequest;
use App\PhoneMatchingData;
use App\Helpers\Utils;
use Illuminate\Support\Facades\Validator;
use DB;

class LoanController extends Controller
{
    static $CONFIG = [
        "title" => "Loan",
    ];
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(Request $request){

        $loan_request = LoanRequest::with('current_score')->whereNotIn('status',['0','5'])->get();
        $data = [
            'loan_request'=> $loan_request
        ];
        return view('pages.loan.index', $this->merge_response($data, static::$CONFIG));
    }

    function invoice_detail(Request $request){

        $loan_request = LoanRequest::with('current_score')->with('get_user')->where('id',$request->id)->first();
        $data = [
            'loan_request'=> $loan_request
        ];
        return view('pages.loan.invoice', $this->merge_response($data, static::$CONFIG));

    }

    function verification_data(Request $request){

        $id_loan = $request->id;
        $get_data_loan = LoanRequest::where('id',$id_loan)->first();
        $uid = $get_data_loan->uid;

        $loan_request = LoanRequest::with('current_score')->with('get_user')->where('id',$request->id)->first();
        $get_data_business = PersonalBusiness::
                            select('personal_business.*','users.name as username','business_legality.*','credit_score_income_factory.*'
                            ,'business_place_status.*','provinces.name as province_name','regencies.name as regencies_name')->
                            leftJoin('provinces', 'personal_business.business_province', '=', 'provinces.id')->
                            leftJoin('regencies', 'personal_business.business_city', '=', 'regencies.id')->
                            leftJoin('users', 'personal_business.uid', '=', 'users.id')->
                            leftJoin('business_legality', 'personal_business.legality_status', '=', 'business_legality.id')->
                            leftJoin('credit_score_income_factory', 'personal_business.id_credit_score_income_factor', '=', 'credit_score_income_factory.id')->
                            leftJoin('business_place_status', 'personal_business.business_place_status', '=', 'business_place_status.id')->
                            where('uid',$uid)->first();

        $get_data_emergency = PersonalEmergencyContact::
                                select('personal_emergency_contact.*','siblings_master.*','provinces.*','regencies.*','provinces.name as province_name','regencies.name as city_name')->
                                leftJoin('siblings_master', 'personal_emergency_contact.id_siblings_master', '=', 'siblings_master.id')->
                                leftJoin('provinces', 'personal_emergency_contact.emergency_province', '=', 'provinces.id')->
                                leftJoin('regencies', 'personal_emergency_contact.emergency_city', '=', 'regencies.id')->
                                where('uid',$uid)->first();

        $get_data_document = UserFile::where('uid',$uid)->first();

        $data_crm = array(

            'Nama Pemohon' => $get_data_business->username ?? "-",
            'nomor Telepon Tempat Usaha' => $get_data_business->business_phone_number ??  "-",
            'Alamat tempat usaha' => $get_data_business->business_name ?? '-',
            'Bidang usaha' => $get_data_business->industry_sectore ?? '-',
            'Detail Jenis Bidang Usaha' =>$get_data_business->business_description ?? '-',
            'Badan Hukum Usaha' => $get_data_business->legality_name ?? '-',
            'Status Tempat Usaha' => $get_data_business->place_status_name ?? '-',
            'rata Pendapatan penjualan Perbulan dalam 6 bulan terakhir' => $get_data_business->average_sales_revenue_six_month ?? '-',
            'rata - rata Pengeluaran Perbulan dalam dalam 6 bulan terakhir' => $get_data_business->average_monthly_expenditure_six_month ?? '-',
            'rata-rata Keuntungan perbulan dalam 6 bulan terakhir' => $get_data_business->average_monthly_profit_six_month ?? '-',
        );



        $data = [
            'id_loan' => $id_loan,
            'data_crm'=> $data_crm,
            'get_data_business'=>$get_data_business,
            'get_data_emergency'=>$get_data_emergency,
            'loan_request'=> $loan_request,
            'get_data_document'=> $get_data_document
        ];
        return view('pages.loan.verification', $this->merge_response($data, static::$CONFIG));
    }


    public function verification_phone(Request $request){

        $id_loan = $request->id_loan;
        $validator = Validator::make($request->all(), [
            'description_business' => 'required',
            'risk' => 'required',
            'noted' => 'required',
        ],
        [
            'description_business.required' => 'Penjelasan Kegiatan Usaha harus diisi',
            'risk.required' => 'Pilih Kesimpulan analisa',
            'noted.required' => 'Catatan Usaha harus diisi',
        ]);
        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }

        $loan = PhoneVerification::where('id_request_loan',$id_loan)->first();
        if($loan){
            //Update  data
            $id_phone_verification = $loan->id;
            DB::beginTransaction();

            try {

                PhoneVerification::where([
                    ['id_request_loan',$id_loan],

                ])->update
                ([
                    'desc_business_activities'  => $request->description_business,
                    'result_data_analyst'       => $request->risk,
                    'noted'                     => $request->noted,
                    'updated_at'                => date('Y-m-d H:i:s'),
                ]);


                $increment = 1;
                foreach ($request->variable as $key => $val){

                    PhoneMatchingData::where([
                        ['id_phone_verification',$id_phone_verification],

                    ])->update
                    ([
                        'result'                => $request->input('result_'.$increment),
                        'description'           => $request->input('description_'.$increment),
                        'updated_at'            => date('Y-m-d H:i:s'),
                    ]);

                    $increment++;
                }
                $message = "Data berhasil di ubah";
                DB::commit();

            } catch (\Exception $e) {
                DB::rollback();

            }


        }else{
            //insert new data
            DB::beginTransaction();

            try {
                $crm = PhoneVerification::create([
                    'id_request_loan'           => $id_loan,
                    'desc_business_activities'  => $request->description_business,
                    'result_data_analyst'       => $request->risk,
                    'noted'                     => $request->noted,
                    'created_at'                => date('Y-m-d H:i:s'),
                    'updated_at'                => date('Y-m-d H:i:s'),
                ]);

                $id_crm = $crm->id;
                $increment = 1;
                foreach ($request->variable as $key => $val){

                    $validator = Validator::make($request->all(), [
                        'result_'.$increment => 'required',
                    ],
                        [
                            'result_'.$increment.'.required' => 'Mohon Melengkapi semua persamaaan data',
                        ]);
                    if ($validator->fails()) {
                        return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
                    }

                    PhoneMatchingData::create([
                        'id_phone_verification' => $id_crm,
                        'variable'              => $val,
                        'result'                => $request->input('result_'.$increment),
                        'description'           => $request->input('description_'.$increment),
                        'data_user'             => $request->input('data_user_'.$increment),
                        'created_at'            => date('Y-m-d H:i:s'),
                        'updated_at'            => date('Y-m-d H:i:s'),
                    ]);
                    $increment++;

                }
                DB::commit();

            } catch (\Exception $e) {
                DB::rollback();

            }

            $message = "Data berhasil di tambah";
        }


        return json_encode(['status'=> true, 'message'=> $message]);

    }

    function reject(Request $request){

        $validator = Validator::make($request->all(), [
            'desc_reject' => 'required',
        ],
        [
            'desc_reject.required' => 'Masukkan alasan penolakan pinjaman',
        ]);

        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }

        $message = "test";
        return json_encode(['status'=> true, 'message'=> $message]);
    }
}
