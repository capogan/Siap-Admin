<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminUsersMemberCode extends Model
{
    protected $table = 'admin_users_member_code';
    protected $fillable = [
        'id','id_users','id_member_code','','created_at','updated_at'
    ];
}
