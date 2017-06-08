<?php

session_start();
if (isset($_SESSION['ualias'])) {
    $ualias = $_SESSION['ualias'];
} else {
    $ualias = null;
    //header('location:login.php');
}

?>
<!-- 头部 开始-->
<div class="top">
    <div class="wrap clearFix">
        <div class="topUser">
            <?php

            if(isset($ualias)){
                echo "<span>当前用户：</span>";
                echo "<span>".$ualias."</span>";
                echo "<span>&nbsp;&nbsp;<a href='myOrder.php'>[个人中心]</a></span>";
                echo '</div><div class="topCart">';
                echo '<span><a href="handle.php?method=logout" style="color: blue;">[ 退出 ]</a></span></div>';
            }else{
                echo "<span>当前身份：游客</span>";
                echo '</div><div class="topCart">';
                echo '<span><a href="login.php" style="color: red;">登录</a> | <a href="reg.php" style="color: red;">注册</a></span></div>';
            }
        ?>
    </div>
</div>
<div class="head">
    <div class="wrap clearFix">
        <div class="logo">
            <img src="common/img/logo.jpg" alt=""/>
        </div>
        <ul class="nav">
            <li class="selected">
                <div class="reverse">
                    <a href="index.php">首页</a>
                    <a href="index.php">Index</a>
                </div>
            </li>
            <li>
                <div class="reverse">
                    <a href="hotSale.php">蔬果热卖</a>
                    <a href="hotSale.php">HotSale</a>
                </div>
            </li>
            <li>
                <div class="reverse">
                    <a href="allProduct.php">全部产品</a>
                    <a href="allProduct.php">AllProduct</a>
                </div>
            </li>
            <li>
                <div class="reverse">
                    <a href="latestNews.php">最新资讯</a>
                    <a href="latestNews.php">LatestNews</a>
                </div>
            </li>
            <li>
                <div class="reverse">
                    <a href="joinUs.php">联系我们</a>
                    <a href="joinUs.php">ContactUs</a>
                </div>
            </li>
        </ul>
        <div class="cart">
            <i class="cartL icon"></i>
            <a href="myCart.php" title="点击跳转到购物车">我的购物车</a>
            <i class="cartR icon"></i>
        </div>
    </div>
</div>
<!-- 头部 结束-->