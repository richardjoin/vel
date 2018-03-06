<?php

namespace App\Http\Controllers\admins\article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\article;
use App\model\article_sort;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = article::all();
        return view('admins/article/article',['res'=>$res]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = article_sort::all();
        $arr = article::where('sort_article_id',$id)->first();
        //$arr = article::where('sort_article_id',$id)->article_sort()->value('sort_article_name');
        return view('admins/article/articleedit',compact('res','arr'));
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
        $arr = article::where('article_id',$id)->update($res);
        //dd($arr);
        if($arr){
            return redirect('admin/article');
        }else{
            return back()->with('error',"修改失败！！！！！！");
        }
    }
    
}
