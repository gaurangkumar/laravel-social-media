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
            $table->bigInteger('group_id')->unsigned()->nullable()->default(null);
            $table->foreign('group_id')->references('id')->on('groups');
            $table->bigInteger('rid')->unsigned()->nullable()->default(null);
            $table->foreign('rid')->references('id')->on('users');
            $table->boolean('view')->default(0);
            $table->longText('msg')->nullable();
            $table->date('deleted')->nullable();
            $table->timestamps();
        });
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
