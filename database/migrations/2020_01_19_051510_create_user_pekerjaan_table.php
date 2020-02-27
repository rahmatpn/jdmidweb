<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaan_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pekerjaan_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('status', [0,1,2]); //0 = pending, 1 = diterima, 2 = selesai
            $table->timestamps();

            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaan')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pekerjaan_user');
    }
}
