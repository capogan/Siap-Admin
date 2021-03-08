<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryScore extends Model
{
    protected $table = 'category_score';
    protected $fillable = [
       'code','status','created_at','updated_at'
    ];

    function credit_score(){
        return $this->hasMany('App\CreditScore','id_category_score','id');
    }
}
