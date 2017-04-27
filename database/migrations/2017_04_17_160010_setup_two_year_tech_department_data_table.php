<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupTwoYearTechDepartmentDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('two_year_tech_department_data', function (Blueprint $table) {
            $table->foreign('school_code')->references('id')->on('school_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('two_year_tech_department_data', function (Blueprint $table) {
            $table->dropForeign('two_year_tech_department_data_school_code_foreign');
        });
    }
}
