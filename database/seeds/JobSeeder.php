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
            'tanggal_mulai'=>'2020-05-03',
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
            'tanggal_mulai'=>'2020-06-03',
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
            'tanggal_mulai'=>'2020-06-13',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>1,
            'bayaran'=>300000,
            'deskripsi'=>'Jangan lupa bayar zakat',
            'url_slug'=> Str::slug('Gedung A Lantai 1 '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>3,
            'area'=>'Gedung A Lantai 2',
            'tanggal_mulai'=>'2020-04-13',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>1,
            'bayaran'=>300000,
            'deskripsi'=>'Jangan lupa bayar zakat untuk satunya',
            'url_slug'=> Str::slug('Gedung A Lantai 2 '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>10,
            'area'=>'Gedung Z',
            'tanggal_mulai'=>'2020-05-13',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>5,
            'bayaran'=>50000,
            'deskripsi'=>'Jangan datang telat',
            'url_slug'=> Str::slug('Gedung Z '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>10,
            'area'=>'Kolam Renang',
            'tanggal_mulai'=>'2020-08-13',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>2,
            'bayaran'=>150000,
            'deskripsi'=>'Telat gpp',
            'url_slug'=> Str::slug('Kolam Renang '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>1,
            'posisi_id'=>12,
            'area'=>'Ruang Makan',
            'tanggal_mulai'=>'2020-04-05',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>13,
            'bayaran'=>125000,
            'deskripsi'=> 'Bersihkan Meja makan sebelum dan sesudah digunakan',
            'url_slug'=> Str::slug('Ruang makan '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>3,
            'area'=>'Lapangan karambol',
            'tanggal_mulai'=>'2020-05-29',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>1,
            'bayaran'=>325000,
            'deskripsi'=> 'Mencari pekerja yang memiliki passion di bidang karambol',
            'url_slug'=> Str::slug('Lapangan karambol '.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>1,
            'posisi_id'=>2,
            'area'=>'Kolam',
            'tanggal_mulai'=>'2020-06-15',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>1,
            'bayaran'=>325000,
            'deskripsi'=> 'Tolong mas/mbak ini saya salah masukin ikan ke kolam renang',
            'url_slug'=> Str::slug('Kolam'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>9,
            'area'=>'Kamar',
            'tanggal_mulai'=>'2020-04-15',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>1,
            'bayaran'=>1325000,
            'deskripsi'=> 'Gaji besar, tugas simple, bersihkan semua kamar : kamar tidur, kamar tamu, kamar mandi, kamar mayat, kamar ganti, kamar isolasi, dan kamar-kamar lainnya',
            'url_slug'=> Str::slug('Kamar'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>6,
            'area'=>'Halaman',
            'tanggal_mulai'=>'2020-07-06',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>9,
            'bayaran'=>900000,
            'deskripsi'=> 'Tawuran dengan security hotel sebelah. Pantang pulang sebelum tumbang',
            'url_slug'=> Str::slug('Halaman'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>13,
            'area'=>'Kantin',
            'tanggal_mulai'=>'2020-06-18',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>2,
            'bayaran'=>175000,
            'deskripsi'=> 'Menyajikan minuman berkelas seperti ole-ole,kopi granata, prutang, okkay jelly drunk, ti jus, dan teh giles',
            'url_slug'=> Str::slug('Kantin'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>1,
            'posisi_id'=>5,
            'area'=>'Aula',
            'tanggal_mulai'=>'2020-07-13',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>1,
            'bayaran'=>999999,
            'deskripsi'=> 'Heri Porter, Tugasmu adalah melawan Lort Foldermort',
            'url_slug'=> Str::slug('Aula'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>11,
            'area'=>'Ruang tunggu',
            'tanggal_mulai'=>'2020-05-11',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>5,
            'bayaran'=>100000,
            'deskripsi'=> 'Tunggu bentar ya mas/mbak, hehe',
            'url_slug'=> Str::slug('Ruang tunggu'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>1,
            'area'=>'Laundry',
            'tanggal_mulai'=>'2020-06-29',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>3,
            'bayaran'=>678000,
            'deskripsi'=> 'Mencuci Ua..- maksud saya baju kotor',
            'url_slug'=> Str::slug('Laundry'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        DB::table('pekerjaan')->insert([
            'hotel_id'=>2,
            'posisi_id'=>14,
            'area'=>'Lobby',
            'tanggal_mulai'=>'2020-06-25',
            'waktu_mulai'=>date("H:i:s"),
            'waktu_selesai'=>date("H:i:s"),
            'kuota'=>2,
            'bayaran'=>250000,
            'deskripsi'=> 'Memfoto orang lewat',
            'url_slug'=> Str::slug('Lobby'.time(),'-'),
            'created_at'=> Carbon::now()->toDateTimeString(),
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

   }
}
