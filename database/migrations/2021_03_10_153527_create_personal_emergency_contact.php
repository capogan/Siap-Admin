<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalEmergencyContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_emergency_contact', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uid');
            $table->string('emergency_name');
            $table->integer('id_siblings_master');
            $table->string('emergency_phone');
            $table->text('emergency_full_address');
            $table->string('emergency_province');
            $table->string('emergency_city');
            $table->string('emergency_sub_kecamatan');
            $table->string('emergency_sub_kelurahan');
            $table->string('emergency_zip_code');
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
        Schema::dropIfExists('personal_emergency_contact');
    }
}
