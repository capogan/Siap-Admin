<?php

namespace App\Http\Controllers;

use App\Funding;

use App\Helpers\Utils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\LenderVerification;

class FundingController extends Controller
{
    static $CONFIG = [
        "title" => "Pendanaan",
        "subtitle" => "Daftar Pendanaan",
        "icon" => "image"
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(Request $request){


        $data = [
            'funding'=> '',
        ];
        return view('pages.funding.index', $this->merge_response($data, static::$CONFIG));
    }
    function detail(Request $request){
        $funding = Funding::with('directors')->with('commissioners')->first();

        $data = [
            'funding'=> $funding,
        ];
        return view('pages.funding.detail', $this->merge_response($data, static::$CONFIG));
    }

    public function paging(Request $request){

        $funding = Funding::
            leftJoin('users', 'request_funding.uid', '=', 'users.id')
            ->leftJoin('lender_business', 'users.id', '=', 'lender_business.uid')
            ->leftJoin('master_status_funding_request', 'request_funding.status', '=', 'master_status_funding_request.id')
            ->select('request_funding.*','lender_business.business_name as lender_business_name',
                'master_status_funding_request.title as status_funding','request_funding.created_at as funding_created_at')
            ->get();

        return DataTables::of($funding)->addIndexColumn()->make(true);
    }

    public function update_lender_status(Request $request){
        //print_r($request->all());
        $uid = Funding::where('id' , $request->id)->first();
        if(!$uid){
            $json = [
                "status"=> false,
                "message"=> 'Error when try to save data.',
            ];
            return response()->json($json);
        }
        LenderVerification::where('uid' , $uid->uid)->update(['status' => 'verified']);

        $uid->status = 4;
        $uid->save();
        $json = [
            "status"=> true,
            "message"=> 'Success to update data.',
        ];
        return response()->json($json);
    }


}
