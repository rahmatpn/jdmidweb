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
            $table->unsignedBigInteger('id_hotel');
            $table->string('nama');
            $table->text('alamat')->nullable();
            $table->string('email');
            $table->string('nomor_telepon')->nullable();
            $table->string('social_media')->nullable();
            $table->string('foto')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();

            $table->index('id_hotel');
            $table->index('email');
            $table->index('nama');
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
