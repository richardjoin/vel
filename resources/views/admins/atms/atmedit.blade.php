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
                            <form action="{{ url('admin/atm/'.$row->ad_id) }}" method="post" class="am-form tpl-form-line-form">
                            <input type="hidden" name="_method" value="put">
                            {{ csrf_field() }}
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">广告名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-name"  name="ad_name" value="{{ $row->ad_name }}">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">广告链接</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-name" name="ad_link"  value="{{ $row->ad_link }}">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">开始时间</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-name" name="start_time" value="{{ $row->start_time }}">
                                    </div>
                                </div>
                                  <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">结束时间</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-name"  name="end_time" value="{{ $row->end_time }}">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">链接邮箱</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-name" name="link_email" value="{{ $row->link_email }}">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">联系方式</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="user-name" name="link_phone" value="{{ $row->link_phone }}">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
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