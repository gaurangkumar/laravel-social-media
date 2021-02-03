<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
			$table->foreignId('user_id')->constrained();
			$table->bigInteger('group_id')->unsigned();
			$table->foreign('group_id')->references('id')->on('groups');
            /*
			$table->bigInteger('user_id')->unsigned();
            $table->foreignId('group_id')->constrained();
			*/
			$table->bigInteger('rid')->unsigned();
			$table->foreign('rid')->references('id')->on('users');
			$table->boolean('view')->default(0);
			$table->date('deleted')->nullable();
            $table->timestamps();
        });

/*
        Schema::table('chats', function($table) {
            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('group_id')->references('id')->on('users');
        });
*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
