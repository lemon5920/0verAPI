<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_users', function (Blueprint $table) {
            $table->string('username')->primary();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('chinese_name');
            $table->string('eng_name');
            $table->string('school_code')->comment('該使用者所屬學校代碼');
            $table->string('organization')->comment('該使用者所屬系所');
            $table->string('office_phone')->comment('聯絡電話');
            $table->boolean('school_data_edit')->comment('是否可編輯學校資料');
            $table->boolean('student_data_read')->comment('是否可讀取報名學生資料');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_users');
    }
}
