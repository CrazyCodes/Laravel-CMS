<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminMenuTableSeeder::class);
        $this->call(AdvertTableSeeder::class);
        $this->call(AdvertCategoryTableSeeder::class);
        $this->call(SiteTableSeeder::class);
        $this->call(SystemConfigTableSeeder::class);
        $this->call(SystemConfigGroupTableSeeder::class);
    }
}
