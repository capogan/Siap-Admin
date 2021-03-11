<?php

namespace App\Http\Controllers;
use App\CreditScore;
use App\LoanRequest;
use App\ShortFall;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use File;

class PcgController extends Controller
{
    static $CONFIG = [
        "title" => "PCG",
    ];

    public function __construct()
    {
        $this->middleware('role:pcg');
    }

    public function index(Request $request){

        $loan_request = LoanRequest::with('current_score')->where('status','0')->get();
        $data = [
            'loan_request'=> $loan_request
        ];
        return view('pages.pcg.index', $this->merge_response($data, static::$CONFIG));

    }

    public function view_data(Request $request){

        $id_loan = $request->id;
        $legal_status = CreditScore::where('id_category_score','=','2')->get();
        $bussiness_criteria =  CreditScore::where('id_category_score','=','8')->get();
        $business_place_status =  CreditScore::where('id_category_score','=','4')->get();
        $age_of_bussiness =  CreditScore::where('id_category_score','=','9')->get();
        $duration_active_merchant =  CreditScore::where('id_category_score','=','5')->get();
        $age =  CreditScore::where('id_category_score','=','10')->get();
        $dependents_number =  CreditScore::where('id_category_score','=','11')->get();
        $bureau_credit =  CreditScore::where('id_category_score','=','12')->get();
        $income_factory =  CreditScore::where('id_category_score','=','13')->get();
        $months = array('september','oktober','november','desember','januari','februari','maret','april','mei','juni','juli','agustus');
        $get_sf = ShortFall::where('id_loan',$id_loan)->first();

        $data = [
            'legal_status'=> $legal_status,
            'bussiness_criteria'=> $bussiness_criteria,
            'business_place_status'=> $business_place_status,
            'age_of_bussiness'=> $age_of_bussiness,
            'duration_active_merchant'=> $duration_active_merchant,
            'age'=> $age,
            'dependents_number'=> $dependents_number,
            'bureau_credit'=> $bureau_credit,
            'income_factory'=> $income_factory,
            'months'=> $months,
            'id_loan'=>$id_loan,
            'get_shortfall'=>$get_sf,

        ];
        return view('pages.pcg.add', $this->merge_response($data, static::$CONFIG));
    }

    public function add(Request $request){

        $id_loan  = $request->id_loan;

        $validator = Validator::make($request->all(), [
            'amount_1'=>'required_with:month1',
            'month1'=>'required_with:amount_1',
            //
            'amount_2'=>'required_with:month2',
            'month2'=>'required_with:amount_2',
            //
            'amount_3'=>'required_with:month3',
            'month3'=>'required_with:amount_3',
            //
            'amount_4'=>'required_with:month4',
            'month4'=>'required_with:amount_4',
            //
            'amount_5'=>'required_with:month5',
            'month5'=>'required_with:amount_5',
            //
            'amount_6'=>'required_with:month6',
            'month6'=>'required_with:amount_6',
            //
            'amount_7'=>'required_with:month7',
            'month7'=>'required_with:amount_7',
            //
            'amount_8'=>'required_with:month8',
            'month8'=>'required_with:amount_8',
            //
            'amount_9'=>'required_with:month9',
            'month9'=>'required_with:amount_9',
            //
            'amount_10'=>'required_with:month10',
            'month10'=>'required_with:amount_10',
            //
            'amount_11'=>'required_with:month11',
            'month11'=>'required_with:amount_11',
            //
            'amount_12'=>'required_with:month12',
            'month12'=>'required_with:amount_12',
        ],
            [
                '*.required_with' => 'Apabila nama bulan sudah diisi, jumlah invoice wajib isi (berlaku untuk kebalikan)',
            ]);

        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }
        else{
            $check_id_loan = ShortFall::where('id_loan',$id_loan)->first();
            if($check_id_loan){

                ShortFall::where([
                    ['id_loan',$id_loan],
                ])->update
                ([
                    'invoice_amount_1' => $request->amount_1,
                    'month_1' => $request->month1,
                    'invoice_amount_2' => $request->amount_2,
                    'month_2' => $request->month2,
                    'invoice_amount_3' => $request->amount_3,
                    'month_3' => $request->month3,
                    'invoice_amount_4' => $request->amount_4,
                    'month_4' => $request->month4,
                    'invoice_amount_5' => $request->amount_5,
                    'month_5' => $request->month5,
                    'invoice_amount_6' => $request->amount_6,
                    'month_6' => $request->month6,
                    'invoice_amount_7' => $request->amount_7,
                    'month_7' => $request->month7,
                    'invoice_amount_8' => $request->amount_8,
                    'month_8' => $request->month8,
                    'invoice_amount_9' => $request->amount_9,
                    'month_9' => $request->month9,
                    'invoice_amount_10' => $request->amount_10,
                    'month_10' => $request->month10,
                    'invoice_amount_11' => $request->amount_11,
                    'month_11' => $request->month11,
                    'invoice_amount_12' => $request->amount_12,
                    'month_12' => $request->month12,
                    "updated_at"=>date('Y-m-d H:i:s'),
                ]);

            }else{
                ShortFall::create([
                    'id_loan' => $id_loan,
                    'invoice_amount_1' => $request->amount_1,
                    'month_1' => $request->month1,
                    'invoice_amount_2' => $request->amount_2,
                    'month_2' => $request->month2,
                    'invoice_amount_3' => $request->amount_3,
                    'month_3' => $request->month3,
                    'invoice_amount_4' => $request->amount_4,
                    'month_4' => $request->month4,
                    'invoice_amount_5' => $request->amount_5,
                    'month_5' => $request->month5,
                    'invoice_amount_6' => $request->amount_6,
                    'month_6' => $request->month6,
                    'invoice_amount_7' => $request->amount_7,
                    'month_7' => $request->month7,
                    'invoice_amount_8' => $request->amount_8,
                    'month_8' => $request->month8,
                    'invoice_amount_9' => $request->amount_9,
                    'month_9' => $request->month9,
                    'invoice_amount_10' => $request->amount_10,
                    'month_10' => $request->month10,
                    'invoice_amount_11' => $request->amount_11,
                    'month_11' => $request->month11,
                    'invoice_amount_12' => $request->amount_12,
                    'month_12' => $request->month12,
                ]);
            }

            $message = "Shortfall berhasil di input";
            return json_encode(['status'=> true, 'message'=> $message ]);
        }

    }
}
