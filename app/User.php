<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function loan_request(){
        return $this->hasMany('App\LoanRequest','uid','id');
    }

    public  function personal_info(){
        return $this->hasOne('App\PersonalInfo','uid');
    }

    public function directors()
    {
        return $this->hasMany(LenderDirectorData::class , 'uid')
        ->with('ekyc_director')
        ->with('province')
        ->with('regency')
        ->with('district')
        ->with('village');
    }

    public function rekening()
    {
        return $this->hasOne(LenderBankInfo::class , 'uid');
    }

    public function document()
    {
        return $this->hasOne(LenderAttachmentData::class , 'uid');
    }

    public function business()
    {
        return $this->hasOne(LenderBusiness::class , 'uid')
        ->with('province')
        ->with('regency')
        ->with('district')
        ->with('village');
    }

    public function agreementfile(){
        return $this->hasOne(DigiSignDocument::class , 'uid')->where('step' , 'registration');
    }

    public function eqycdata()
    {
        return $this->hasOne(DigisignActivation::class , 'uid');
    }

    public function commissioners()
    {
        return $this->hasMany(LenderCommissionerData::class , 'uid')
        ->with('ekyc_commissioner')
        ->with('province')
        ->with('regency')
        ->with('district')
        ->with('village');
    }
    public function individuinfo()
    {
        return $this->hasOne(LenderIndividualPersonalInfo::class , 'uid')
                ->with('educations')
                ->with('marital_status')
                ->with('status_of_residence')
                ->with('provinces')
                ->with('cities')
                ->with('districts')
                ->with('villagess')
                ->with('individubank')
                ->with('individubusiness')
                ->with('individuemergency')
                ->with('individufile')
                ->with('individualjob');
    }
    

}
