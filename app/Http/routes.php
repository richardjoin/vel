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
Route::post('/admin/dologin', 'admins\login\loginController@dologin');

//用户管理
Route::resource('/admin/user', 'admins\user\indexController');

//栏目管理
Route::resource('/admin/column', 'admins\column\columnController');


// 点击显示添加用户表单页面
Route::resource('/admin/amaze', 'admins\amazeController@amaze');

// 点击显示添加文章表单页面
Route::resource('/admin/line', 'admins\lineController@line');


// 权限管理主页面
Route::resource('/admin/auth', 'admins\authController@auth');
// 添加权限 与 修改权限 页面
Route::resource('/admin/authx', 'admins\authController@authx');



//==================================================================


