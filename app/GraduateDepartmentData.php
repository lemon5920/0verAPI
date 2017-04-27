<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class GraduateDepartmentData extends Model
{
    use SoftDeletes;

    protected $table = 'graduate_department_data';

    protected $dateFormat = Carbon::ISO8601;

    protected $fillable = [
        'id', //系所代碼（系統按規則產生）
        'school_code', //學校代碼
        'title', //系所名稱
        'eng_title', //系所英文名稱
        'choice_memo', //選系說明
        'eng_choice_memo', //選系英文說明
        'doc_memo', //書審說明
        'eng_doc_memo', //書審英文說明
        'dept_memo', //備註
        'eng_dept_memo', //英文備註
        'url', //系網站網址
        'eng_url', //英文系網站網址
        'last_year_personal_apply_offer', //去年個人申請錄取名額
        'last_year_personal_apply_amount', //去年個人申請名額
        'personal_apply_amount', //個人申請名額
        'decrease_reason', //減招原因
        'self_recurit', //是否有自招
        'self_recurit_amount', //自招名額
        'special_class', //是否招收僑生專班
        'special_class_foriegn', //是否招收外生專班
        'special_dept', //特殊系所（醫、牙、中醫、藝術）
        'sex_limit', //性別限制
        'ratify', //核定名額
        'rank', //志願排名
        'sort_order', //輸出排序
        'after_birth', //限…之後出生
        'before_birth', //限…之前出生
        'dept_group', //18大學群代碼
        'sub_dept_group', //次要18大學群代碼
        'eng_taught', //全英文授課
        'disabilities', //是否招收身障學生
        'BuHweiHwaWen', //是否招收不具華文基礎學生
        'evaluation', //系所評鑑等級
    ];

    protected $dates = ['deleted_at'];
}
