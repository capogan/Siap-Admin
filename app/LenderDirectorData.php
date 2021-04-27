<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Province;


class LenderDirectorData extends Model
{
    protected $table = 'lender_director_data';
    protected $fillable = [
        'id','uid','director_nik','director_name','director_dob','director_phone_number','director_email','director_npwp','director_level','created_at','updated_at',
        'identity_photo','self_photo','province_id','regency_id','village_id','district_id','position','address'
    ];

    public function funding()
    {
        return $this->hasOne(Funding::class , 'uid');
    }
    public function province(){
        return $this->hasOne(Province::class , 'id' , 'province_id');
    }
    public function regency(){
        return $this->hasOne(Regency::class , 'id' ,'regency_id');
    }

    public function district(){
        return $this->hasOne(District::class , 'id' , 'district_id');
    }
    public function village(){
        return $this->hasOne(Village::class , 'id' ,'village_id');
    }

    public function ekyc_director(){
        return $this->hasOne(PrivyID::class , 'uid' ,'uid')->where('position' ,'director');
    }
   
    public function ekyc_individu(){
        return $this->hasOne(PrivyID::class , 'id' ,'uid')->where('position' ,'individu');
    }
}
