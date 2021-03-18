<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestLoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_loan', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->bigInteger('uid');
            $table->float('loan_amount');
            $table->integer('loan_period');
            $table->decimal('admin_fee_percentage');
            $table->float('admin_fee_amount');
            $table->decimal('interest_fee_percentage');
            $table->float('interest_fee_amount');
            $table->float('disbrusement');
            $table->float('repayment');
            $table->decimal('penalty_percentage');
            $table->decimal('penalty_max_percentage');
            $table->float('penalty_max_amount');
            $table->integer('status')->comment = '0=pending;1;process;2=approve;3=run;4=rejected';
            $table->text('reject_description')->nullable();
            $table->date('reject_date')->nullable();
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
        Schema::dropIfExists('request_loan');
    }
}
