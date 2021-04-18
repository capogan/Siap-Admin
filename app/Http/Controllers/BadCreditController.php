<?php

namespace App\Http\Controllers;

use App\RequestLoanInstallments;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BadCreditController extends Controller
{
    static $CONFIG = [
        "title" => "Penagihan Kredit Macet",
        "subtitle" => "Monitoring Data",
        "icon" => "image"
    ];
    public function index(Request $request){

        $data = [
           'coy'=>''
        ];
        return view('pages.badcredit.index', $this->merge_response($data, static::$CONFIG));
    }

    public function paging(Request $request){

        $status = "8";
        $loan_installments = RequestLoanInstallments::
        select('request_loan_installments.*','request_loan.*',
            'users.name','master_status_payment.status_name','request_loan_installments.due_date_payment as installments_due_date_pay','personal_info.first_name')
            ->leftJoin('request_loan', 'request_loan_installments.id_request_loan', '=', 'request_loan.id')
            ->leftJoin('users', 'request_loan.uid', '=', 'users.id')
            ->leftJoin('master_status_payment', 'request_loan_installments.id_status_payment', '=', 'master_status_payment.id')
            ->leftJoin('personal_info', 'users.id', '=', 'personal_info.uid')
            ->where('request_loan_installments.id_status_payment',$status)
            ->get();

        return DataTables::of($loan_installments)->addIndexColumn()->make(true);
    }

}
