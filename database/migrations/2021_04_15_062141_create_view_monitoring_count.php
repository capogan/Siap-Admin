<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewMonitoringCount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW view_monitoring_count AS
            select a.title, count(b.status)
            from master_status_loan_request as a
                     left join request_loan as b
                               ON a.id = b.status
            group by a.title,a.id
            ORDER by a.id ASC ;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('view_monitoring_count');
    }
}
