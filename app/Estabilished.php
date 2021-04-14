<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabilished extends Model
{
    protected $table = 'master_business_since';
    protected $fillable = [
        'title','status','created_at','updated_at'
    ];
}
