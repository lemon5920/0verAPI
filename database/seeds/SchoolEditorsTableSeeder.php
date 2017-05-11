<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

class SchoolEditorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_editors')->insert([
            [
                'username' => 'editor1',
                'password' => Hash::make('admin123!@#'),
                'email' => 'a@a.a',
                'chinese_name' => 'A編輯',
                'english_name' => 'english_name',
                'school_code' => '01',
                'organization' => '註冊組',
                'phone' => '0912345678',
                'admin' => true,
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()
            ],

            [
                'username' => 'editor2',
                'password' => Hash::make('admin123!@#'),
                'email' => 'b@a.a',
                'chinese_name' => 'B編輯',
                'english_name' => 'english_name',
                'school_code' => '02',
                'organization' => '註冊組',
                'phone' => '0912345678',
                'admin' => true,
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()            ],
            [
                'username' => 'editor3',
                'password' => Hash::make('admin123!@#'),
                'email' => 'c@a.a',
                'chinese_name' => 'C編輯',
                'english_name' => 'english_name',
                'school_code' => '04',
                'organization' => '註冊組',
                'phone' => '0912345678',
                'admin' => true,
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()
            ]
        ]);
    }
}
