<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="名榜" http-equiv="keywords">
<meta name="description" content="名榜,wangid">
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<title>找回密码</title>
<!-- css -->
<link rel="stylesheet" type="text/css" href="/home/login/css/index.css">
<!-- home/login/js/ -->
<script type="text/javascript" src="/home/login/js//jquery.home/login/js/"></script>
<script type="text/javascript" src="/home/login/js//public.home/login/js/"></script>

</head>

<body>
	<div class="top_box">
		<div class="wid_con">
			<div class="top_con">
				<!-- <div class="top_logo">
					<a href="http://www.wangid.com">
						<img src="images/logo_touming.gif">
					</a>
					<span>找回密码/Password</span>
				</div>
				<div class="top_menu">
					<ul>
						<li><a href="#">新 闻</a></li>
						<li class="cur"><a href="#">网 页</a></li>
						<li><a href="#">网 酷</a></li>
						<li><a href="#">名 榜</a></li>
						<li><a href="#">黄 页</a></li>
						<li><a href="#">通 城</a></li>
					</ul>
					<i></i>
				</div> -->
			</div>
		</div>
	</div>
	<div class="content">
		<div class="wid_con loginbox">
			<div class="password_con">
				<div class="text_box">
					<div>
						<div><i><img src="/home/login/images/icon01.png"></i><input type="text" placeholder="请输入用户名">
							<span>*</span>
						</div>
						<div class="yzm">
							<i><img src="/home/login/images/icon03.png"></i><input type="text" placeholder="请输入验证码">
							<label><img src="/home/login/images/yzm.png"></label><span>*</span>
						</div>
						<button><a href="{{ url('/login') }}">提 交</a></button>
					</div>
				</div>
			</div>
			<div class="password_txt">
				<div>
					<h1>温馨提示</h1>
					<p>提交找回密码后, 我们会将您的密码发送至您注册时所填写的邮箱，请您注意查看</p>
				</div>
				<h2>若想起密码，请点此<a href="{{ url('/login') }}">登录</a></h2>
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