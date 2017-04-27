<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class SystemData extends Model
{
    use SoftDeletes;

    protected $table = 'system_data';

    protected $dateFormat = Carbon::ISO8601;

    protected $fillable = [
        'school_code', //學校代碼
        'system', //學制種類（學士, 碩士, 二技, 博士）
        'quantity_of_overseas', //僑生可招收數量
        'surplus', //上學年本地生未招足名額（二技參照學士）
        'expanded', //本學年教育部核定擴增名額（二技參照學士）
        'distribution', //聯合分發名額（聯招；研究所沒有）
        'personal_apply', //個人申請名額（聯招）
        'recruit_by_school', //自招名額
    ];

    protected $dates = ['deleted_at'];

}
