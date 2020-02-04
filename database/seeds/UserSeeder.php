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
            'email'=>'user1@user.com',
            'url_slug'=>'user1',
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
            'user_id'=>1,
            'nama'=>'user2',
            'email'=>'user2@user.com',
            'url_slug'=>'user2',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
    }
}
