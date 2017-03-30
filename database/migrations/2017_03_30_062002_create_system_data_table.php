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
            $table->string('type')->comment('學制種類（學士, 碩士, 二技, 博士）');
            $table->integer('quantity_of_overseas')->comment('僑生可招收數量');
            $table->integer('surplus')->comment('上學年本地生未招足名額（二技參照學士）');
            $table->integer('expanded')->comment('本學年教育部核定擴增名額（二技參照學士）');
            $table->integer('distribution')->comment('聯合分發名額（聯招；研究所沒有）');
            $table->integer('personalApply')->comment('個人申請名額（聯招）');
            $table->integer('recruitBySchool')->comment('自招名額');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('deleted_at')->nullable();
            $table->primary(['school_code', 'type']);
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
