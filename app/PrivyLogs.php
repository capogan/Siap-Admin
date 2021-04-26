<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivyLogs extends Model
{
    protected $table = 'privy_log_request';
    protected $fillable = [
        'status','response','uid','updated_by','created_by','created_at','updated_at','position'
    ];
}
