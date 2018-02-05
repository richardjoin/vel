<?php

namespace App\Http\Controllers\admins\auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class authController extends Controller
{
	// 权限管理主页面
	public function auth()
	{
		return view('admins/auths/auth');
	}
	
	// 添加权限页面
	public function authx()
	{
		return view('admins/auths/authx');
	}

}
