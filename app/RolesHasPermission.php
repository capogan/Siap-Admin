<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolesHasPermission extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'permission_id';
    protected $table = 'role_has_permissions';
    protected $fillable = [
        'permission_id', 'role_id'
    ];
}
