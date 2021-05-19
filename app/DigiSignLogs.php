<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DigiSignLogs extends Model
{
    protected $table = 'digisign_logs';
    protected $fillable = [
       'response','uid','message','created_at','created_by','updated_at','event','info','notif'
    ];
}
