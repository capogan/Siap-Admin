<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    static $CONFIG = [
        "title" => "Peminjam",
        "subtitle" => "Data semua produk",
        "icon" => "image"
    ];
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(Request $request){

        $data = [
            'coy'=>''
        ];

        return view('pages.index', $this->merge_response($data, static::$CONFIG));
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


    function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
