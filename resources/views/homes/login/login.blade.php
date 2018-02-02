<!DOCTYPE html>
<html>	
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="/homes/css/login.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<!-- <link href='http://fonts.useso.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.useso.com/css?family=Exo+2' rel='stylesheet' type='text/css'> -->
<!--//webfonts-->
<script src="/homes/js/jquery.js"></script>
</head>
<body>

 <!--SIGN UP-->
 <h1>欢迎 登陆</h1>
<div class="login-form">
	<div class="avtar">
		<img src="/homes/images/login/avtar.png" />
	</div>
		<form action="{{ url('home/dologin') }}" method='post'>
				{{ csrf_field() }}
				<input type="text" class="text" value="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}" >
				<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				
				<input type="submit" value="登录" >
				<small>
                    <a data-switch="box-register" href="">注册</a>
                    <a data-switch="box-reset" href="">忘记密码</a>
                </small>
		</form>
</div>
</body>
</html>