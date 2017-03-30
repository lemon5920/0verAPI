<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemDataI18nTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_data_i18n', function (Blueprint $table) {
            $table->string('school_code')->comment('學校代碼');
            $table->string('system')->comment('學制類別');
            $table->string('lang')->comment('語言');
            $table->string('description')->comment('學制說明');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('deleted_at')->nullable();
            $table->primary(['school_code', 'system', 'lang']);

        })
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_data_i18n');
    }
}
