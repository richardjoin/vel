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

//登录
Route::resource('/admin/login', 'admins\login\loginController');
//验证码
Route::get('/admin/code', 'admins\login\loginController@code');

Route::group(['prefix' => 'admin', 'middleware'=>'logins'], function(){

	//首页

	Route::get('/', 'admins\indexController@index');
	//用户管理
	Route::resource('/user', 'admins\user\indexController');

	//栏目管理
	Route::resource('/column', 'admins\column\columnController');

	//文章管理
	//文章分类
	Route::resource('/article', 'admins\article\articleController');
	//管理文章
	Route::resource('/sort', 'admins\article\sortController');
	Route::post('/sort/store', 'admins\article\sortController@store');
	Route::post('/sort/upload', 'admins\article\sortController@upload');

	// 点击显示添加用户表单页面
	Route::resource('/amaze', 'admins\amazeController@amaze');

	// 点击显示添加文章表单页面
	Route::resource('/line', 'admins\lineController@line');


	// 权限管理主页面
	Route::resource('/auth', 'admins\auth\authController');
	// 添加权限 与 修改权限 页面


	// 广告管理
	Route::resource('/atm', 'admins\atms\atmController');
});
//==================================================================


//前台(首页)
Route::get('/','home\IndexController@index');
//前台(登录页面)
Route::get('/login','home\LoginController@index');
//验证登录
Route::resource('/login/ldl','home\LoginController@ldl');
//退出
Route::resource('/login/halt','home\LoginController@halt');
//注册
Route::resource('/login/register','home\LoginController@create');
//注册验证
Route::resource('/login/store', 'home\LoginController@store');
//手机短信验证
Route::resource('/login/yanzheng', 'home\LoginController@yanzheng');
//修改密码
Route::resource('/login/password','home\LoginController@pass');
//验证码
Route::get('/login/code', 'home\LoginController@code');

//个人中心
Route::resource('/center','home\CenterController@index');
//修改
Route::resource('/center/edit','home\CenterController@edit');
//修改
Route::resource('/center/update','home\CenterController@update');
//上传图像
Route::resource('/center/upload','home\CenterController@upload');
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

