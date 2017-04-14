<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <title>管理员登录</title>

    <link rel="stylesheet" href="common/layui/css/layui.css">
    <link rel="stylesheet" href="common/css/sccl.css">

</head>

<body class="login-bg">
<div class="login-box">
    <header>
        <h1>果蔬新鲜后台管理系统</h1>
    </header>
    <div class="login-main">
        <form action="admin_handle.php" class="layui-form" method="post">
            <input name="method" type="hidden" value="login">
            <div class="layui-form-item">
                <label class="login-icon">
                    <i class="layui-icon"></i>
                </label>
                <input type="text" name="aname" placeholder="这里输入登录名" class="layui-input">
            </div>
            <div class="layui-form-item">
                <label class="login-icon">
                    <i class="layui-icon"></i>
                </label>
                <input type="password" name="apwd"  placeholder="这里输入密码" class="layui-input">
            </div>

            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button type="submit" class="layui-btn">登  录</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>
    </div>
    <footer>
        <p>zhm © copy right</p>
    </footer>
</div>

<script src="common/layui/layui.js"></script>
<script>



</script>
</body>
</html>
