<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class SchoolUserEditableDept extends Model
{
    use SoftDeletes;

    protected $table = 'school_user_editable_dept';

    protected $dateFormat = Carbon::ISO8601;

    protected $fillable = ['username', 'dept_id'];

    protected $dates = ['deleted_at']; 
}
