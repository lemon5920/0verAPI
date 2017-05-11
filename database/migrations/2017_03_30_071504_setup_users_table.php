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
        Schema::table('school_editor', function (Blueprint $table) {
            $table->foreign('school_code')->references('id')->on('school_data');
        });

        Schema::table('school_reviewer', function (Blueprint $table) {
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
        Schema::table('school_editor', function (Blueprint $table) {
            $table->dropForeign('school_editor_school_code_foreign');
        });

        Schema::table('school_reviewer', function (Blueprint $table) {
            $table->dropForeign('school_reviewer_school_code_foreign');
        });
    }
}
