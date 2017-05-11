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
        Schema::table('school_editors', function (Blueprint $table) {
            $table->foreign('school_code')->references('id')->on('school_data');
        });

        Schema::table('school_reviewers', function (Blueprint $table) {
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
        Schema::table('school_editors', function (Blueprint $table) {
            $table->dropForeign('school_editors_school_code_foreign');
        });

        Schema::table('school_reviewers', function (Blueprint $table) {
            $table->dropForeign('school_reviewers_school_code_foreign');
        });
    }
}
