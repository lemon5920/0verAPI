<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class DepartmentData extends Model
{
    use SoftDeletes;

    protected $table = 'department_data';

    protected $dateFormat = Carbon::ISO8601;

    protected $fillable = [
        'id', //系所代碼（系統按規則產生）
        'school_code', //學校代碼
        'cardcode', //讀卡代碼
        'title', //系所名稱
        'engTitle', //系所英文名稱
        'choicememo', //選系說明
        'engChoicememo', //選系英文說明
        'docmemo', //書審說明
        'engDocmemo', //書審英文說明
        'deptmemo', //備註
        'engDeptmemo', //英文備註
        'url', //系網站網址
        'engUrl', //英文系網站網址
        'lastyearoffer', //去年聯合分發錄取名額
        'decreasereason', //減招原因
        'lastyearamount', //去年聯合分發名額（只有學士班有聯合分發）
        'amount', //聯合分發名額（只有學士班有聯合分發）
        'personalapplyamount', //個人申請名額
        'selfrecurit', //是否有自招
        'selfrecuritamount', //自招名額
        'specialclass', //是否招收僑生專班
        'specialclass_foriegn', //是否招收外生專班
        'specialdept', //特殊系所（醫、牙、中醫、藝術）
        'sexlimit', //性別限制
        'ratify', //核定名額
        'rank', //志願排名
        'sortorder', //輸出排序
        'afterbirth', //限…之後出生
        'beforebirth', //限…之前出生
        'deptgroup', //18大學群代碼
        'subdeptgroup', //次要18大學群代碼
        'engTaught', //全英文授課
        'Disabilities', //是否招收身障學生
        'BuHweiHwaWen', //是否招收不具華文基礎學生
        'evaluation', //系所評鑑等級
    ];

    protected $dates = ['deleted_at'];
}
