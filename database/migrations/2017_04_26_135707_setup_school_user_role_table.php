<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupSchoolUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('school_user_role', function (Blueprint $table) {
            $table->foreign('username')->references('username')->on('school_users');
            $table->foreign('role')->references('name')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_user_role', function (Blueprint $table) {
            $table->dropForeign('school_user_role_username_foreign');
            $table->dropForeign('school_user_role_role_foreign');
        });
    }
}
