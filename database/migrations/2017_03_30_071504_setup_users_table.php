<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('school_users', function (Blueprint $table) {
            $table->foreign('school_code')->references('code')->on('school_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_users', function (Blueprint $table) {
            $table->dropForeign('school_users_school_code_foreign');
        });
    }
}
