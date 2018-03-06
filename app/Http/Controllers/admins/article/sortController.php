<?php

namespace App\Http\Controllers\admins\article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\article;
use App\model\article_sort;

class sortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr = article::all();
        $res = article_sort::all();
        return view('admins/article/sort',compact('res','arr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加页面
        $res = article_sort::all();
        return view('admins/article/sortadd',['res'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //添加数据
        $arr = $request->except('_token','file_upload');

        //添加时间
        $time = date('Y年m月d日');
        
        $time = array('article_time' => $time);
        
        $arr = array_merge($arr,$time);
        //dd($arr);
        $res = article::create($arr);
        //把添加的变成array
        $res = $res->toArray();
        if($res){
            return redirect('admin/sort');
        }else{
            return back()->with('error',"修改失败！！！！！！");
        }
    }
    //photo/c6c0b68e0ef39a8d37cda42051acc4aa.jpg
    public function upload(Request $request)
    {
        $file = $request->file('file'); // 图片缓存路径
        //dd($file);
        // 获取文件路径
        $transverse_pic = $file->getRealPath();
        $contents = file_get_contents($transverse_pic);
        //初始化
        $disk = \Storage::disk('qiniu');

        // 获取后缀名
        $postfix = $file->getClientOriginalExtension();
        $fileName = md5(time().rand(1000,9999)).'.'.$postfix;

        //上传到qiniu
        $bool = $disk->put('photo/'.$fileName,$contents);

        return $fileName;
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
        $row = article::where('article_id',$id)->first();
        $res = article_sort::all();
        return view('admins/article/sortedit',compact('res','row'));
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
       
        
        //判断是否修改成功
        if($arr){
            return redirect('admin/sort');
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
        //删除

        $res = article::where('article_id',$id)->delete();
        
        return $res;
    }
}
