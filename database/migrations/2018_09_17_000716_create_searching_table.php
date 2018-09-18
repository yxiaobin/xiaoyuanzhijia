<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searching', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('发布信息人的名字');
            $table->string('item_name')->comment('物品名称');
            $table->text('item_detail')->comment('物品详细信息');
            $table->string('phone')->comment('联系人电话');
            $table->string('find_address')->comment('发现位置');
            $table->string('item_image')->comment('物品图片');
            $table->integer('type')->comment('1,丢失物品。2，捡到物品。3，找人');
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
        Schema::dropIfExists('searching');
    }
}
