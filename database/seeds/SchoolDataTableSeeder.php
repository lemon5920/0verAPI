<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

class SchoolDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_data')->insert([
            [
                'id' => '01',
                'type' => '國立大學',
                'title' => '國立臺灣大學',
                'eng_title' => 'National  Taiwan University',
                'address' => '10617臺北市羅斯福路4段1號',
                'phone' => '886-2-33662388轉203',
                'fax' => '886-2-23638200',
                'url' => 'http://www.ntu.edu.tw',
                'organization' => '註冊組',
                'sort_order' => '1',
                'five_year_allowed' => true,
                'five_year_prepare' => true,
                'five_year_confirmed_by' => 'admin1',
                'five_year_rule' => '第17條',
                'approve_no_of_independent_recruitment' => '臺教高(四)字第1040109682號',
                'eng_address' => 'No. 1, Sec. 4, Roosevelt Road, Taipei, 10617 Taiwan R.O.C.',
                'dorm_info' => '新生保障住宿',
                'scholarship' => '有提供',
                'scholarship_url' => 'http://gocfs.osa.ntu.edu.tw/news/news.php?class=101',
                'self_limit' => '0',
                'scholarship_dept' => '學務處生活輔導組及僑生及陸生輔導組',
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()
            ],

            [
                'id' => '02',
                'type' => '國立大學',
                'title' => '國立成功大學',
                'eng_title' => 'National  Taiwan University',
                'address' => '10617臺北市羅斯福路4段1號',
                'phone' => '886-2-33662388轉203',
                'fax' => '886-2-23638200',
                'url' => 'http://www.ntu.edu.tw',
                'organization' => '註冊組',
                'sort_order' => '1',
                'five_year_allowed' => true,
                'five_year_prepare' => true,
                'five_year_confirmed_by' => 'admin1',
                'five_year_rule' => '第17條',
                'approve_no_of_independent_recruitment' => '臺教高(四)字第1040109682號',
                'eng_address' => 'No. 1, Sec. 4, Roosevelt Road, Taipei, 10617 Taiwan R.O.C.',
                'dorm_info' => '新生保障住宿',
                'scholarship' => '有提供',
                'scholarship_url' => 'http://gocfs.osa.ntu.edu.tw/news/news.php?class=101',
                'self_limit' => '0',
                'scholarship_dept' => '學務處生活輔導組及僑生及陸生輔導組',
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()
            ],

            [
                'id' => '04',
                'type' => '國立大學',
                'title' => '國立暨南國際大學',
                'eng_title' => 'National  Taiwan University',
                'address' => '10617臺北市羅斯福路4段1號',
                'phone' => '886-2-33662388轉203',
                'fax' => '886-2-23638200',
                'url' => 'http://www.ntu.edu.tw',
                'organization' => '註冊組',
                'sort_order' => '1',
                'five_year_allowed' => true,
                'five_year_prepare' => true,
                'five_year_confirmed_by' => 'admin1',
                'five_year_rule' => '第17條',
                'approve_no_of_independent_recruitment' => '臺教高(四)字第1040109682號',
                'eng_address' => 'No. 1, Sec. 4, Roosevelt Road, Taipei, 10617 Taiwan R.O.C.',
                'dorm_info' => '新生保障住宿',
                'scholarship' => '有提供',
                'scholarship_url' => 'http://gocfs.osa.ntu.edu.tw/news/news.php?class=101',
                'self_limit' => '0',
                'scholarship_dept' => '學務處生活輔導組及僑生及陸生輔導組',
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()
            ]
        ]);
    }
}
