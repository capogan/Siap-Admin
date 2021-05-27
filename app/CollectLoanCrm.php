<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectLoanCrm extends Model
{
    protected $table = 'collect_loan_crm';
    protected $fillable = [
        'id','id_loan','destination_number','call_status','promise_to_pay','type','description','updated_by','created_at','updated_at'
    ];

}
