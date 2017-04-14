<?php
require_once "utils/DBConfig.php";

$proCate = $_GET['proCate'];

if(isset($proCate)){
    $db = DBConfig::createDBConfig();
    switch ($proCate){
        case "self_list":
            $goodcateid = 1;//定义获取的ID
            break;
        case "import_list":
            $goodcateid = 2;//定义获取的ID
            break;
        case "truck_list":
            $goodcateid = 3;//定义获取的ID
            break;
        default;

    }
    $arr = $db->queryByVal('goods', ['goodcateid' => $goodcateid]);
}
echo json_encode($arr);