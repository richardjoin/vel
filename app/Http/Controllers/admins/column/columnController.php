<?php

namespace App\Http\Controllers\admins\column;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\article_sort;

class columnController extends Controller
{
    public function index()//显示导航列表
    {
        $data = article_sort::OrderBy('sort_article_name','asc')->paginate(10);
        return view('admins/column/index',['data'=>$data]);
    }

    
    public function create()//显示添加导航页
    {
        //显示添加页面
        return view('admins/column/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//添加导航入库
    {
       $this->validate($request,[
            'nav_name'=>'required|between:2,255',
            'nav_url'=>'required|between:1,255',
        ],[
            'required'=>':attribute 必须填写！',
            'between'=>':attribute 必须在2~255个字符之间！',
            'nav_name.between'=>'导航名称必须在2~50个字符之间！',
            'nav_url.between'=>'导航名称必须在1~255个字符之间！',
        ]);
        $input=Input::except('_token');
        if(Nav::create($input))
        return redirect('admin/nav');
        return back()->with('errors','导航添加失败！');
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
    public function edit($id)//编辑一条导航
    {
        //显示修改页面
        $row = Nav::find($id);
        return view('admins/column/edit',['row'=>$row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//编辑一条导航入库
    {
        //判断是否修改成功
       $this->validate($request,[
            'nav_name'=>'required|between:2,255',
            'nav_url'=>'required|between:1,255',
        ],[
            'required'=>':attribute 必须填写！',
            'between'=>':attribute 必须在2~255个字符之间！',
            'nav_name.between'=>'导航名称必须在2~50个字符之间！',
            'nav_url.between'=>'导航名称必须在1~255个字符之间！',
        ]);
        $input=Input::except('_token','_method');
        $row = Nav::find($id);
        if($input && $row) {
            $row->nav_name=$input['nav_name'];
            $row->nav_word=$input['nav_word'];
            $row->nav_url=$input['nav_url'];
            if(isset($input['nav_description'])) $row->nav_description=$input['nav_description'];
            if(isset($input['nav_order'])) $row->nav_order=$input['nav_order'];

            if($row->update())
            return redirect('admin/nav');
            return back()->with('errors','导航修改失败，稍后再试！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//删除一条导航
    {
        //删除
        $del = Nav::where('nav_id',$id)->delete();
        if($del)
        return ['flag'=>0,'msg'=>'数据删除成功！'];
        return ['flag'=>1,'msg'=>'数据删除失败！']; 
    }

    public function order(){
        if($input=Input::all()) {
        $nav = Nav::find($input['nav_id']);
        $nav->nav_order = $input['nav_order'];
        if($nav->update())
         return ['flag'=>0,'msg'=>'数据更新成功！'];
         return ['flag'=>1,'msg'=>'数据更新失败！'];
        }
    }

}
