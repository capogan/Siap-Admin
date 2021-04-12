<?php

namespace App\Http\Controllers;
use App\CreditScore;
use App\LoanRequest;
use App\LoanScore;
use App\PCGUser;
use App\Products;
use App\ShortFall;
use App\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Utils;
use File;
use App\ShortFallMaster;
use Yajra\DataTables\DataTables;
use function GuzzleHttp\json_decode;
use App\RequestLoanCurrentScore;

class PcgController extends Controller
{
    static $CONFIG = [
        "title" => "PCG",
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){


        $loan_request = DB::table('view_request_loan')->whereIn('request_loan_status',['1','2'])->orderBy('request_loan_created_at','DESC')->get();
        $data = [
            'loan_request'=> $loan_request
        ];
        return view('pages.pcg.index', $this->merge_response($data, static::$CONFIG));

    }

    public function view_data_step_1(Request $request){

        $id_loan = $request->id;
        $get_user = DB::table('view_request_loan')->where('id',$id_loan)->first();

        $data = [

            'id_loan'=>$id_loan,
            'get_user'=>$get_user,

        ];
        return view('pages.pcg.step_1', $this->merge_response($data, static::$CONFIG));
    }

    public function view_data_step_2(Request $request){

        $id_loan = $request->id;
        $months = array('september','oktober','november','desember','januari','februari','maret','april','mei','juni','juli','agustus');
        $get_sf = ShortFall::where('id_loan',$id_loan)->first();
        $get_user = DB::table('view_request_loan')->where('id',$id_loan)->first();
        if($get_sf){
            $get_sf = $get_sf->shortfall ? json_decode($get_sf->shortfall , true) : [];
            $get_sf = $get_sf['data'];
        }
        $data = [
            'months'=> $months,
            'id_loan'=>$id_loan,
            'get_shortfall'=>$get_sf,
            'keys_sf' => isset($get_sf) ? array_keys($get_sf) : [],
            'get_user'=>$get_user,

        ];
        return view('pages.pcg.step_2', $this->merge_response($data, static::$CONFIG));

    }

    public function view_data_step_3(Request $request){

        $id_loan = $request->id;
        $scoring = RequestLoanCurrentScore::where('id_request_loan' , $id_loan)->first();
        $months = array('september','oktober','november','desember','januari','februari','maret','april','mei','juni','juli','agustus');
        $get_sf = ShortFall::where('id_loan',$id_loan)->first();
        $get_user = DB::table('view_request_loan')->where('id',$id_loan)->first();
        $data = [
            'score' => $scoring ? json_decode($scoring->detail_scoring , true): null,
            'months'=> $months,
            'id_loan'=>$id_loan,
            'get_shortfall'=>$get_sf,
            'get_user'=>$get_user,

        ];
        return view('pages.pcg.step_3', $this->merge_response($data, static::$CONFIG));


    }



