<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_data', function (Blueprint $table) {
            $table->string('id')->primary()->comment('系所代碼（系統按規則產生）');
            $table->string('oldcode')->comment('讀卡代碼');
            $table->string('title')->comment('系所名稱');
            $table->string('engTitle')->comment('系所英文名稱');
            $table->string('choicememo')->comment('選系說明');
            $table->string('engChoicememo')->comment('選系英文說明');
            $table->string('docmemo')->comment('書審說明');
            $table->string('engDocmemo')->comment('書審英文說明');
            $table->string('deptmemo')->comment('備註');
            $table->string('engDeptmemo')->comment('英文備註');
            $table->string('url')->comment('系網站網址');
            $table->string('engUrl')->comment('英文系網站網址');
            $table->integer('lastyearoffer')->comment('去年聯合分發錄取名額');
            $table->string('decreasereason')->comment('減招原因');
            $table->integer('lastyearamount')->comment('去年聯合分發名額（只有學士班有聯合分發）');
            $table->integer('amount')->comment('聯合分發名額（只有學士班有聯合分發）');
            $table->integer('personalapplyamount')->comment('個人申請名額');
            $table->boolean('selfrecurit')->comment('是否有自招');
            $table->integer('selfrecuritamount')->comment('自招名額');
            $table->boolean('specialclass')->comment('是否招收僑生專班');
            $table->boolean('specialclass_foriegn')->comment('是否招收外生專班');
            $table->string('specialdept')->nullable()->comment('特殊系所（醫、牙、中醫、藝術）');
            $table->string('sexlimit')->nullable()->comment('性別限制');
            $table->integer('ratify')->comment('核定名額');
            $table->integer('rank')->comment('志願排名');
            $table->integer('sortorder')->comment('輸出排序');
            $table->string('afterbirth')->comment('限…之後出生');
            $table->string('beforebirth')->comment('限…之前出生');
            $table->string('deptgroup')->comment('18大學群代碼');
            $table->string('subdeptgroup')->comment('次要18大學群代碼');
            $table->boolean('engTaught')->comment('全英文授課');
            $table->boolean('Disabilities')->comment('是否招收身障學生');
            $table->boolean('BuHweiHwaWen')->comment('是否招收不具華文基礎學生');
            $table->string('evaluation')->comment('系所評鑑等級');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_data');
    }
}
