<?php

namespace App\Http\Controllers;
use App\CreditScore;
use App\LoanRequest;
use App\ShortFall;
use App\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Utils;
use File;
use App\ShortFallMaster;

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

        $loan_request = LoanRequest::with('current_score')->get();
        $data = [
            'loan_request'=> $loan_request
        ];
        return view('pages.pcg.index', $this->merge_response($data, static::$CONFIG));

    }

    public function view_data(Request $request){

        $id_loan = $request->id;

        $months = array('september','oktober','november','desember','januari','februari','maret','april','mei','juni','juli','agustus');
        $get_sf = ShortFall::where('id_loan',$id_loan)->first();
        $get_data_user = LoanRequest::select('uid')->where('id',$id_loan)->first();
        $uid = $get_data_user->uid;
        $get_user = User::select('personal_info.*','personal_business.*','business_legality.*','cap_of_business_criteria.*','business_place_status.*',
                        'beurau_credit.*','credit_score_income_factory.*','master_dependents.*','master_dependents.title as master_dependent_title',
                        'master_business_since.*','master_business_since.title as master_since_title','master_partnership_since.title as master_partner_title')->
                        leftJoin('personal_info', 'users.id', '=', 'personal_info.uid')->
                        leftJoin('personal_business', 'users.id', '=', 'personal_business.uid')->
                        leftJoin('business_legality', 'personal_business.legality_status', '=', 'business_legality.id')->
                        leftJoin('cap_of_business_criteria', 'personal_business.id_cap_of_business', '=', 'cap_of_business_criteria.id')->
                        leftJoin('business_place_status', 'personal_business.business_place_status', '=', 'business_place_status.id')->
                        leftJoin('beurau_credit', 'personal_business.id_beurau_credit', '=', 'beurau_credit.id')->
                        leftJoin('credit_score_income_factory', 'personal_business.id_credit_score_income_factor', '=', 'credit_score_income_factory.id')->
                        leftJoin('master_dependents', 'personal_info.number_of_dependents', '=', 'master_dependents.id')->
                        leftJoin('master_business_since', 'personal_business.business_established_since', '=', 'master_business_since.id')->
                        leftJoin('master_partnership_since', 'personal_business.partnership_since', '=', 'master_partnership_since.id')
            ->where('users.id',$uid)->first();



        $data = [
            'months'=> $months,
            'id_loan'=>$id_loan,
            'get_shortfall'=>$get_sf,
            'get_user'=>$get_user,

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
            $data_shortfall = [];
            //$total_invoice = 0;
            //$total_shortfall = 0;
            
            $c_value = 0;
            for($i = 1; $i<=12 ; $i++){
                $mo  = 'month'.$i;
                $am  = 'amount_'.$i;
                
                if(isset($request->$mo)){
                    $p_value = $c_value;
                    $total_invoice[] = $request->$am;
                    if($i>1){
                        if($p_value > $request->$am){
                            $data_shortfall[$request->$mo] = $p_value - $request->$am;
                            $total_shortfall[] = $request->$am - $p_value ;
                        }
                    }
                    $c_value = $request->$am;
                    $result[$request->$mo] = $request->$am;
                }
                
            }

           // echo $c_value .'-'.round((array_sum($total_invoice)/count($total_invoice)));
            if(round((array_sum($total_invoice)/count($total_invoice))) < $c_value){
                $total_shortfall[] = (array_sum($total_invoice)/count($total_invoice)) - $c_value;
                $data_shortfall['last'] = $c_value - (array_sum($total_invoice)/count($total_invoice));
            }


            $average_shortfall = (array_sum($total_shortfall)/count($total_shortfall));
            $average_invoice =(array_sum($total_invoice)/count($total_invoice));
            $core_shortfall = 0;
            $data_score_shortfall = ShortFallMaster::whereRaw(abs(round((($average_shortfall / $average_invoice)) * 100)).' BETWEEN min AND max')->first();
            if($data_score_shortfall){
                $core_shortfall = $data_score_shortfall->score;
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
            "status" => static::STATUS_REJECT_PCG,
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
            "status" => static::STATUS_VERIFICATION,
            "reject_date" => date('Y-m-d H:i:s'),
            "updated_at"=>date('Y-m-d H:i:s'),
        ]);
        $message = "Sukses menyimpan Data";
        return json_encode(['status'=> true, 'message'=> $message]);

    }
}
