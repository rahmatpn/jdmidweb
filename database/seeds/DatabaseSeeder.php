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
         $this->call(PosisiSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(HotelSeeder::class);
         $this->call(JobSeeder::class);
    }
}
