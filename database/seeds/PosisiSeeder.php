<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posisi')->insert([
           'nama_posisi'=>'Honda',
            'deskripsi' => 'Perusahaan.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Nissan',
            'deskripsi' => 'Perusahaan.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Toyota',
            'deskripsi' => 'Perusahaan.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Suzuki',
            'deskripsi' => 'Perusahaan.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Mitsubishi',
            'deskripsi' => 'Perusahaan.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Mazda',
            'deskripsi' => 'Perusahaan.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Hino',
            'deskripsi' => 'Perusahaan.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Acura',
            'deskripsi' => 'Perusahaan.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Hyundai',
            'deskripsi'=>  'Perusahaan.'
        ]);
    }
}
