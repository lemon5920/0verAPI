<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_data', function (Blueprint $table) {
            $table->integer('code')->primary()->commect('學校代碼');
            $table->string('type')->commect('「公、私立」與「大學、科大」之組合＋「僑先部」共五種');
            $table->string('phone')->commect('學校聯絡電話（+886-49-2910960#1234）');
            $table->string('fax')->commect('學校聯絡電話（+886-49-2910960#1234）');
            $table->string('homepage')->commect('學校網站網址');
            $table->integer('sort_order')->commect('學校顯示排序（教育部給）');
            $table->boolean('five_year_allowed')->commect('[中五]我可以招呢');
            $table->boolean('five_year_prepare')->commect('[中五]我準備招了喔');
            $table->integer('five_year_confirmed_by')->commect('[中五](school code)');
            $table->string('five_year_rule')->commect('[中五]給海聯看的學則');
            $table->string('approve_no')->commect('自招核定文號');
            $table->integer('self_limit')->commect('自招總額');
            $table->string('scholarship_url')->commect('僑生專屬獎學金詳細說明網址');
            $table->string('created_at')->commect('');
            $table->string('updated_at')->commect('');
            $table->string('deleted_at')->nullable()->commect('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_data')->commect('');
        $table->string('organization')->comment('學校負責僑生事務的承辦單位');
        $table->string('dorm_info')->commect('宿舍說明');
        $table->string('scholarship_info')->commect('獎學金說明');
        $table->string('scholarship_dept')->commect('獎學金負責單位');
    }
}
