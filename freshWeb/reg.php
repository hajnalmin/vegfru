<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>果然新鲜|用户注册</title>
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

<!--用户注册开始-->
<div class="login">
    <div class="wrap clearFix">
        <form class="form f_reg" action="handle.php" method="post">
            <input type="hidden" name="method" value="reg">
            <div class="f_title">
                <span>会员注册</span>
            </div>
            <div class="f_con">
                <div class="f_group">
                    <span>帐号：</span>
                    <input type="text" class="ualias" name="ualias"/>
                    <span class="red">*</span>
                </div>
                <div class="f_group">
                    <span>密&nbsp;&nbsp;码：</span>
                    <input type="password" class="upwd" name="upwd"/>
                    <span class="red">*</span>
                </div>
                <div class="f_group">
                    <span>确认密码：</span>
                    <input type="password" class="upwd1"/>
                    <span class="red">*</span>
                </div>
                <div class="f_group">
                    <span>姓名：</span>
                    <input type="text" class="uname" name="uname"/>
                    <span class="red">*</span>
                </div>
                <div class="f_group">
                    <span>邮箱：</span>
                    <input type="text" class="uemail" name="uemail"/>
                    <span class="red">*</span>
                </div>
                <div class="f_group">
                    <span>电话：</span>
                    <input type="text" class="utel" name="utel"/>
                    <span class="red">*</span>
                </div>
                <div class="f_group">
                    <span>验证码：</span>
                    <input type="text" class="ucode"/>
                    <label class="show_code">Ac4e</label>
                </div>
                <div class="f_group btn">
                    <div class="reg_btn">
                        <button type="submit">注册</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!--用户注册结束-->



<!-- footer 开始-->
<?php require "footer.php"?>

<!-- footer 结束-->

<script src="common/js/jquery-1.7.2.js"></script>
<script src="common/js/public.js"></script>

</body>
</html>