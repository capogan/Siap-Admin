<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DigiSignSignersLogs extends Model
{
    protected $table = 'digisign_signers_logs';
    protected $fillable = [
       'response','email_user' ,'document_id','message','created_at','updated_at'
    ];
}
