<?php

namespace App\Http\Controllers;

use App\DigisignActivation;
use App\DigiSignDocumentLogs;
use App\DigiSignLogs;
use App\DigiSignSignersLogs;
use App\LenderVerification;
use App\PrivyLogs;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function verification(){
        $data = [
            'users'=>'',
        ];
        return view('pages.lender.verification', $this->merge_response($data, static::$CONFIG));
    }

    public function verification_lender_data($id){

        $user = User::where('id' , $id)->first();

        if($user->level == 'business'){
            $lender = User::
            with('commissioners')
            ->with('rekening')
            ->with('directors')
            ->with('business')
            ->with('document')
            ->with('eqycdata')
            ->with('agreementfile')
            ->where('id' , $id)->first();

//            echo "<pre>";
//            print_r($lender);
//            die();
            $eqyc_logs = DigiSignDocumentLogs::where('uid' , $id)->get();
            $eqyc_signers_logs = DigiSignSignersLogs::where('uid' , $id)->get();
            $eqyc_document_logs = DigiSignDocumentLogs::where('uid' , $id)->get();
            $data = [
                'funding'=> $lender,
                'eqyc_logs' => $eqyc_logs,
                'eqyc_signers_logs' => $eqyc_signers_logs,
                'eqyc_document_logs' => $eqyc_document_logs,
            ];
            return view('pages.lender.verification_detail', $this->merge_response($data, static::$CONFIG));
        }else{
            $eqyc_logs = DigiSignLogs::where('uid' , $id)->get();
            $eqyc_signers_logs = DigiSignSignersLogs::where('uid' , $id)->get();
            $eqyc_document_logs = DigiSignDocumentLogs::where('uid' , $id)->get();

            $lender = User::with('individuinfo')
                            ->where('id' , $id)->first();
                            
            $data = [
                'eqcy' => DigisignActivation::where('uid' , $id)->first(),
                'funding'=> $lender,
                'eqyc_logs' => $eqyc_logs,
                'eqyc_signers_logs' => $eqyc_signers_logs,
            ];
            
            return view('pages.lender.verification_detail_individual', $this->merge_response($data, static::$CONFIG));
        }
    }

    public function update_lender_status(Request $request){
        if(!isset($request->id) || !$request->status){
            return  $json = [
                "status"=> 'error',
                "message"=> 'Data tidak ditemukan.',
            ];
        }

        $lender = LenderVerification::where('uid' , $request->id)->first();
        $lender->status = $request->status;
        $lender->updated_at = date('Y-m-d H:i:s');
        $lender->updated_by = Auth::id();
        $lender->reason = $request->reason;
        if($lender->save()){
            return  $json = [
                "status"=> 'success',
                "message"=> 'Data berhasil diupdate.',
            ];
        }
        return  $json = [
            "status"=> 'error',
            "message"=> 'Data tidak ditemukan.',
        ];
    }

    public function verification_paging(Request $request){
        return DataTables::of(
            User::Join('lender_verification' ,'lender_verification.uid' ,'users.id' )
            ->where('users.group','lender')->where('status','register')
            //->where('lender_verification.sign_agreement',true)
            //->WhereNull('status')
            ->orderBy('users.created_at','DESC')->get()
        )->addIndexColumn()->make(true);
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
