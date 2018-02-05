@extends('admins/layout/layout')
@section('content')



        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                广告管理中心
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">管理首页</a></li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> <a href="{{ url('admin/atmadd') }}">新增广告</a></button>
                                    <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除选中广告</button>
									<button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 广告位管理</button>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                                <select data-am-selected="{btnSize: 'sm'}">
              <option value="option1">广告类别</option>
              <option value="option2">IT兄弟连</option>
              <option value="option3">一刀999</option>
              <option value="option3">淘宝优惠</option>
            </select>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field">
                                <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
          </span>
                            </div>
                        </div>
                    </div>

                    <ul class="tpl-task-list">
                        <li>
                            <div class="task-checkbox">
                                <input type="hidden" value="1" name="test">
                                <input type="checkbox" class="liChild" value="2" name="test"> </div>
                            <div class="task-title">
                                <span class="task-title-sp">大家好,哦系渣渣辉,贪玩蓝月,试玩两分钟,你...</span>
                                <span class="label label-sm label-success">一刀999</span>
                            </div>
                            <div class="task-config">
                                <div class="am-dropdown tpl-task-list-dropdown">
                                    <a href="###" style="color: red;">
                                        删除
                                    </a>

                                </div>
                            </div>
                        </li>


                       
                    </ul>
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