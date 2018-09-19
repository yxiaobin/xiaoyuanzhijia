<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
//            姓名
            $table->string('name')->nullable();
//            学院
            $table->string('school')->nullable();
//            班级
            $table->string('class')->nullable();
//            学号
            $table->string('stuid')->nullable();
//            手机号
            $table->string('phone')->nullable();
//            密码
            $table->string('password','255')->nullable();
//            积分
            $table->string('money')->nullable();
//            状态代表审核是否通过 0未通过1通过
            $table->string('status')->default(0);
//            头像
            $table->string('image')->nullable();
//            学生证信息
            $table->string('card_image')->nullable();
//            访问量
            $table->string('num')->nullable();
//            标签
            $table->string('tag')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}
