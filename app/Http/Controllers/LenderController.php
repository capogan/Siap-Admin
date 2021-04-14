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
    public function detail(Request $request){

        $uid = $request->id;
        $user = User::
        select('users.*','users_file.*','personal_info.*','married_status.status as status_married','education.level as level_education','personal_emergency_contact.*','siblings_master.sibling_name')->
        leftJoin('users_file', 'users.id', '=', 'users_file.uid')->
        leftJoin('personal_info', 'users.id', '=', 'personal_info.uid')->
        leftJoin('married_status', 'personal_info.married_status', '=', 'married_status.id')->
        leftJoin('education', 'personal_info.education', '=', 'education.id')->
        leftJoin('personal_emergency_contact', 'users.id', '=', 'personal_emergency_contact.uid')->
        leftJoin('siblings_master', 'personal_emergency_contact.id_siblings_master', '=', 'siblings_master.id')->
        where('users.id',$uid)->first();

        $data = [
            'user'=> $user,
        ];

        return view('pages.lender.detail', $this->merge_response($data, static::$CONFIG));
    }
}
