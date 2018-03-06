@extends('/admins/layout/layout')
@section('content')




        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Amaze UI 文字列表
            </div>
            <div class="tpl-portlet-components" style="height: 500px;">
                <div class="tpl-block" style="margin-left: 400px;margin-top: 100px;">
                    <div class="am-g">
                    <form action="{{ url('admin/article/'.$arr->article_id) }}" method="post" class="am-form am-form-horizontal">
                    <input type="hidden" name="_method" value="put">
                    {{ csrf_field() }}
                        <div class="am-form-group">
                            
                            <select data-am-selected="{btnSize: 'sm'}" name="sort_article_id">
                                <option value="{{$arr->sort_article_id}}">{{$arr->sort_article_id}}</option>
                            @foreach($res as $v)
                                <option value="{{$v->sort_article_id}}">{{$v->sort_article_name}}</option>
                            @endforeach
                            </select>
                            <button type="submit" style="width: 100px;" class="am-btn am-btn-default am-btn-secondary">确定</button>
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