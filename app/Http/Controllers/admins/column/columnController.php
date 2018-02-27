<?php

namespace App\Http\Controllers\admins\column;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\article_sort;

class columnController extends Controller
{
    public function index()//显示导航列表
    {
        $data = article_sort::OrderBy('sort_article_name','asc')->paginate(10);
        //$data = article_sort::find(1)->get();
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
    public function store(Request $request)//添加导航
    {
        $arr = $request->except('_token');
        //dd($arr);
        $res = article_sort::create($arr);
        //dd($res);
        $res = $res->toArray();
        if($res){
            return redirect('admin/column');
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
    public function edit($id)//编辑一条导航
    {
        //显示修改页面
        $row = article_sort::where('sort_article_id',$id)->first();
        return view('admins/column/edit',['row'=>$row]);
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
        $arr = article_sort::where('sort_article_id',$id)->update($res);
        //dd($arr);
       
        
        //判断是否修改成功
        if($arr){
            return redirect('admin/column');
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
    public function destroy($id)//删除
    {
        //dd($id);
        $res = article_sort::where('sort_article_id',$id)->delete();
        
        return $res;
    }

}
