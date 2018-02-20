<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Gregwar\Captcha\CaptchaBuilder;
use App\model\login;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //显示视图
        return view('homes/login/index');
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
            return view('homes/login/index')->with('msg','验证码错误！');
        }

        //判断name是否正确
        $login = login::where('name',$res['name'])->first();
        session(['id'=>$login->id]);
        //dd($login->password);
        if($login->name == $res['name'] && $login->password == $res['pwd']){

            return redirect('/');
        }
        return redirect('/login');
    }

    //注册
    public function zhuce()
    {
        return view('homes/login/register');
    }

    //忘记密码
    public function pass()
    {
        return view('homes/login/password');
    }
    
}
