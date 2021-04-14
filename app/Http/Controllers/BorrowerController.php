<?php

namespace App\Http\Controllers;
use App\BecomePartner;
use App\BuildingPlaceStatus;
use App\BusinessCreditScoreIncomeFactory;
use App\BusinessCriteria;
use App\BusinessLegality;
use App\Education;
use App\Estabilished;
use App\LoanInstallment;
use App\LoanRequest;
use App\MarriedStatus;
use App\PersonalBusiness;
use App\PersonalEmergencyContact;
use App\PersonalInfo;
use App\Siblings;
use App\TotalEmployee;
use App\User;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;


class BorrowerController extends Controller
{
    static $CONFIG = [
        "title" => "Borrower",
        "subtitle" => "List Borrower",
        "icon" => "image"
    ];
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(Request $request){
        $data = [
            'users'=> User::where('group','borrower')->get(),
        ];
        return view('pages.borrower.index', $this->merge_response($data, static::$CONFIG));
    }

    public function detail(Request $request){

        $uid = $request->id;
        $user = User::
                    select('users.*','users_file.*','personal_info.*','married_status.status as status_married','education.level as level_education','personal_emergency_contact.*','siblings_master.sibling_name')->
                    leftJoin('users_file', 'users.id', '=', 'users_file.uid')->
                    leftJoin('personal_info', 'users.id', '=', 'personal_info.uid')->
                    leftJoin('married_status', 'personal_info.married_status', '=', 'married_status.id')->
                    leftJoin('education', 'personal_info.education', '=', 'education.id')->
                    leftJoin('personal_emergency_contact', 'users.id', '=', 'personal_emergency_contact.uid')->
                    leftJoin('siblings_master', 'personal_emergency_contact.id_siblings_master', '=', 'siblings_master.id')->
                    where('users.id',$uid)->first();

        $get_loan = LoanRequest::leftJoin('master_status_loan_request', 'request_loan.status', '=', 'master_status_loan_request.id')->
        where('request_loan.uid',$uid)->orderBy('request_loan.created_at','DESC')->get();

        $loan_installments = LoanInstallment::
            select('request_loan.*','request_loan_installments.*','request_loan_installments.due_date_payment as due_date_payment_installment','master_status_payment.status_name')
        ->leftJoin('request_loan' ,'request_loan_installments.id_request_loan','=','request_loan.id')
        ->leftJoin('master_status_payment' ,'request_loan_installments.id_status_payment','=','master_status_payment.id')
        ->where('request_loan.uid',$uid)->orderBy('stages','ASC')
            ->get();


        $data = [
            'user'=> $user,
            'get_loan'=>$get_loan,
            'loan_installments'=>$loan_installments
        ];

        return view('pages.borrower.detail', $this->merge_response($data, static::$CONFIG));
    }

    public function paging(Request $request){

        return DataTables::of(User::where('group','borrower')->orderBy('created_at','DESC')->get())->addIndexColumn()->make(true);
    }

    public function get_user(Request $request){


        if ($request->has('search')) {
            $search = strtoupper($request->search);
            $data = DB::table('personal_info')->select('id', 'first_name')->where('first_name', 'ilike', '%'.$search.'%')->get();
            $response = array();
            foreach($data as $person){
                $response[] = array(
                    "id"=>$person->id,
                    "text"=>$person->first_name
                );
            }
            return json_encode($response);

        }
    }

