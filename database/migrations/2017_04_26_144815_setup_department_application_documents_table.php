<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetupDepartmentApplicationDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
    }
}
