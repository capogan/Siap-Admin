<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    protected $table = 'request_funding';
    protected $fillable = [
        'id','uid','status','created_at','updated_at'
    ];

    public function directors()
    {
        return $this->hasMany(LenderDirectorData::class , 'uid' , 'uid')
        ->with('province')
        ->with('regency')
        ->with('district')
        ->with('village');
    }

    public function rekening()
    {
        return $this->hasOne(LenderBankInfo::class , 'uid');
    }

    public function commissioners()
    {
        return $this->hasMany(LenderCommissionerData::class , 'uid' , 'uid')
        ->with('province')
        ->with('regency')
        ->with('district')
        ->with('village');
    }

}
