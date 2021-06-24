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

    function detail($id){
        
        $funding = Funding::select('request_funding.*','lender_bank_info.rekening_name','lender_bank_info.rekening_number','lender_bank_info.rekening_name','lender_bank_info.rdl_number','lender_bank_info.bank')
        ->leftJoin('lender_bank_info' , 'lender_bank_info.uid' ,'lender_bank_info.uid')
        ->with('directors')->with('commissioners')->with('rekening')->where('request_funding.id' ,$id )
        ->first();

        $data_crm = array(

            'Nama Pemohon' => $get_data_business->username ?? "-",
            'nomor Telepon Tempat Usaha' => $get_data_business->business_phone_number ??  "-",
            'Alamat tempat usaha' => $get_data_business->business_name ?? '-',
            'Bidang usaha' => $get_data_business->industry_sectore ?? '-',
            'Detail Jenis Bidang Usaha' =>$get_data_business->business_description ?? '-',
            'Badan Hukum Usaha' => $get_data_business->legality_name ?? '-',
            'Status Tempat Usaha' => $get_data_business->place_status_name ?? '-',
            'rata Pendapatan penjualan Perbulan dalam 6 bulan terakhir' => $get_data_business->average_sales_revenue_six_month ?? '-',
            'rata - rata Pengeluaran Perbulan dalam dalam 6 bulan terakhir' => $get_data_business->average_monthly_expenditure_six_month ?? '-',
            'rata-rata Keuntungan perbulan dalam 6 bulan terakhir' => $get_data_business->average_monthly_profit_six_month ?? '-',
        );
        
        $data = [
            'funding'=> $funding,
            'data_crm'=> $data_crm,
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
            ->groupBy('request_funding.id','lender_business.business_name','master_status_funding_request.title','request_funding.created_at')
            ->orderBy('request_funding.created_at','DESC')

            ->get();

        return DataTables::of($funding)->addIndexColumn()->make(true);
    }

    public function update_lender_status(Request $request){

        $uid = Funding::where('id' , $request->id)->first();       
        if(!$uid){
            $json = [
                "status"=> false,
                "message"=> 'Error when try to save data.',
            ];
            return response()->json($json);
        }
        if(LenderVerification::where('uid' , $uid->uid)->update(['status' => 'verified'])){
            $json = [
                "status"=> true,
                "message"=> 'Success to update data.',
            ];
            return response()->json($json);
        }
       
        
    }

    public function reject_lender_status(Request $request){

        $uid = Funding::where('id' , $request->id)->first();       
        if(!$uid){
            $json = [
                "status"=> false,
                "message"=> 'Error when try to save data.',
            ];
            return response()->json($json);
        }
        $uid->status = 3;
        $uid->save();
        if(LenderVerification::where('uid' , $uid->uid)->update(['status' => 'reject'])){
            $json = [
                "status"=> true,
                "message"=> 'Success to update data.',
            ];
            return response()->json($json);
        }
    }


    public function individu(Request $request){

        $data = [
            'funding'=> '',
        ];
        return view('pages.funding.individu.index', $this->merge_response($data, static::$CONFIG));
    }

    public function paging_individu(){
        $funding = Funding::
        leftJoin('users', 'request_funding.uid', '=', 'users.id')
            ->leftJoin('master_status_funding_request', 'request_funding.status', '=', 'master_status_funding_request.id')
            ->select('request_funding.*','users.name as lender_name','request_funding.created_at as lender_request_date','master_status_funding_request.title as status_funding')
            ->where('users.level','individu')
            ->get();

        return DataTables::of($funding)->addIndexColumn()->make(true);
    }

    function detail_individu($id){

        $funding = Funding::where('id',$id)->first();
        $uid = $funding->uid;
        $data = [
            'funding'=> $funding,
            'uid'=> $uid,
        ];
        return view('pages.funding.individu.detail', $this->merge_response($data, static::$CONFIG));
    }


}
