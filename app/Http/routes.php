<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//后台
//首页
Route::get('/admin', 'admins\indexController@index');

//登录
Route::get('/admin/login', 'admins\login\loginController@index');
Route::post('/admin/dologin', 'admins\loginController@dologin');

//用户管理
Route::resource('/admin/user', 'admins\user\indexController');


// 点击显示AmazeUI表单页面
Route::resource('/admin/amaze', 'admins\amazeController@amaze');

// 点击显示线条表单页面
Route::resource('/admin/line', 'admins\lineController@line');



//==================================================================


