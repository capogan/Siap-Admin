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
            $table->date('business_established_since');
            $table->integer('total_employees');
            $table->text('business_description');
            $table->text('business_full_address');
            $table->string('business_province');
            $table->string('business_city');
            $table->string('business_sub_kecamatan');
            $table->string('business_sub_kelurahan');
            $table->string('business_zip_code');
            $table->string('business_phone_number');
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
