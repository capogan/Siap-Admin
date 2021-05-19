<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LenderIndividualBankAccount extends Model
{
    protected $table = 'lender_individual_bank_account';
    protected $fillable = [
        'id',
        'id_lender_individual',
        'account_name',
        'id_bank',
        'account_number',
        'phone_number_register_in_bank',
        'created_at',
        'updated_at',
    ];
}
