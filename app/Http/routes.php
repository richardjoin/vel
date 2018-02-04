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
Route::resource('/admin/auth', 'admins\auth\authController@auth');
// 添加权限 与 修改权限 页面
Route::resource('/admin/authx', 'admins\auth\authController@authx');


// 广告管理
Route::resource('/admin/atm', 'admins\atms\atmController@atm');
// 添加广告页面
Route::resource('/admin/atmadd', 'admins\atms\atmController@atmadd');

//==================================================================


