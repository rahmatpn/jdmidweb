<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'user1',
            'email'=>'user1@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>1,
            'nama'=>'user1',
            'nama_lengkap'=>'user1',
            'email'=>'user1@user.com',
            'url_slug'=>'user1',
//            'foto'=>'image/user/profile/1582527725.jpg',
//            'cover'=>'image/user/cover/1582527727.png',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name'=>'user2',
            'email'=>'user2@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>2,
            'nama'=>'user2',
            'nama_lengkap'=>'user2',
            'email'=>'user2@user.com',
            'url_slug'=>'user2',
//            'foto'=>'image/user/profile/1582527725.jpg',
//            'cover'=>'image/user/cover/1582527727.png',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
    }
}
