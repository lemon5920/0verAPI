<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolDataI18nTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_data_i18n', function (Blueprint $table) {
            $table->string('school_code');
            $table->string('lang');
            $table->string('name')->unique();
            $table->string('address')->unique();
            $table->string('organization')->comment('學校負責僑生事務的承辦單位');
            $table->string('dorm_info')->comment('宿舍說明');
            $table->string('scholarship_info')->comment('獎學金說明');
            $table->string('scholarship_dept')->comment('獎學金負責單位');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('deleted_at')->nullable();
            $table->primary(['school_code', 'lang']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_data_i18n');
    }
}
