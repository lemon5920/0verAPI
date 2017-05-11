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
        /*
        DB::table('school_editors')->insert(
            [
                'username' => 'admin1',
                'password' => Hash::make('admin123!@#'),
                'email' => 'a@a.a',
                'chinese_name' => '管理者一號',
                'admin' => true,
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()
            ],

            [
                'username' => 'admin2',
                'password' => Hash::make('admin123!@#'),
                'email' => 'b@a.a',
                'chinese_name' => '管理者二號',
                'admin' => false,
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()
            ],

            [
                'username' => 'admin3',
                'password' => Hash::make('admin123!@#'),
                'email' => 'a@b.a',
                'chinese_name' => '管理者三號',
                'admin' => false,
                'created_at' => Carbon::now()->toIso8601String(),
                'updated_at' => Carbon::now()->toIso8601String()
            ]
        );
        */
    }
}
