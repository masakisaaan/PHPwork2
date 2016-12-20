<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_master', function(Blueprint $table){
        $table->increments('id'); //商品ID
        $table->string('item_name')->unique(); //商品名
        $table->string('item_img')->nullable(); //商品画像
        $table->integer('price');
        $table->text('description'); //商品説明
        $table->timestamps(); //登録日、更新日
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('item_master');
    }
}
