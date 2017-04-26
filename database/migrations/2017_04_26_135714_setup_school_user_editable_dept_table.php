<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupSchoolUserEditableDeptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('school_user_editable_dept', function (Blueprint $table) {
            $table->foreign('username')->references('username')->on('school_users');
            $table->foreign('dept_id')->references('id')->on('department_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_user_editable_dept', function (Blueprint $table) {
            $table->dropForeign('school_user_editable_dept_username_foreign');
            $table->dropForeign('school_user_editable_dept_dept_id_foreign');
        });
    }
}
