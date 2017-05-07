<?php
require "utils/DBConfig.php";
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>全部产品</title>
    <link rel="stylesheet" href="common/css/reset.css"/>
    <link rel="stylesheet" href="common/css/public.css"/>
    <link rel="stylesheet" href="common/css/content.css"/>
</head>
<body>

<?php require "header.php" ?>

<!-- banner 结束-->
<div class="banner"></div>
<!-- banner 结束-->

<!-- content 开始-->
<div class="container">
    <div class="wrap clearFix">
        <div class="con clearFix">
            <!-- 左侧菜单 开始 -->
            <?php require "navLeft.php" ?>
            <!-- 左侧菜单 结束 -->
            <!-- 右侧内容 开始 -->
            <div class="con_right clearFix">
                <div class="box_list">
                    <!--<div class="box">
                        <img src="common/img/hot_list1.jpg" alt=""/>
                        <p class="box_title"><a href="#">南非进口黄柠檬 6个装</a></p>
                        <p class="box_price">
                            <span>￥</span><span>3.5</span>
                        </p>
                        <p class="buy"><a href="#">购买</a></p>
                    </div>-->

                    <?php

                    $size = 8;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;

                    $db = DBConfig::createDBConfig();
                    $arr = $db->queryBySQL("SELECT * FROM `goods` LIMIT " . ($page - 1) * $size . " , $size;");

                    //处理页码数
                    $count = $db->queryPageCount('SELECT COUNT(0) FROM goods');
                    $countPage = ceil($count / $size);



                    foreach ($arr as $i) {
                        echo '<div class="box">';
                        echo "<img src='upfiles/" . $i['goodimg'] . "'>";
                        echo '<p class="box_title"><a href="#">'.$i['goodname'].'</a></p>';
                        echo '<p class="box_price">';
                        echo '<span>￥</span><span>'.$i['oldprice'].'</span></p>';
                        echo '<p class="buy"><a href="buyPro.php?id='.$i['id'].'">购买</a></p></div>';
                    }

                    ?>
                </div>


            </div>
            <!-- 右侧内容 结束 -->
            <!--页码数样式-->
            <div class="conR_pages" style="text-align: center;">
                    <?php
                    //处理上一页
                    if ($page - 1 < 1) {
                        echo "<span><a href='allProduct.php?page=1'>&lt;</a></span>";
                    } else {
                        echo "<span><a href='allProduct.php?page=" . ($page - 1) . "'>&lt;</a></span>";
                    }
                    //处理中间页
                    for ($i = 1; $i <= $countPage; $i++) {
                        if ($i == $page) {
                            echo "<span><a href='allProduct.php?page=$i' class='on'>$i</a></span>";
                        } else {
                            echo "<span><a href='allProduct.php?page=$i'>$i</a></span>";
                        }
                    }

                    //处理下一页
                    if ($page + 1 > $countPage) {
                        echo "<span><a href='allProduct.php?page=" . $page . "'>&gt;</a></span>";
                    } else {
                        echo "<span><a href='allProduct.php?page=" . ($page + 1) . "'>&gt;</a></span>";
                    }
                    ?>

            </div>

        </div>

    </div>


</div>
<div>
    <!-- 幻灯片 开始-->
    <div class="filmslide">
        <div class="filmS_con clearFix">
            <div class="film_l">
                <div class="l_img">
                    <!--<img src="common/img/self_list1.jpg" alt=""/>-->
                </div>
            </div>
            <div class="film_r">
                <div class="film_r_title">
                    <!--<span>大红脆甜水蜜桃 5斤</span>-->
                </div>
                <div class="film_r_price">
                    <span>价格</span>
                    <span class="show_r_price_num">
                        <!--￥29.00-->
                    </span>
                </div>
                <div class="film_r_count">
                    <span>购买数量：</span>
                    <input type="text" class="count_input" value="1"/>
                    <i class="arrow" id="up"></i>
                    <i class="arrow" id="down"></i>
                </div>
                <div class="film_r_handel">
                    <span class="addCart"><a href="myCart.php">加入购物车</a></span>
                    <span class="buyNow"><a href="myCart.php">立即购买</a></span>
                </div>
                <!-- 关闭按钮开始-->
                <a href="javascript:;" class="close">&times;</a>
                <!-- 关闭按钮结束-->
            </div>
            <span class="btn_arrow" id="prev"></span>
            <span class="btn_arrow" id="next"></span>
            <!-- 轮播图 开始-->
            <ul class="list">
                <!--<li class="on">
                    <img src="common/img/list_img1.jpg" alt=""/>
                </li>
                <li><img src="common/img/list_img2.jpg" alt=""/></li>
                <li><img src="common/img/list_img3.jpg" alt=""/></li>
                <li><img src="common/img/list_img4.jpg" alt=""/></li>
                <li><img src="common/img/list_img5.jpg" alt=""/></li>
                <li><img src="common/img/list_img6.jpg" alt=""/></li>
                <li><img src="common/img/list_img7.jpg" alt=""/></li>
                <li><img src="common/img/list_img8.jpg" alt=""/></li>
                <li><img src="common/img/list_img9.jpg" alt=""/></li>
                <li><img src="common/img/list_img10.jpg" alt=""/></li>
                <li><img src="common/img/list_img11.jpg" alt=""/></li>-->
            </ul>
            <!-- 轮播图 结束-->

        </div>

    </div>
</div>
<!-- 幻灯片 结束-->


<!-- content 结束-->
<!-- footer 开始-->
<?php require "footer.php" ?>
<!-- footer 结束-->

<script src="common/js/jquery-1.7.2.js"></script>
<!--<script src="common/js/public.js"></script>-->
<script>


</script>

</body>
</html>