<?php require "utils/DBConfig.php"?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>我的订单</title>
    <link rel="stylesheet" href="common/css/reset.css"/>
    <link rel="stylesheet" href="common/css/public.css"/>
    <link rel="stylesheet" href="common/css/order.css"/>
    <style>
        .rowData{
            margin:15px;
            text-align: center;
        }
        .rowData span{
            display: inline-block;
            width:150px;
            border-bottom:1px solid #EAEAEA;
        }
        .buybtn{
            background-color: #4ab344;
            padding: 10px 30px;
            cursor: pointer;
            border-radius: 3px;
            width: 60px;
            margin: 10px 110px 20px 0;
            float: right;
        }
        .buybtn a{
            color:white;
        }
    </style>
</head>
<body>
<!-- 头部 开始-->
<?php require "header.php"?>
<!-- 头部 结束-->
<!-- banner 结束-->
<div class="banner">
    <div class="banner_list">
        <div class="list_title">
            <i></i>商城分类
        </div>
        <ul class="list_detail">
            <li><a href="allProduct.php">国产水果</a></li>
            <li><a href="allProduct.php">进口水果</a></li>
            <li><a href="allProduct.php">新鲜时蔬</a></li>
        </ul>
    </div>
</div>
<!-- banner 结束-->
<!-- 订单模块 开始-->
<div class="con">
    <div class="wrap clearFix">
        <div class="order">
            <div class="order_title">
                <span>我的订单</span>
            </div>
            <div class="rowData">
                <span>订单编号</span><span>收货人姓名</span><span>收货人电话</span><span>收货人地址</span>
            </div>
            <?php
            $db = DBConfig::createDBConfig();
            $sql = "SELECT * FROM `order` ";
            $arr = $db->queryBySQL($sql);
            $index = 1;
            foreach ($arr as $i) {
                echo '<div class="rowData"><span>'.$index.'</span>';
                echo '<span>'.$i['ordername'].'</span>';
                echo '<span>'.$i['ordertel'].'</span>';
                echo '<span>'.$i['orderaddress'].'</span></div>';
                $index++;
            }
            ?>
            <div>
                <p class="buybtn">
                    <a href="allProduct.php">继续购物</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- 订单模块结束-->
<!-- footer 开始-->
<?php require "footer.php"?>
<!-- footer 结束-->

<script src="common/js/jquery-1.7.2.js"></script>
<script src="common/js/public.js"></script>
<script src="common/js/mycart.js"></script>

</body>
</html>