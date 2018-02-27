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
                            <form action='{{ url("admin/atm") }}' method="post" class="am-form tpl-form-line-form">
                            {{ csrf_field() }}
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">广告名称</label>
                                    <div class="am-u-sm-9">
                                        <input name="ad_name" type="text" id="user-name">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary">保存</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>


            </div>










        </div>

    </div>

	<script src="/admins/js/jquery.min.js"></script>
    <script src="/admins/js/amazeui.min.js"></script>
    <script src="/admins/js/app.js"></script>
</body>

</html>

@endsection