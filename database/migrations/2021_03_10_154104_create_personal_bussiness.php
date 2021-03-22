<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalBussiness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_business', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uid');
            $table->string('business_name');
            $table->integer('id_cap_of_business');
            $table->integer('id_credit_score_income_factor');
            $table->integer('legality_status');
            $table->integer('business_established_since');
            $table->integer('total_employees')->nullable();
            $table->text('business_description')->nullable();
            $table->integer('business_place_status');
            $table->integer('partnership_since');
            $table->text('business_full_address');
            $table->integer('id_beurau_credit')->nullable();
            $table->integer('business_province');
            $table->integer('business_city');
            $table->bigInteger('business_sub_kecamatan')->nullable();
            $table->bigInteger('business_sub_kelurahan')->nullable();
            $table->string('business_zip_code');
            $table->string('business_phone_number');
            $table->string('average_sales_revenue_six_month')->nullable();
            $table->string('average_monthly_expenditure_six_month')->nullable();
            $table->string('average_monthly_profit_six_month')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_bussiness');
    }
}
