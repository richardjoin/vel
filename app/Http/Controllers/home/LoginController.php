<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

//短信
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;

use Gregwar\Captcha\CaptchaBuilder;
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
        $user = user::where('name',$res['name'])->first();
        session(['id'=>$user->id]);
        var_dump($user);
        if($user->name == $res['name'] && $user->pwd == $res['pwd']){
            session(['homeFlag' => true ]);
            session(['homeUserInfo' => $user->name ]);
            return redirect('/');
        }
        return redirect('/login');
    }

    //退出
    public function halt()
    {
        session(['homeFlag' => false ]);
        return redirect('/');
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
        if(session('phone')!==$arr['code']){
            return view('homes/login/register')->with('msg','验证码错误！');
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
            return view('homes/login/index');
        }
    }
    //短信验证
    public function yanzheng(Request $request)
    {
        $phone = $request->input('phone');
        //return $phone;
        //短信验证
        $config = [
            'accessKeyId'    => env('accessKeyId'),
            'accessKeySecret' => env('accessKeySecret'),
        ];

        $client  = new Client($config);
        $sendSms = new SendSms;
        
        
        $sendSms->setPhoneNumbers($phone);
        $sendSms->setSignName('最博客');
        $sendSms->setTemplateCode('SMS_123738445');

        $rand = rand(100000, 999999);
        $sendSms->setTemplateParam(['code' => $rand]);
        session(['phone' => $rand]);
        //$sendSms->setOutId('demo');

        print_r($client->execute($sendSms));
    }

    //忘记密码
    public function edit($id)
    {
        $res = user::where('id',$id)->first();
        dd($res);
        return view('homes/login/password',['res'=>$res]);
    }
    
}
