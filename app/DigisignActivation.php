<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DigisignActivation extends Model
{
    protected $table = 'digisign';
    protected $fillable = [
        'uid','status_activation','nik','email','activation_date','activation_expired','link_activation','phone_number','created_at','created_by','updated_at','updated_by','user_code','status_agreement_sign'
    ];

}
