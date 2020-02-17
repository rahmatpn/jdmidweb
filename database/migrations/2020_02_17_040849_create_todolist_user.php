<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodolistUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todolist_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('todolist_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('status');
            $table->timestamps();

            $table->index('todolist_id');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todolist_user');
    }
}
