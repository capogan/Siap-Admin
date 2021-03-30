<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    static $CONFIG = [
        "title" => "Bill",
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

        return view('pages.bill.index', $this->merge_response($data, static::$CONFIG));
    }
    public function detail(){
        $data = [
            'coy'=>''
        ];
        return view('pages.bill.verification', $this->merge_response($data, static::$CONFIG));
    }

}
