<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LenderIndividualPersonalInfo extends Model
{
    protected $table = 'lender_individual_personal_info';
    protected $fillable = [
        'id',
        'uid',
        'identity_number',
        'full_name',
        'gender',
        'pob',
        'dob',
        'married_status',
        'mother_name',
        'status_of_residence',
        'province',
        'city',
        'district',
        'villages',
        'full_address',
        'no_npwp',
        'total_credit_card',
        'no_bpjs_tk',
        'no_bpjs_kesehatan',
        'education',
        'whatsapp_number',
        'email',
        'lender_type',
        'kodepos',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function individubank()
    {
        return $this->hasOne(LenderIndividualBankAccount::class , 'id_lender_individual');
    }
    public function individubusiness()
    {
        return $this->hasOne(LenderIndividualBusinessInfo::class , 'id_lender_individual')
        ->with('business_legality')
        ->with('place_status')
        ->with('type');
        //->with('business_type_detail');
    }
    public function individuemergency()
    {
        return $this->hasOne(LenderIndividualEmergencyContact::class , 'id_lender_individual');
    }
    public function individufile()
    {
        return $this->hasOne(LenderIndividualFile::class , 'id_lender_individual');
    }
    public function individualjob()
    {
        return $this->hasOne(LenderIndividualJobInformation::class , 'id_lender_individual') ->with('provinces')
        ->with('cities')
        ->with('districts')
        ->with('villagess');
        
    }
    public function educations()
    {
        return $this->hasOne(Education::class , 'id' ,'education');
    }
    public function marital_status()
    {
        return $this->hasOne(MarriedStatus::class , 'id' ,'married_status');
    }
    public function status_of_residence()
    {
        return $this->hasOne(BuildingPlaceStatus::class , 'id' ,'status_of_residence');
    }
    public function provinces()
    {
        return $this->hasOne(Province::class , 'id' ,'province');
    }
    public function cities()
    {
        return $this->hasOne(Regency::class , 'id' ,'city');
    }
    public function districts()
    {
        return $this->hasOne(District::class , 'id' ,'district');
    }
    public function villagess()
    {
        return $this->hasOne(Village::class , 'id' ,'villages');
    }
    
}
