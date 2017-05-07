<?php
require_once "utils/DBConfig.php";
$db = DBConfig::createDBConfig();
$id = isset($_GET['id']) ? $_GET['id'] : 1;

$sum = $db->queryBySQL('select count(0) from goods')[0]['count(0)'];

$arr = $db->queryByVal('goods', [
    "id" => $id
]);

$proEachData = $arr[0];


?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>购买</title>
    <link rel="stylesheet" href="common/css/reset.css"/>
    <link rel="stylesheet" href="common/css/public.css"/>
    <link rel="stylesheet" href="common/css/buyPro.css"/>

</head>
<body>
<!-- 头部 开始-->
<?php require "header.php" ?>
<!-- 头部 结束-->
<!-- banner 结束-->
<div class="banner"></div>
<!-- banner 结束-->
<!-- 购买模块 开始-->
<div class="con">
    <div class="wrap clearFix">
        <div class="buy_show clearFix">
            <div class="show_l">
                <div class="pro_pic">
                    <?php echo '<img src="upfiles/' . $proEachData['goodimg'] . '" alt=""/>' ?>
                </div>
                <div class="show_collect">
                    <span class="col_span"><i class="icon2 i1"></i>&nbsp;收藏</span>
                    <span class="col_span"><i class="icon2 i2"></i>&nbsp;分享</span>

                    <div class="show_share">
                        <a href="#">
                            <i class="shareIcon i3"></i>
                        </a>
                        <a href="#">
                            <i class="shareIcon i4"></i>
                        </a>
                        <a href="#">
                            <i class="shareIcon i5"></i>
                        </a>
                        <a href="#">
                            <i class="shareIcon i6"></i>
                        </a>
                        <a href="#">
                            <i class="shareIcon i7"></i>
                        </a>
                        <a href="#">
                            <i class="shareIcon i8"></i>
                        </a>
                        <a href="#">
                            <i class="shareIcon i9"></i>
                        </a>
                        <a href="#">
                            <i class="shareIcon i10"></i>
                        </a>
                        <a href="#">
                            <i class="shareIcon i11"></i>
                        </a>
                        <a href="#">
                            <i class="shareIcon i12"></i>
                        </a>
                        <a href="#">
                            <i class="shareIcon i13"></i>
                        </a>
                    </div>
                </div>
                <div class="show_btn clearFix">
                    <?php echo '<span class="show_l_prev"><a href="buyPro.php?id=' . ($proEachData['id'] == 1 ? 1 : $proEachData['id'] - 1) . '">上一个</a></span>' ?>
                    <?php echo '<span class="show_l_next"><a href="buyPro.php?id=' . ($proEachData['id'] == $sum ? $sum : $proEachData['id'] + 1) . '">下一个</a></span>' ?>
                </div>
            </div>
            <div class="show_r">
                <div class="show_r_title">
                    <!--<span>菠菜280g</span>-->
                    <?php echo '<span>' . $proEachData['goodname'] . '</span>' ?>
                </div>
                <div class="show_r_price">
                    <span>价格</span>
                    <?php echo '<span class="show_r_price_num">' . $proEachData['oldprice'] . '</span>' ?>
                </div>
                <div class="show_r_collect">
                    <span>评论：0条</span>
                    <span>收藏：0条</span>
                </div>
                <div class="show_r_count">
                    <span>购买数量：</span>
                    <input type="text" class="count_input" value="1"/>
                    <i class="arrow" id="up"></i>
                    <i class="arrow" id="down"></i>
                </div>
                <div class="show_r_handel">
                    <span class="addCart">
                        <?php echo "<a href='handle.php?method=addCart&id=".$id."'>";?>
                        <i class="icon"></i>加入购物车</a></span>
                    <span class="buyNow"><a href="myCart.php">立即购买</a></span>
                </div>
            </div>
        </div>
        <div class="buy_detail">
            <div class="buy_detail_top">
                <ul class="top_list clearFix">
                    <li class="title_selected">产品详情</li>
                    <li>产品评论（0）</li>
                    <li>销售记录（0）</li>
                </ul>
            </div>
            <div class="buy_detail_con">
                <ul class="con_list">
                    <li class="detailShow selected">
                        <?php echo '<img src="upfiles/' . $proEachData['detailimg'] . '" alt=""/>' ?>
                    </li>
                    <li class="comment">
                        <form action="handle.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="method" readonly value="proComment">
                            <input type="hidden" name="goodid" readonly value="<?php echo $proEachData['id']?>">
                            <div class="from_group">
                                <span class="form_left">昵称：</span>
                                <input type="text" class="form_right nickname" name="comname"/>
                            </div>
                            <div class="from_group">
                                <span class="form_left">评论内容：</span>
                                <textarea class="form_right right_comment" name="comcon"></textarea>
                            </div>
                            <div class="from_group">
                                <span class="form_left">验证码：</span>
                                <input type="text" class="form_right code_write"/>
                                <span class="show_code">AF7e</span>
                            </div>
                            <div class="from_group uploadPic">
                                <span class="form_left">上传图片：</span>
                                <input type="file" class="upload" name="comimg">
                                <label>+</label>
                                <span class="upload_detail">（可上传 5 张图片,每张不超过5M，支持格式jpg，jpeg，bmp，png，gif）</span>
                            </div>
                            <div class="comment_btn">
                                <button type="submit">提交评论</button>
                            </div>
                        </form>
                    </li>
                    <li class="logs">
                        <div class="logs_title">
                            <span>买家</span>
                            <span>选项信息</span>
                            <span>数量</span>
                            <span>成交时间</span>
                        </div>
                    </li>

                </ul>

            </div>

        </div>
    </div>

</div>
<!-- 购买模块 结束-->
<!-- footer 开始-->
<?php require "footer.php" ?>
<!-- footer 结束-->

<script src="common/js/jquery-1.7.2.js"></script>
<script src="common/js/public.js"></script>
<script src="common/js/buyPro.js"></script>
</body>
</html>