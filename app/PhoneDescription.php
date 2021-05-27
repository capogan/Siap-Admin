<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneDescription extends Model
{
    protected $table = 'phone_description';
    protected $fillable = [
        'uid',
        'id_request_loan',
        'phone_status',
        'phone_description',
        'created_at',
        'updated_at',
        'updated_by',
    ];
}
