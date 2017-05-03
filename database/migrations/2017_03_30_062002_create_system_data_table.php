<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_data', function (Blueprint $table) {
            $table->string('school_code')->comment('學校代碼');
            $table->string('system')->comment('學制種類（學士, 碩士, 二技, 博士）');
            $table->unsignedInteger('quantity_of_overseas')->nullable()->comment('僑生可招收數量');
            $table->unsignedInteger('surplus')->nullable()->comment('上學年本地生未招足名額（二技參照學士）');
            $table->unsignedInteger('expanded')->nullable()->comment('本學年教育部核定擴增名額（二技參照學士）');
            $table->unsignedInteger('distribution')->nullable()->comment('聯合分發名額（聯招；研究所沒有）');
            $table->unsignedInteger('personal_apply')->nullable()->comment('個人申請名額（聯招）');
            $table->unsignedInteger('recruit_by_school')->nullable()->comment('自招名額');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('deleted_at')->nullable();
            $table->primary(['school_code', 'system']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_data');
    }
}
