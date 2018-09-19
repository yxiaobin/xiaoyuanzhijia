<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',40)->nullable();//商品名称
            $table->string('img',255)->nullable();//商品图片
            $table->integer('price')->default(0);  //兑换商品所需积分
            $table->string('address',100)->nullable(); //兑换地点
            $table->longText('content')->nullable();  //商品详情
            $table->integer('num')->default(0);
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
        Schema::dropIfExists('goods');
    }
}
