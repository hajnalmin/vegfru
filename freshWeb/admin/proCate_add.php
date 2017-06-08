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
<div style="padding:0 20px;overflow:hidden;">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
        <legend>新增商品分类</legend>
    </fieldset>
    <form class="layui-form layui-form-pane" action="admin_handle.php" style="margin-left:200px;overflow:hidden;" method="post">
        <input type="hidden" name="method" readonly value="adminCateAdd">
        <div class="layui-form-item">
            <label class="layui-form-label">商品类名</label>

            <div class="layui-input-inline">
                <input type="text" name="catename" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="" >确认</button>
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
            title: function (value) {
                if (value.length < 5) {
                    return '标题至少得5个字符啊';
                }
            }
            , pass: [/(.+){6,12}$/, '密码必须6到12位']
            , content: function (value) {
                layedit.sync(editIndex);
            }
        });

    });
</script>

</body>
</html>