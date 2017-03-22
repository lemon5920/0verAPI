<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupSchoolDataI18nTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('school_data_i18n', function (Blueprint $table) {
            $table->foreign('school_code')->references('code')->on('school_data');
            $table->foreign('lang')->references('lang_code')->on('locales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_data_i18n', function (Blueprint $table) {
            $table->dropForeign('school_data_i18n_school_code_foreign');
            $table->dropForeign('school_data_i18n_lang_foreign');
        });
    }
}
