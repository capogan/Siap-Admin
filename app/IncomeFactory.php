<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeFactory extends Model
{
    protected $table = 'credit_score_income_factory';
    protected $fillable = [
        'id','industry_sectore','value','description','status','created_at','created_by','updated_at','updated_by'
    ];

    public function income_factory()
    {
        return $this->hasOne(BusinessInfo::class);
    }
}
