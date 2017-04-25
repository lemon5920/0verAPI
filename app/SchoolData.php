<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class SchoolData extends Model
{
    use SoftDeletes;

    protected $table = 'school_data';

    protected $dateFormat = Carbon::ISO8601;

    protected $fillable = [
        'id', //學校代碼
        'title', //學校名稱
        'engTitle', //學校英文名稱
        'address', //學校地址
        'engAddress', //學校英文地址
        'organization', //學校負責僑生事務的承辦單位名稱
        'engOrganization', //學校負責僑生事務的承辦單位英文名稱
        'dormInfo', //宿舍說明
        'engDormInfo', //宿舍英文說明
        'url', //學校網站網址
        'engUrl', //學校英文網站網址
        'type', //「公、私立」與「大學、科大」之組合＋「僑先部」共五種
        'phone', //學校聯絡電話（+886-49-2910960#1234）
        'fax', //學校聯絡電話（+886-49-2910960#1234）
        'sort_order', //學校顯示排序（教育部給）
        'scholarship', //是否提供僑生專屬獎學金
        'scholarshipUrl', //僑生專屬獎學金說明網址
        'engScholarshipUrl', //僑生專屬獎學金英文說明網址
        'scholarshipDept', //獎學金負責單位名稱
        'engScholarshipDept', //獎學金負責單位英文名稱
        'five_year_allowed', //[中五]我可以招呢
        'five_year_prepare', //[中五]我準備招了喔
        'five_year_confirmed_by', //[中五](school code)
        'five_year_rule', //[中五]給海聯看的學則
        'approve_no', //自招核定文號
        'self_limit', //自招總額
    ];

    protected $dates = ['deleted_at'];
}
