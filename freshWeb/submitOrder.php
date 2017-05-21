<?php require "utils/DBConfig.php"?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>提交订单</title>
    <link rel="stylesheet" href="common/css/reset.css"/>
    <link rel="stylesheet" href="common/css/public.css"/>
    <link rel="stylesheet" href="common/css/order.css"/>

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
                <span>订单结算</span>
            </div>
            <div class="form_title">
                <span>收货人信息</span>
            </div>
            <form action="handle.php" method="post">
                <input type="hidden" value="submitOrder" name="method">
                <input type="hidden" value="<?php echo $ualias;?>" name="ualias">
                <div class="order_info">
                    <div class="form_grounp">
                        <span class="g_left">收货人姓名：</span>
                        <input type="text" class="g_right username" name="ordername"/>
                        <span class="red">*请填写收货人姓名</span>
                    </div>
                    <div class="form_grounp">
                        <span class="g_left">电话：</span>
                        <input type="text" class="g_right tel" name="ordertel"/>
                        <span class="red">*11位手机号码</span>
                    </div>
                    <div class="form_grounp">
                        <span class="g_left">地址：</span>
                        <input type="text" class="g_right address" name="orderaddress"/>
                        <span class="red">*请认真填写,不能为空</span>
                    </div>
                </div>
                <div class="confirm_order">
                    <div>
                        <button class="btn" type="submit">提交订单</button>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>
<!-- 订单模块结束-->
<!-- footer 开始-->
<?php require "footer.php"?>
<!-- footer 结束-->

<script src="common/js/jquery-1.7.2.js"></script>
<script src="common/js/public.js"></script>
<!--<script src="common/js/mycart.js"></script>-->

</body>
</html>