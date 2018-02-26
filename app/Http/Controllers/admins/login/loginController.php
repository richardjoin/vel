<?php

namespace App\Http\Controllers\admins\login;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\model\login;

use Gregwar\Captcha\CaptchaBuilder;
use Session;

class loginController extends Controller
{
    public function index()
    {
        return view('admins/login/login');
    }

    //验证码
    public function code()
    {
    	$builder = new CaptchaBuilder;
    	$builder->build();
    	session(['code' => $builder->getPhrase()]);
    	header('Content-type: image/jpeg');
    	$builder->output();
    }

    //登录验证
    public function store(Request $request)
    {
        $res = input::all();
        //dd($res);
        //判断验证码是否正确
        if(session('code')!==$res['code']){
        	return view('admins/login/login')->with('msg','验证码错误！');
        }

        //判断name是否正确
        $login = login::where('name',$res['name'])->first();
        session(['id'=>$login->id]);
        //dd($login->password);
        if($login->name == $res['name'] && $login->password == $res['pwd']){

        	return redirect('admin/user');
        }
        return redirect('admin/login');
    }
}
