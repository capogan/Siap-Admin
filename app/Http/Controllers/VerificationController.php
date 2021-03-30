<?php

namespace App\Http\Controllers;

use App\PersonalBusiness;
use App\PersonalEmergencyContact;
use App\PhoneDescription;
use App\PhoneMatchingData;
use App\PhoneVerification;
use App\UserFile;
use Illuminate\Http\Request;
use DB;
use App\LoanRequest;
use Yajra\DataTables\DataTables;

class VerificationController extends Controller
{
    static $CONFIG = [
        "name"=> '',
        "title" => "Verifikasi Akhir",
    ];
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['verification']]);
    }
    function index(){
//        $loan_request = LoanRequest::with('current_score')->with('scoring')->whereIn('status',['16','17','18','19','20','21','22','23','24','25','26','27','28']
//        )->get();

        $loan_request = LoanRequest::whereIn('request_loan.status',['16','17','18','19','20','21','22','23','24','25','26','27','28'])
            ->leftJoin('request_loan_score_current', 'request_loan.id', '=', 'request_loan_score_current.id_request_loan')
            ->leftJoin('master_status_loan_request', 'request_loan.status', '=', 'master_status_loan_request.id')
            ->select('request_loan.*','request_loan.id as request_loan_id','request_loan_score_current.*','master_status_loan_request.*','master_status_loan_request.title as status_name','request_loan.created_at as loan_created_at')
            ->get();


        $data = [
            'loan_request'=> $loan_request
        ];
        return view('pages.verification.index', $this->merge_response($data, static::$CONFIG));
    }

    function invoice_detail(Request $request){

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

        $phone_description = PhoneDescription::where('id_request_loan',$id_loan)->get();

        $phone_verification = PhoneVerification::where('id_request_loan',$id_loan)->first();

        $data_crm = '';
        if($phone_verification){
            $data_crm = PhoneMatchingData::where('id_phone_verification',$phone_verification->id)->orderBy('id','ASC')->get();
        }

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
            'phone_description'=> $phone_description,
            'phone_verification'=> $phone_verification
        ];
        return view('pages.verification.detail', $this->merge_response($data, static::$CONFIG));


    }

    public function paging(Request $request){

        return DataTables::of( LoanRequest::with('current_score')->with('scoring')->where('status',['2'])->get())->addIndexColumn()->make(true);
    }

    public function confirm(Request $request){

        $id_loan = $request->id_loan;
        LoanRequest::where([
            ['id',$id_loan],

        ])->update
        ([
            "status" => static::MARKET_PLACE,
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        $message = "Sukses menyimpan Data";
        return json_encode(['status'=> true, 'message'=> $id_loan]);

    }
}
