<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class lineController extends Controller
{
	public function line()
	{
		return view('admins/line');
	}
}
