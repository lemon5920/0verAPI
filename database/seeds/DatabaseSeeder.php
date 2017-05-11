<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(LocalesTableSeeder::class);
        $this->call(SystemTypesTableSeeder::class);

        if (env(APP_ENV) == 'local') {
            $this->call(AdminsTableSeeder::class);
            $this->call(SchoolDataTableSeeder::class);
            $this->call(SchoolEditorsTableSeeder::class);
            $this->call(SchoolReviewersTableSeeder::class);
        }
    }
}
