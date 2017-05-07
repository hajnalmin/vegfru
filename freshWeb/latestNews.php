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
            <div class="sidebar">
                <!-- 产品分类开始-->
                <ul class="classify">
                    <li class="s_title"><a href="javascript:;">产品分类</a></li>
                    <li class="s_line"><span id="self_list">国产水果</span></li>
                    <li class="s_line"><span id="import_list">进口水果</span></li>
                    <li><span id="truck_list">新鲜时蔬</span></li>
                </ul>
                <!-- 产品分类结束-->
                <!-- 在线客服开始-->
                <ul class="onService">
                    <li class="s_title"><a href="javascript:;">在线客服</a></li>
                    <!--<li><i></i><a href="#">蜜桃</a></li>
                    <li class="s_line"><i></i><a href="#">芒果</a></li>-->
                    <li class="qq_list">
                        <p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1017331633&site=qq&menu=yes"><img
                                    border="0" src="common/img/qq.gif"><span>蜜桃</span></a></p>

                        <p><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2337637784&site=qq&menu=yes"><img
                                    border="0" src="common/img/qq.gif"/><span>西瓜</span></a></p>
                    </li>

                    <li class="onlineTime">
                        <img src="common/img/serviceOnlineTime1.png" alt=""/>
                        <a href="javascript:;">工作时间</a>
                    </li>
                    <li class="serviceTime">
                        <p>周一至周五 ：8:30-17:30</p>
                        <p>周六至周日 ：9:00-17:00</p>
                    </li>
                </ul>
                <!-- 在线客服结束-->
            </div>
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
                    echo '<p class="art_title">'.$i['newtitle'].'</p>';
                    echo ' <p class="art_detail">'.$i['news'].'</p></div></div>';

                }

                ?>



            </div>
            <div class="conR_pages">
                <span>上一页</span>
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>下一页</span>
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