<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('posisi');
            $table->string('area');
            $table->date('tanggal_mulai');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->integer('tinggi_minimal')->nullable();
            $table->integer('tinggi_maksimal')->nullable();
            $table->integer('berat_minimal')->nullable();
            $table->integer('berat_maksimal')->nullable();
            $table->integer('kuota');
            $table->bigInteger('bayaran');
            $table->text('deskripsi');
            $table->timestamps();

            $table->index('hotel_id');
            $table->index('posisi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pekerjaan');
    }
}
