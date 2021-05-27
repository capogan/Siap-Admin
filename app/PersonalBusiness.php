<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalBusiness extends Model
{
    protected $table = 'personal_business';
    protected $fillable = [
        'uid',
        'business_name',
        'id_cap_of_business',
        'id_credit_score_income_factor',
        'business_established_since',
        'total_employees',
        'business_description',
        'business_full_address',
        'business_province',
        'business_city',
        'business_sub_kecamatan',
        'business_sub_kelurahan',
        'business_zip_code',
        'business_phone_number',
        'created_at','updated_at'
    ];
}
