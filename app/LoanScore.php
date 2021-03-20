<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanScore extends Model
{
    protected $table = 'loan_score';
    protected $fillable = [
        'id','id_loan','score','created_at','updated_at'

    ];
}
