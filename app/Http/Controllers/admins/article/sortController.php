<?php

namespace App\Http\Controllers\admins\article;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\article;

class sortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins/article/sort');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins/article/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    public function upload(Request $request)
    {
        $file = $request->file('file_upload'); // 图片缓存路径
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
        //显示修改页面
        return view('admins/article/edit');
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
        //判断是否修改成功
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
    }
}
