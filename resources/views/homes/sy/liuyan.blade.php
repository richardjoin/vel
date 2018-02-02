<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>风宇个人博客</title>
</head>

	<link href="/home/sy/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/home/sy/css/common.css" />

<link href="/home/sy/img/logo.ico" rel="shortcut icon"/>
<script src="/home/sy/plugin/jquery/3.1.1/jquery.min.js"></script>
<script src="/home/sy/plugin/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/home/sy/plugin/jquery.page.js"></script>
<script src="/home/sy/js/common.js"></script>
<!--<script src="js/snowy.js"></script>-->



<body>
	<div class="w_header">
		<div class="container">
			<div class="w_header_top">
				<a href="#" class="w_logo"></a>
				<!--<span class="w_slogan">百度一下,你就知道</span>-->
				<span class="w_header_nav">
					<ul>
						<li><a href="{{ url('/') }}" class="active">首页</a></li>
						<li><a href="{{ url('/about') }}">关于</a></li>
						<li><a href="{{ url('/article') }}">成长</a></li>
						<li><a href="{{ url('/study') }}">学习</a></li>
						<li><a href="{{ url('/play') }}">娱乐</a></li>
						<li><a href="{{ url('/shuoshuo') }}">说说</a></li>
						<li><a href="{{ url('/liuyan') }}">留言</a></li>
						<li><a href="{{ url('/login') }}">登录</a></li>					</ul>
				</span>
				<div class="w_search">
					<div class="w_searchbox">
						<input type="text" placeholder="search" />
						<button>搜索</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="w_container">
		<div class="container">
			<div class="row w_main_row">
				<ol class="breadcrumb w_breadcrumb">
				  <!-- <li><a href="#">首页</a></li>
				  <li class="active">评论</li> -->
				  <span class="w_navbar_tip">你，生命中最重要的过客，之所以是过客，因为你未曾为我停留。</span>
				</ol>
				
				<div class="col-lg-9 col-md-9 w_main_left">
					
					
					
					<!--PC版-->
					<!--<div id="SOHUCS" sid="5eab7e4c363e4cb8bed0efa3604e6b42"></div>
					<script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
					<script type="text/javascript">
					window.changyan.api.config({
					appid: 'cysPwLFm1',
					conf: 'prod_6c6350e206c502f569b865b4bf121e60'
					});
					</script>-->
					
					<!-- 多说评论框 start -->
						<div class="ds-thread" data-thread-key="5eab7e4c363e4cb8bed0efa3604e6b42" data-title="请替换成文章的标题" data-url="请替换成文章的网址"></div>
					<!-- 多说评论框 end -->
					<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
					<script type="text/javascript">
					var duoshuoQuery = {short_name:"wfyvv"};
						(function() {
							var ds = document.createElement('script');
							ds.type = 'text/javascript';ds.async = true;
							ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
							ds.charset = 'UTF-8';
							(document.getElementsByTagName('head')[0] 
							 || document.getElementsByTagName('body')[0]).appendChild(ds);
						})();
						</script>
					<!-- 多说公共JS代码 end -->

					
					
				</div>
				<div class="col-lg-3 col-md-3 w_main_right">
					<img src="/home/sy/img/slider/aboutphoto.png" />
				</div>


			
			
			</div>
		</div>
	</div>
	<div class="w_foot">
		<!--<div class="w_foot_copyright">© 2015~2016 版权所有 | <a target="_blank" href="http://www.miitbeian.gov.cn/" rel="nofollow">京ICP备15010892号-1</a></div>-->
		<div class="w_foot_copyright">Copyright © 2017-2020, www.wfyvv.com. All Rights Reserved. </div>
	</div>
	<!--toTop-->
	<div id="shape">
		<div class="shapeColor">
			<div class="shapeFly">
			</div>
		</div>
	</div>
	<!--snow-->
	<!--<div class="snow-container"></div>-->
</body>
</html>