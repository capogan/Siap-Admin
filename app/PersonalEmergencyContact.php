<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalEmergencyContact extends Model
{
    protected $table = 'personal_emergency_contact';
    protected $fillable = [
        'uid',
        'emergency_name',
        'id_siblings_master',
        'emergency_phone',
        'emergency_full_address',
        'emergency_province',
        'emergency_city',
        'emergency_sub_kecamatan',
        'emergency_sub_kelurahan',
        'emergency_zip_code',
        'created_at',
        'updated_at',
    ];
}
