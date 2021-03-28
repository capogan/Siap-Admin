<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LenderController extends Controller
{
    static $CONFIG = [
        "title" => "Lender",
        "subtitle" => "List Lender",
        "icon" => "image"
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(Request $request){
        $data = [
            'users'=> User::get(),
        ];
        return view('pages.lender.index', $this->merge_response($data, static::$CONFIG));
    }
}
