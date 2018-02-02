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

//文章管理
Route::resource('/admin/article', 'admins\article\articleController');

// 点击显示添加用户表单页面
Route::resource('/admin/amaze', 'admins\amazeController@amaze');

// 点击显示添加文章表单页面
Route::resource('/admin/line', 'admins\lineController@line');


// 权限管理主页面
Route::resource('/admin/auth', 'admins\authController@auth');
// 添加权限 与 修改权限 页面
Route::resource('/admin/authx', 'admins\authController@authx');



//==================================================================


//前台(首页)
Route::get('/','home\IndexController@index');
//前台(登录)
Route::get('/login','home\LoginController@index');
Route::get('/login/register','home\LoginController@create');
Route::get('/login/password','home\LoginController@pass');
//前台(关于我)
Route::get('/about','home\AboutController@index');
//前台(成长)
Route::get('/article','home\ArticleController@index');
//前台(成长文章详情)
Route::get('/article/detail','home\ArticleController@xs');
//前台(学习)
Route::get('/study','home\StudyController@index');
Route::get('/study/study','home\StudyController@xs');
//前台(娱乐)
Route::get('/play','home\PlayController@index');
Route::get('/play/list','home\PlayController@xs');
//前台(说说)
Route::get('/shuoshuo','home\ShuoController@index');
//前台(留言板)
Route::get('/liuyan','home\LiuyanController@index');
