<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DigiSignDocumentSigners extends Model
{
    protected $table = 'digisign_document_signers';
    protected $fillable = [
        'document_id','view_only','email_user','status_sign','name','created_at','updated_at','aksi_ttd'
    ];

}
