<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Locales extends Model
{
    use SoftDeletes;

    protected $table = 'locales';

    protected $dateFormat = Carbon::ISO8601;

    protected $fillable = ['lang_code', 'title'];

    protected $dates = ['deleted_at'];
}
