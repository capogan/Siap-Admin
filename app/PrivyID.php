<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivyID extends Model
{
    protected $table = 'privyids';
    protected $fillable = [
        'privyid','code','token','user_token','refresh_token','code_expired','token_expired',
        'status','uid','updated_by','created_by','created_at','updated_at','position'
    ];
}
