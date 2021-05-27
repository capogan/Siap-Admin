<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortFallMaster extends Model
{
    protected $table = 'master_shortfall';
    protected $fillable = [
        'title',
        'min',
        'max',
        'score',
        'created_at','updated_at'
    ];
}
