<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $table = 'permissions';
    protected $fillable = [
        'id','name','guard_name','created_at','updated_at'
    ];
}
