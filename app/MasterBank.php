<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterBank extends Model
{
    protected $table = 'master_bank';
    protected $fillable = [
        'id', 'bank_name', 'code','created_at','updated_at'
    ];
}
