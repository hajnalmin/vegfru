
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>果然新鲜|用户登录</title>
    <link rel="stylesheet" href="common/css/reset.css"/>
    <link rel="stylesheet" href="common/css/public.css"/>
    <link rel="stylesheet" href="common/css/loginAndReg.css"/>
</head>
<body>
<!-- 头部 开始-->
<?php require "header.php"?>
<!-- 头部 结束-->
<!-- banner 结束-->
<div class="banner"></div>
<!-- banner 结束-->
<!--用户登录开始-->
<div class="login">
    <div class="wrap clearFix">
        <form  action="handle.php" method="post" class="form f_login">
            <input type="hidden" name="method" value="login" readonly>
                <div class="f_title">
                <span>会员登录</span>
            </div>
            <div class="f_con">
                <div class="f_group">
                    <span>用户名：</span>
                    <input type="text" class="uname" name="ualias" value="shine"/>
                </div>
                <div class="f_group">
                    <span>密码：</span>
                    <input type="password" class="upwd" name="upwd" value="shine"/>
                </div>
                <div class="f_group reg_word">
                    <a href="reg.php"><span class="red">点击注册&gt;&gt;</span></a>
                </div>
                <div class="f_group">
<!--                    <label style="color: #e60000" class="col-sm-12">--><?php //echo $msg?><!--</label>-->
                </div>
                <div class="f_group btn ">
                    <div class="login_btn">
                        <button type="submit">登录</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!--用户登录结束-->



<!-- footer 开始-->
<?php require "footer.php"?>
<!-- footer 结束-->

<script src="common/js/jquery-1.7.2.js"></script>
<script src="common/js/public.js"></script>

</body>
</html>