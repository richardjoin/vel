<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\model\user;
use App\model\user_mark;
use App\model\article;
use session;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = user::where('id',session('id'))->first();
        $arr = user_mark::where('user_id',session('id'))->first();
        $roe = article::where('user_id',session('id'))->get();
        $row = count($roe);
        // $arr = user::find(session('id'))->user_mark()->value('user_mark');
        //dd($arr['user_mark']);
        return view('homes/center/index',compact('res','arr','row'));
    }

    public function upload(Request $request)
    {
        $file = $request->file('file_upload'); // 图片缓存路径
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $res = user::where('id',session('id'))->first();
        return view('homes/center/edit',['res'=>$res]);
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
        if($arr){
            return redirect('center');
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
        //
    }
}
