<?php
require_once "utils/DBConfig.php";

//1.定义一个常量UPLOAD_PATH，它的内容为网站的路径D:/study/xmapp/htdocs/month4/week2/03zhmKJ/phpCart-upload-img/uploads
define('UPLOAD_PATH', dirname(__FILE__) . "/upfiles/");

//2.上传图片函数
function upload($filename,$size, $name, $type)
{
    //判断条件是否允许上传图片：size>0且name存在
    if ($size > 0 && $name) {
        //判断上传图片类型
        if (!($type == "image/gif" || $type == "image/jpg" || $type == "image/jpeg" || $type == "image/png")) {
            echo "图片只能为GIF、JPGE、JPG、PNG格式";
        } else {

            list($tmp, $file_ext) = explode("/", $type);
            //随机生成图片名
            $photoNewName = mt_rand() . "_" . time() . "." . $file_ext;

            //判断是否是通过HTTP POST上传的
            if (!is_uploaded_file($filename['tmp_name'])) {
                //如果不是通过HTTP POST上传的
                return;
            }

            if (move_uploaded_file($filename['tmp_name'], UPLOAD_PATH . $photoNewName)) {
                $fileTepName = $photoNewName;
                return $fileTepName;
                echo "图片插入成功" . "<br/>";
            } else {
                echo "图片上传失败！";
                echo "<a href=javascript:window.history.go(-1)>返回</a>";
                exit(); // 下面的操作将不会进行;
            }
        }
    }


}
?>
