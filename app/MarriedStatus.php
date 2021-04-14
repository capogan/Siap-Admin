<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarriedStatus extends Model
{
    protected $table = 'married_status';
    protected $fillable = [
        'status','created_at','updated_at'
    ];
}
