<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoomsIdToMessagesChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('message_chats', function (Blueprint $table) {
        $table->integer('room_id')->unsigned();    //unsigned()型で定義
        //'category_id' は 'categoriesテーブル' の 'id' を参照する外部キーです
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            //
        });
    }
}