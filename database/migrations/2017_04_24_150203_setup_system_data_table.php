<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupSystemDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('system_data', function (Blueprint $table) {
            $table->foreign('school_code')->references('id')->on('school_data');
            $table->foreign('system')->references('type')->on('system_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('system_data', function (Blueprint $table) {
            $table->dropForeign('system_data_school_code_foreign');
            $table->dropForeign('system_data_system_foreign');
        });
    }
}
