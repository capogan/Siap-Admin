<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LenderVerification extends Model
{
    protected $table = 'lender_verification';
    protected $fillable = [
        'uid','business_verification','director_verification','commissioner_verification','document_verification','created_at','updated_at',
    ];
}
