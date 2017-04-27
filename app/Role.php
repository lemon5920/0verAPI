<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Role extends Model
{
    use SoftDeletes;

    protected $table = 'roles';

    protected $dateFormat = Carbon::ISO8601;

    protected $fillable = ['name', 'description', 'prefix'];

    protected $dates = ['deleted_at'];
}
