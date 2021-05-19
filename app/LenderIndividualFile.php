<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LenderIndividualFile extends Model
{
    protected $table = 'lender_individual_file';
    protected $fillable = [
        'id',
        'id_lender_individual',
        'identity_image',
        'self_image',
        'npwp_image',
        'business_place_image',
        'license_business_document_image',
        'proof_of_ownership_image',
        'document_image',
        'business_activity_image',
        'business_npwp_image',
        'villages',
        'sallary_slip_image',
        'id_card_image',
        'created_at',
        'updated_at',
    ];
}
