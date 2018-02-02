<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>风宇个人博客</title>
</head>

<link href="/home/sy/plugin/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/home/sy/css/common.css"/>
<link rel="stylesheet" type="text/css" href="/home/sy/css/moodList.css"/>
<link rel="stylesheet" href="plugin/jquery.page.css">
<link href="/home/sy/img/logo.ico" rel="shortcut icon"/>
<script src="/home/sy/plugin/jquery/3.1.1/jquery.min.js"></script>
<script src="/home/sy/plugin/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/home/sy/plugin/jquery.page.js"></script>
<script src="js/common.js"></script>
<!--<script src="js/snowy.js"></script>-->
<script type="text/javascript">
	
$(function(){
	$("#page").Page({
	  totalPages: 7,//分页总数
	  liNums: 5,//分页的数字按钮数(建议取奇数)
	  activeClass: 'activP', //active 类样式定义
	  callBack : function(page){
			//console.log(page)
	  }
  });
})
</script>

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
					</ul>
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
<!-- 				  <li><a href="#">首页</a></li>
				  <li class="active">说说</li> -->
				  <span class="w_navbar_tip">删删写写，回回忆忆，虽无法行云流水，却也可碎言碎语</span>
				</ol>
					

			<div class="bloglist">
				
			    <ul class="arrow_box">
			     <div class="sy">
			     <img src="/home/sy/img/slider/bb.jpg">
			      <p> 我希望我的爱情是这样的，相濡以沫，举案齐眉，平淡如水。</p>
			     </div>
		      	<!--<p class="bloglist_count"><span class="count"><i class="glyphicon glyphicon-user"></i><a href="#">admin</a></span> <span class="count"><i class="glyphicon glyphicon-eye-open"></i>阅读:22</span><span class="count"><i class="glyphicon glyphicon-comment"></i>评论:0</span></p>-->
			      <span class="dateview">2017-02-07</span>
			    </ul>
		  </div>
		  
			
			<div id="page">
				
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