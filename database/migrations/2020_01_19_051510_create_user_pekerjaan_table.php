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
            $table->enum('status', [0,1]); //0 = belum selesai, 1 = selesai
            $table->timestamps();

            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaan')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//            $table->index('pekerjaan_id');
//            $table->index('user_id');
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
