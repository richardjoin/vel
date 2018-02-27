@extends('/admins/layout/layout')
@section('content')




        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Amaze UI 文字列表
            </div>
            <div class="tpl-portlet-components" style="height: 500px;">
                <div class="tpl-block" style="margin-left: 400px;margin-top: 100px;">
                    <div class="am-g">
                        <div class="am-form-group">
                            <select data-am-selected="{btnSize: 'sm'}">
                              <option value="option1">所有类别</option>
                              <option value="option2">IT业界</option>
                            </select>
                            <button type="button" style="width: 100px;" class="am-btn am-btn-default am-btn-secondary">确定</button>
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