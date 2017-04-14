<?php
require "../utils/DBConfig.php";
session_start();
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
    $id = $_SESSION['id'];
} else {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="common/layui/css/layui.css"  media="all">
</head>
<body>
<div style="padding:0 20px;">
<fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
    <legend>修改密码</legend>
</fieldset>
<form class="layui-form layui-form-pane" action="admin_handle.php" style="margin-left: 200px" method="post">

    <input type="hidden" name="method" readonly value="adminUpdate">
    <input type="hidden" name="id" readonly value="<?php echo $id?>">


    <div class="layui-form-item">
        <label class="layui-form-label">用户名</label>
        <div class="layui-input-inline">
            <input type="text" name="aname" lay-verify="required" readonly placeholder="请输入" autocomplete="off" class="layui-input" value="<?php echo $name?>">
        </div>
    </div>


    <div class="layui-form-item">
        <label class="layui-form-label">旧密码</label>
        <div class="layui-input-inline">
            <input type="password" name="apwd" placeholder="请输入密码" autocomplete="off" class="layui-input">
        </div>
        <div class="layui-form-mid layui-word-aux">请务必填写用户名</div>
    </div>

    <div class="layui-form-item">
        <label class="layui-form-label">新密码</label>
        <div class="layui-input-inline">
            <input type="password" name="apwd" placeholder="请输入密码" autocomplete="off" class="layui-input">
        </div>
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
            <button type="submit" class="layui-btn" lay-submit="" lay-filter="" >修改</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>

    </div>
</form>
</div>
<script src="common/layui/layui.js" charset="utf-8"></script>
<script>
    layui.use(['form', 'layedit', 'laydate'], function(){
        var form = layui.form();

        //自定义验证规则
        form.verify({
            title: function(value){
                if(value.length < 5){
                    return '标题至少得5个字符啊';
                }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']

        });


    });
</script>

</body>
</html>