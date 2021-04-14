<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TotalEmployee extends Model
{
    protected $table = 'master_all_employee';
    protected $fillable = [
        'title','status','created_at','updated_at'
    ];
}
