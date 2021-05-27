<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_file', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uid');
            $table->text('identity_photo');
            $table->string('noted_identity_photo')->nullable();
            $table->text('self_photo');
            $table->string('noted_self_photo')->nullable();
            $table->text('npwp_photo');
            $table->string('noted_npwp_photo')->nullable();
            $table->text('business_build_photo')->nullable();
            $table->string('noted_business_build_photo')->nullable();
            $table->text('siup_photo')->nullable();
            $table->string('noted_siup_photo')->nullable();
            $table->text('business_activity_photo')->nullable();
            $table->string('noted_business_activity_photo')->nullable();
            $table->text('npwp_business_photo')->nullable();
            $table->string('noted_npwp_business_photo')->nullable();
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
        Schema::dropIfExists('users_file');
    }
}
