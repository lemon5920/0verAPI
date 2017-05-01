<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\SchoolData;

class SchoolDataController extends Controller
{
    /**
     * 新增學校
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|string|unique:school_data,id', //學校代碼
            'title' => 'required|string', //學校名稱
            'eng_title' => 'required|string', //學校英文名稱
            'address' => 'required|string', //學校地址
            'eng_address' => 'required|string', //學校英文地址
            'organization' => 'required|string', //學校負責僑生事務的承辦單位名稱
            'eng_organization' => 'required|string', //學校負責僑生事務的承辦單位英文名稱
            'dorm_info' => 'required|string', //宿舍說明
            'eng_dorm_info' => 'required|string', //宿舍英文說明
            'url' => 'required|url', //學校網站網址
            'eng_url' => 'required|url', //學校英文網站網址
            'type' => 'required|string', //「公、私立」與「大學、科大」之組合＋「僑先部」共五種
            'phone' => 'required|string', //學校聯絡電話（+886-49-2910960#1234）
            'fax' => 'required|string', //學校聯絡電話（+886-49-2910960#1234）
            'sort_order' => 'required|integer', //學校顯示排序（教育部給）
            'scholarship' => 'required|boolean', //是否提供僑生專屬獎學金
            'scholarship_url' => 'required|url', //僑生專屬獎學金說明網址
            'eng_scholarship_url' => 'required|url', //僑生專屬獎學金英文說明網址
            'scholarship_dept' => 'required|string', //獎學金負責單位名稱
            'eng_scholarship_dept' => 'required|string', //獎學金負責單位英文名稱
            'five_year_allowed' => 'required|boolean', //[中五]我可以招呢
            'five_year_prepare' => 'required|boolean', //[中五]我準備招了喔
            'five_year_confirmed_by' => 'required|string', //[中五](school code)
            'five_year_rule' => 'required|string', //[中五]給海聯看的學則
            'approve_no' => 'required|string', //自招核定文號
            'self_limit' => 'required|integer', //自招總額
        ]);

        if($validator->fails()) {
            $messages = $validator->errors()->all();
            return response()->json(compact('messages'), 400);
        }
    }

    /**
     * 更新學校資訊
     *
     * @param  \Illuminate\Http\Request $request
     * @param  string $school_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $school_id)
    {

    }

    /**
     * 取得學校資訊（校名、介紹等）與所有系所資訊
     *
     * @param  string $school_id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $school_id)
    {
        return $school_id;
    }
}
