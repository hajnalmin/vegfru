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
<div style="margin: 50px 100px;">

    <h1 style="font-size: 30px">管理员，你好</h1><br>

    <h2 style="font-size: 24px">欢迎登录果蔬后台管理系统</h2>


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