<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentApplicationDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_application_documents', function (Blueprint $table) {
            $table->string('dept_id');
            $table->unsignedInteger('document_type_id');
            $table->string('detail');
            $table->string('eng_detail');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('deleted_at')->nullable();
            $table->primary(['dept_id', 'document_type_id'], 'pkey');
        });

        Schema::table('department_application_documents', function (Blueprint $table) {
            $table->foreign('document_type_id')->references('id')->on('application_document_types');
            $table->foreign('dept_id')->references('id')->on('department_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('department_application_documents', function (Blueprint $table) {
            $table->dropForeign('department_application_documents_document_type_id_foreign');
            $table->dropForeign('department_application_documents_dept_id_foreign');
        });

        Schema::dropIfExists('department_application_documents');
    }
}
