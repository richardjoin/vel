<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>风宇个人博客</title>
	</head>

	<link href="./home/sy/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./home/sy/css/common.css" />
	<link href="./home/sy/img/logo.ico" rel="shortcut icon" />
	<script src="./home/sy/plugin/jquery.min.js"></script>
	<script src="./home/sy/plugin/bootstrap/js/bootstrap.min.js"></script>
	<!--<script type="text/javascript" src="plugin/jquery.page.js"></script>-->
	<!--<script src="js/common.js"></script>-->
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
					<span class="w_header_nav">
					<ul>
						<li><a href="{{ url('/') }}" class="active">首页</a></li>
						<li><a href="{{ url('/center') }}">个人中心</a></li>
						<li><a href="{{ url('/about') }}">关于</a></li>
						<li><a href="{{ url('/article') }}">成长</a></li>
						<li><a href="{{ url('/study') }}">学习</a></li>
						<li><a href="{{ url('/play') }}">娱乐</a></li>
						<li><a href="{{ url('/shuoshuo') }}">说说</a></li>
						<li><a href="{{ url('/liuyan') }}">留言</a></li>
						<li><a href="{{ url('/login') }}">登录</a></li>
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
		
@section('content')
@show

		<div class="w_foot">
			<div class="w_foot_copyright">Copyright &copy; 2017-2020, www.wfyvv.com. All Rights Reserved. <span>|</span>
				<a target="_blank" href="http://www.miitbeian.gov.cn/" rel="nofollow">皖ICP备17002922号</a>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		var $backToTopEle = $('<a href="javascript:void(0)" class="Hui-iconfont toTop" title="返回顶部" alt="返回顶部" style="display:none">^</a>').appendTo($("body")).click(function() {
			$("html, body").animate({ scrollTop: 0 }, 120);
		});
		var backToTopFun = function() {
			var st = $(document).scrollTop(),
				winh = $(window).height();
			(st > 0) ? $backToTopEle.show(): $backToTopEle.hide();
			/*IE6下的定位*/
			if(!window.XMLHttpRequest) {
				$backToTopEle.css("top", st + winh - 166);
			}
		};

		$(function() {
			$(window).on("scroll", backToTopFun);
			backToTopFun();
		});
	</script>

</html>