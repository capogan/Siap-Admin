<?php

namespace App\Http\Controllers;

use App\RequestLoanInstallments;
use Illuminate\Http\Request;

class RoboController extends Controller
{
    public function index(Request $request){

        $now = date('Y-m-d');
        $installments = RequestLoanInstallments::orderBy('stages','ASC')->get();


        foreach ($installments as $val){

            $id_request_loan = $val->id_request_loan;

            if($now < $val->due_date_payment){
                $id_status_payment = '1';
            }

            else if($now == $val->due_date_payment){
                $id_status_payment = '2';
            }

            else if($now > $val->due_date_payment){
                $id_status_payment = '3';
            }


            RequestLoanInstallments::where([
                ['id_request_loan',$id_request_loan],
                ['stages',$val->stages],

            ])->update
            ([
                "id_status_payment" =>$id_status_payment
            ]);
        }

    }
}