    public function add(Request $request){

        $id_loan  = $request->id_loan;

        $validator = Validator::make($request->all(), [
            'amount_1'=>'required|required_with:month1',
            'month1'=>'required_with:amount_1',
            //
            'amount_2'=>'required|required_with:month2',
            'month2'=>'required_with:amount_2',
            //
            'amount_3'=>'required|required_with:month3',
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
                '*.required' => 'masukkan nilai Invoice Minimal 3 bulan',
                '*.required_with' => 'Apabila nama bulan sudah diisi, jumlah invoice wajib isi (berlaku untuk kebalikan)',
            ]);


        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }
        else{
            $check_id_loan = ShortFall::where('id_loan',$id_loan)->first();
            $data_shortfall = [];
            $c_value = 0;
            $shortfall_last_three_month=0;
            $total_shortfall = [];
            for($i = 1; $i<=12 ; $i++){
                $mo  = 'month'.$i;
                $am  = 'amount_'.$i;
                if(isset($request->$mo)){
                    $iamount  = str_replace(array(',', 'Rp', ' '), '',  $request->$am);
                    $p_value = $c_value;
                    $total_invoice[] = $iamount;
                    if($i>1){
                        if($p_value > $iamount){
                            $shortfall_last_three_month++;
                            $data_shortfall[$request->$mo] = $p_value - $iamount;
                            $total_shortfall[] = $iamount - $p_value ;
                        }else{
                            $shortfall_last_three_month = 0;
                            $data_shortfall[$request->$mo] = 0;
                        }
                    }
                    $c_value = $iamount;
                    $result[$request->$mo] = $iamount;
                }

                
            }
            //print_r($total_shortfall);
            //echo array_sum($total_invoice).'-'. $c_value;
           if(round((array_sum($total_invoice)/count($total_invoice))) < $c_value){
                $total_shortfall[] = (array_sum($total_invoice)/count($total_invoice)) - $c_value;
                $data_shortfall['last'] = $c_value - (array_sum($total_invoice)/count($total_invoice));
            }

            if(count($total_shortfall) > 0){
                $average_shortfall = (array_sum($total_shortfall)/count($total_shortfall));
                $average_invoice =(array_sum($total_invoice)/count($total_invoice));
                $core_shortfall = 0;
                $data_score_shortfall = ShortFallMaster::whereRaw(abs(round((($average_shortfall / $average_invoice)) * 100)).' BETWEEN min AND max')->first();
                if($data_score_shortfall){
                    $core_shortfall = $data_score_shortfall->score;
                }
            }
            
            if($shortfall_last_three_month > 2){
                $core_shortfall = 1;
            }

            if(count($total_shortfall) <= 0){
                $core_shortfall = 5;
            }

            $results = [
                'data' => $result , 
                'data_shortfall' => $data_shortfall , 
                'average_invoice' => $average_invoice, 
                'average_shortfall' => $average_shortfall,
                'shortfall' => round((($average_shortfall / $average_invoice)) * 100),
                'shortfall_score' => $core_shortfall
            ];
            ShortFall::updateOrCreate(
                ['id_loan'=>$id_loan],
                ['shortfall' => json_encode($results) , 'updated_at' => date('Y-m-d')]
            );
            if($check_id_loan){
                ShortFall::updateOrCreate(
                    ['id_loan'=>$id_loan],
                    ['shortfall' => json_encode($results) , 'updated_at' => date('Y-m-d')]
                );
            }
            $message = "Shortfall berhasil di input";
            return json_encode(['status'=> true, 'message'=> $message ]);
        }
    }

    public function reject(Request $request){

        $id_loan = $request->id_loan;
        $validator = Validator::make($request->all(), [
            'desc_reject' => 'required',
        ],
        [
            'desc_reject.required' => 'Masukkan alasan penolakan pinjaman',
        ]);

        if ($validator->fails()) {
            return json_encode(['status'=> false, 'message'=> $validator->messages() ]);
        }
        LoanRequest::where([
            ['id',$id_loan],

        ])->update
        ([
            "reject_description" => $request->desc_reject,
            "status" => static::TOLAK_MERCHANT,
            "reject_date" => date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        $message = "Sukses menyimpan Data";
        return json_encode(['status'=> true, 'message'=> $message]);

    }

    public function confirm(Request $request){

        $id_loan = $request->id_loan;

        LoanRequest::where([
            ['id',$id_loan],

        ])->update
        ([
            "reject_description" => $request->desc_reject,
            "status" => static::PENDING_DOCUMENT_REVIEW,
            "reject_date" => date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        $message = "Sukses menyimpan Data";
        return json_encode(['status'=> true, 'message'=> $message]);

    }

    public function paging(Request $request){

        $loan_request = DB::table('view_request_loan')->whereIn('request_loan_status',['1','2'])->orderBy('request_loan_created_at','DESC')->get();
        return DataTables::of($loan_request)->addIndexColumn()->make(true);
    }

    public function set_loan_score(Request $request){

        LoanScore::create([
            'id_loan'    => $request->id_loan,
            'score'     =>$request->score_loan,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        return json_encode(['status'=> true, 'message'=>'success set data']);
    }
}
