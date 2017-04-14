<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="common/layui/css/layui.css" media="all">
</head>
<body>
<div style="padding:0 20px;">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
        <legend>新增管理员</legend>
    </fieldset>
    <form class="layui-form layui-form-pane" action="admin_handle.php" style="margin-left:200px;" method="post">
        <input type="hidden" name="method" readonly value="adminAdd">

        <div class="layui-form-item">
            <label class="layui-form-label">用户名</label>

            <div class="layui-input-inline">
                <input type="text" name="adminname" placeholder="请输入用户名" class="layui-input" lay-verify="name">
            </div>
        </div>


        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>

            <div class="layui-input-inline">
                <input type="password" name="adminpwd" placeholder="请输入密码" class="layui-input" lay-verify="pass">
            </div>
            <div class="layui-form-mid layui-word-aux">请务先必填写用户名</div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">邮箱</label>

            <div class="layui-input-inline">
                <input type="text" name="adminemail" lay-verify="email" placeholder="请输入"
                       class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">手机号</label>

            <div class="layui-input-inline">
                <input type="text" name="admintel" lay-verify="phone" placeholder="请输入"
                       class="layui-input">
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="" >注册</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
        </div>
    </form>
</div>
<script src="common/layui/layui.js" charset="utf-8"></script>
<script>
    layui.use(['form', 'layedit', 'laydate'], function () {
        var form = layui.form();

        //自定义验证规则
        form.verify({
            name: function (value) {
                if (value.length < 5) {
                    return '用户名至少得5个字符啊';
                }
            }
            , pass: [/(.+){5,12}$/, '密码必须5到12位']
        });

    });
</script>

</body>
</html>