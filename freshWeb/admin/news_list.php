<?php require_once "../utils/DBConfig.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="common/layui/css/layui.css"  media="all">
    <style>
    </style>
</head>
<body>


<div style="padding:10px 20px;overflow:hidden;">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
        <legend>资讯列表</legend>
    </fieldset>

    <table class="layui-table  lay-even"  lay-skin="row" style="text-align: center;table-layout: fixed;width:1100px">
        <thead>
        <tr>
            <th width="100">ID</th>
            <th width="250">资讯标题</th>
            <th width="200">发表时间</th>
            <th>资讯内容</th>
            <th width="100">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $db = DBConfig::createDBConfig();
        $sql = "SELECT * FROM `news`";
        $arr = $db->queryBySQL($sql);

        foreach ($arr as $i) {
            echo "<tr>";
            echo "<td>" . $i['id'] . "</td>";
            echo "<td>" . $i['newtitle'] . "</td>";
            echo "<td>" . $i['newdate'] . "</td>";
            echo '<td style="white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">' . $i['news'] . "</td>";
            echo '<td><a href="admin_handle.php?method=newDel&id='.$i['id'].'" class="layui-btn layui-btn-danger layui-btn-mini"></i>删除</a></td>';
            echo "</tr>";

        }
        ?>
        </tbody>
    </table>
</div>



<script src="common/layui/layui.js" charset="utf-8"></script>

<script>
    layui.use('form', function(){
        var $ = layui.jquery, form = layui.form();

        //全选
        form.on('checkbox(allChoose)', function(data){
            var child = $(data.elem).parents('table').find('tbody input[type="checkbox"]');
            child.each(function(index, item){
                item.checked = data.elem.checked;
            });
            form.render('checkbox');
        });

    });
</script>

</body>
</html>