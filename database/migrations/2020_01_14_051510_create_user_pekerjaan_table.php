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
        Schema::create('user_pekerjaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pekerjaan');
            $table->unsignedBigInteger('id_user');
            $table->enum('status', [0,1]); //0 = belum selesai, 1 = selesai
            $table->timestamps();

            $table->index('id_pekerjaan');
            $table->index('id_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_pekerjaan');
    }
}
