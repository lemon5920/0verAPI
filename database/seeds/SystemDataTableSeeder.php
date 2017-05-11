<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

class SystemDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('system_data')->insert([
            [
                'school_code' => '01',
                'system' => '學士學制',
                'description' => '中文學制描述',
                'eng_description' => 'eng_description',
                'quantity_of_overseas' => '348',
                'surplus' => NULL,
                'expanded' => '150',
                'distribution' => NULL,
                'personal_apply' => NULL,
                'recruit_by_school' => NULL,
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()
            ],

            [
                'school_code' => '01',
                'system' => '碩士學制',
                'description' => '中文學制描述',
                'eng_description' => 'eng_description',
                'quantity_of_overseas' => '387',
                'surplus' => NULL,
                'expanded' => NULL,
                'distribution' => NULL,
                'personal_apply' => NULL,
                'recruit_by_school' => NULL,
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()
            ],

            [
                'school_code' => '01',
                'system' => '博士學制',
                'description' => '中文學制描述',
                'eng_description' => 'eng_description',
                'quantity_of_overseas' => '76',
                'surplus' => '51',
                'expanded' => NULL,
                'distribution' => NULL,
                'personal_apply' => NULL,
                'recruit_by_school' => NULL,
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()
            ]
        ]);
    }
}
