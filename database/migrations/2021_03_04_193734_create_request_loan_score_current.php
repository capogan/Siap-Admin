<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestLoanScoreCurrent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_loan_score_current', function (Blueprint $table) {
            $table->id();
            $table->integer('id_request_loan');
            $table->bigInteger('score');
            $table->integer('sequence');
            $table->string('name_step');
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
        Schema::dropIfExists('request_loan_score_current');
    }
}
