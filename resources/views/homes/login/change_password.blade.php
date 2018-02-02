<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="名榜" http-equiv="keywords">
<meta name="description" content="名榜,wangid">
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<title>密码修改</title>
<!-- css -->
<link rel="stylesheet" type="text/css" href="home/login/css/index.css">
<!-- home/login/js/ -->
<script type="text/javascript" src="home/login/js//jquery.home/login/js/"></script>
<script type="text/javascript" src="home/login/js//public.home/login/js/"></script>

</head>

<body>
	<div class="top_box">
		<div class="wid_con">
			<div class="top_con">
				<div class="top_logo">
					<a href="http://www.wangid.com">
						<img src="home/login/images/logo_touming.gif">
					</a>
					<span>密码修改/Change Password</span>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="wid_con loginbox">
			<div class="password_con change_password">
				<div class="text_box">
					<div>
						<div><i><img src="home/login/images/icon02.png"></i><input type="text" placeholder="请输入6~30位新密码">
							<span>*</span>
						</div>
						<section class="pass_long">
							<h1>密码强度：弱&nbsp;&nbsp;&nbsp;中&nbsp;&nbsp;&nbsp;强</h1>
						</section>
						<div class="qrmm"><i><img src="home/login/images/icon02.png"></i><input type="text" placeholder="请输入密码确认">
							<span>*</span>
						</div>
						<button>确认修改</button>
					</div>
				</div>
				<script type="text/javascript">
					$(function(){
						$(".text_box>div>.qrmm input").focus(
							function(){
								$(".text_box .qrmm i img").stop().animate({marginTop:-22},100)
							}
						)
					})
				</script>
			</div>
			<div class="password_txt">
				<div>
					<h1>温馨提示</h1>
					<p>密码修改后请牢记您的新密码，如有问题请致电服务热线：400-6677-937</p>
				</div>
				<h2>请点此<a href="index.html">登录</a></h2>
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