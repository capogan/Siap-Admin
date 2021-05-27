<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PcgMemberCode extends Model
{
    protected $table = 'pcg_member_code';
    protected $fillable = [
        'id', 'member_code','created_at','updated_at'
    ];
}
