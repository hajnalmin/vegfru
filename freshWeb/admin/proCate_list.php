<?php require_once "../utils/DBConfig.php" ?>
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

<div style="padding:10px 20px;overflow:hidden;">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
        <legend>商品分类列表</legend>
    </fieldset>

    <table class="layui-table" lay-skin="row" style="text-align: left">
        <thead>
        <tr>
            <th>ID</th>
            <th>商品分类名称</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $db = DBConfig::createDBConfig();
        $arr = $db->queryByVal('cate',[]);
        $index = 1;

        foreach ($arr as $i) {
            echo "<tr>";
            echo "<td>" .  $index . "</td>";
            echo "<td>" . $i['catename'] . "</td>";
            echo '<td><a href="admin_handle.php?method=proCateDel&id='.$i['id'].'" class="layui-btn layui-btn-danger layui-btn-mini"></i>删除</a></td>';
            echo "</tr>";
            $index++;
        }
        ?>
        </tbody>
    </table>
</div>


<script src="common/layui/layui.js" charset="utf-8"></script>

<script>
    layui.use('form', function () {
        var $ = layui.jquery, form = layui.form();

        //全选
        form.on('checkbox(allChoose)', function (data) {
            var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');
            child.each(function (index, item) {
                item.checked = data.elem.checked;
            });
            form.render('checkbox');
        });

    });
</script>

</body>
</html>