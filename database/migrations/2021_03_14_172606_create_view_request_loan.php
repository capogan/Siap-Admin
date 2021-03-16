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
                      request_loan.status,
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
                      personal_info.created_at,
                      personal_info.updated_at,
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
                      users_file.business_owner_photo
                    
                FROM request_loan
                
                      LEFT JOIN users ON ((users.id = request_loan.uid))
                      LEFT JOIN personal_info ON ((personal_info.uid = users.id))
                      LEFT JOIN personal_business ON ((personal_business.uid = users.id))
                      LEFT JOIN users_file ON ((users_file.uid = users.id))
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
