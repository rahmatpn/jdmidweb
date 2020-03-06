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
            'deskripsi' => 'Laundry adalah bagian dari housekeeping yang bertanggung jawab atas pencucian semua linen, baik itu house laundry maupun guest laundry.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Pool Maintenance',
            'deskripsi' => 'Pool Maintenance adalah bagian yang bertugas dan bertanggung jawab menjaga kebersihan kolam renang.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Equipment Maintenance',
            'deskripsi' => 'Staff Maintenance adalah bagian yang bertugas dan bertanggung jawab menjaga alat - alat yang ada di hotel.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Receptionist',
            'deskripsi' => 'Resepsionis adalah pegawai yang memiliki tugas untuk menyapa, melayani, memberikan informasi kepada pengunjung, pelanggan atau pihak yang berkepentingan terkait tujuan yang diinginkan.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Porter',
            'deskripsi' => 'Porter adalah orang yang membawa barang bawaan atau mengurus bagian bagasi di hotel.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Security',
            'deskripsi' => 'departemen keamanan (Security Departement) yang memiliki fungsi dan peran penting untuk menjaga serta memberi kenyamanan kepada setiap tamu yang ingin berkunjung ataupun menginap di hotel.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Valet',
            'deskripsi' => 'Yang bertugas untuk melayani pelayanan personal dan spesifik kepada tamu selama masa inap mereka.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Concierge',
            'deskripsi' => 'Yang bertugas untuk membukakan pintu mobil, pintu hotel, dan membawa pengunjung ke receptionist.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Housekeeping',
            'deskripsi'=> 'Housekeeping adalah salah satu bagain atau department yang ada di hotel yang bertugas menjaga, merawat, dan membersihkan serta memelihara rooms atau kamar kamar hotel maupun area diluar kamar hotel atau area yang tergolong kedalam area umum (public areas) di hotel agar tetap nyaman, indah, dan aman.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Room Service',
            'deskripsi'=> 'room service adalah untuk menyajikan makanandan minuman dikamar tamu, termasuk menyiapkan pesanan tamu, melayani tamu, danmelakukan clear up kamar tamu serta menyampaikan tagihan pelayanan kamar (bill).'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Waiter/Waitress',
            'deskripsi'=> 'Waiter/Waitress mempunyai tugas dan tanggung jawab untuk melayani kebutuhan makanan dan minuman bagi para pelanggan hotel secara professional.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Crew Restaurant',
            'deskripsi'=> 'Mempersiapkan bahan-bahan makanan yang akan diolah.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Barista',
            'deskripsi'=> 'Membuat minuman sesuai dengan order tamu dan harus sesuai denganstandard Perusahaan serta memberikan kepuasan kepada tamu semaksimal mungkin.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Photographer',
            'deskripsi'=> 'Fotografer memiliki tugas untuk mengambil foto guna mengabadikan berbagai momen dalam suatu gambar.'
        ]);
        DB::table('posisi')->insert([
            'nama_posisi'=>'Cleaning Service',
            'deskripsi'=> ' Cleaning Housekeeping sendiri merupakan salah satu lembaga departemen yang ada di hotel, yang bertugas menjaga, merawat, dan membersihkan serta memelihara rooms atau kamar-kamar hotel maupun area di luar kamar hotel atau area yang tergolong kedalam area umum.'
        ]);
    }
}
