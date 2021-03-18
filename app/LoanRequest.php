<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanRequest extends Model
{
    protected $table = 'request_loan';
    protected $fillable = [
        'id','invoice_number','uid','loan_amount','loan_period','admin_fee_percentage','admin_fee_amount','interest_fee_percentage',
        'interest_fee_amount','disbrusement','repayment','penalty_percentage','penalty_max_percentage','penalty_max_amount','status',
        'created_at','updated_at','reject_description','reject_date','updated_at'

    ];

    public function current_score(){
        return $this->hasOne('App\CurrentScore','id_request_loan','id')->latest();

    }
    public function get_user(){
        return $this->belongsTo('App\User','uid','id');
    }
    public function get_personal_info(){
        return $this->belongsTo('App\PersonalInfo','uid','uid');
    }

}
