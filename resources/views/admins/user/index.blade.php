@extends('/admins/layout/layout')
@section('content')




        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Amaze UI 文字列表
            </div>  
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">Amaze UI CSS</a></li>
                <li class="am-active">文字列表</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 列表
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> <a href="{{ url('admin/user/create') }}">新增用户</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                                <select data-am-selected="{btnSize: 'sm'}">
                                  <option value="option1">所有类别</option>
                                  <option value="option2">IT业界</option>
                                  <option value="option3">数码产品</option>
                                  <option value="option3">笔记本电脑</option>
                                  <option value="option3">平板电脑</option>
                                  <option value="option3">只能手机</option>
                                  <option value="option3">超极本</option>
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
                        <div class="tpl-table-images">
                            <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                               <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">姓名</th>
                                            <th class="table-type">性别</th>
                                            <th class="table-author am-hide-sm-only">电话</th>
                                            <th class="table-author am-hide-sm-only">密码</th>
                                            <th class="table-author am-hide-sm-only">地址</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                @foreach($res as $v)
                                    <div class="tpl-table-images-content-block">
                                        <tbody>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>{{$v->id}}</td>
                                            <td><a href="#">{{$v->name}}</a></td>
                                            <td>{{ ($v->sex=='m')?'男':'女' }}</td>
                                            <td>{{$v->phone}}</td>
                                            <td>{{$v->pwd}}</td>
                                            <td class="am-hide-sm-only">{{$v->address}}</td>
                                            <td>
                                                <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                                <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> <a href="{{ url('admin/user/'.$v->id.'/edit') }}">编辑</a></button>
                                                
                                                <span onClick="del({{$v->id}})" type="button" class="am-btn am-btn-default am-btn-danger">删除</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    </div>
                                @endforeach
                                </table>
                                <div class="am-cf">
                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#" >3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
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

            function del(id){
                layer.confirm('你确定要删除吗？', {
                    btn:['确定','取消']
                    },function(){
                        $.post('{{url("admin/user")}}/'+id,{'_token':'{{csrf_token()}}','_method':'delete'},function(data){
                            if(data == 1){
                                layer.msg('删除成功');
                            }else{
                                layer.msg('删除失败');
                            }
                        });
                    })

    </script>
</body>

</html>
    
@endsection