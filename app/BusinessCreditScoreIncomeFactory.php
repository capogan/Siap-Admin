<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessCreditScoreIncomeFactory extends Model
{
    protected $table = 'credit_score_income_factory';
    protected $fillable = [
        'id','industry_sectore','value','description','status','created_at','created_by','updated_at','updated_by'
    ];
}
