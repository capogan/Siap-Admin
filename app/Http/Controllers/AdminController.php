<?php

namespace App\Http\Controllers;
use App\Funding;
use App\LoanRequest;
use App\MasterStatus;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    static $CONFIG = [
        "title" => "Beranda",
        "subtitle" => "Monitoring Data",
        "icon" => "image"
    ];
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(Request $request){


        $count_users = User::get();
        $count_loan = LoanRequest::get();
        $count_funding = Funding::get();
        $count_borrower = User::where('group','borrower')->get();
        $count_lender = User::where('group','lender')->get();
        $master_status = MasterStatus::orderBy('id','ASC')->get();
        $data = [
            'count_users'=> count($count_users),
            'count_loan'=> count($count_loan),
            'count_funding'=> count($count_funding),
            'count_borrower'=> count($count_borrower),
            'count_lender'=> count($count_lender),
            'master_status'=> $master_status,
        ];

        return view('pages.home.index', $this->merge_response($data, static::$CONFIG));
    }

    function lender(Request $request){
        $data = [
            'coy'=>''
        ];
        return view('pages.lender', $this->merge_response($data, static::$CONFIG));
    }
    function borrower(Request $request){
        return view('pages.borrower');
    }

    public function reject(Request $request){

        $id_loan = $request->id;

    }

    function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
