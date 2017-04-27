<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class SchoolUserRole extends Model
{
    use SoftDeletes;

    protected $table = 'school_user_role';

    protected $dateFormat = Carbon::ISO8601;

    protected $fillable = ['username', 'role'];

    protected $dates = ['deleted_at']; 
}
