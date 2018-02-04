@extends('/homes/sy/layout')
@section('content')
	<div class="w_container">
		<div class="container">
			<div class="row w_main_row">
				
				<ol class="breadcrumb w_breadcrumb">
<!-- 				  <li><a href="#">首页</a></li>
				  <li class="active">文章</li> -->
				  <span class="w_navbar_tip">我们长路漫漫，只因学无止境。</span>
				</ol>
				
				<div class="col-lg-9 col-md-9 w_main_left">
					<div class="panel panel-default">
					  <div class="panel-body contentList">
					  	
					  	<div class="panel panel-default w_article_item">
						  <div class="panel-body">
						    <div class="row">
							  <div class="col-xs-6 col-md-3">
							    <a href="#" class="thumbnail w_thumbnail">
							      <img src="/home/sy/img/aticleview.png" alt="...">
							    </a>
							  </div>
							
							  <h4 class="media-heading">
							  	<a class="title" href="{{ url('play/list') }}">Media heading</a>
							  </h4>
							  <p><a class="label label-default">Nginx</a><a href=""  class="label label-default">tomcat负载均衡</a></p>
							  <p class="w_list_overview overView">个人博客网站正在建设中。。。。</p>
							  <p class="count_r"><span class="count"><i class="glyphicon glyphicon-user"></i><a href="#">admin</a></span> <span class="count"><i class="glyphicon glyphicon-eye-open"></i>阅读:1003</span><span class="count"><i class="glyphicon glyphicon-comment"></i>评论:2</span><span class="count"><i class="glyphicon glyphicon-time"></i>2017-01-16</span></p>
							</div>
						  </div>
						</div>
					  	


						
						

						

						
						
						<!--<div class="page">
							<nav aria-label="Page navigation">
						  <ul class="pagination">
						    <li>
						      <a href="#" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						      </a>
						    </li>
						    <li class="active"><a href="#">1</a></li>
						    <li><a href="#">2</a></li>
						    <li><a href="#">3</a></li>
						    <li><a href="#">4</a></li>
						    <li><a href="#">5</a></li>
						    <li>
						      <a href="#" aria-label="Next">
						        <span aria-hidden="true">&raquo;</span>
						      </a>
						    </li>
						  </ul>
						</nav>
						</div>-->
						<div id="page">
							
						</div>
						
						
					  </div>
					</div>
					
				</div>
				<div class="col-lg-3 col-md-3 w_main_right">
					
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">最新发布</h3>
					  </div>
					  <div class="panel-body">
					    	<ul class="list-unstyled sidebar">				
								<li><a href="/post/04928311">排序算法之冒泡排序 － java实现</a></li>
								<li><a href="/post/32097759">快速搭建基于二进制日志文件的 mysql 复制</a></li>							
								<li><a href="/post/09196557">web 服务器负载均衡教程，快速搭建高可用服务器集群</a></li>							
								<li><a href="/post/20654391">使用 redis 和 spring-session 实现 tomcat、glassfish 等 web 服务器集群 session 共享</a></li>							
								<li><a href="/post/41501569">使用 Nginx 实现 tomcat、glassfish 等 web 服务器负载均衡</a></li>							
								<li><a href="/post/89658700">mysql 复制（replication）基础概念和应用场景简介</a></li>							
								<li><a href="/post/03088922">redis 单节点在 Linux 生产环境的安装和简单配置</a></li>							
								<li><a href="/post/05203355">使用 jQuery 的 val() 方法来获取以及设置表单元素值</a></li>							
								<li><a href="/post/03120718">使用 jQuery 的 removeProp() 方法来删除元素的特性（property）</a></li>							
								<li><a href="/post/37454977">使用 jQuery 的 prop() 方法来获取以及设置元素的特性（property）</a></li>							
						</ul>
					  </div>
					</div>
					
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">友情链接</h3>
					  </div>
					  <div class="panel-body">
					    <div class="newContent">
					    	<ul class="list-unstyled sidebar shiplink">				
								<li><a href="https://www.baidu.com/" target="_blank">百度</a></li>
								<li><a href="https://www.oschina.net/" target="_blank">开源中国</a></li>							
								<li><a href="http://www.ulewo.com/" target="_blank">有乐网</a></li>							
								<li><a href="http://www.sina.com.cn/" target="_blank">新浪网</a></li>							
								<li><a href="http://www.qq.com/" target="_blank">腾讯网</a></li>							
							</ul>
					    </div>
					  </div>
					</div>
				</div>
			
			
			</div>
		</div>
	</div>
@endsection