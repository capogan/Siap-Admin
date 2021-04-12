<?php

namespace App\Http\Controllers;
use App\PersonalInfo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'users'=> User::where('group','borrower')->get(),
        ];
        return view('pages.borrower.index', $this->merge_response($data, static::$CONFIG));
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

        return view('pages.borrower.detail', $this->merge_response($data, static::$CONFIG));
    }

    public function paging(Request $request){

        return DataTables::of(User::where('group','borrower')->orderBy('created_at','DESC')->get())->addIndexColumn()->make(true);
    }

    public function get_user(Request $request){


        if ($request->has('search')) {
            $search = strtoupper($request->search);
            $data = DB::table('personal_info')->select('id', 'first_name')->where('first_name', 'ilike', '%'.$search.'%')->get();
            $response = array();
            foreach($data as $person){
                $response[] = array(
                    "id"=>$person->id,
                    "text"=>$person->first_name
                );
            }
            return json_encode($response);

        }
    }

    public function edit(Request $request){

        $uid = $request->id;
        $personal_info = PersonalInfo::where('uid',$uid)->first();

        $data = [
            'personal_info'=> $personal_info,
        ];

        return view('pages.borrower.edit', $this->merge_response($data, static::$CONFIG));
    }
}
