<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DigiSignDocument extends Model
{
    protected $table = 'digisign_document';
    protected $fillable = [
      'uid','document_id','branch','redirect','send_to','req_sign','status_document','user_id','sequence_option','step'
    ];

}
