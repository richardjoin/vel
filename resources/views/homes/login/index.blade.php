<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="名榜" http-equiv="keywords">
<meta name="description" content="名榜,wangid">
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<title>登录</title>
<!-- css -->
<link rel="stylesheet" type="text/css" href="/home/login/css/index.css">
<link href="/home/login/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
<!-- js -->
<script type="text/javascript" src="/home/login/js/jquery.js"></script>
<script type="text/javascript" src="/home/login/js/public.js"></script>
<script type="text/javascript" language="javascript" src="/home/login/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" language="javascript" src="/home/login/js/jquery.skitter.min.js"></script>
<script src="/admins/js/amazeui.min.js"></script>
<!-- Init Skitter -->
<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		$('.box_skitter_large').skitter({
			theme: 'clean',
			numbers_align: 'center',
			progressbar: false, 
			dots: true, 
			preview: true,
			stop_over:false,
		});
	});
</script>

</head>

<body>
	<div class="top_box">
		<div class="wid_con">
			<div class="top_con">
<!-- 				<div class="top_logo">
					<a href="http://www.wangid.com">
						<img src="images/logoo.png">
					</a>
					<span>登录/Login</span>
				</div> -->
			</div>
		</div>
	</div>
	<div class="content">
		<div class="wid_con loginbox">
			<div class="border_box">
				<div class="box_skitter box_skitter_large">
					<ul>
						<li><img src="/home/login/images/1.jpg" class="cube" /></li>
						<li><img src="/home/login/images/2.jpg" class="cubeRandom" /></li>
						<li><img src="/home/login/images/3.jpg" class="cubeStop" /></li>
					</ul>
				</div>
			</div>
			<div class="login_con">
				<h1>登录</h1>
				<div class="text_box">
						<form action="{{ url('login/ldl') }}" method="post" style="padding-top:50px">
							{{ csrf_field() }}
							<div style="margin-left: 30px;">
								<input type="text" style="border-radius: 5px;height:35px;width: 280px;" name="name" id="doc-ipt-email-1" placeholder="输入用户名">
							</div><br>
							<div style="margin-left: 30px;">
								<input style="border-radius: 5px;height:35px;width: 280px;" type="password" name="pwd" placeholder="请输入密码"></div><br>
							<div style="margin-left: 30px;">
								<input type="text" style="border-radius: 5px;height:35px;margin-bottom: 20px;float: left;width:125px;" name="code" placeholder="请输入验证码">
								<img style="float: right;width: 130px;margin-right: 30px;" src="{{url('admin/code')}}">
							</div>
							
							<button style="margin-left:25px;" type="submit" class="am-btn am-btn-default">登录</button>
						</form>
						<h3>
								<!-- <a style="margin-left: 25px;" href="{{ url('login/password') }}">忘记密码？</a> -->
								<a style="margin-right: 25px;" href="{{ url('login/register') }}">没有帐号？免费注册！</a>
							</h3>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>