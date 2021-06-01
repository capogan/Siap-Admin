<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeeConfig extends Model
{
    protected $table = 'tb_config_fee';
    protected $fillable = [
       'fee_name','value','status','created_at','created_by','updated_at','updated_by','code_fee','min','max','is_per_month'
    ];
}
