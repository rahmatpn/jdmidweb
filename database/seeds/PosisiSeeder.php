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
           'nama_posisi'=>'Laundry',
            'deskripsi' => 'Laundry adalah layanan hotel yang bekerja mencuci dan menyetrika baju para tamu'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Pool Maintenance',
            'deskripsi' => 'Bekerja merawat peralatan dan pemeliharaan fasilitas kolam renang, dan tugas terkait lainnya sesuai kebutuhan.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Equipment Maintenance',
            'deskripsi' => 'Bekerja merawat peralatan dan pemeliharaan peralatan yang digunakan oleh pegawai.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Receptionist',
            'deskripsi' => 'Resepsionis adalah orang yang bertugas sebagai penerima tamu disuatu perusahaan, kantor, hotel.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Porter',
            'deskripsi' => 'Section atau bagian dari Front Office Departemen yang bertugas untuk menangani barang bawaan tamu, baik pada saat check in maupun check out.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Security',
            'deskripsi' => 'bertugas menjaga dan mengatur keamanan hotel serta melakukan pengamanan seluruh area hotel.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Valet',
            'deskripsi' => 'Bertugas memarkirkan kendaraan yang dibawa oleh tamu'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Concierge',
            'deskripsi' => 'bertugas memberikan saran, jawaban bahkan membantu mewujudkan permintaan tamu selama itu bukan kegiatan yang menentang hukum atau perbuatan yang ilegal.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Housekeeping',
            'deskripsi'=> 'Bertugas untuk menjaga, merawat, dan membersihkan serta memelihara rooms atau kamar-kamar hotel ataupun area diluar kamar hotel.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Room Service',
            'deskripsi'=> 'pelayanan makanan dan minuman di dalam kamar hotel, selain itu juga bertugas mengambil pesanan, menyiapkan, menyajikan, dan mengambil kembali peralatan yang telah digunakan di kamar'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Waiter/Waitress',
            'deskripsi'=> 'Bertugas melayani makan dan minum tamu restoran secara professional'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Crew Restaurant',
            'deskripsi'=> 'Bertugas membantu operasional restoran dan melayani customer'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Barista',
            'deskripsi'=> 'Barista adalah sebutan untuk seseorang yang pekerjaannya membuat dan menyajikan kopi kepada pelanggan'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Photographer',
            'deskripsi'=> 'Bertugas membuat gambar dengan cara menangkap cahaya dari subyek gambar dengan kamera maupun peralatan fotografi lainnya'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Cleaning Service',
            'deskripsi'=> ' Bertugas memberikan pelayanan kebersihan,kerapihan dan Hygenisasi dari sebuah gedung/bangunan baik indoor ataupun outdoor sehingga tercipta suasana yang comfortable dalam menunjang aktifitas sehari-hari.'
        ]);
    }
}
