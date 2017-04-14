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
            <div class="order_info">
                <div class="form_grounp">
                    <span class="g_left">收货人姓名：</span>
                    <input type="text" class="g_right username"/>
                    <span class="red">*以字母开头,其余的是字母数字下划线均可，6-18位</span>
                </div>
                <div class="form_grounp">
                    <span class="g_left">邮箱：</span>
                    <input type="text" class="g_right email"/>
                    <span class="red">*邮箱不能以特殊字符_开头,以cn、com等结尾</span>
                </div>
                <div class="form_grounp">
                    <span class="g_left">电话：</span>
                    <input type="text" class="g_right tel"/>
                    <span class="red">*11位手机号码</span>
                </div>
                <div class="form_grounp">
                    <span class="g_left">邮政编码：</span>
                    <input type="text" class="g_right postalcode"/>
                    <span class="red">*6位数字</span>
                </div>
                <div class="form_grounp">
                    <span class="g_left">地址：</span>
                    <input type="text" class="g_right address"/>
                    <span class="red">*请认真填写,不能为空</span>
                </div>
            </div>
            <div class="form_title">
                <span>配送方式</span>
            </div>
            <div class="dis_method">
                <div class="form_grounp">
                    <input type="radio" name="payWay" checked="checked"/>
                    <span>平邮	费用：￥5.0</span>
                </div>
                <div class="form_grounp">
                    <input type="radio" name="payWay"/>
                    <span>快递	费用：￥10.0</span>
                </div>
                <div class="form_grounp">
                    <input type="radio" name="payWay"/>
                    <span>EMS	费用：￥100.0</span>
                </div>
            </div>
            <div class="form_title">
                <span>支付方式</span>
            </div>
            <div class="buy_method">
                <div class="form_grounp">
                    <input type="radio" name="payMethod" checked="checked"/>
                    <span> 货到付款   您需要在收货时用现金等方式向送货员支付订单款项。</span>
                </div>
                <div class="form_grounp">
                    <input type="radio" name="payMethod"/>
                    <span>银行转账   您汇款时请务必在电汇单的用途栏内注明订单号。</span>
                </div>
            </div>
            <div class="form_title">
                <span>购物清单</span>
            </div>
            <div class="buy_list">
                <table>
                    <tr>
                        <td>名称</td>
                        <td>价格</td>
                        <td>数量</td>
                        <td>小计</td>
                    </tr>
                    <tr>
                        <td>菠菜</td>
                        <td>￥3.50</td>
                        <td>1</td>
                        <td>￥3.50</td>
                    </tr>
                    <tr>
                        <td>进口香蕉超甜蕉</td>
                        <td>￥8.00</td>
                        <td>1</td>
                        <td>￥8.00</td>
                    </tr>
                    <tr>
                        <td>菲律宾进口菠萝凤梨 2个</td>
                        <td>￥38.00</td>
                        <td>1</td>
                        <td>￥38.00</td>
                    </tr>
                </table>
            </div>
            <div class="form_title">
                <span>给卖家留言</span>
            </div>
            <div class="message clearFix">
                <div class="form_grounp">
                    <input type="text" class="g_right" placeholder="选填：对本次交易的说明（建议填写和卖家达成一致的说明）"/>
                </div>
            </div>
            <div class="confirm_order">
                <div>
                    <span>总计：</span>
                    <span>￥49.50</span>
                </div>
                <div>
                    <span>已节省：</span>
                    <span>￥0.00</span>
                </div>
                <div>
                    <span class="bs">应支付金额：</span>
                    <span>￥49.50</span>
                </div>
                <div>
                    <button class="btn">提交订单</button>
                </div>
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