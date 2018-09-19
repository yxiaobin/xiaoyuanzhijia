<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix'=>'','namespace'=>'Home'],function (){


    Route::get('shop','IndexController@shop'); //胡华聘
    Route::get('index', 'IndexController@index'); // 武志祥
    Route::resource('goods','ShopController'); //胡华聘
    Route::resource('losegoods','LoseGoodsController');//武志祥
    Route::resource('findgoods','FindGoodsController');//武志祥
    Route::resource('findpeople','FindPeopleController');//武志祥
});

/*    --------------yxb ---------------- ******************************************************************************/
//登陆模块
Route::get('/login',['as'=>"login",'uses'=>"YXBController@login"]);
Route::get('/getlogin',['as'=>"getlogin",'uses'=>"YXBController@loginstore"]);

//注册模块
Route::get('/register',['as'=>"register",'uses'=>"YXBController@register"]);
Route::post('/register',['as'=>"register",'uses'=>"YXBController@registerstore"]);

//登出
Route::get('/logout',['as'=>"logout",'uses'=>"YXBController@logout"]);

//我的
Route::get('/mine',['as'=>"mine",'uses'=>"YXBController@mine"]);
//修改信息
Route::get('/editinfo',['as'=>"editinfo",'uses'=>"YXBController@editinfo"]);
Route::post('/editinfo',['as'=>"editinfo",'uses'=>"YXBController@editinfostore"]);

//个人中心
Route::get('/myspace',['as'=>"mycpace",'uses'=>"YXBController@myspace"]);
//我的积分
Route::get('/mymoney',['as'=>"mymoney",'uses'=>"YXBController@mymoney"]);
//我的记录
Route::get('/myrecord',['as'=>"myrecord",'uses'=>"YXBController@myrecord"]);
//我的消息
Route::get('/mynew',['as'=>"mynew",'uses'=>"YXBController@mynew"]);

/**********************************************************************************************************************/
