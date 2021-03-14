<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneMatchingData extends Model
{
    protected $table = 'phone_matching_data';
    protected $fillable = [
        'id',
        'id_phone_verification',
        'variable',
        'result',
        'data_user',
        'description',
        'created_at',
        'updated_at'
    ];
}
