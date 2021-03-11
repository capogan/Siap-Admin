<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

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
            'users'=> User::get(),
        ];
        return view('pages.borrower.index', $this->merge_response($data, static::$CONFIG));
    }

    public function detail(Request $request){

        $uid = $request->id;
        $data = [
            'user'=> User::select('users.*','personal_info.*')->leftJoin('personal_info', 'users.id', '=', 'personal_info.uid')->where('users.id',$uid)->first(),
        ];
        return view('pages.borrower.detail', $this->merge_response($data, static::$CONFIG));
    }

    public function paging(Request $request){

        return DataTables::of(User::orderBy('created_at','DESC')->get())->addIndexColumn()->make(true);
    }
}
