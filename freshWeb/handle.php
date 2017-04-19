<?php
require "utils/DBConfig.php";
require "upload.php";

if(isset($_POST["method"])){
    $method = $_POST["method"];
}else{
    $method = $_GET["method"];
}

$db = "";


function reg($db){
    $arr = $db->insert('users',[
        "ualias"=>$_POST['ualias'],
        "uname"=>$_POST['uname'],
        "upwd"=>$_POST['upwd'],
        "uemail"=>$_POST['uemail'],
        "utel"=>$_POST['utel'],
    ]);
    if(isset($arr)){
        header('location:login.php');
    }else{
        session_start();
        $_SESSION['msg'] = "注册失败，请重新输入信息";
    }
}

function login($db){
    $arr = $db->queryByVal('users',[
        "ualias"=>$_POST['ualias'],
        "upwd"=>$_POST['upwd']
    ]);

    session_start();
    if(isset($arr)){

        $_SESSION['ualias'] = $arr[0]['ualias'];

        header("location:index.php");

    }else{
        $_SESSION['msg'] = "账号或密码不正确，请重新输入";
        header("location:login.php");
    }
}


function proComment($db){

    $comimg = $_FILES['comimg'];
    $comimgsize = $_FILES['comimg']['size'];
    $comimgname = $_FILES['comimg']['name'];
    $comimgtype = $_FILES['comimg']['type'];


    $comimgTep = upload($comimg,$comimgsize, $comimgname, $comimgtype);


    $row = $db->insert('comments',[
        "comname"=>$_POST['comname'],
        "comcon"=>$_POST['comcon'],
        "comimg"=>$comimgTep,
        "goodid"=>$_POST['goodid']
    ]);

    if($row > 0){
        print_r("添加成功");
    }else{
        print_r("添加失败");
    }

}

function nav($method){
    $db = DBConfig::createDBConfig();
    $method($db);
}

nav($method);