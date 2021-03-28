<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LenderAttachmentData extends Model
{
    protected $table = 'lender_business_file';
    protected $fillable = [
        'id','uid','npwp','nib','tdp','akta_pendirian','akta_perubahan','structure_organization','balance_sheet','cash_flow_statement','income_statement','created_at','updated_at'
    ];
}
