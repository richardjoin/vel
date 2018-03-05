@extends('/homes/sy/layout')
@section('content')
      <div class="bj"></div>
      <div id="main-wrap" class="content page dashboard space centralnav">
      	<div id="author-page" style="margin-top: 60px;" class="primary bd clx" role="main">
      		<div class="aside">
    <div class="user-avatar">
    	<form action='{{ url("center/upload") }}' method="post" class="am-form am-form-horizontal" id="art_form">
{{ csrf_field() }}
        <a href="#"><input type="file" style="position: absolute;left:70px;width: 100px;height: 100px;opacity: 0;" name="file_upload" id="file_upload" value="" >
            <img src="{{ asset('/1.jpg')}}" class="avatar avatar-200" height="200" width="200" id="img1"></a>
        </form>
        <h3>{{ $res['name'] }}</h3>
        <div id="num-info">
            
            <div>
                <span class="num">0</span><span class="text">关注</span>
            </div>
            <div>
                <span class="num">0</span><span class="text">粉丝</span>
            </div>
            <div>
                <span class="num">{{ $arr['user_mark'] }}</span><span class="text">积分</span>
            </div>
            
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="menus">
        <ul style="margin-top: 30px;font-size: 16px;line-height: 35px;">

            
            <li>
            	<span style="margin-left: -20px;">联系方式：{{ $res['phone'] }}</span>
            </li>
            <li class="tab-post ">
            	<span>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：{{ ($res['sex']=='m')?'男':'女' }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </li>
            <li>
            	<span>年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;龄：{{ $res['age'] }}&nbsp;&nbsp;岁</span>
            </li>
            <li>
            	<span>邮箱：{{ $res['email'] }}</span>
            </li>
        </ul>
    </div>
</div>


      		<div class="area">
      			<div class="page-wrapper">
      				<div class="dashboard-main">
  
<div class="dashboard-header">
	<p class="sub-title">
		用户中心
	</p>
	
</div>
<div class="dashboard-wrapper select-index">
	<div class="briefly">
		<ul>
			
			<li class="post">
			<div class="visual">
				<i class="fa fa-tasks"></i>
			</div>
			<div class="number">
				{{ $row }}<span>文章作品</span>
			</div>
			<div class="more">
				<a href="http://bbs.hyphp.cn/u/vknjhecxa5gd/thread.html">查看更多<i class="fa fa-arrow-circle-right"></i></a>
			</div>
			</li>
			<li class="photo">
			<div class="visual">
				<i class="fa fa-heart"></i>
			</div>
			<div class="number">
				0<span>我的收藏</span>
			</div>
			<div class="more">
				<a href="http://bbs.hyphp.cn/u/vknjhecxa5gd/thread.html">查看更多<i class="fa fa-arrow-circle-right"></i></a>
			</div>
			</li>
			<li class="credit">
			<div class="visual">
				<i class="fa fa-money"></i>
			</div>
			<div class="number">
				0<span>我的金钱</span>
			</div>
			<div class="more">
				<a href="http://bbs.hyphp.cn/u/vknjhecxa5gd/thread.html">查看更多<i class="fa fa-arrow-circle-right"></i></a>
			</div>
			</li>
			<li class="comments">
			<div class="visual">
				<i class="fa fa-comments"></i>
			</div>
			<div class="number">
				0<span>评论留言</span>
			</div>
			<div class="more">
				<a href="http://bbs.hyphp.cn/u/vknjhecxa5gd/post.html">查看更多<i class="fa fa-arrow-circle-right"></i></a>
			</div>
			</li>
			
		</ul>
	</div>
	
	
	
	<div class="fast-navigation">
		<div class="nav-title">
			快捷菜单		</div>
		<ul>
			<li>
			<a href="http://bbs.hyphp.cn/post.html">
			<i class="fa fa-pencil-square-o"></i>发布文章</a></li>

						<li><a href="http://bbs.hyphp.cn/u/vknjhecxa5gd/file.html"><i class="fa fa-file-o"></i>我的文件</a></li>
			<li><a href="{{ url('center/edit/'.$res->id.'/edit') }}"><i class="fa fa-cog"></i>修改资料</a></li>	
		</ul>
	</div>
	
</div>
</div>
</div>
</div>
</div>
</div>

	<script src="/admins/js/jquery.min.js"></script>
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
            var formData = new FormData($( "#art_form" )[0]);
            //console.log(formData);
            $.ajax({
                type: "post",
                url: "{{ url('/center/upload') }}",
                data: formData,
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
@endsection

