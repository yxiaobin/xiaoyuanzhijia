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
    Route::get('/', 'IndexController@index'); // 武志祥
    Route::resource('loosegoods','LooseGoodsController');//武志祥
});

/*    --------------yxb ---------------- ******************************************************************************/
//登陆模块
Route::get('/login',['as'=>"login",'uses'=>"YXBController@login"]);
//注册模块
Route::get('/register',['as'=>"register",'uses'=>"YXBController@register"]);
Route::post('/register',['as'=>"register",'uses'=>"YXBController@registerstore"]);


/**********************************************************************************************************************/

