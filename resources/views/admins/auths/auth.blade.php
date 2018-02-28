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
                           <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> <a href="{{ url('admin/auth/create') }}">新增权限</a></button>
                                </div>
                            <div class="am-btn-toolbar">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-id">ID</th>
                                            <!-- th class="table-author am-hide-sm-only">用户名</th> -->
											<th class="table-date am-hide-sm-only">权限</th>
                                            <!-- <th class="table-date am-hide-sm-only">最后修改日期</th> -->
                                            <th class="table-set">操作</th>
                                        </tr>
                                       
                                    </thead> 
                                     @foreach($data as $v)
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>{{ $v->rank_id }}</td>
                                          <!--   <td class="am-hide-sm-only">{{ $v->name }}</td>  -->                                  
											<td class="am-hide-sm-only">{{ $v->rank_name }}</td>
                                        <!--     <td class="am-hide-sm-only">{{ $v->rank_time }}</td> -->
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><a href="{{ url('admin/auth/'.$v->rank_id.'/edit') }}">编辑</a></button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><a onClick="del({{$v->rank_id}}, this)")>删除</a></button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                     @endforeach
                                </table>
                                <hr>
                        </div>
                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>
        </div>
    </div>


    <script src="/admins/js/jquery.min.js"></script>
    <script src="/admins/js/amazeui.min.js"></script>
    <script src="/admins/js/app.js"></script>
    <script src="/layer/layer.js"></script>
    <script type="text/javascript">

            function del(id, del){
                
                //alert(del);
                layer.confirm('你确定要删除吗？', {
                    btn:['确定','取消']
                    },function(){
                        //alert(id);
                        $.post('{{url("admin/auth")}}/'+id,{'_token':'{{csrf_token()}}','_method':'delete'},function(data){
                            if(data == 1){
                                layer.msg('删除成功');
                                del.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.removeChild(del.parentNode.parentNode.parentNode.parentNode.parentNode);
                            }else{
                                layer.msg('删除失败');
                            }
                        });
                    })
            }
    </script>
</body>

</html>

@endsection