<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFile extends Model
{
    protected $table = 'users_file';
    protected $fillable = [
        'id',
        'uid',
        'identity_photo',
        'noted_identity_photo',
        'self_photo',
        'noted_self_photo',
        'npwp_photo',
        'noted_npwp_photo',
        'bussiness_build_photo',
        'noted_business_build_photo',
        'siup_photo',
        'noted_siup_photo',
        'business_activity_photo',
        'noted_business_activity_photo',
        'npwp_business_photo',
        'noted_npwp_business_photo',
        'created_at',
        'updated_at'
    ];
}
