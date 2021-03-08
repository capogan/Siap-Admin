<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanRequest;
use App\User;

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

        $loan_request = LoanRequest::with('current_score')->where('status','0')->get();
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

        $uid = $request->id;
        $get_data_user = User::where('id',$uid)->first();

        $data = [
            'loan_request'=> $get_data_user
        ];
        return view('pages.loan.verification', $this->merge_response($data, static::$CONFIG));
    }
}
