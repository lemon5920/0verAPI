<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

/**
 * App\DepartmentApplicationDocument
 *
 * @property string $dept_id
 * @property int $document_type_id
 * @property string $detail
 * @property string $eng_detail
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\DepartmentApplicationDocument whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DepartmentApplicationDocument whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DepartmentApplicationDocument whereDeptId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DepartmentApplicationDocument whereDetail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DepartmentApplicationDocument whereDocumentTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DepartmentApplicationDocument whereEngDetail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\DepartmentApplicationDocument whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DepartmentApplicationDocument extends Model
{
    use SoftDeletes;

    protected $table = 'department_application_documents';

    protected $dateFormat = Carbon::ISO8601;

    protected $fillable = ['dept_id', 'document_type_id', 'detail', 'eng_detail'];

    protected $dates = ['deleted_at'];
}
