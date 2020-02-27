<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hotel_id');
            $table->string('nama');
            $table->text('alamat')->nullable();
            $table->string('email');
            $table->string('deskripsi')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('social_media')->nullable();
            $table->string('foto')->nullable();
            $table->string('website')->nullable();
            $table->string('url_slug')->unique();
            $table->enum('status_verifikasi', [0,1])->nullable(); //null = pending, 0 = ditolak, 1 = accepted
            $table->timestamps();
        });

        Schema::table('hotel_profiles', function (Blueprint $table){
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('email')->references('email')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_profiles');
    }
}
