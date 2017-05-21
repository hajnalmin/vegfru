<?php
require "utils/DBConfig.php";
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>最新资讯</title>
    <link rel="stylesheet" href="common/css/reset.css"/>
    <link rel="stylesheet" href="common/css/public.css"/>
    <link rel="stylesheet" href="common/css/articleCon.css"/>
</head>
<body>
<!-- 头部 开始-->
<?php require "header.php"?>
<!-- 头部 结束-->
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
                <!-- 文章列表开始-->
<!--
                <div class="articleList clearFix">
                    <div class="artList_date">
                        <p>28</p>
                        <p>2016/11</p>
                    </div>
                    <div class="artList_info">
                        <p class="art_title">谁在为“蒜你狠”推波助澜</p>
                        <p class="art_detail">近期，部分城市大蒜零售价格超过每公斤20元，多地大蒜价格同比上涨90％以上，不少人惊呼“蒜你狠”卷土重来。　　“新...</p>
                    </div>
                </div>
                <!-- 文章列表结束-->


                <?php
                $db = DBConfig::createDBConfig();
                $arr = $db->queryBySQL("select * from news");

                foreach ($arr as $i) {
                    $timestamp =strtotime($i['newdate']);
                    $time = date("Y-m-d",$timestamp);
                    $lastDate = explode('-', $time)[2];
                    $firstDate = explode('-', $time)[0].'/'.explode('-', $time)[1];


                    echo '<div class="articleList clearFix"><div class="artList_date">';
                    echo "<p>".$lastDate."</p><p>".$firstDate."</p></div>";
                    echo '<div class="artList_info">';
                    echo '<p class="art_title"><a href="newsDetail.php?id='.$i['id'].'">'.$i['newtitle'].'</a></p>';
                    echo ' <p class="art_detail">'.$i['news'].'</p></div></div>';

                }

                ?>



            </div>

        </div>

    </div>
    <!-- 右侧内容 结束 -->


</div>



<!-- content 结束-->
<!-- footer 开始-->
<?php require "footer.php"?>
<!-- footer 结束-->

<script src="common/js/jquery-1.7.2.js"></script>
<script src="common/js/public.js"></script>
</body>
</html>