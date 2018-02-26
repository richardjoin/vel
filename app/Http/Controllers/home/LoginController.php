<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Gregwar\Captcha\CaptchaBuilder;
use App\model\login;
use App\model\user;
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
    public function ldl(Request $request)
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
    public function create()
    {
        return view('homes/login/register');
    }
    //注册验证
    public function store(Request $request)
    {
        $arr = $request->except('_token');
        //dd($arr);
        //判断验证码是否正确
        if(session('code')!==$res['code']){
            return view('homes/login/index')->with('msg','验证码错误！');
        }
        //判断两次密码是否输入正确
        if($arr['pwd']!==$arr['password']){
            return redirect('login/register');
        }
        $res = user::create($arr);
        //把添加的变成array
        $res = $res->toArray();
        //dd($res);
        if($res){
            return redirect('login');
        }else{
            return back()->with('xxx');
        }
    }

    //忘记密码
    public function pass()
    {
        return view('homes/login/password');
    }
    
}
