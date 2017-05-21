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
        <legend>订单列表</legend>
    </fieldset>
    <table class="layui-table  lay-even" lay-skin="row" style="text-align: left">
        <thead>
        <tr>
            <th>ID</th>
            <th>收货人姓名</th>
            <th>收货人电话</th>
            <th>收货人地址</th>
            <th>用户昵称</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $db = DBConfig::createDBConfig();
        $arr = $db->queryBySQL("SELECT * FROM `order` LIMIT " . ($page - 1) * $size . " , $size;");

        //处理页码数
        $count = $db->queryPageCount('SELECT COUNT(0) FROM goods');
        $countPage = ceil($count / $size);
        $index = 1;

        foreach ($arr as $i) {
            echo "<tr>";
            echo "<td>" .  $index. "</td>";
            echo "<td>" . $i['ordername'] . "</td>";
            echo "<td>" . $i['ordertel'] . "</td>";
            echo "<td>" . $i['orderaddress'] . "</td>";
            echo "<td>" . $i['ualias'] . "</td>";
            echo '<td><a href="admin_handle.php?method=orderDel&id=' . $i['id'] . '" class="layui-btn layui-btn-danger layui-btn-mini"></i>删除</a></td>';
            echo "</tr>";
            $index++;
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
                echo "<a href='order_list.php?page=1'>&lt;</a>";
            } else {
                echo "<a href='order_list.php?page=" . ($page - 1) . "'>&lt;</a>";
            }
            //处理中间页
            for ($i = 1; $i <= $countPage; $i++) {
                if ($i == $page) {
                    echo "<a href='order_list.php?page=$i' style='background-color:#009E94;color: #fff;'>$i</a>";
                } else {
                    echo "<a href='order_list.php?page=$i'>$i</a>";
                }
            }

            //处理下一页
            if ($page + 1 > $countPage) {
                echo "<a href='order_list.php?page=" . $page . "'>&gt;</a>";
            } else {
                echo "<a href='order_list.php?page=" . ($page + 1) . "'>&gt;</a>";
            }
            ?>
        </div>
    </div>
</div>


<script src="common/layui/layui.js" charset="utf-8"></script>

</body>
</html>