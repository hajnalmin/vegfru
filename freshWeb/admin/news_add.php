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

    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>新增资讯信息</legend>
    </fieldset>

    <form class="layui-form layui-form-pane" action="admin_handle.php" style="margin:0 200px;" method="post">
        <input type="hidden" name="method" readonly value="newAdd">


        <div class="layui-form-item">
            <label class="layui-form-label">资讯标题</label>

            <div class="layui-input-inline">
                <input type="text" name="newtitle" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input">
            </div>
        </div>


        <div class="layui-form-item">

            <div class="layui-inline">
                <label class="layui-form-label">当前时间</label>
                <div class="layui-input-inline">
                    <input type="text" name="newdate" id="date" lay-verify="date" placeholder="yyyy-mm-dd" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})">
                </div>
            </div>
        </div>


        <div class="layui-form-item layui-form-text">
            <label class="layui-form-label">资讯内容</label>
            <div class="layui-input-block">
                <textarea name="newcon" placeholder="请输入内容" class="layui-textarea"></textarea>
            </div>
        </div>


        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="" >提交</button>
            </div>
        </div>
    </form>


</div>
<script src="common/layui/layui.js" charset="utf-8"></script>

<script>
    layui.use(['form', 'layedit', 'laydate'], function () {
        var form = layui.form()
            , layer = layui.layer
            , layedit = layui.layedit
            , laydate = layui.laydate;

        //创建一个编辑器
        var editIndex = layedit.build('LAY_demo_editor');

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

        //监听指定开关
        form.on('switch(switchTest)', function (data) {
            layer.msg('开关checked：' + (this.checked ? 'true' : 'false'), {
                offset: '6px'
            });
            layer.tips('温馨提示：请注意开关状态的文字可以随意定义，而不仅仅是ON|OFF', data.othis)
        });

        //监听提交
        form.on('submit(demo1)', function (data) {
            layer.alert(JSON.stringify(data.field), {
                title: '最终的提交信息'
            })
            return false;
        });


    });
</script>

</body>
</html>