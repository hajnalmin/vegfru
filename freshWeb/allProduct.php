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
<!-- 头部 开始-->
<?php require "header.php"?>
<!-- 头部 结束-->
<!-- banner 结束-->
<div class="banner_allPro"></div>
<!-- banner 结束-->

<!-- content 开始-->
<div class="container">
    <div class="wrap clearFix">
        <div class="con clearFix">
            <!-- 左侧菜单 开始 -->
            <?php require "navLeft.php"?>
            <!-- 左侧菜单 结束 -->
            <!-- 右侧内容 开始 -->

            <div class="con_right clearFix">
                <div class="con_top">
                    <div class="top_title"><span>产品列表</span></div>
                    <div class="top_search clearFix">
                        <div class="search_left">
                            <span class="search_word">当前条件：</span>
                            <a href="javascript:;" id="menu_self" class="search_menu">国产水果 <span>&times;</span></a>
                            <a href="javascript:;" id="menu_import" class="search_menu">进口水果 <span>&times;</span></a>
                            <a href="javascript:;" id="menu_truck" class="search_menu">新鲜时蔬 <span>&times;</span></a>
                        </div>
                        <div class="search_right">
                            <input type="text" placeholder="在当前条件下搜索"/>
                            <i></i>
                        </div>
                    </div>
                    <ul class="top_menu clearFix">
                        <li class="pro_name selected">
                            <span>名称</span>
                            <i></i>
                        </li>
                        <li class="pro_time">
                            <span>上架时间</span>
                            <i></i>
                        </li>
                        <li class="pro_price"><span>价格</span></li>
                        <li class="pro_price_ipt">
                            <input type="text" placeholder="￥"/>
                            <span>-</span>
                            <input type="text" placeholder="￥"/>
                            <button>确定</button>
                        </li>
                        <li class="top_page">
                            <a href="javascript:;">&lt;</a>
                            <span><a href="#">1</a>/3</span>
                            <a href="javascript:;">&gt;</a>
                        </li>
                    </ul>
                    <div class="top_slide">
                        <i></i>
                        <span>幻灯片</span>
                    </div>
                </div>
                <div class="box_list">
                    <!--<div class="box">
                        <img src="common/img/hot_list1.jpg" alt=""/>
                        <p class="box_title"><a href="#">南非进口黄柠檬 6个装</a></p>
                        <p class="box_price">
                            <span>￥</span><span>3.5</span>
                        </p>
                        <p class="buy"><a href="#">购买</a></p>
                    </div>-->
                </div>


            </div>
            <div class="conR_pages">
                <!--<span>上一页</span>
                <span class="on">1</span>
                <span class="nextPage">2</span>
                <span class="nextPage">下一页</span>-->
            </div>
            <!-- 右侧内容 结束 -->


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
                    <span class="addCart"><a href="myCart.html"><i class="icon"></i>加入购物车</a></span>
                    <span class="buyNow">立即购买</span>
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
<?php require "footer.php"?>
<!-- footer 结束-->

<script src="common/js/jquery-1.7.2.js"></script>
<!--<script src="common/js/public.js"></script>-->

</body>
</html>