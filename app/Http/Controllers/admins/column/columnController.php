<?php

namespace App\Http\Controllers\admins\column;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class columnController extends Controller
{
    public function index()
    {
        return view('admins/column/index');
    }

    
    public function dologin()
    {
        return view('admins/index');
    }

}
