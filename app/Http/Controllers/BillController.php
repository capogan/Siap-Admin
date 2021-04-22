<?php

namespace App\Http\Controllers;

use App\CollectLoanCrm;
use App\LoanRequest;
use App\RequestLoanInstallments;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
{
    static $CONFIG = [
        "title" => "Penagihan",
        "subtitle" => "Monitoring Data",
        "icon" => "image"
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $data = [
            'coy'=>''
        ];

        return view('pages.collect.index', $this->merge_response($data, static::$CONFIG));
    }
    public function due(Request $request)
    {
        $data = [
            'coy'=>''
        ];

        return view('pages.collect.index_due', $this->merge_response($data, static::$CONFIG));
    }
    public function late(Request $request)
    {
        $data = [
            'coy'=>''
        ];

        return view('pages.collect.index_late', $this->merge_response($data, static::$CONFIG));
    }
    public function detail(Request $request){
        $type= $request->type;
        $invoice_number = $request->invoice_number;
        $stages = $request->stages;
        $loan = LoanRequest::
            select('request_loan.*','request_loan.id as id_loan','personal_info.*','personal_business.*',
            'users.email','married_status.status as married_status_title',
            'cap_of_business_criteria.title_business','credit_score_income_factory.industry_sectore','business_legality.legality_name',
            'master_business_since.title as business_long','master_all_employee.title as total_employee_name','business_place_status.place_status_name',
            'master_partnership_since.title as partnership_since_name','provinces.name as province_name','regencies.name as city',
            'districts.name as business_kecamatan','villages.name as villages_name'
            )
            ->leftJoin('personal_info', 'request_loan.uid', '=', 'personal_info.uid')
            ->leftJoin('personal_business', 'request_loan.uid', '=', 'personal_business.uid')
            ->leftJoin('users', 'request_loan.uid', '=', 'users.id')
            ->leftJoin('married_status', 'personal_info.married_status', '=', 'married_status.id')
            ->leftJoin('cap_of_business_criteria', 'personal_business.id_cap_of_business', '=', 'cap_of_business_criteria.id')
            ->leftJoin('credit_score_income_factory', 'personal_business.id_credit_score_income_factor', '=', 'credit_score_income_factory.id')
            ->leftJoin('business_legality', 'personal_business.legality_status', '=', 'business_legality.id')
            ->leftJoin('master_business_since', 'personal_business.business_established_since', '=', 'master_business_since.id')
            ->leftJoin('master_all_employee', 'personal_business.total_employees', '=', 'master_all_employee.id')
            ->leftJoin('business_place_status', 'personal_business.business_place_status', '=', 'business_place_status.id')
            ->leftJoin('master_partnership_since', 'personal_business.partnership_since', '=', 'master_partnership_since.id')
            ->leftJoin('provinces', 'personal_business.business_province', '=', 'provinces.id')
            ->leftJoin('regencies', 'personal_business.business_city', '=', 'regencies.id')
            ->leftJoin('districts', 'personal_business.business_sub_kecamatan', '=', 'districts.id')
            ->leftJoin('villages', 'personal_business.business_sub_kelurahan', '=', 'villages.id')
        ->where('invoice_number',$invoice_number)->first();
        $crm = CollectLoanCrm::where('id_loan',$loan->id_loan)->where('type',$type)->get();
        $info_installments = RequestLoanInstallments::where('id_request_loan',$loan->id_loan)->where('stages',$stages)->first();
        $data = [
            'loan'=>$loan,
            'crm'=>$crm,
            'stages'=>$stages,
            'type'=>$type,
            'info_installments'=>$info_installments
        ];
        return view('pages.collect.verification', $this->merge_response($data, static::$CONFIG));
    }

    public function paging(Request $request){

        $currentTime = Carbon::now();


        $status = $request->status;
        $loan_installments = RequestLoanInstallments::
            select('request_loan_installments.*','request_loan.*',
            'users.name','master_status_payment.status_name','request_loan_installments.due_date_payment as installments_due_date_pay','personal_info.first_name')
            ->leftJoin('request_loan', 'request_loan_installments.id_request_loan', '=', 'request_loan.id')
            ->leftJoin('users', 'request_loan.uid', '=', 'users.id')
            ->leftJoin('master_status_payment', 'request_loan_installments.id_status_payment', '=', 'master_status_payment.id')
            ->leftJoin('personal_info', 'users.id', '=', 'personal_info.uid');

        if($status == 1){
            $loan_installments = $loan_installments->where('request_loan_installments.due_date_payment', $currentTime->addDays(2));
        }
        else if($status == 2){
            $loan_installments = $loan_installments->where('request_loan_installments.due_date_payment', $currentTime);
        }
        else{
            $loan_installments = $loan_installments->where('request_loan_installments.due_date_payment','<', $currentTime);
        }
        return DataTables::of($loan_installments->get())->addIndexColumn()->make(true);
    }

    public function collect_add_crm(Request $request){

        $validator = Validator::make($request->all(), [
            'phone_number' => 'required',
            'phone_status' => 'required',
            'promise_payment_date' => 'required',
        ],
            [
                'phone_number.required' => 'Pilih nomor telepon',
                'phone_status.required' => 'Pilih status panggillan',
                'promise_payment_date.required' => 'Masukkan tanggal janji bayar',
            ]);

        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }
        CollectLoanCrm::create([
            'id_loan'=>$request->id_loan,
            'destination_number'=>$request->phone_number,
            'call_status'=>$request->phone_status,
            'promise_to_pay'=>$request->promise_payment_date,
            'description'=>$request->description,
            'updated_by'=>Auth::user()->name,
            'type'=>$request->type,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s"),

        ]);
        $message = "History berhasil ditambahkan";
        return json_encode(['status'=> true, 'message'=> $message]);

    }

}
