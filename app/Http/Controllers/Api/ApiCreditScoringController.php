<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CreditScoreCategories;
use App\CreditScore;
use App\Helpers\HelpCreditScoring;
use function GuzzleHttp\json_encode;
use App\ScoreDecision;
use App\User;
use App\Http\Controllers\Api\ApiController;
use App\PersonalInfo;
use App\BusinessInfo;
use App\RequestLoanCurrentScore;

class ApiCreditScoringController extends ApiController
{
    public function limit_credit(Request $request){
        //$data = ['usia' => 12 , 'income'=> 3000000 , 'education' => 'SMA' ,'established'=> '2' , 'pcg_transaction' => 3000000];
        
        if($request->all()){
            $data = json_encode($request->all());
        }else{
            $data = '{
                "usia": 22,
                "income": 3000000,
                "education": 3,
                "established": "4",
                "pcg_transaction": 3000000,
                "profit_per_month": "50.000.001 - 100.000.000",
                "business_legal": "Usaha Dagang",
                "income_per_month": "10.000.001 - 30.000.000",
                "business_placa_status": "Milik Pribadi",
                "established_business": ">= 5 tahun",
                "pcg_transaction_limit" : "Rp. 30.000.001-50.000.000",
                "location": "Diluar Jabodetek"
            }';
        }
        $approval = HelpCreditScoring::approval_decision($data);
        if($approval['status'] == 'false'){
            return $this->errorResponse($approval['message'], 500);
        }
        $scoring = HelpCreditScoring::credit_score($data);
        
        $credit_limit = ScoreDecision::where(function ($query) use ($scoring) {
            $query->where('s_d_score_min', '<=', $scoring);
            $query->where('s_d_score_max', '>=', $scoring);
        })->first();
        
        if($credit_limit){
            $response = [
                'message' => 'Selamat, Kamu dapat mengajukan pinjaman dengan limit hingga '. $credit_limit->s_d_limit_credit,
                'limit' => $credit_limit->s_d_limit_credit
            ];
            return $this->successResponse($response);
        }
        return $this->errorResponse("Server Error", 500);
    }

    public function check_my_credit_score(Request $request){
        $personal_info = PersonalInfo::select('personal_info.date_of_birth','personal_info.number_of_dependents','personal_business.*')
                        ->leftJoin('personal_business' ,'personal_business.uid' , 'personal_info.uid')
                        ->leftJoin('users_file' , 'users_file.uid' ,'personal_info.uid' )
                        ->where('personal_info.uid' , $request->id)->first();
        if(!$personal_info){
            return $this->errorResponse("Data not complete", 500);
        }
        $scoring = HelpCreditScoring::credit_score_siap($personal_info , $request->loan_id);
        self::update_scoring($scoring , $request->loan_id);
        return $this->successResponse($scoring);
    }
    
    public static function update_scoring($data , $id){
        RequestLoanCurrentScore::updateOrCreate(
            ['id_request_loan' => $id ],
            ['detail_scoring' => json_encode($data)]
            
        );
    }

}
