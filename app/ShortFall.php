<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortFall extends Model
{
    protected $table = 'pcg_shortfall';
    protected $fillable = [
        'id_loan',
        'shortfall',
        'created_at','updated_at'
    ];
}
