<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrentScore extends Model
{
    protected $table = 'request_loan_score_current';
    protected $fillable = [
        'id','id_request_loan','score','sequence','name_step','created_at','updated_at'
    ];

    public function request_loan(){
        return $this->belongsTo('App\LoanRequest');
    }

}
