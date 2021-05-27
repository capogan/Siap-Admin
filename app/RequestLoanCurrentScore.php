<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestLoanCurrentScore extends Model
{
    protected $table = 'request_loan_score_current';
    protected $fillable = [
        'id_request_loan','detail_scoring','sequence','updated_at'
    ];
}
