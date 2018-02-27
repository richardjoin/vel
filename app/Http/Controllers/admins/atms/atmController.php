<?php

namespace App\Http\Controllers\admins\atms;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\model\ad;

class atmController extends Controller
{
	// 显示管理广告位页面
	public function index()
	{
		$data = ad::OrderBy('ad_name','asc')->paginate(10);
        // dd($data);
		return view('admins/atms/atm',['data'=>$data]);
	}
	                                  
	// 显示添加广告页面
	public function create()
	{
		return view('admins/atms/atmadd');
	}

	public function store(Request $request)//添加友情链接入库                                                          
    {
        $arr = $request->except('_token');
        //dd($arr);
        $res = ad::create($arr);
        // 把添加的变成array
        $res = $res->toArray();
        dd($res);
        if($res){
            return redirect('admin/atm');
        }else{
            return view('admins/atms/atmadd');
        }
    }


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
    public function edit($id)//编辑一条友情链接
    {
        $row = ad::where('ad_id',$id)->first();  
        //显示修改页面
        return view('admins/atms/atmedit',['row'=>$row]);
    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//编辑一条友情链接入库
    {   
         // dd($request->input());
        //修改数据
        $res = $request->except('_method','_token');
        $arr = ad::where('ad_id',$id)->update($res);
        //dd($arr);
        if($arr){
            return redirect('admins/atm');
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

    public function destroy($id) //删除一条友情链接
    {

        $del = ad::where('ad_id',$id)->delete();
        if($del)
        return ['flag'=>0,'msg'=>'数据删除成功！'];
        return ['flag'=>1,'msg'=>'数据删除失败！'];  

    }

   public function order(){
        if($input=Input::all()) {
        $link = ad::find($input['ad_id']);
        $link->ad_order = $input['ad_order'];
        if($link->update())
         return ['flag'=>0,'msg'=>'数据更新成功！'];
         return ['flag'=>1,'msg'=>'数据更新失败！'];
        }
 	}
}
