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





// 点击显示AmazeUI表单页面
Route::resource('/amaze', 'admin\amazeController@amaze');

// 点击显示线条表单页面
Route::resource('/line', 'admin\lineController@line');

// 跳转后台登陆页面
Route::resource('/login', 'admin\loginController@login')