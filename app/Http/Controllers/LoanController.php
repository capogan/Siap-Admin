<?php

namespace App\Http\Controllers;

use App\PersonalBusiness;
use App\PersonalEmergencyContact;
use App\PhoneDescription;
use App\PhoneVerification;
use App\UserFile;
use Illuminate\Http\Request;
use App\LoanRequest;
use App\PhoneMatchingData;
use App\Helpers\Utils;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Auth;
use App\RequestLoanCurrentScore;

class LoanController extends Controller
{
    static $CONFIG = [
        "name"=> '',
        "title" => "Peminjaman",
    ];
    public function __construct()
    {

        $this->middleware('auth', ['except' => ['verification']]);
    }

    function index(Request $request){


        $loan_request = LoanRequest::whereIn('request_loan.status',['4','5','6','7','8','9','10','11','12','13','14','15'])
            ->leftJoin('request_loan_score_current', 'request_loan.id', '=', 'request_loan_score_current.id_request_loan')
            ->leftJoin('master_status_loan_request', 'request_loan.status', '=', 'master_status_loan_request.id')
            ->select('request_loan.*','request_loan.id as request_loan_id','request_loan_score_current.*','master_status_loan_request.*','master_status_loan_request.title as status_name','request_loan.created_at as loan_created_at')
            ->get();

      //  Utils::debug($loan_request);

        $data = [
            'loan_request'=> $loan_request
        ];
        return view('pages.loan.index', $this->merge_response($data, static::$CONFIG));
    }

    function invoice_detail(Request $request){


        $loan_request = LoanRequest::leftJoin('request_loan_score_current', 'request_loan.id', '=', 'request_loan_score_current.id_request_loan')
            ->leftJoin('master_status_loan_request', 'request_loan.status', '=', 'master_status_loan_request.id')
            ->leftJoin('users', 'request_loan.uid', '=', 'users.id')
            ->select('request_loan.*','request_loan.id as request_loan_id','request_loan_score_current.*','master_status_loan_request.*','master_status_loan_request.title as status_name')
            ->where('request_loan.id',$request->id)
            ->first();



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
                            ,'business_place_status.*','provinces.name as province_name','regencies.name as regencies_name','districts.name as district_name','villages.name as villages_name')->
                            leftJoin('provinces', 'personal_business.business_province', '=', 'provinces.id')->
                            leftJoin('regencies', 'personal_business.business_city', '=', 'regencies.id')->
                            leftJoin('districts', 'personal_business.business_sub_kecamatan', '=', 'districts.id')->
                            leftJoin('villages', 'personal_business.business_sub_kelurahan', '=', 'villages.id')->
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


        $phone_description = PhoneDescription::where('id_request_loan',$id_loan)->get();

        $get_data_users = DB::table('view_request_loan')->where('id',$id_loan)->first();


        $data = [
            'id_loan' => $id_loan,
            'data_crm'=> $data_crm,
            'uid'=>$uid,
            'get_data_users'=>$get_data_users,
            'get_data_business'=>$get_data_business,
            'get_data_emergency'=>$get_data_emergency,
            'loan_request'=> $loan_request,
            'get_data_document'=> $get_data_document,
            'phone_description'=> $phone_description
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

        LoanRequest::where([
            ['id',$id_loan],

        ])->update
        ([
            "status" => static::PENDING_FINAL_REVIEW,
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        return json_encode(['status'=> true, 'message'=> $message]);

    }

    function reject_image(Request $request){

        $uid = $request->uid;
        $variable = $request->str;
        $result_desc = $request->desc;
        if($request->desc)
        UserFile::where([
            ['uid',$uid],
        ])->update
        ([
             $variable       => $result_desc,
             "updated_at"    => date('Y-m-d H:i:s'),
        ]);

        return json_encode(['status'=> true, 'message'=> $uid]);
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

        LoanRequest::where([
            ['id',$request->id_loan],

        ])->update
        ([
            "reject_description" => $request->desc_reject,
            "status" => $request->id_status,
            "reject_date" => date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);

        $message = "Tolak pengajuan Berhasil";
        return json_encode(['status'=> true, 'message'=> $message]);
    }


    function add_noted_emergency(Request $request){

        $uid = $request->uid;
        $validator = Validator::make($request->all(), [
            'result_text' => 'required',
        ],
            [
                'result_text.required' => 'Masukkan kesimpulan dari Kontak darurat',
            ]);

        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }

        PersonalEmergencyContact::where([
            ['uid',$uid],
        ])->update
        ([
            'emergency_response'       => $request->result_text,
            "updated_at"    => date('Y-m-d H:i:s'),
        ]);
        $message = "Kesimpulan dari kontak darurat berhasil di ubah";
        return json_encode(['status'=> true, 'message'=> $message]);
    }

    function add_description_crm(Request $request){
        $id_loan = $request->id_loan;
        $validator = Validator::make($request->all(), [
            'phone_status' => 'required',
        ],
            [
                'phone_status.required' => 'pilih salah satu dari status telepon',
            ]);

        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }
        $data = PhoneDescription::create([
           'id_request_loan' => $id_loan,
            'phone_status'=>$request->phone_status,
            'phone_description'=>$request->description,
            'created_at'                => date('Y-m-d H:i:s'),
            'updated_at'                => date('Y-m-d H:i:s'),
            'updated_by'                => Auth::user()->name,
        ]);
        $message = "Deskripsi berhasil ditambahkan";
        return json_encode(['status'=> true, 'message'=> $message,'data'=>$data]);
    }

    public function get_invoice(Request $request){


        if ($request->has('search')) {
            $search = strtoupper($request->search);
            $data = DB::table('request_loan')->select('id', 'invoice_number')->where('invoice_number', 'ilike', '%'.$search.'%')->get();
            $response = array();
            foreach($data as $person){
                $response[] = array(
                    "id"=>$person->id,
                    "text"=>$person->invoice_number
                );
            }
            return json_encode($response);

        }
    }



}
