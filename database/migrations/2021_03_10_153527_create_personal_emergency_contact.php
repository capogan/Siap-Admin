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
            $table->integer('emergency_province')->nullable();
            $table->integer('emergency_city')->nullable();
            $table->string('emergency_sub_kecamatan')->nullable();
            $table->string('emergency_sub_kelurahan')->nullable();
            $table->string('emergency_zip_code')->nullable();
            $table->string('emergency_response')->nullable();
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
