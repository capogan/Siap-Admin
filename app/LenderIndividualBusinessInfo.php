<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LenderIndividualBusinessInfo extends Model
{
    protected $table = 'lender_individual_business_info';
    protected $fillable = [
        'id',
        'company_name',
        'kodepos',
        'id_lender_individual',
        'id_business_legality',
        'no_siup',
        'phone_number',
        'date_of_business_birth',
        'business_place_status',
        'province',
        'city',
        'district',
        'villages',
        'full_address',
        'no_npwp',
        'average_sales_revenue_six_month',
        'average_monthly_expenditure_six_month',
        'average_monthly_profit_six_month',
        'business_type',
        'business_type_detail',
        'total_employee',
        'created_at',
        'updated_at',
    ];

    public function business_legality()
    {
        return $this->hasOne(BusinessLegality::class , 'id' , 'id_business_legality');
    }

    public function place_status()
    {
        return $this->hasOne(BuildingPlaceStatus::class , 'id' , 'business_place_status');
    }
    public function type()
    {
        return $this->hasOne(IncomeFactory::class , 'id' , 'business_type');
    }
    // public function business_typ_detail()
    // {
    //     return $this->hasOne(business_ty::class , 'id' , 'business_type');
    // }
}
