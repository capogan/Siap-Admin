<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewRequestLoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement("CREATE OR REPLACE VIEW view_request_loan AS

                SELECT
                      request_loan.id,
                      request_loan.invoice_number,
                      request_loan.uid as uid_request_loan,
                      request_loan.loan_amount,
                      request_loan.loan_period,
                      request_loan.admin_fee_percentage,
                      request_loan.admin_fee_amount,
                      request_loan.interest_fee_percentage,
                      request_loan.interest_fee_amount,
                      request_loan.disbrusement,
                      request_loan.repayment,
                      request_loan.penalty_percentage,
                      request_loan.penalty_max_percentage,
                      request_loan.penalty_max_amount,
                      request_loan.status as request_loan_status,
                      request_loan.created_at as request_loan_created_at,
                      request_loan.updated_at as request_loan_updated_at,
                      users.id as user_id,
                      users.name as user_name,
                      users.email as user_email,
                      users.created_at as user_created_at,
                      users.updated_at as user_updated_at,
                      personal_info.uid,
                      personal_info.identity_number,
                      personal_info.first_name,
                      personal_info.last_name,
                      personal_info.gender,
                      personal_info.place_of_birth,
                      personal_info.date_of_birth,
                      personal_info.address,
                      personal_info.province,
                      personal_info.city,
                      personal_info.zip_code,
                      personal_info.education,
                      personal_info.npwp_number,
                      personal_info.total_cc,
                      personal_info.bpjs_employee_number,
                      personal_info.bpjs_health_number,
                      personal_info.phone_number,
                      personal_info.whatsapp_number,
                      personal_info.married_status,
                      personal_info.mother_name,
                      personal_info.created_at as personal_info_created_at,
                      personal_info.updated_at as personal_info_updated_at,
                      personal_info.number_of_dependents,
                      personal_business.business_name,
                      personal_business.id_cap_of_business,
                      personal_business.id_credit_score_income_factor,
                      personal_business.legality_status,
                      personal_business.total_employees,
                      personal_business.business_description,
                      personal_business.business_place_status,
                      personal_business.partnership_since,
                      personal_business.business_full_address,
                      personal_business.id_beurau_credit,
                      personal_business.business_province,
                      personal_business.business_city,
                      personal_business.business_sub_kecamatan,
                      personal_business.business_sub_kelurahan,
                      personal_business.business_zip_code,
                      personal_business.business_phone_number,
                      personal_business.average_sales_revenue_six_month,
                      personal_business.average_monthly_expenditure_six_month,
                      personal_business.average_monthly_profit_six_month,
                      personal_business.created_at as personal_business_created_at,
                      personal_business.updated_at as personal_business_updated_at,
                      personal_business.business_established_since,
                      users_file.identity_photo,
                      users_file.noted_identity_photo,
                      users_file.self_photo,
                      users_file.noted_self_photo,
                      users_file.npwp_photo,
                      users_file.noted_npwp_photo,
                      users_file.business_build_photo,
                      users_file.noted_business_build_photo,
                      users_file.siup_photo,
                      users_file.noted_siup_photo,
                      users_file.business_activity_photo,
                      users_file.noted_business_activity_photo,
                      users_file.npwp_business_photo,
                      users_file.noted_npwp_business_photo,
                      users_file.created_at as user_file_created_at,
                      users_file.updated_at as user_file_updated_at,
                      users_file.business_owner_photo,
                      business_legality.legality_name,
                      business_legality.legality_value,
                      business_legality.created_at as bussines_legality_created_at,
                      business_legality.updated_at as bussines_legality_updated_at,
                      cap_of_business_criteria.title_business,
                      cap_of_business_criteria.d_asset,
                      cap_of_business_criteria.status as cap_of_business_criteria_status,
                      cap_of_business_criteria.created_at as cap_of_business_criteria_created_at,
                      cap_of_business_criteria.updated_at as cap_of_business_criteria_updated_at,
                      business_place_status.place_status_name,
                      business_place_status.place_status_value,
                      business_place_status.created_at as business_place_status_created_at ,
                      business_place_status.updated_at as business_place_status_updated_at ,        
                      beurau_credit.beurau_credit_name,
                      beurau_credit.beurau_value,
                      beurau_credit.created_at as beurau_credit_created_at,
                      beurau_credit.updated_at as beurau_credit_updated_at,
                      credit_score_income_factory.industry_sectore,
                      credit_score_income_factory.value,
                      credit_score_income_factory.description,
                      credit_score_income_factory.status as credit_score_income_factory_status,
                      credit_score_income_factory.created_at as credit_score_income_factory_created_at,
                      credit_score_income_factory.created_by as credit_score_income_factory_created_by ,
                      credit_score_income_factory.updated_at as credit_score_income_factory_updated_at,
                      credit_score_income_factory.updated_by as credit_score_income_factory_updated_by,
                      master_dependents.title as master_dependents_title,
                      master_dependents.status as master_dependents_status,
                      master_dependents.created_at as master_dependents_created_at,
                      master_dependents.create_by,
                      master_dependents.updated_at as master_dependents_updated_at,
                      master_dependents.updated_by as master_dependents_updated_by,
                      master_business_since.title as master_business_since_title,
                      master_business_since.status as master_business_since_status,
                      master_business_since.created_by as master_business_since_created_by,
                      master_business_since.updated_at as master_business_since_updated_at,
                      master_business_since.updated_by as master_business_since_updated_by,
                      master_business_since.created_at as master_business_since_created_at,
                      master_business_since.min as master_business_since_min ,
                      master_business_since.max as master_business_since_max,
                      master_business_since.score,
                      master_partnership_since.title as master_partnership_since_title,
                      master_partnership_since.status as master_partnership_since_status ,
                      master_partnership_since.created_at as master_partnership_since_created_at,
                      master_partnership_since.created_by as master_partnership_since_created_by,
                      master_partnership_since.updated_at as master_partnership_since_updated_at,
                      master_partnership_since.updated_by as master_partnership_since_updated_by,
                      master_partnership_since.min as master_partnership_since_min,
                      master_partnership_since.max as master_partnership_since_max,
                      loan_score.score as loan_score_currently          
                FROM request_loan
                      LEFT JOIN users ON ((users.id = request_loan.uid))
                      LEFT JOIN personal_info ON ((personal_info.uid = users.id))
                      LEFT JOIN personal_business ON ((personal_business.uid = users.id))
                      LEFT JOIN users_file ON ((users_file.uid = users.id))
                      LEFT JOIN business_legality ON ((business_legality.id = personal_business.legality_status))
                      LEFT JOIN cap_of_business_criteria ON ((cap_of_business_criteria.id = personal_business.id_cap_of_business))
                      LEFT JOIN business_place_status ON ((business_place_status.id = personal_business.business_place_status))
                      LEFT JOIN beurau_credit ON ((beurau_credit.id = personal_business.id_beurau_credit))
                      LEFT JOIN credit_score_income_factory ON ((credit_score_income_factory.id = personal_business.id_credit_score_income_factor))
                      LEFT JOIN master_dependents ON ((master_dependents.id = personal_info.number_of_dependents))
                      LEFT JOIN master_business_since ON ((master_business_since.id = personal_business.business_established_since))
                      LEFT JOIN master_partnership_since ON ((master_partnership_since.id = personal_business.partnership_since))
                      LEFT JOIN loan_score ON ((loan_score.id_loan = request_loan.id))                 
                ");


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('view_request_loan');
    }
}
