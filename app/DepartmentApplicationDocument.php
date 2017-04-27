<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class DepartmentApplicationDocument extends Model
{
    use SoftDeletes;

    protected $table = 'department_application_documents';

    protected $dateFormat = Carbon::ISO8601;

    protected $fillable = ['dept_id', 'document_type_id', 'detail', 'eng_detail'];

    protected $dates = ['deleted_at'];
}
