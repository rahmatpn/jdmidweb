<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
           'name'=>'hotel1',
           'email'=>'hotel1@hotel.com',
            'password'=>bcrypt('12345678')
        ]);
        DB::table('hotel_profiles')->insert([
            'hotel_id'=>1,
            'nama'=>'hotel1',
            'email'=>'hotel1@hotel.com'
        ]);
        DB::table('hotels')->insert([
            'name'=>'hotel2',
            'email'=>'hotel2@hotel.com',
            'password'=>bcrypt('12345678')
        ]);
        DB::table('hotel_profiles')->insert([
            'hotel_id'=>2,
            'nama'=>'hotel2',
            'email'=>'hotel2@hotel.com'
        ]);
    }
}
