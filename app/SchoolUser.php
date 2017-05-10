<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class SchoolUser extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'school_users';

    public $incrementing = false;

    protected $dateFormat = Carbon::ISO8601;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'chinese_name', 'english_name', 'school_code', 'organization', 'phone', 'last_login'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'school_code'
    ];

    protected $dates = ['deleted_at'];

    public function school()
    {
        return $this->belongsTo('App\SchoolData', 'school_code', 'id');
    }
}
