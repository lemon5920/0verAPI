<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

/**
 * App\Locale
 *
 * @property string $lang_code
 * @property string $title
 * @property string $local_title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Locale whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Locale whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Locale whereLangCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Locale whereLocalTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Locale whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Locale whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Locale extends Model
{
    use SoftDeletes;

    protected $table = 'locales';

    protected $dateFormat = Carbon::ISO8601;

    protected $fillable = ['lang_code', 'title'];

    protected $dates = ['deleted_at'];
}
