<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LenderBusiness extends Model
{
    protected $table = 'lender_business';
    protected $fillable = [
        'id','uid','business_name','npwp','address','id_province','id_regency','id_district','id_village',
        'phone_number','website','email','induk_berusaha_number','tdp_number','akta_pendirian','letter_register_pengesahan_kemenkunham','letter_change_pengesahan_kemenkunham','last_akta_perubahan','amount_setoran_modal',
        'taxpayer','asset_value','equity_value','short_term_obligations','annual_income','operating_expenses','profit_and_loss', 'created_at','updated_at'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
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
}
