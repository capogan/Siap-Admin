<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BecomePartner extends Model
{
    protected $table = 'master_partnership_since';
    protected $fillable = [
        'title','status','created_at','updated_at'
    ];
}
