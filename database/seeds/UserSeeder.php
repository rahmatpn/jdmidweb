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
        DB::table('users')->insert([
            'name'=>'user3',
            'email'=>'user3@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>3,
            'nama'=>'user3',
            'nama_lengkap'=>'user3',
            'email'=>'user3@user.com',
            'url_slug'=>'user3',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name'=>'user4',
            'email'=>'user4@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>4,
            'nama'=>'user4',
            'nama_lengkap'=>'user4',
            'email'=>'user4@user.com',
            'url_slug'=>'user4',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name'=>'userA',
            'email'=>'userA@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>5,
            'nama'=>'userA',
            'nama_lengkap'=>'userA',
            'email'=>'userA@user.com',
            'url_slug'=>'userA',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name'=>'userB',
            'email'=>'userB@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>6,
            'nama'=>'userB',
            'nama_lengkap'=>'userB',
            'email'=>'userB@user.com',
            'url_slug'=>'userB',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name'=>'userBaru',
            'email'=>'userBaru@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>7,
            'nama'=>'userBaru',
            'nama_lengkap'=>'userBaru',
            'email'=>'userBaru@user.com',
            'url_slug'=>'userBaru',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name'=>'Athrun Zala',
            'email'=>'athrunzala@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>8,
            'nama'=>'Athrun Zala',
            'nama_lengkap'=>'Athrun Zala',
            'email'=>'athrunzala@user.com',
            'url_slug'=>'athrunzala',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name'=>'simp',
            'email'=>'simp@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>9,
            'nama'=>'simp',
            'nama_lengkap'=>'simp',
            'email'=>'simp@user.com',
            'url_slug'=>'simp',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name'=>'mark',
            'email'=>'mark@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>10,
            'nama'=>'mark',
            'nama_lengkap'=>'mark',
            'email'=>'mark@user.com',
            'url_slug'=>'mark',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name'=>'peter parker',
            'email'=>'peterparker@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>11,
            'nama'=>'peter parker',
            'nama_lengkap'=>'peter parker',
            'email'=>'peterparker@user.com',
            'url_slug'=>'peterparker',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('users')->insert([
            'name'=>'patrick colasour',
            'email'=>'patrickcolasour@user.com',
            'password'=>bcrypt('12345678'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('user_profiles')->insert([
            'user_id'=>12,
            'nama'=>'patrick colasour',
            'nama_lengkap'=>'patrick colasour',
            'email'=>'patrickcolasour@user.com',
            'url_slug'=>'patrickcolasour',
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);


    }


}
