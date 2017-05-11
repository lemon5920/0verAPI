<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

/**
 * App\SchoolReviewer
 *
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $chinese_name
 * @property string $english_name
 * @property string $school_code 該使用者所屬學校代碼
 * @property string $organization 該使用者所屬單位名稱
 * @property string $phone 聯絡電話
 * @property bool $admin
 * @property string $last_login 上次登入時間 YYYY-MM-DD HH:MM:SS
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property string $remember_token
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \App\SchoolData $school
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereAdmin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereChineseName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereEnglishName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereLastLogin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereOrganization($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereSchoolCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SchoolReviewer whereUsername($value)
 * @mixin \Eloquent
 */
class SchoolReviewer extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'school_reviewers';

    protected $primaryKey = 'username';

    public $incrementing = false;

    protected $dateFormat = Carbon::ISO8601;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'chinese_name', 'english_name', 'school_code', 'organization', 'phone', 'admin', 'last_login'
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