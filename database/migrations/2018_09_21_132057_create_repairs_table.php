<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address')->nullable();  //地址
            $table->string('address_detail')->nullable(); //详细地址
            $table->string('object')->nullable(); //物品
            $table->string('img')->nullable();  //图片
            $table->string('detail')->nullable(); //详情
            $table->integer('user_id')->nullable();  //报修人id
            $table->integer('status')->default(0);   //状态 0未处理 1已完成  -1无问题
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
        Schema::dropIfExists('repairs');
    }
}
