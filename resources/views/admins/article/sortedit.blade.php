@extends('admins/layout/layout')
@section('content')

        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Amaze UI 表单
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">表单</a></li>
                <li class="am-active">Amaze UI 表单</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 表单
                    </div>
                </div>
                <div class="tpl-block ">
                    <div class="am-g tpl-amazeui-form">
                        <div class="am-u-sm-12 am-u-md-9">
                            <form action='{{ url("admin/sort/update/".$row->article_id) }}' method="post" class="am-form am-form-horizontal" id="art_form">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="put">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">文章标题</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="article_name" id="user-name" value="{{ $row->article_name }}" placeholder="请输入文章标题">
                                        <small>输入你的文章标题！</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">文章作者</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="article_user" value="{{ $row->article_user }}" id="user-name" placeholder="文章作者">
                                    </div>
                                </div>
    
                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">所属分类</label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{btnSize: 'sm'}" name="sort_article_id">
                                                <option value="选择分类">选择分类</option>
                                                @foreach($res as $v)
                                                    <option value="{{$v->sort_article_id}}">{{$v->sort_article_name}}  </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">上传图片</label>
                                    <div class="am-u-sm-9">
                                        <input type="hidden" name="article_thumb" id="art_thumb"  value="{{old('article_thumb')}}" >
                                        <input type="file" style="position: absolute;width: 300px;height: 250px;opacity: 0;" name="file_upload" id="file_upload" value="">
                                        
                                        <p><img style="width: 300px;height: 250px;" src="http://os4vho7yf.bkt.clouddn.com/photo/{{ $row->article_thumb }}" alt="" id="img1" style="width:100px" onerror="{{ asset('/1.jpg') }}" >
                                        </p>
                                        </p>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">简介 / Intro</label>
                                    <div class="am-u-sm-9">
                                         <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.config.js')}}"></script>
                        <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/ueditor.all.min.js')}}"> </script>
                        <script type="text/javascript" charset="utf-8" src="{{asset('ueditor/lang/zh-cn/zh-cn.js')}}"></script>

                        <script id="editor" type="text/plain" name="article_content" style="width:860px;height:500px;">
                            
                        </script>

                        <script>
                            var ue = UE.getEditor('editor');

                        </script>
                        <style>
                            .edui-default{line-height: 28px;}
                            div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                            {overflow: hidden; height:20px;}
                            div.edui-box{overflow: hidden; height:22px;}
                        </style>
                        <small>250字以内写出你的一生...</small>
                                    </div>
                                </div>
                                
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/admins/js/jquery.min.js"></script>
    <script src="/admins/js/amazeui.min.js"></script>
    <script src="/admins/js/app.js"></script>
    <script src="/layer/layer.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        $("#file_upload").change(function (){ 
            uploadImage();
        });
       
        function uploadImage() {
            //    判断是否有选择上传文件
            //    input type file
            var imgPath = $("#file_upload").val();
            if (imgPath == "") {
                alert("请选择上传图片！");
                return;
            }
            //判断上传文件的后缀名
            var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
            if (strExtension != 'jpg' && strExtension != 'gif'
                && strExtension != 'png' && strExtension != 'bmp') {
                alert("请选择图片文件");
                return;
            }
            var formdata = new FormData();
            formdata.append('file', $("#file_upload")[0].files[0]);
            console.log(formdata);
            $.ajax({
                type: "post",
                url: "{{ url('admin/sort/upload') }}",
                data: formdata,
                async: true,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                      // 菊花转转图
                      // $('#img1').attr('src', 'http://img.lanrentuku.com/img/allimg/1212/5-121204193R0-50.gif');
                      //
                       a = layer.load();
                  },
                success: function(data) {
                    layer.close(a);
                    $('#img1').attr('src', "http://os4vho7yf.bkt.clouddn.com/photo/" + data + "?imageView2/0/w/500");

                  $('#art_thumb').val(data);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("上传失败，请检查网络后重试");
                    layer.close(a);
                    $('#img1').attr('src','http://xxxx.com/1.jpg');
                }
            });
        }
    </script>
</body>

</html>
@endsection