<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class SystemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array(
            '學士學制',
            '二技學制',
            '碩士學制',
            '博士學制'
        );

        foreach($types as $type) {
            DB::table('system_types')->insert(
                ['type' => $type, 'created_at' => Carbon::now()->toIso8601String(), 'updated_at' => Carbon::now()->toIso8601String()]
            );
        }
    }
}
