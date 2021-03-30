<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

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
    function lender_list(){
        $data = [
            'users'=> '',
        ];
        return view('pages.lender.users', $this->merge_response($data, static::$CONFIG));
    }
    public function paging(Request $request){

        return DataTables::of(User::where('group','lender')->orderBy('created_at','DESC')->get())->addIndexColumn()->make(true);
    }
}
