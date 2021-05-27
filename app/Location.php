<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'addresses';
    protected $fillable = [
        'id', 'parent_id', 'name'
    ];
}
