<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DigiSignDocumentLogs extends Model
{
    protected $table = 'digisign_upload_file_logs';
    protected $fillable = [
       'response','uid','message','created_at','created_by','updated_at'
    ];
}
