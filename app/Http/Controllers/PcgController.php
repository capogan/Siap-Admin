<?php

namespace App\Http\Controllers;
use App\CreditScore;
use App\LoanRequest;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use File;

class PcgController extends Controller
{
    static $CONFIG = [
        "title" => "PCG",
    ];

    public function __construct()
    {
        $this->middleware('role:pcg');
    }

    public function index(Request $request){

        $loan_request = LoanRequest::with('current_score')->where('status','0')->get();
        $data = [
            'loan_request'=> $loan_request
        ];
        return view('pages.pcg.index', $this->merge_response($data, static::$CONFIG));

    }

    function view_data(){
        $legal_status = CreditScore::where('id_category_score','=','2')->get();
        $bussiness_criteria =  CreditScore::where('id_category_score','=','8')->get();
        $business_place_status =  CreditScore::where('id_category_score','=','4')->get();
        $age_of_bussiness =  CreditScore::where('id_category_score','=','9')->get();
        $duration_active_merchant =  CreditScore::where('id_category_score','=','5')->get();
        $age =  CreditScore::where('id_category_score','=','10')->get();
        $dependents_number =  CreditScore::where('id_category_score','=','11')->get();
        $bureau_credit =  CreditScore::where('id_category_score','=','12')->get();
        $income_factory =  CreditScore::where('id_category_score','=','13')->get();
        $data = [
            'legal_status'=> $legal_status,
            'bussiness_criteria'=> $bussiness_criteria,
            'business_place_status'=> $business_place_status,
            'age_of_bussiness'=> $age_of_bussiness,
            'duration_active_merchant'=> $duration_active_merchant,
            'age'=> $age,
            'dependents_number'=> $dependents_number,
            'bureau_credit'=> $bureau_credit,
            'income_factory'=> $income_factory,
        ];
        return view('pages.pcg.add', $this->merge_response($data, static::$CONFIG));
    }
}
