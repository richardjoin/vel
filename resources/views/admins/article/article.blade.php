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
                </div>
                <div class="tpl-block">
                    <div class="am-g">
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
                    </div>
                    <div class="am-g">
                        <div class="tpl-table-images">
                            <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                               <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">文章标题</th>
                                            <th class="table-type">所属栏目</th>
                                            <th class="table-set">更改分类</th>
                                        </tr>
                                    </thead>
                                @foreach($res as $v)
                                    <div class="tpl-table-images-content-block">
                                        <tbody>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td class="am-hide-sm-only">{{$v->article_id}}</td>
                                            <td class="am-hide-sm-only">{{$v->article_name}}</td>
                                            <td class="am-hide-sm-only">{{$v->sort_article_id}}</td>
                                            <td>
                                                <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn">
                                                <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> <a href="{{ url('admin/article/'.$v->article_id.'/edit') }}">更改分类</a></button>
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
</body>

</html>
    
@endsection