<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequeestLoanInstallments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_loan_installments', function (Blueprint $table) {
            $table->id();
            $table->integer('id_request_loan');
            $table->integer('stages');
            $table->float('amount');
            $table->date('date_payment')->nullable();
            $table->date('due_date_payment');
            $table->integer('id_status_payment');
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
        Schema::dropIfExists('request_loan_installments');
    }
}
