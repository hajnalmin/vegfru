<?php
require "utils/DBConfig.php";
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>果然新鲜</title>
    <link rel="stylesheet" href="common/css/reset.css"/>
    <link rel="stylesheet" href="common/css/public.css"/>
    <link rel="stylesheet" href="common/css/index.css"/>
</head>
<body>
<!-- 头部 开始-->
<?php require "header.php"?>
<!-- 头部 结束-->


<!-- banner 结束-->
<div class="banner"></div>
<!-- banner 结束-->

<!-- pic_show 开始-->
<div class="pic_show">
    <div class="wrap clearFix">
        <div class="box">
            <img src="common/img/list1.jpg" alt=""/>
        </div>
        <div class="box">
            <img src="common/img/list2.jpg" alt=""/>
        </div>
        <div class="box">
            <img src="common/img/list3.jpg" alt=""/>
        </div>
    </div>
</div>
<!-- pic_show 结束-->

<!-- pic_show 开始-->
<div class="recommend">
    <div class="wrap clearFix">
        <div class="re_title">
            <span>果园推荐</span>
            <span>RECOMMAND</span>
        </div>
        <div class="re_con clearFix">
            <div class="con_left">
                <img src="common/img/list4.jpg" alt=""/>
            </div>
            <div class="con_right">

                <?php
                $db = DBConfig::createDBConfig();
                $sql = "SELECT * FROM `goods`  where goodcateid = 2 LIMIT 6";
                $arr = $db->queryBySQL($sql);

                foreach ($arr as $i) {
                    echo '<div class="box">';
                    echo "<img src='upfiles/" . $i['goodimg'] . "'>";
                    echo '<p class="box_title"><a href="#">'.$i['goodname'].'</a></p>';
                    echo '<p class="box_price">';
                    echo '<span>￥</span><span>'.$i['oldprice'].'</span><span>￥0.00</span></p>';
                    echo '<p class="buy"><a href="buyPro.php?id='.$i['id'].'">购买</a></p></div>';
                }
                ?>


               <!-- <div class="box">
                    <img src="common/img/pic1.jpg" alt=""/>
                    <p class="box_title"><a href="#">南非进口黄柠檬 6个装</a></p>
                    <p class="box_price">
                        <span>￥</span><span>29.00</span>
                        <span>￥0.00</span>
                    </p>
                    <p class="buy"><a href="buyPro.php">购买</a></p>
                </div>-->

            </div>
        </div>

    </div>
</div>
<!-- pic_show 结束-->
<!-- sale开始-->
<div class="sale">
    <div class="wrap clearFix">
        <!-- sale 标题开始-->
        <div class="sale_title">
            <div class="sTitle_top">
                <span>———————</span>
                <b>&nbsp;每日新品特卖&nbsp;</b>
                <span>———————</span>
            </div>
            <div class="sTitle_bottom">
                <span>新鲜水果每一天，健康生活每一刻</span>
            </div>
        </div>
        <!-- sale 标题结束-->
        <!-- 热门水果 开始-->
        <div class="sale_hot clearFix">
            <div class="hotList">
                <p>有机生鲜</p>

                <p>天然无污染水果</p>

                <p><span>6.8折</span>起</p>

                <p><a href="hotSale.php">查看详情 ></a></p>
            </div>
            <div class="hotPic">
                <img src="common/img/list5.jpg" alt=""/>
            </div>
        </div>
        <!-- 热门水果 结束-->
        <!-- 水果展示 开始-->
        <div class="sale_show clearFix">
            <div class="box">
                <img src="common/img/list6.jpg" alt=""/>
            </div>
            <div class="box">
                <img src="common/img/list7.jpg" alt=""/>
            </div>
            <div class="box">
                <img src="common/img/list8.jpg" alt=""/>
            </div>
            <div class="box">
                <img src="common/img/list9.jpg" alt=""/>
            </div>
        </div>
        <!-- 水果展示 结束-->
    </div>
</div>
<!-- sale 结束-->
<!-- info 开始-->
<div class="info">
    <div class="wrap">
        <div class="infoTitle">
            <span>蔬菜资讯</span>
            <span><a href="latestNews.php">更多资讯</a></span>
        </div>
        <div class="infoCon clearFix">
            <div class="infoL clearFix">
                <ul class="infoL_detail">
                    <li class="infoL_title">
                        <span>品种</span>
                        <span>地区</span>
                        <span>价格</span>
                        <span>时间</span>
                    </li>
                </ul>
                <div class="infoL_con">
                    <ul class="infoL_con1">
                        <li>
                            <span>苹果</span>
                            <span>河南省济源市</span>
                            <span>5.5/kg</span>
                            <span>04-09</span>
                        </li>
                        <li>
                            <span>西瓜</span>
                            <span>内蒙古鄂尔多斯</span>
                            <span>10/kg</span>
                            <span>04-09</span>
                        </li>
                        <li>
                            <span>葡萄</span>
                            <span>新疆乌鲁木齐</span>
                            <span>19/kg</span>
                            <span>04-09</span>
                        </li>
                        <li>
                            <span>车厘子</span>
                            <span>河南省郑州市</span>
                            <span>58.5/kg</span>
                            <span>04-09</span>
                        </li>
                        <li>
                            <span>菜心</span>
                            <span>河南省新乡市</span>
                            <span>5.5/kg</span>
                            <span>04-09</span>
                        </li>
                        <li>
                            <span>西兰花</span>
                            <span>河南省信阳市</span>
                            <span>3.5/kg</span>
                            <span>04-09</span>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="infoR">
                <ul class="infoR_list">
                    <li class="active"><img src="common/img/list10.jpg"/></li>
                    <li><img src="common/img/list11.jpg"/></li>
                    <li><img src="common/img/list12.jpg"/></li>
                </ul>
                <ul class="infoR_btns">
                    <li class="btns_info">
                        <p class="on">蜜橘首发</p>

                        <p>进口青苹果</p>

                        <p>智利车厘子</p>
                    </li>
                    <li class="btns_a">
                        <a class="on">1</a>
                        <a>2</a>
                        <a>3</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- info 结束-->
<?php require "footer.php"?>

<script src="common/js/jquery-1.7.2.js"></script>
<script src="common/js/public.js"></script>
<script>

</script>
</body>
</html>