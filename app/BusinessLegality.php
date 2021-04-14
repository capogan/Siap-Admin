<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessLegality extends Model
{
    protected $table = 'business_legality';
    protected $fillable = [
        'legality_name','legality_value','created_at','updated_at'
    ];
}
