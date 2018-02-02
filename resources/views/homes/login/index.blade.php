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
				<h1>登录/LOGIN</h1>
				<div class="text_box">
				
						<form action="{{ url('home/login') }}" method="post" style="padding-top:50px">
							{{ csrf_field() }}
							<div>用户名:<input type="text" placeholder="请输入用户名"></div>
							<div >密码:<input type="password" placeholder="请输入密码"></div>
							<div class="yzm">
								验证码:<input type="text" placeholder="请输入验证码">
								<label><img src="/home/login/images/yzm.png"></label>
							</div>
							<h3>
								<a href="{{ url('login/password') }}">忘记密码？</a>
								<a href="{{ url('login/register') }}">没有帐号？免费注册！</a>
							</h3>
							<button style="margin-left:25px;" ><a href="{{ url('/') }}">登 录</a></button>
						</form>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<div class="footer">
		<p>版权所有&nbsp;&nbsp;&nbsp;Copyright © 个人博客&nbsp;&nbsp;&nbsp;&nbsp;电话：400-6677-937</p>
		<p><a>京ICP备：14012449号</a>黔ICP证：黔B2-20140009号<span>京公网安备：11010602030054号</span></p>
	</div>
</body>
</html>