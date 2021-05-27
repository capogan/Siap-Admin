<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestLoanInstallments extends Model
{
    protected $table = 'request_loan_installments';
    protected $fillable = [
        'id','id_request_loan','stages','amount','date_payment','due_date_payment','id_status_payment','created_at','updated_at'
    ];
}
