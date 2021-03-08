<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableShortFall extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_fall', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->string('month');
            $table->string('years');
            $table->string('invoice_amount');
            $table->decimal('short_fall_result');
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
        Schema::dropIfExists('table_short_fall');
    }
}
