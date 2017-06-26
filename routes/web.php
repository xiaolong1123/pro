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

Route::get('/', function () {
    return view('welcome');
});


//网站后台路由配置
Route::get('/admin/login',"Admin\LoginController@login"); //加载后台登录界面
Route::post('/admin/dologin',"Admin\LoginController@doLogin"); //执行后台登录
Route::get('/admin/logout',"Admin\LoginController@logout"); //执行退出
Route::get('/admin/getcode',"Admin\LoginController@getCode"); //加载验证码
Route::get('/',"Admin\IndexController@index"); //后台首页路由
Route::get('/admin/li',"Admin\LiController@li"); //日历
Route::get('/admin/chart',"Admin\ChartController@chart"); //图标
//网站后台自定义路由组:
Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    
    
    Route::resource('stu', 'Admin\StuController'); //后台学员管理
    Route::resource('type', 'Admin\TypeController'); //后台类别管理
    Route::resource('goods', 'Admin\GoodsController'); //后台商品信息管理
    
    Route::resource('users', 'Admin\UsersController');//后台会员管理

    //Chart.js数据报表显示实例
    //Route::get('/chart',"Admin\ChartController@index");
});