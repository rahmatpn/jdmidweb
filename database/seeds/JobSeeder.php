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
            'area'=>'Kamar Mandi',
            'tanggal_mulai'=>'2020-02-03',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>10,
            'bayaran'=>100000,
            'deskripsi'=>'Jutaan orang bahkan tidak menyadari bahwa mereka bisa menghasilkan 1000 USD sehari tanpa meninggalkan rumah. Dan Anda adalah salah satu dari mereka.',
            'url_slug'=> Str::slug('Kamar Mandi '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>1,
            'posisi_id'=>4,
            'area'=>'Lantai 2',
            'tanggal_mulai'=>'2020-02-03',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>15,
            'bayaran'=>250000,
            'deskripsi'=>'Halo, nama saya Budi Setiawan. Saya seorang trader profesional. Semua yang Anda lihat ini bisa saya raih dalam waktu kurang satu tahun. Setahun yang lalu saya menemukan Binomo. Ini adalah platform. Bagi para pemula pun dapat melakukan transaksi perdagangan. Dan yang seperti saya katakan, saya sekarang bisa menghasilkan lebih dari 1000 USD hanya dengan mencurahkan dua sampai tiga jam waktu saya untuk trading.',
            'url_slug'=> Str::slug('Lantai 2 '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>3,
            'area'=>'Gedung A Lantai 1',
            'tanggal_mulai'=>'2020-02-13',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>1,
            'bayaran'=>300000,
            'deskripsi'=>'Jangan lupa bayar zakat',
            'url_slug'=> Str::slug('Gedung A Lantai 1'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>3,
            'area'=>'Gedung A Lantai 2',
            'tanggal_mulai'=>'2020-02-13',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>1,
            'bayaran'=>300000,
            'deskripsi'=>'Jangan lupa bayar zakat untuk satunya',
            'url_slug'=> Str::slug('Gedung A Lantai 2'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>10,
            'area'=>'Gedung Z',
            'tanggal_mulai'=>'2020-03-13',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>5,
            'bayaran'=>50000,
            'deskripsi'=>'Jangan lupa bayar zakat',
            'url_slug'=> Str::slug('Gedung Z'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>10,
            'area'=>'Kolam Renang',
            'tanggal_mulai'=>'2020-03-13',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>2,
            'bayaran'=>150000,
            'deskripsi'=>'Jangan lupa bayar zakat untuk satunya',
            'url_slug'=> Str::slug('Kolam Renang'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);
    }
}
