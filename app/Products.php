<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'id', 'name', 'tenor','admin_fee','interest_fee','penalty_fee','max_penalty_fee','status','created_at','updated_at'
    ];
}
