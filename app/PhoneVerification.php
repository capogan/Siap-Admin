<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneVerification extends Model
{
    protected $table = 'phone_verification';
    protected $fillable = [
        'id',
        'id_request_loan',
        'desc_business_activities',
        'result_data_analyst',
        'noted',
        'created_at',
        'updated_at'
    ];
}
