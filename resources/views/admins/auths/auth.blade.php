@extends('admins/layout/layout')
@section('content')




        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                用户权限管理中心
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">权限管理</a></li>
            </ol>
            <div class="tpl-portlet-components">

                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
              查找用户权限 : &nbsp <select data-am-selected="{btnSize: 'sm'}">
              <option disabled="disabled">-- 请选择 --</option>
              <option >普通用户</option>
              <option >管理员</option>
              <option >超级管理员</option>
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
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-id">ID</th>
                                            <th class="table-author am-hide-sm-only">作者</th>
											<th class="table-auth">权限</th>
                                            <th class="table-date am-hide-sm-only">最后修改日期</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>1</td>
                                            <td class="am-hide-sm-only">测试1号</td>
											<td class="am-hide-sm-only">超级管理员</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><a href="{{ url('admin/authx') }}">添加权限</a></button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><a href="{{ url('admin/authx') }}">修改权限</a></button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">禁言管理</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>










        </div>

    </div>


    <script src="{{ asset('mb/js/jquery.min.js') }}"></script>
    <script src="{{ asset('mb/js/amazeui.min.js') }}"></script>
    <script src="{{ asset('mb/js/app.js') }}"></script>
</body>

</html>

@endsection