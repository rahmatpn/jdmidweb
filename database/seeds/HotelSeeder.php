<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('hotel_profiles')->insert([
            'hotel_id'=>1,
            'nama'=>'hotel1',
            'email'=>'hotel1@hotel.com',
            'url_slug'=>'hotel1',
            'foto'=>'image/hotel/photo/asss.jpg',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('hotels')->insert([
            'name'=>'hotel2',
            'email'=>'hotel2@hotel.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('hotel_profiles')->insert([
            'hotel_id'=>2,
            'nama'=>'hotel2',
            'email'=>'hotel2@hotel.com',
            'url_slug'=>'hotel2',
            'foto'=> "image/hotel/photo/sZUNIKmjB4Ao5FuILY14BOq6WVd1HAN8m7fn4J01.jpeg",
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
    }
}
