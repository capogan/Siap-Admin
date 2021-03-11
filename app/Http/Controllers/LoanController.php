<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanRequest;
use App\User;

class LoanController extends Controller
{
    static $CONFIG = [
        "title" => "Loan",
    ];
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(Request $request){

        $loan_request = LoanRequest::with('current_score')->where('status','0')->get();
        $data = [
            'loan_request'=> $loan_request
        ];
        return view('pages.loan.index', $this->merge_response($data, static::$CONFIG));
    }

    function invoice_detail(Request $request){

        $loan_request = LoanRequest::with('current_score')->with('get_user')->where('id',$request->id)->first();
        $data = [
            'loan_request'=> $loan_request
        ];
        return view('pages.loan.invoice', $this->merge_response($data, static::$CONFIG));

    }

    function verification_data(Request $request){

        $uid = $request->id;
        $get_data_user = User::where('id',$uid)->first();
        $data_crm = array(
            'Nama Pemohon' => '-',
            'nomor Telepon Tempat Usaha' => '-',
            'Alamat tempat usaha' => '-',
            'Bidang usaha' => '-',
            'Detail Jenis Bidang Usaha' =>'-',
            'Badan Hukum Usaha' => '-',
            'Status Tempat Usaha' => '-',
            'rata Pendapatan penjualan Perbulan dalam 6 bulan terakhir' => '-',
            'Nomor Telepon Tempat Usaha' => '-',
            'rata - rata Pengeluaran Perbulan dalam dalam 6 bulan terakhir' => '-',
            'rata-rata Keuntungan perbulan dalam 6 bulan terakhir' => '-',
        );



        $data = [
            'loan_request'=> $get_data_user,
            'data_crm'=> $data_crm
        ];
        return view('pages.loan.verification', $this->merge_response($data, static::$CONFIG));
    }
}
