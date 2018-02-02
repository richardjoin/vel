<?php

namespace App\Http\Controllers\homes\login;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homes/login/login');
    }

	public function dologin(Request $request)
    {
        return view('homes/index');
    }
}