<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class amazeController extends Controller
{
	public function amaze()
	{
		return view('admins/amaze');
	}
}
