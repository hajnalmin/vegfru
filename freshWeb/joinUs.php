<?php require "utils/DBConfig.php"?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>联系我们</title>
    <link rel="stylesheet" href="common/css/reset.css"/>
    <link rel="stylesheet" href="common/css/public.css"/>
    <link rel="stylesheet" href="common/css/content.css"/>
    <link rel="stylesheet" href="common/css/joinUs.css"/>
</head>
<body>
<!-- 头部 开始-->
<?php require "header.php" ?>
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
                <!-- 加入我们 信息开始-->
                <div class="con_join">
                    <div class="join_detail clearFix">
                        <div class="aboutPic"><img src="common/img/joinPic.png" alt=""/></div>
                        <div class="aboutDetail">
                            <p>向越来越多的人提供最好吃的水果</p>

                            <p>
                                FRESH蔬果（集团）有限公司以蔬果、水果、粮油、肉类、冻品、水产、南北干货以及花卉等农产品批发市场经营管理、生鲜配送为主力业态。
                                用毕生精力致力于水果产业链和水果专营连锁业态的发展，为消费者提供最好吃的水果。开拓创新立宏愿，决心“一生只做一件事，一心一意做水果”。
                            </p>

                        </div>
                    </div>
                    <form action="handle.php" method="post">
                        <div class="join_form">
                            <p class="form_title">*我们将尽快给您回复，并为您提供最真诚的服务，谢谢您的支持。</p>
                            <input type="hidden"  name="method" value="addLeaveWord"/>
                            <input type="hidden"  name="nowuser" value="<?php echo $_SESSION['ualias']?>"/>
                            <div class="form_group">
                                <p>姓名：</p>
                                <input type="text" placeholder="请输入真实姓名" class="username" name="realname"/>
                            </div>
                            <div class="form_group">
                                <p>电话：</p>
                                <input type="text" placeholder="请输入真实电话" class="userTel" name="realtel"/>
                            </div>
                            <div class="form_group">
                                <p>联系时间：</p>
                                <select id="" class="sel" name="contactdate">
                                    <option value="0" class="gray">请选择</option>
                                    <!--在此处写php代码-->
                                    <?php
                                    if(isset($_SESSION['info'])){
                                        echo "<script>alert('".$_SESSION['info']."')</script>";
                                    }

                                    $db = DBConfig::createDBConfig();
                                    $sql = "SELECT * FROM contactword;";
                                    $arr = $db->queryBySQL($sql);
                                    foreach($arr as $i){
                                        echo '<option value="'.$i['id'].'" class="gray">'.$i['contactword'].'</option>';
                                    }

                                    ?>

                                </select>
                            </div>
                            <div class="form_group">
                                <p>留言内容：</p>
                                <textarea placeholder="请输入留言" class="con" name="content"></textarea>
                            </div>
                            <div class="form_group">
                                <button type="submit">提交</button>
                            </div>
                        </div>
                    </form>


                </div>

                <!-- 加入我们 信息 结束-->
            </div>

        </div>

    </div>
    <!-- 右侧内容 结束 -->


</div>


<!-- content 结束-->
<!-- footer 开始-->
<?php require "footer.php" ?>
<!-- footer 结束-->
<script src="common/js/jquery-1.7.2.js"></script>
<script src="common/js/public.js"></script>
</body>
</html>