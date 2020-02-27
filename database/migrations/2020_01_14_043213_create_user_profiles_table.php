<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama');
            $table->string('nama_lengkap')->nullable();
            $table->string('ktp')->nullable();
            $table->string('skck')->nullable();
            $table->string('sertifikat')->nullable();
            $table->string('kartu_satpam')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin',['L', 'P'])->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->text('alamat')->nullable();
            $table->string('email');
            $table->string('social_media')->nullable();
            $table->enum('pendidikan_terakhir', ['SD', 'SMP', 'SMA', 'Diploma', 'S1', 'S2', 'S3'])->nullable();
            $table->string('foto')->nullable();
            $table->string('cover')->nullable();
            $table->string('url_slug')->unique();
            $table->enum('status_ktp', [0,1])->nullable(); //null = pending, 0 = ditolak, 1 = verif
            $table->enum('status_skck', [0,1])->nullable(); //null = pending, 0 = ditolak, 1 = verif
            $table->enum('status_sertifikat', [0,1])->nullable(); //null = pending, 0 = ditolak, 1 = verif
            $table->enum('status_kartu_satpam', [0,1])->nullable(); //null = pending, 0 = ditolak, 1 = verif
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
//            $table->index('user_id');
//            $table->index('nama');
//            $table->index('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
