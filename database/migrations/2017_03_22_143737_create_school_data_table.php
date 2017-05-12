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
            $table->string('id')->primary()->comment('學校代碼');
            $table->string('title')->comment('學校名稱');
            $table->string('eng_title')->comment('學校英文名稱');
            $table->string('address')->comment('學校地址');
            $table->string('eng_address')->comment('學校英文地址');
            $table->string('organization')->comment('學校負責僑生事務的承辦單位名稱');
            $table->string('eng_organization')->comment('學校負責僑生事務的承辦單位英文名稱');
            $table->text('dorm_info')->comment('宿舍說明');
            $table->text('eng_dorm_info')->comment('宿舍英文說明');
            $table->string('url')->comment('學校網站網址');
            $table->string('eng_url')->comment('學校英文網站網址');
            $table->string('type')->comment('「公、私立」與「大學、科大」之組合＋「僑先部」共五種');
            $table->string('phone')->comment('學校聯絡電話（+886-49-2910960#1234）');
            $table->string('fax')->comment('學校聯絡電話（+886-49-2910960#1234）');
            $table->integer('sort_order')->comment('學校顯示排序（教育部給）');
            $table->boolean('scholarship')->comment('是否提供僑生專屬獎學金');
            $table->string('scholarship_url')->nullable()->comment('僑生專屬獎學金說明網址');
            $table->string('eng_scholarship_url')->nullable()->comment('僑生專屬獎學金英文說明網址');
            $table->string('scholarship_dept')->nullable()->comment('獎學金負責單位名稱');
            $table->string('eng_scholarship_dept')->nullable()->comment('獎學金負責單位英文名稱');
            $table->boolean('five_year_allowed')->comment('[中五]我可以招呢');
            $table->string('five_year_rule')->nullable()->comment('[中五]給海聯看的學則');
            $table->string('approve_no_of_independent_recruitment')->nullable()->comment('自招核定文號');
            $table->string('approval_document_of_independent_recruitment')->nullable()->comment('自招核定公文電子檔');
            $table->unsignedInteger('self_limit')->nullable()->comment('自招總額');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('deleted_at')->nullable();
        });

        Schema::table('school_data', function (Blueprint $table) {
            $table->foreign('five_year_confirmed_by')->references('username')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('school_data', function (Blueprint $table) {
            $table->dropForeign('school_data_five_year_confirmed_by_foreign');
        });

        Schema::dropIfExists('school_data');
    }
}
