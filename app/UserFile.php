<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFile extends Model
{
    protected $table = 'users_file';
    protected $fillable = [
        'id','uid','identity_photo','self_photo','npwp_photo','bussiness_build_photo','siup_photo','bussiness_owner_photo','business_documents_photo',
        'business_activity_photo','npwp_bussiness_photo','created_at','updated_at'
    ];
}
