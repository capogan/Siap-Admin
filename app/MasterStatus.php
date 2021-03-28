<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterStatus extends Model
{
    protected $table = 'master_status_loan_request';
    protected $fillable = [
        'id', 'title', 'status','created_at','created_by','updated_at','updated_by'
    ];
}
