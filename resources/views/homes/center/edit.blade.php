<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="名榜" http-equiv="keywords">
<meta name="description" content="名榜,wangid">
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<title>修改个人信息</title>
<!-- css -->
<link rel="stylesheet" type="text/css" href="/home/login/css/index.css">
<!-- home/login/js/ -->
<script type="text/javascript" src="/admins/js/jquery.min.js"></script>

</head>

<body>
    <div class="content">
        <div class="wid_con loginbox">
            <div style="padding-top:45px;" class="register_txt">
                <img  src="/home/login/images/33.jpg">
            </div>
            <div class="register_con password_con">
                <form action='{{ url("center/update/".$res["id"]) }}' method="post" class="text_box">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    <div>
                        <div><i><img src="/home/login/images/icon01.png"></i><input type="text" name="name" placeholder="请修改数字用户名" value="{{ $res['name'] }}">
                            <span>*</span>
                        </div>
                        <div><i><img src="/home/login/images/icon02.png"></i><input type="text" name="pwd" placeholder="请修改您的密码" value="{{ $res['pwd'] }}">
                            <span>*</span>
                        </div>
                        <div><i><img src="/home/login/images/icon02.png"></i><input type="text" name="phone" placeholder="请修改您的联系电话" value="{{ $res['phone'] }}">
                            <span>*</span>
                        </div>
                        <div><i><img src="/home/login/images/icon04.png"></i><input type="email" name="email" type="text" placeholder="请修改您的邮箱" value="{{ $res['email'] }}">
                            <span>*</span>
                        </div>
                        <button type="submit">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <p>版权所有&nbsp;&nbsp;&nbsp; © 个人博客&nbsp;&nbsp;&nbsp;&nbsp;电话：400-6677-937324</p>
        <p><a >京ICP备：14012449号</a>黔ICP证：黔B2-20140009号<span>京公网安备：11010602030054号</span></p>
    </div>

</body>
</html>