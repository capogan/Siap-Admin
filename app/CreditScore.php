<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditScore extends Model
{
    protected $table = 'credit_score';
    protected $fillable = [
        'id_category_score','name_score','score','sequence','code','status','created_at','updated_at'
    ];

    public function category_score()
    {
        return $this->belongsTo('App\CreditScore', 'id', 'id_category_score');
    }
}
