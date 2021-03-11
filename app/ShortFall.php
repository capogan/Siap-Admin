<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortFall extends Model
{
    protected $table = 'pcg_shortfall';
    protected $fillable = [
        'id_loan',
        'month_1',
        'invoice_amount_1',
        'month_2',
        'invoice_amount_2',
        'month_3',
        'invoice_amount_3',
        'month_4',
        'invoice_amount_4',
        'month_5',
        'invoice_amount_5',
        'month_6',
        'invoice_amount_6',
        'month_7',
        'invoice_amount_7',
        'month_8',
        'invoice_amount_8',
        'month_9',
        'invoice_amount_9',
        'month_10',
        'invoice_amount_10',
        'month_11',
        'invoice_amount_11',
        'month_12',
        'invoice_amount_12',
        'created_at','updated_at'
    ];
}
