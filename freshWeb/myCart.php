<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>我的购物车</title>
    <link rel="stylesheet" href="common/css/reset.css"/>
    <link rel="stylesheet" href="common/css/public.css"/>
    <link rel="stylesheet" href="common/css/mycart.css"/>

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
            <li><a href="hotSale.php">国产水果</a></li>
            <li><a href="hotSale.php">进口水果</a></li>
            <li><a href="hotSale.php">新鲜时蔬</a></li>
        </ul>
    </div>
</div>
<!-- banner 结束-->
<!-- 购买模块 开始-->
<div class="con">
    <div class="wrap clearFix">
        <!-- 购物车 开始-->
        <div id="box">
            <div class="box_title">
                <span>我的购物车</span>
            </div>
            <div id="content_box">
                <div class="box_top">
                    <div class="check_top">
                        <input type="checkbox" id="all" />全选
                    </div>
                    <div class="pudc_top">商品</div>
                    <div class="pices_top">单价</div>
                    <div class="num_top">数量</div>
                    <div class="totle_top">小计</div>
                    <div class="del_top">操作</div>
                </div>
                <div class="box_con">
                    <div class="imfor">
                        <div class="check">
                            <input type="checkbox" class="Each" />
                        </div>
                        <div class="pudc"><img src="common/img/hot_list1.jpg" />菠菜280g</span>
                        </div>
                        <div class="pices">3.50</div>
                        <div class="num"><span class="reduc">&nbsp;-&nbsp;</span><input type="text" value="1" /><span class="add">&nbsp;+</span></div>
                        <div class="totle">3.50</div>
                        <div class="del">删除</div>
                    </div>
                    <div class="imfor">
                        <div class="check">
                            <input type="checkbox" class="Each" />
                        </div>
                        <div class="pudc"><img src="common/img/hot_list2.jpg" />进口香蕉超甜蕉</span>
                        </div>
                        <div class="pices">8.00</div>
                        <div class="num"><span class="reduc">&nbsp;-&nbsp;</span><input type="text" value="1" /><span class="add">&nbsp;+</span></div>
                        <div class="totle">8.00</div>
                        <div class="del">删除</div>
                    </div>
                    <div class="imfor">
                        <div class="check">
                            <input type="checkbox" class="Each" />
                        </div>
                        <div class="pudc"><img src="common/img/hot_list3.jpg" />菲律宾进口菠萝凤梨 2个</span>
                        </div>
                        <div class="pices">38.00</div>
                        <div class="num"><span class="reduc">&nbsp;-&nbsp;</span><input type="text" value="1" /><span class="add">&nbsp;+</span></div>
                        <div class="totle">38.00</div>
                        <div class="del">删除</div>
                    </div>
                </div>
            </div>
            <div class="foot">
                <div class="foot_cash"><a href="submitOrder.php">结算</a></div>
                <div class="foot_tol"><span>合计：￥</span><span id="susum">0</span></div>
            </div>
        </div>
        <!-- 购物车 结束-->

    </div>

</div>
<!-- 购买模块 结束-->
<!-- footer 开始-->
<?php require "footer.php"?>
<!-- footer 结束-->

<script src="common/js/jquery-1.7.2.js"></script>
<script src="common/js/public.js"></script>
<script src="common/js/mycart.js"></script>


<script>


</script>
</body>
</html>