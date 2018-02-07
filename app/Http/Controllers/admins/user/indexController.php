<?php

namespace App\Http\Controllers\admins\user;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\user;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //一张表格的数据
        //$res = user::all();
        //1对1
        //$res = user::find(1)->user_login()->value('login_name');
        $res = user::find(1)->get();
        //var_dump($res);
        return view('admins/user/index',['res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加页面
        return view('admins/user/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = $request->except('_token');
        //dd($arr);
        $res = user::create($arr);
        //把添加的变成array
        $res = $res->toArray();
        //dd($res);
        if($res){
            return redirect('admin/user');
        }else{
            return back()->with('xxx');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = user::where('id',$id)->first();
        //var_dump($res);
        return view('admins/user/edit',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //修改数据
        $res = $request->except('_method','_token');
        $arr = user::where('id',$id)->update($res);
        //dd($arr);
        if($res){
            return redirect('admin/user');
        }else{
            return back()->with('error',"修改失败！！！！！！");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = user::where('id',$id)->delete();
        //dd($res);
        
        return $res;
       
    }
}
