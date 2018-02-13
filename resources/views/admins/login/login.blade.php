<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin index Examples</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/admins/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/admins/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/admins/css/amazeui.min.css" />
  <link rel="stylesheet" href="/admins/css/admin.css">
  <link rel="stylesheet" href="/admins/css/app.css">
</head>

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				Amaze UI<span> Login</span> <i class="am-icon-skyatlas"></i>
				
			</div>
		</div>

		<div class="login-font">
			<i>Log In </i> or <span> Sign Up</span>
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form action="{{ url('/admin/login') }}" method="post" class="am-form">
				{{ csrf_field() }}
				<fieldset>
					<div class="am-form-group">
						<input type="text" style="border-radius: 5px;" name="name" id="doc-ipt-email-1" placeholder="输入电子邮件">
					</div>
					<br>
					<div class="am-form-group">
						<input type="text" style="border-radius: 5px;" name="pwd" id="doc-ipt-pwd-1" placeholder="设置个密码吧">
					</div><br>
					<div class="am-form-group">
						<input type="text" name="code" id="doc-ipt-pwd-1" style="width:250px;float:left;border-radius: 5px;" placeholder="输入验证码！">
						<img style="float:left;margin-left: 20px;" src="{{url('admin/code')}}" alt="">
					</div><br><br>
					<p><button type="submit" class="am-btn am-btn-default">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>

  <script src="/admins/js/jquery.min.js"></script>
  <script src="/admins/js/amazeui.min.js"></script>
  <script src="/admins/js/app.js"></script>
</body>

</html>