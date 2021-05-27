<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siblings extends Model
{
    protected $table = 'siblings_master';
    protected $fillable = [
        'siblings_name','created_at','updated_at'
    ];
}
