<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LenderBankInfo extends Model
{
    protected $table = 'lender_bank_info';
    protected $fillable = [
        'id','uid','rekening_number' ,'rekening_name','rdl_number' ,'bank','created_at','updated_at'
    ];
}
