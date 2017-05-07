<?php
require "utils/DBConfig.php";


?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>蔬果热卖</title>
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

                    $goodcateid = isset($_GET['proCate']) ? $_GET['proCate']:"1";
                    $db = DBConfig::createDBConfig();
                    $arr = $db->queryByVal('goods', ['goodcateid' => $goodcateid]);

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


        </div>

    </div>


</div>


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