    public function edit(Request $request){

        $uid = $request->id;
        $personal_info = PersonalInfo::select('personal_info.*','regencies.name as city_name','districts.name as district_name','villages.name as villages_name')
            ->leftJoin('regencies', 'personal_info.city', '=', 'regencies.id')
            ->leftJoin('districts', 'personal_info.district', '=', 'districts.id')
            ->leftJoin('villages', 'personal_info.villages', '=', 'villages.id')
            ->where('uid',$uid)->first();

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


        $provinces = Province::get();
        $education = Education::Orderby('id','ASC')->get();

        $business_criteria = BusinessCriteria::Orderby('id','ASC')->get();
        $business_income_factory = BusinessCreditScoreIncomeFactory::Orderby('id','ASC')->get();
        $business_legality = BusinessLegality::Orderby('id','ASC')->get();
        $business_established_since = Estabilished::orderBy('id','ASC')->get();
        $business_total_employee = TotalEmployee::orderBy('id','ASC')->get();
        $business_place_status = BuildingPlaceStatus::orderBy('id','ASC')->get();
        $partner_since = BecomePartner::orderBy('id','ASC')->get();
        $siblings = Siblings::get();
        $married_status = MarriedStatus::get();


        $data = [
            'uid'=>$uid,
            'personal_info'=> $personal_info,
            'get_data_business'=>$get_data_business,
            'get_data_emergency'=>$get_data_emergency,
            'provinces'=> $provinces,
            'education'=> $education,
            'business_legality'=> $business_legality,
            'business_criteria'=> $business_criteria,
            'business_income_factory'=> $business_income_factory,
            'business_established_since'=> $business_established_since,
            'business_total_employee'=> $business_total_employee,
            'business_place_status'=> $business_place_status,
            'partner_since'=> $partner_since,
            'siblings'=> $siblings,
            'married_status'=> $married_status,

        ];

        return view('pages.borrower.edit', $this->merge_response($data, static::$CONFIG));
    }

    public function update_profile(Request $request)
    {
        $uid = $request->uid;

        $validation = Validator::make($request->all(), [
            'identity_number' => 'required|numeric|digits:16',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required',
            'vilages' => 'required',
            'zip_code' => 'required',
            'phone_number' => 'required|numeric',
            'whatsapp_number' => 'required',
            'education' => 'required',
            'npwp_number' => 'required',
            'married_status' => 'required',
            'mother_name' => 'required',
        ],
        [
            'identity_number.required' => 'Nomor KTP harus diisi',
            'identity_number.numeric' => 'Nomor KTP harus berupa Angka',
            'identity_number.digits' => 'Nomor KTP harus berupa 16 angka',
            'first_name.required' => 'Nama depan harus diisi',
            'last_name.required' => 'Nama belakang harus diisi',
            'gender.required' => 'Jenis Kelamin harus diisi',
            'pob.required' => 'Tempat lahir  harus diisi',
            'dob.required' => 'Tanggal lahir harus diisi',
            'address.required' => 'Alamat harus diisi',
            'province.required' => 'Propinsi harus diisi',
            'city.required' => 'Kota harus diisi',
            'district.required' => 'Kecamatan harus diisi',
            'vilages.required' => 'Kelurahan  harus diisi',
            'zip_code.required' => 'Kode Pos harus diisi',
            'education.required' => 'Pendidikan terakhir harus diisi',
            'npwp_number.required' => 'Nomor NPWP harus diisi',
            'phone_number.required' => 'Nomor Telepon harus diisi',
            'whatsapp_number.required' => 'Nomor Whatsapp harus diisi',
            'married_status.required' => 'Status pernikahan harus diisi',
            'mother_name.required' => 'Nama ibu kandung harus diisi',

        ]);

        if($validation->fails()) {
            $json = [
                "status"=> false,
                "message"=> $validation->messages(),
            ];
        }else{
            PersonalInfo::where([
                ['uid',$uid],

            ])->update
            ([
                'identity_number'        => $request->identity_number,
                'first_name'             => $request->first_name,
                'last_name'              => $request->last_name,
                'gender'                 => $request->gender,
                'place_of_birth'         => $request->pob,
                'date_of_birth'          => date("Y-m-d", strtotime($request->dob)),
                'address'                => $request->address,
                'province'               => $request->province,
                'city'                   => $request->city,
                'district'               => $request->district,
                'villages'               => $request->vilages,
                'zip_code'               => $request->zip_code,
                'education'              => $request->education,
                'npwp_number'            => $request->npwp_number,
                'total_cc'               => $request->total_cc,
                'bpjs_employee_number'   => $request->bpjs_employee_number,
                'bpjs_health_number'     => $request->bpjs_employee_number,
                'phone_number'           => $request->phone_number,
                'whatsapp_number'        => $request->whatsapp_number,
                'married_status'         => $request->married_status,
                'mother_name'            => $request->mother_name,
                'updated_at'             =>date('Y-m-d H:i:s'),
            ]);
            $json = [
                "status"=> true,
                "message"=> 'Data Personal berhasil di ubah',
            ];
        }


        return response()->json($json);


    }
}
