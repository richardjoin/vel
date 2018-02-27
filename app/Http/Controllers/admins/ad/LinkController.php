<?php

namespace App\Http\Controllers\admins\ad;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\model\ad;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index() //显示友情链接列表
    {
        $data =ad::find(1)->get();
        dd($data);
        return view('admins/atms/atm', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins/atms/atmadd');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//添加友情链接入库
    {
        //判断添加是否成功
         $this->validate($request,[
            'ad_name'=>'required|between:2,255',
            'ad_url'=>'required|between:2,255',
        ],[
            'required'=>':attribute 必须填写！',
            'between'=>':attribute 必须在2~255个字符之间！',
            'ad_name.between'=>'友情链接名称必须在2~50个字符之间！',
        ]);
        $input=Input::except('_token');
        if(ad::create($input))
        return redirect('admin/link');
        return back()->with('errors','友情链接添加失败！');
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
    public function edit($id)//编辑一条友情链接
    {
        $row = ad::find($id);
        //显示修改页面
        return view('admins/link/edit',['row'=>$row]);

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

        $this->validate($request,[
            'ad_name'=>'required|between:2,255',
            'ad_url'=>'required|between:2,255',
        ],[
            'required'=>':attribute 必须填写！',
            'between'=>':attribute 必须在2~255个字符之间！',
            'ad_name.between'=>'友情链接名称必须在2~50个字符之间！',
        ]);
        $input=Input::except('_token','_method');
        $row = ad::find($id);
        if($input && $row) {
            $row->ad_name=$input['ad_name'];
            $row->ad_url=$input['ad_url'];
            if(isset($input['ad_description'])) $row->ad_description=$input['ad_description'];
            if(isset($input['ad_order'])) $row->ad_order=$input['ad_order'];

            if($row->update())
            return redirect('admin/link');
            return back()->with('errors','友情链接修改失败，稍后再试！');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   //  public function destroy($id) //删除一条友情链接
   //  {

   //      $del = ad::where('ad_id',$id)->delete();
   //      if($del)
   //      return ['flag'=>0,'msg'=>'数据删除成功！'];
   //      return ['flag'=>1,'msg'=>'数据删除失败！'];  

   //  }

   // public function order(){
   //      if($input=Input::all()) {
   //      $link = ad::find($input['ad_id']);
   //      $link->ad_order = $input['ad_order'];
   //      if($link->update())
   //       return ['flag'=>0,'msg'=>'数据更新成功！'];
   //       return ['flag'=>1,'msg'=>'数据更新失败！'];
   //      }
 }

}
