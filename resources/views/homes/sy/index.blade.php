@extends('/homes/sy/layout')
@section('content')
		<div class="w_container">
			<div class="container">
				<div class="row w_main_row">
					<div class="col-lg-9 col-md-9 w_main_left">
						<!--滚动图开始-->
						<div class="panel panel-default">

							<div id="w_carousel" class="carousel slide w_carousel" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#w_carousel" data-slide-to="0" class="active"></li>
									<li data-target="#w_carousel" data-slide-to="1"></li>
									<li data-target="#w_carousel" data-slide-to="2"></li>
									<li data-target="#w_carousel" data-slide-to="3"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="home/sy/img/slider/slide1.jpg" alt="...">
										<div class="carousel-caption">
											<h3>First slide label</h3>
											<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
										</div>
									</div>
									<div class="item">
										<img src="home/sy/img/slider/slide2.jpg" alt="...">
										<div class="carousel-caption">...</div>
									</div>
									<div class="item">
										<img src="home/sy/img/slider/slide3.jpg" alt="...">
										<div class="carousel-caption">...</div>
									</div>
									<div class="item">
										<img src="home/sy/img/slider/slide4.jpg" alt="...">
										<div class="carousel-caption">...</div>
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#w_carousel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#w_carousel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>

						</div>

						<div class="panel panel-default contenttop">
							<a href="article_detail.html">
								<strong>博主置顶</strong>
								<h3 class="title">嫁人就嫁程序员</h3>
								<p class="overView">个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中个人网站正在建设中。。。</p>
							</a>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">最新发布</h3>
							</div>

							<div class="panel-body">

								<!--文章列表开始-->
								<div class="contentList">
								@foreach($res as $v)
									<div class="panel panel-default">
										<div class="panel-body">
											<div class="contentleft">
												<h4><a class="title" href="/post/41501569">{{ $v->article_name }}</a></h4>
												<hr>
												<!-- <p>
													<a class="label label-default">Nginx</a>
													<a class="label label-default">tomcat负载均衡</a>
												</p> -->
												<!-- <div class="overView">{!! $v->article_content !!}</div> -->
												<div class="overView">{{ $v->article_intro }}</div>
												<p><span class="count"><i class="glyphicon glyphicon-user"></i><a href="#">{{ $v->article_user }}</a></span> <a href="lavascript:viod(0);" onclick="doCalll({{ $v->article_id }})" class="count"><i class="glyphicon glyphicon-eye-open"></i>收藏</a><span class="count"><i class="glyphicon glyphicon-comment"></i>评论:99</span><span class="count"><i class="glyphicon glyphicon-time"></i>{{ $v->article_time }}</span></p>
											</div>
											<div class="contentImage">
												<!--<img src="img/slider/67zmaej.png"/>-->
												<div class="row">
													<a href="#" class="thumbnail w_thumbnail">
														<img src="http://os4vho7yf.bkt.clouddn.com/photo/c6c0b68e0ef39a8d37cda42051acc4aa.jpg" alt="...">
													</a>
												</div>
											</div>
										</div>
									</div>
								@endforeach
								</div>
								<!--文章列表结束-->

							</div>
						</div>
					</div>

					<!--左侧开始-->
					<div class="col-lg-3 col-md-3 w_main_right">

						<div class="panel panel-default sitetip">
							<a href="article_detail.html">
								<strong>站点公告</strong>
								<h3 class="title"></h3>
								<p class="overView"></p>
							</a>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">热门标签</h3>
							</div>
							<div class="panel-body">
								<div class="labelList">
									<a class="label label-default" href="http://www.runoob.com/java/java-tutorial.html">java</a>
									<a class="label label-default" href="http://www.runoob.com/jquery/jquery-tutorial.html">jQuery</a>
									<a class="label label-default" href="http://www.runoob.com/jquery/jquery-selectors.html">jQuery选择器</a>
									<a class="label label-default" href="http://www.runoob.com/linux/linux-tutorial.html">linux</a>
									<a class="label label-default" href="http://www.runoob.com/linux/nginx-install-setup.html">Nginx</a>
									<a class="label label-default" href="https://redis.io/">Redis</a>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">最新发布</h3>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled sidebar">
									<li>
										<a href="/post/04928311">排序算法之冒泡排序 － java实现</a>
									</li>
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
										<li>
											<a href="https://www.baidu.com/" target="_blank">百度</a>
										</li>
										<li>
											<a href="https://www.oschina.net/" target="_blank">开源中国</a>
										</li>
										<li>
											<a href="http://www.ulewo.com/" target="_blank">有乐网</a>
										</li>
										<li>
											<a href="http://www.sina.com.cn/" target="_blank">新浪网</a>
										</li>
										<li>
											<a href="http://www.qq.com/" target="_blank">腾讯网</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">关注微信公众号</h3>
							</div>
							<div class="panel-body">
								<img src="home/sy/img/qrcode.jpg" style="height: 230.5px;width: 230.5px;" />
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	<script src="/admins/js/jquery.min.js"></script>
	<script src="/layer/layer.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        function doCall(id) {
        	alert(id);
            
            $.ajax({
                type: "post",
                url: "{{ url('/call') }}",
                data: {'id':id},
                async: true,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                      // 菊花转转图
                      // $('#img1').attr('src', 'http://img.lanrentuku.com/img/allimg/1212/5-121204193R0-50.gif');
                      //
                       a = layer.load();
                  },
                success: function(data) {
                		alert(data);
                    layer.close(a);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("请检查网络后重试");
                    layer.close(a);
                }
            });
        }
    </script>
@endsection