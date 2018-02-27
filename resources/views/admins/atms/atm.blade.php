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
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> <a href="{{ url('admin/atm/create') }}">新增广告</a></button>
                                    <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除选中广告</button>
									<button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 广告位管理</button>
                                </div>
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

                   <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">广告名称</th>
                                            <th class="table-title">链接邮箱</th>
                                            <th class="table-title">联系方式</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>


                                     @foreach($data as $v)
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>{{$v->ad_id}}</td>
                                            <td>{{$v->ad_name}}</td>
                                            <td>{{$v->link_email}}</td>
                                            <td>{{$v->link_phone}}</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> <a href="{{ url('admin/atm/'.$v->ad_id.'/edit') }}">编辑</a></button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> <a onClick="del({{$v->ad_id}}, this)">删除</a></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                                </table>
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