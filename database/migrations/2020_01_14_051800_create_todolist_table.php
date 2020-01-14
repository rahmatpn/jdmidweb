<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodolistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todolist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_pekerjaan');
            $table->string('nama_pekerjaan');
            $table->enum('status',[0,1]);//0 = belum selesai, 1 = selesai
            $table->timestamps();

            $table->index('id_pekerjaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todolist');
    }
}
