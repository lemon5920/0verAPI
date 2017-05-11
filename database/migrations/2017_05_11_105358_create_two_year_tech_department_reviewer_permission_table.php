<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwoYearTechDepartmentReviewerPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('two_year_tech_department_reviewer_permission', function (Blueprint $table) {
            $table->string('username');
            $table->string('dept_id');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('deleted_at')->nullable();
            $table->primary(['username', 'dept_id'], 'pkey');
        });

        Schema::table('two_year_tech_department_reviewer_permission', function (Blueprint $table) {
            $table->foreign('username')->references('username')->on('school_reviewer');
            $table->foreign('dept_id')->references('id')->on('two_year_tech_department_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('two_year_tech_department_reviewer_permission', function (Blueprint $table) {
            $table->dropForeign('two_year_tech_department_reviewer_permission_username_foreign');
            $table->dropForeign('two_year_tech_department_reviewer_permission_dept_id_foreign');
        });

        Schema::dropIfExists('two_year_tech_department_reviewer_permission');
    }
}
