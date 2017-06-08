<?php
require_once "utils/DBConfig.php";
$db = DBConfig::createDBConfig();
$id = isset($_GET['id']) ? $_GET['id'] : 1;

$arr = $db->queryByVal('news', [
    "id" => $id
]);

$newEachData = $arr[0];

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF_8">
    <title>资讯信息</title>
    <link rel="stylesheet" href="common/css/reset.css"/>
    <link rel="stylesheet" href="common/css/public.css"/>
    <link rel="stylesheet" href="common/css/articleCon.css"/>
    <style>
        .con .con_right {
            margin: 0 120px;
        }
        .con .con_title{
            margin: 20px;
            font-size: 20px;
        }
        .info{
            text-align: left;
        }
    </style>
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
            <!-- 右侧内容 开始 -->

            <div class="con_right clearFix">

                <?php
                    echo "<p class='con_title'>".$newEachData['newtitle']."</p>";
                    echo "<p class='info'>".$newEachData['news']."</p>";

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