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
            $table->integer('code')->primary();
            $table->string('type');
            $table->string('phone');
            $table->string('fax');
            $table->string('homepage');
            $table->string('organization')->comment('負責僑生事務的單位');
            $table->string('undergraduate_memo');
            $table->string('master_memo');
            $table->string('associate_memo');
            $table->integer('overseas_bs_limit');
            $table->integer('overseas_master_limit');
            $table->integer('overseas_phd_limit');
            $table->integer('bs_not_reach');
            $table->integer('master_not_reach');
            $table->integer('phd_not_reach');
            $table->integer('bs_add');
            $table->integer('master_add');
            $table->integer('phd_add');
            $table->integer('i11l_bs_limit');
            $table->integer('i11l_master_limit');
            $table->integer('i11l_phd_limit');
            $table->integer('sort_order');
            $table->boolean('five_year_allowed');
            $table->boolean('five_year_prepare');
            $table->integer('five_year_confirmed_by');
            $table->string('five_year_rule');
            $table->string('approve_no');
            $table->integer('self_limit');
            $table->boolean('two_year_tech');
            $table->string('dorm_info');
            $table->string('scholarship_info');
            $table->string('scholarship_dept');
            $table->string('scholarship_url');
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
