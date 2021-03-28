<?php

namespace App\Http\Controllers;

use App\Funding;

use App\Helpers\Utils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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


        $data = [
            'funding'=> '',
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


}
