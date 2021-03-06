<?php require_once "../utils/DBConfig.php";

//获取关于页码的一些信息--
$size = 5;
$page = isset($_GET['page']) ? $_GET['page'] : 1;


?>
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
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 10px;">
        <legend>商品信息列表</legend>
    </fieldset>
    <table class="layui-table  lay-even" lay-skin="row" style="text-align: left">
        <thead>
        <tr>
            <th>ID</th>
            <th>商品名称</th>
            <th>商品图片</th>
            <th>商品分类</th>
            <th>商品原价</th>
            <th>商品现价</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $db = DBConfig::createDBConfig();
        $arr = $db->queryBySQL("SELECT * FROM `goods` LIMIT " . ($page - 1) * $size . " , $size;");
        $arr2 = $db->queryByVal('cate', []);

        //处理页码数
        $count = $db->queryPageCount('SELECT COUNT(0) FROM goods');
        $countPage = ceil($count / $size);

        foreach ($arr as $i) {
            echo "<tr>";
            echo "<td>" .  $i['id']. "</td>";
            echo "<td>" . $i['goodname'] . "</td>";
            echo "<td><img src='../upfiles/" . $i['goodimg'] . "' width='50' height='50'></td>";

            foreach ($arr2 as $item) {
                if ($item['id'] === $i['goodcateid']) {
                    echo '<td>' . $item['catename'] . '</td>';
                }
            }
            echo "<td>" . $i['oldprice'] . "</td>";
            echo "<td>" . $i['nowprice'] . "</td>";
            echo '<td><a href="admin_handle.php?method=proDel&id=' . $i['id'] . '" class="layui-btn layui-btn-danger layui-btn-mini"></i>删除</a></td>';
            echo "</tr>";

        }
        ?>
        </tbody>
    </table>
    <!--页码数样式-->
    <div id="pageDemo" style="text-align: center;">
        <div class="layui-box layui-laypage layui-laypage-default ">

            <?php
            //处理上一页
            if ($page - 1 < 1) {
                echo "<a href='proInfo_list.php?page=1'>&lt;</a>";
            } else {
                echo "<a href='proInfo_list.php?page=" . ($page - 1) . "'>&lt;</a>";
            }
            //处理中间页
            for ($i = 1; $i <= $countPage; $i++) {
                if ($i == $page) {
                    echo "<a href='proInfo_list.php?page=$i' style='background-color:#009E94;color: #fff;'>$i</a>";
                } else {
                    echo "<a href='proInfo_list.php?page=$i'>$i</a>";
                }
            }

            //处理下一页
            if ($page + 1 > $countPage) {
                echo "<a href='proInfo_list.php?page=" . $page . "'>&gt;</a>";
            } else {
                echo "<a href='proInfo_list.php?page=" . ($page + 1) . "'>&gt;</a>";
            }
            ?>
        </div>
    </div>
</div>


<script src="common/layui/layui.js" charset="utf-8"></script>

<script>
    /*

     (function () {
     layui.use(['laypage', 'layer'], function () {
     var laypage = layui.laypage;
     laypage({
     cont: 'pageDemo',
     pages: 14690,
     skip: true
     });
     });
     })();
     */

</script>

</body>
</html>