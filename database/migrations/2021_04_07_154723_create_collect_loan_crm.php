<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectLoanCrm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collect_loan_crm', function (Blueprint $table) {
            $table->id();
            $table->integer('id_loan');
            $table->string('destination_number');
            $table->string('call_status');
            $table->date('promise_to_pay');
            $table->text('description')->nullable();
            $table->string('updated_by');
            $table->string('type',20);
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
        Schema::dropIfExists('collect_loan_crm');
    }
}
