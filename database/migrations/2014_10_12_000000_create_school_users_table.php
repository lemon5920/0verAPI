<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolUsersTable extends Migration
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
            $table->string('email')->unique()->nullable();
            $table->string('chinese_name');
            $table->string('english_name');
            $table->string('school_code')->comment('該使用者所屬學校代碼');
            $table->string('organization')->comment('該使用者所屬單位名稱');
            $table->string('phone')->comment('聯絡電話');
            $table->string('last_login')->nullable()->comment('上次登入時間 YYYY-MM-DD HH:MM:SS');
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
