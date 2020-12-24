<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pekerjaan')->insert([
            'hotel_id'=>1,
            'posisi_id'=>2,
            'area'=>'Skyline',
            'mesin'=>'1550cc',
            'dimensi'=>'15x30x15',
            'kuota'=>2005,
            'bayaran'=>4500000000,
            'deskripsi'=>'Lorem ipsum dolor sit amet.',
            'warna'=>'Biru',
            'transmisi'=>'Manual',
            'url_slug'=> Str::slug('Skyline '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>1,
            'posisi_id'=>4,
            'area'=>'Suzuki Car',
            'tanggal_mulai'=>'2020-06-03',
            'mesin'=>'1350cc',
            'dimensi'=>'15x30x15',
            'kuota'=>2010,
            'bayaran'=>1500000000,
            'deskripsi'=>'Lorem ipsum dolor sit amet.',
            'warna'=>'Merah',
            'transmisi'=>'Manual',
            'url_slug'=> Str::slug('Suzuki Car '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>3,
            'area'=>'Supra',
            'mesin'=>'1350cc',
            'dimensi'=>'15x30x15',
            'kuota'=>1999,
            'bayaran'=>3500000000,
            'deskripsi'=>'Lorem ipsum dolor sit amet.',
            'warna'=>'Merah',
            'transmisi'=>'Manual',
            'url_slug'=> Str::slug('Supra '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>1,
            'posisi_id'=>1,
            'area'=>'Civic',
            'mesin'=>'1150cc',
            'dimensi'=>'15x30x15',
            'kuota'=>2005,
            'bayaran'=>500000000,
            'deskripsi'=>'Lorem ipsum dolor sit amet.',
            'warna'=>'Putih',
            'transmisi'=>'Automatic',
            'url_slug'=> Str::slug('Civic '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>3,
            'area'=>'Ae86',
            'mesin'=>'2150cc',
            'dimensi'=>'15x30x15',
            'kuota'=>1994,
            'bayaran'=>3000000,
            'deskripsi'=>'Lorem ipsum dolor sit amet.',
            'warna'=>'Putih',
            'transmisi'=>'Manual',
            'url_slug'=> Str::slug('Ae86'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>1,
            'posisi_id'=>3,
            'area'=>'Supra X',
            'mesin'=>'2150cc',
            'dimensi'=>'15x30x15',
            'kuota'=>2020,
            'bayaran'=>3000000,
            'deskripsi'=>'Lorem ipsum dolor sit amet.',
            'warna'=>'Merah',
            'transmisi'=>'Automatic',
            'url_slug'=> Str::slug('Supra X'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);


   }
}
