@extends('admins/layout/layout')
@section('content')




        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title" style="color: skyblue; ">
                <span class="am-icon-code"></span> 权限管理
            </div>
            <ol class="am-breadcrumb"></ol>
            <div class="tpl-portlet-components">
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">用户姓名</label>
                                    <div class="am-u-sm-9">
                                        <input type="button" style="background-color: greenyellow;" id="user-name" value="测试用户1">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">权限</label>
                                    <div class="am-u-sm-9">
                                        <select>
											<option disabled="disabled">-- 请选择 --</option>
											<option id="1">普通用户</option>
											<option id="2">管理员</option>
											<option id="3">超级管理员</option>
										</select>
                                        <small>请勿恶意修改....</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary"><a href="{{ url('admin/auth') }}" style="color: white;">保存修改</a></button>
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