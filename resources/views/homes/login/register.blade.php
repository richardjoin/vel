<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="名榜" http-equiv="keywords">
<meta name="description" content="名榜,wangid">
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<title>免费注册</title>
<!-- css -->
<link rel="stylesheet" type="text/css" href="/home/login/css/index.css">
<!-- home/login/js/ -->
<script type="text/javascript" src="/admins/js/jquery.min.js"></script>

</head>

<body>
	<div class="content">
		<div class="wid_con loginbox">
			<div style="padding-top:45px;" class="register_txt">
				<!-- <h1>注册流程</h1> -->
				<img  src="/home/login/images/33.jpg">
			</div>
			<div class="register_con password_con">
				<form action="{{ url('login/store') }}" method="post" class="text_box">
					{{ csrf_field() }}
					<div>
						<div><i><img src="/home/login/images/icon01.png"></i><input type="text" name="name" placeholder="请输入数字用户名">
							<span>*</span>
						</div>
						<div><i><img src="/home/login/images/icon02.png"></i><input type="password" name="pwd" placeholder="请输入您的密码">
							<span>*</span>
						</div>
						<div><i><img src="/home/login/images/icon02.png"></i><input type="password" name="password" placeholder="请再次输入您的密码">
							<span>*</span>
						</div>
						<div><i><img src="/home/login/images/icon04.png"></i><input name="phone" id="phone" type="text" placeholder="请输入您的手机号">
							<span>*</span>
						</div>
						<div class="yzm">
							<i><img src="/home/login/images/icon03.png"></i><input name="code" style="width: 200px;" type="text" placeholder="请输入验证码">
							<a href="javascript: void(0);" onClick="put()">获取验证码</a>
						</div>
						<h4><a href="#">《网站服务协议》</a></h4>
						<button type="submit">同意以上协议并注册</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- footer -->
	<div class="footer">
		<p>版权所有&nbsp;&nbsp;&nbsp; © 个人博客&nbsp;&nbsp;&nbsp;&nbsp;电话：400-6677-937324</p>
		<p><a>京ICP备：14012449号</a>黔ICP证：黔B2-20140009号<span>京公网安备：11010602030054号</span></p>
	</div>

	<script type="text/javascript">
		function put(){
			var phone = $('#phone').val();
			//alert(phone);
			$.post('{{ url("login/yanzheng") }}',{'_token':'{{csrf_token()}}','phone': phone}, function(data){
				alert(data);
			});
		}
	</script>
</body>
</html>