<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcgShortfall extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcg_shortfall', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_loan');
            $table->string('month_1')->nullable();
            $table->float('invoice_amount_1')->nullable();
            $table->string('month_2')->nullable();
            $table->float('invoice_amount_2')->nullable();
            $table->string('month_3')->nullable();
            $table->float('invoice_amount_3')->nullable();
            $table->string('month_4')->nullable();
            $table->float('invoice_amount_4')->nullable();
            $table->string('month_5')->nullable();
            $table->float('invoice_amount_5')->nullable();
            $table->string('month_6')->nullable();
            $table->float('invoice_amount_6')->nullable();
            $table->string('month_7')->nullable();
            $table->float('invoice_amount_7')->nullable();
            $table->string('month_8')->nullable();
            $table->float('invoice_amount_8')->nullable();
            $table->string('month_9')->nullable();
            $table->float('invoice_amount_9')->nullable();
            $table->string('month_10')->nullable();
            $table->float('invoice_amount_10')->nullable();
            $table->string('month_11')->nullable();
            $table->float('invoice_amount_11')->nullable();
            $table->string('month_12')->nullable();
            $table->float('invoice_amount_12')->nullable();
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
        Schema::dropIfExists('pcg_shortfall');
    }
}
