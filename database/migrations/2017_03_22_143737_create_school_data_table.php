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
            $table->integer('code')->primary()->comment('學校代碼');
            $table->string('type')->comment('「公、私立」與「大學、科大」之組合＋「僑先部」共五種');
            $table->string('phone')->comment('學校聯絡電話（+886-49-2910960#1234）');
            $table->string('fax')->comment('學校聯絡電話（+886-49-2910960#1234）');
            $table->string('homepage')->comment('學校網站網址');
            $table->integer('sort_order')->comment('學校顯示排序（教育部給）');
            $table->boolean('five_year_allowed')->comment('[中五]我可以招呢');
            $table->boolean('five_year_prepare')->comment('[中五]我準備招了喔');
            $table->integer('five_year_confirmed_by')->comment('[中五](school code)');
            $table->string('five_year_rule')->comment('[中五]給海聯看的學則');
            $table->string('approve_no')->comment('自招核定文號');
            $table->integer('self_limit')->comment('自招總額');
            $table->string('scholarship_url')->comment('僑生專屬獎學金詳細說明網址');
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
        Schema::dropIfExists('school_data');
    }
}
