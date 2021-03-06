<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class AdminUsers extends Authenticatable
{
    use Notifiable,HasRoles;
    protected $guard = 'web';

    protected $table = 'admin_users';
    protected $fillable = [
        'name', 'email', 'password','full_name','phone_number','address','created_by','member_code','id_bank','bank_account'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
