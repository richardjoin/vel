@extends('/admins/layout/layout')
@section('content')

        <div class="tpl-content-wrapper">
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 栏目列表
                    </div>
                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> <a href="{{ url('admin/column/create') }}">新增</a></button>
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
                                            <th class="table-title">栏目名称</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                @foreach($data as $v)
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>{{$v->sort_article_id}}</td>
                                            <td>{{$v->sort_article_name}}</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> <a href="{{ url('admin/column/'.$v->sort_article_id.'/edit') }}">编辑</a></button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> <a onClick="del({{$v->sort_article_id}}, this)">删除</a></button>
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
                layer.confirm('你确定要删除吗？', {
                    btn:['确定','取消']
                    },function(){
                        //alert(id);
                        $.post('{{url("admin/column")}}/'+id,{'_token':'{{csrf_token()}}','_method':'delete'},function(data){
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