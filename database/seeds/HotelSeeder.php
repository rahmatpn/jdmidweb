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
            'foto'=>'image/hotel/photo/1608622707.webp',
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
            'foto'=> "image/hotel/photo/SoT63YrEf7pfluOCxALtvyz9XMELNpGJACIBdtJ9.jpeg",
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('hotels')->insert([
            'name'=>'hotel3',
            'email'=>'hotel3@hotel.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('hotel_profiles')->insert([
            'hotel_id'=>3,
            'nama'=>'hotel3',
            'email'=>'hotel3@hotel.com',
            'url_slug'=>'hotel3',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('hotels')->insert([
            'name'=>'hotel lentera',
            'email'=>'hotellentera@hotel.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('hotel_profiles')->insert([
            'hotel_id'=>4,
            'nama'=>'hotel lentera',
            'email'=>'hotellentera@hotel.com',
            'url_slug'=>'hotellentera',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('hotels')->insert([
            'name'=>'tok dalang homestay',
            'email'=>'tokdalang@hotel.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('hotel_profiles')->insert([
            'hotel_id'=>5,
            'nama'=>'tok dalang homestay',
            'email'=>'tokdalang@hotel.com',
            'url_slug'=>'tokdalanghomestay',
            'foto'=> "image/hotel/photo/SoT63YrEf7pfluOCxALtvyz9XMELNpGJACIBdtJ9.jpeg",
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
    }
}
