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
Route::group(['prefix'=>'','namespace'=>'Home','middleware'=>'HomeLoginCheck'],function (){
    Route::resource('loosegoods','LoseGoodsController');//武志祥
    Route::resource('findgoods','FindGoodsController');//武志祥
    Route::resource('losegoods','LoseGoodsController');//武志祥
    Route::resource('findpeople','FindPeopleController');//武志祥
    Route::resource('question','QuestionController');//武志祥
    Route::resource('comment','CommentController');//武志祥
    Route::get('questiondashang','DaShangController@questionDsShang');//武志祥
});
Route::group(['namespace'=>'Home'],function (){
    Route::get('/', 'IndexController@index'); // 武志祥
    Route::get('shop','IndexController@shop'); //胡华聘
    Route::get('goods','ShopController@goods'); //胡华聘
    Route::get('good/{good}','ShopController@goodDetail'); //胡华聘
    Route::get('rule','ShopController@rule');//胡华聘
    Route::get('repair','RepairController@index');//胡华聘
    Route::resource('story','StoryController'); //胡华聘

});
//需要登录后操作  胡华聘
Route::group(['prefix'=>'','namespace'=>'Home','middleware'=>'HomeLoginCheck'],function (){

    Route::get('story/comment/{story_id}','StoryController@comment'); //胡华聘
    Route::get('story/comment/{story_id}/{id}','StoryController@comment'); //胡华聘
    Route::post('story/comment/{story}/{id}','StoryController@commentStore');  //胡华聘
    Route::get('reward/{user_id}/{num}','StoryController@reward');//胡华聘
    Route::get('exchange/record','ShopController@exchange_record');  //兑换记录
    Route::get('exchange/{good}','ShopController@exchange');   //兑换商品
    Route::post('repair','RepairController@store');         //提交维修
});

Route::get('admin/login','Admin\IndexController@login');  //胡华聘
Route::post('admin/login','Admin\IndexController@check');  //胡华聘

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'AdminCheck'],function (){
    Route::get('index', 'IndexController@index'); // 武志祥
    Route::resource('goods','ShopController'); //胡华聘
    Route::get('record','ShopController@record');//胡华聘
    Route::get('good/{good}/change','ShopController@goodChange');//胡华聘
    Route::get('record/{record}/change','ShopController@recordChange');//胡华聘
    Route::get('repair','RepairController@index');//胡华聘
    Route::get('repair/{repair}/{status}','RepairController@status');  //胡华聘
    Route::get('logout','IndexController@logout');  //胡华聘
});

/* ***************************************************************
write by 杨小宾
******************************************************************/

//后台审核
Route::get('adminmember', 'YxbAdminController@adminmember'); // 杨小宾
Route::get('adminmemberdetail/{id}', 'YxbAdminController@adminmemberdetail'); // 杨小宾
Route::get('/memberyes/{id}', 'YxbAdminController@memberyes'); // 杨小宾
Route::get('/memberno/{id}', 'YxbAdminController@memberno'); // 杨小宾

//登陆模块
Route::get('/login',['as'=>"login",'uses'=>"YXBController@login"]);
Route::get('/getlogin',['as'=>"getlogin",'uses'=>"YXBController@loginstore"]);

//注册模块
Route::get('/register',['as'=>"register",'uses'=>"YXBController@register"]);
Route::post('/register',['as'=>"register",'uses'=>"YXBController@registerstore"]);

//我的
Route::get('/mine', ['as' => "mine", 'uses' => "YXBController@mine"]);
/************************************************************************************
write by 杨小宾
**************************************************************************************/
Route::group(['prefix'=>'','middleware'=>'HomeLoginCheck'],function () {
//修改信息
    Route::get('/editinfo', ['as' => "editinfo", 'uses' => "YXBController@editinfo"]);
    Route::post('/editinfo', ['as' => "editinfo", 'uses' => "YXBController@editinfostore"]);
//个人中心
    Route::get('/myspace/{id}', ['as' => "mycpace", 'uses' => "YXBController@myspace"]);
//我的积分
    Route::get('/mymoney', ['as' => "mymoney", 'uses' => "YXBController@mymoney"]);
//我的记录
    Route::get('/myrecord', ['as' => "myrecord", 'uses' => "YXBController@myrecord"]);
//我的消息
    Route::get('/mynew', ['as' => "mynew", 'uses' => "YXBController@mynew"]);
//积分规则
    Route::get('/monyrule', ['as' => "monyrule", 'uses' => "YXBController@moneyrule"]);
//积分馆兑换记录
    Route::get('/monyrecord', ['as' => "monyrecord", 'uses' => "YXBController@monyrecord"]);
//登出
    Route::get('/logout', ['as' => "logout", 'uses' => "YXBController@logout"]);
//    状态改变
    Route::get('/change/{id}', ['as' => "change", 'uses' => "YXBController@change"]);

});
/**********************************************************************************************************************/
