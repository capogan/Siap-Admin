<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LenderIndividualEmergencyContact extends Model
{
    protected $table = 'lender_individual_emergency_contact';
    protected $fillable = [
        'id',
        'id_lender_individual',
        'emergency_name',
        'emergency_siblings',
        'emergency_phone_number',
        'emergency_full_address',
        'created_at',
        'updated_at',
    ];
}
