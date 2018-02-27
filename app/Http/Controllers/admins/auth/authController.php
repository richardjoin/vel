<?php

namespace App\Http\Controllers\admins\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\user_rank;

class authController extends Controller
{
	// 权限管理主页面
	public function index()
	{
		$data = user_rank::all();
        // dd($data);
		return view('admins/auths/auth',['data'=>$data]);
	}
	
	// 添加权限页面
	public function create()
	{
		return view('admins/auths/authadd');
	}
	
	public function store(Request $request)//添加
    {
        $arr = $request->except('_token');
        //dd($arr);
        $res = user_rank::create($arr);
        //dd($res);
        $res = $res->toArray();
        if($res){
            return redirect('admin/auth');
        }else{
            return back()->with('xxx');
    	}
	}
	public function show($id)
    {
        //
    }
    public function edit($id)//编辑
    {
        //显示修改页面
        $row =user_rank::where('rank_id',$id)->first();
        return view('admins/auths/authedit',['row'=>$row]);
    }

    public function update(Request $request, $id)
    { 
        //修改数据
        $res = $request->except('_method','_token');
        $arr = user_rank::where('rank_id',$id)->update($res);
        //dd($arr);
       
        
        //判断是否修改成功
        if($arr){
            return redirect('admin/auth');
        }else{
            return view('admins/auth/authedit');
            //return back()->with('error',"修改失败！！！！！！");
        }
    }

    public function destroy($id)//删除
    {
        //dd($id);
        $res = user_rank::where('rank_id',$id)->delete();
        
        return $res;
    }

}
