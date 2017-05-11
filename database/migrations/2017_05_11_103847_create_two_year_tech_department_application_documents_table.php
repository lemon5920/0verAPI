<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwoYearTechDepartmentApplicationDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('two_year_tech_department_application_documents', function (Blueprint $table) {
            $table->string('dept_id');
            $table->unsignedInteger('document_type_id');
            $table->string('detail');
            $table->string('eng_detail');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('deleted_at')->nullable();
            $table->primary(['dept_id', 'document_type_id'], 'pkey');
        });

        Schema::table('two_year_tech_department_application_documents', function (Blueprint $table) {
            $table->foreign('document_type_id', 'two_year_tech_type_foreign')->references('id')->on('application_document_types');
            $table->foreign('dept_id', 'two_year_tech_id_foreign')->references('id')->on('two_year_tech_department_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('two_year_tech_department_application_documents', function (Blueprint $table) {
            $table->dropForeign('two_year_tech_type_foreign');
            $table->dropForeign('two_year_tech_id_foreign');
        });

        Schema::dropIfExists('two_year_tech_department_application_documents');
    }
}
