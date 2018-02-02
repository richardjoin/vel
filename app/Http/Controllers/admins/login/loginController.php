<?php

namespace App\Http\Controllers\admins\login;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    public function index()
    {
        return view('admins/login/login');
    }

    
    public function dologin()
    {
        return view('admins/index');
    }

}
