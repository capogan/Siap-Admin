<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessCriteria extends Model
{
    protected $table = 'cap_of_business_criteria';
    protected $fillable = [
        'id','title_bussiness','description','d_asset','status','created_at','updated_at'
    ];
}
