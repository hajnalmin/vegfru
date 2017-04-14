<?php require_once "../utils/DBConfig.php";?>




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
        <legend>新增商品信息</legend>
    </fieldset>

    <form class="layui-form layui-form-pane" action="admin_handle.php" style="margin:0 200px;" method="post" enctype="multipart/form-data">
        <input type="hidden" name="method" readonly value="proInfoAdd">

        <div class="layui-form-item">
            <label class="layui-form-label">商品名称</label>

            <div class="layui-input-inline">
                <input type="text" name="goodname" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">商品图片</label>

            <div class="layui-box layui-upload-button layui-input-inline">
                    <input type="file" name="goodimg" class="layui-upload-file">

                <span class="layui-upload-icon">点击上传</span>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">商品原价</label>

            <div class="layui-input-inline">
                <input type="text" name="oldprice" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">商品现价</label>

            <div class="layui-input-inline">
                <input type="text" name="nowprice" lay-verify="required" placeholder="请输入" autocomplete="off"
                       class="layui-input" value="0.00">
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">商品分类</label>

            <div class="layui-input-block">
                <select name="goodcateid">
                    <?php
                    $db = DBConfig::createDBConfig();
                    $arr = $db->queryByVal('cate',[]);

                    foreach($arr as $i){
                        echo '<option value="'.$i['id'].'">'.$i['catename'].'</option>';
                    }
                    ?>

                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">详情图片</label>

            <div class="layui-box layui-upload-button layui-input-inline">
                <input type="file" name="detailimg" class="layui-upload-file">

                <span class="layui-upload-icon">点击上传</span>
            </div>
        </div>

        <div class="layui-form-item">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="" >提交</button>
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
            title: function (value) {
                if (value.length < 5) {
                    return '标题至少得5个字符啊';
                }
            }
            , pass: [/(.+){6,12}$/, '密码必须6到12位']

        });


    });
</script>

</body>
</html>