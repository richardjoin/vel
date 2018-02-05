<?php

namespace App\Http\Controllers\admins\atms;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class atmController extends Controller
{
	// 显示管理广告位页面
	public function atm()
	{
		return view('admins/atms/atm');
	}
	
	// 显示添加广告页面
	public function atmadd()
	{
		return view('admins/atms/atmadd');
	}
}
