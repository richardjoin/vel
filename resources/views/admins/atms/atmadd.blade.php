@extends('admins/layout/layout')
@section('content')



        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                广告管理中心
            </div>
            <ol class="am-breadcrumb">
                <li><a href="{{ url('admin/atm') }}" class="am-icon-home">管理首页</a></li>
                <li><a href="#">添加广告</a></li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="tpl-block">

                    <div class="am-g">
                        <div class="tpl-form-body tpl-form-line">
                            <form class="am-form tpl-form-line-form">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">广告标题</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字">
                                        <small>请填写标题文字10-20字左右。</small>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">广告类别</label>
                                    <div class="am-u-sm-9">
                                        <select data-am-selected="{searchBox: 1}">
  <option value="a">IT兄弟连</option>
  <option value="b">一刀999</option>
  <option value="o">淘宝优惠</option>
</select>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">广告封面图</label>
                                    <div class="am-u-sm-9">
                                        <div class="am-form-group am-form-file">
                                            <div class="tpl-form-file-img">
                                                <img src="assets/img/a5.png" alt="">
                                            </div>
                                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
    <i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                                            <input id="doc-form-file" type="file" multiple>
                                        </div>

                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">内容</label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" rows="10" id="user-intro" placeholder="请输入广告内容"></textarea>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>


            </div>










        </div>

    </div>

	<script src="{{ asset('mb/js/jquery.min.js') }}"></script>
    <script src="{{ asset('mb/js/amazeui.min.js') }}"></script>
    <script src="{{ asset('mb/js/app.js') }}"></script>
</body>

</html>

@endsection