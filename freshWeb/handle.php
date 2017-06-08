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

function logout(){
    session_start();
    if(isset($_SESSION['ualias']))
    {
        $_SESSION['ualias'] = null;
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
        echo "<script>alert('添加成功!')</script>";
        header("location:buyPro.php?id=".$_POST['goodid']);
    }else{
        print_r("添加失败");
    }
}

function addCart($db){
    $arr = $db->queryByVal('goods',[
        "id"=>$_GET['id']
    ]);


    $arr2 = $db->insert('cart',[
        "goodname"=>$arr[0]['goodname'],
        "goodimg"=>$arr[0]['goodimg'],
        "price"=>$arr[0]['oldprice'],
        "count"=>1,
        "goodid"=>$arr[0]['id'],
    ]);
    if(isset($arr2)){
        header('location:myCart.php');
    }else{
        session_start();
        $_SESSION['msg'] = "添加购物车失败，请重新添加";
    }
}

function delCart($db){

    $row = $db->delete('cart',[
        'id'=>$_GET["id"]
    ]);
    if($row > 0){
        header('location:myCart.php');
    }else{
        print_r("删除失败");
    }

}

function addCount($db){

    $arr = $db->queryByVal('cart',[
        "id"=>$_GET['id']
    ]);
    $count = $arr[0]['count'];

    if($count>0){
        $row = $db->update('cart',[
            "count"=>($count+1)
        ],[
            'id'=>$_GET['id']
        ]);
        if($row > 0){
            header('location:myCart.php');
        }
    }else{
        echo "数量为0";
    }
    $row = $db->update('cart',[
        "count"=>($count+1)
    ],[
        'id'=>$_GET['id']
    ]);

    if($row > 0){
        header('location:myCart.php');
    }else{
        print_r("增加成功");
    }
}

function redCount($db){

    $arr = $db->queryByVal('cart',[
        "id"=>$_GET['id']
    ]);
    $count = $arr[0]['count'];

    if($count>1){
        $row = $db->update('cart',[
            "count"=>($count-1)
        ],[
            'id'=>$_GET['id']
        ]);
        if($row > 0){
            header('location:myCart.php');
        }
    }else{
        echo "<script>alert('数量为0')</script>";
        header('location:myCart.php');
    }

}

function addLeaveWord($db){
    $arr = $db->insert('leaveword',[
        "nowuser"=>$_POST['nowuser'],
        "realname"=>$_POST['realname'],
        "realtel"=>$_POST['realtel'],
        "contactdate"=>$_POST['contactdate'],
        "content"=>$_POST['content'],
    ]);
    session_start();
    if(isset($arr)){
        header('location:joinUs.php');
        $_SESSION['info'] = "留言成功";
    }else{
        session_start();
        $_SESSION['info'] = "留言失败";
    }
}

function submitOrder($db){

    $arr = $db->insert('order',[
        "ordername"=>$_POST['ordername'],
        "ordertel"=>$_POST['ordertel'],
        "orderaddress"=>$_POST['orderaddress'],
        "ualias"=>$_POST['ualias']
    ]);


    echo $_POST['ordername'];
    echo $_POST['ordertel'];
    echo $_POST['orderaddress'];
    echo $_POST['ualias'];
    echo isset($arr);

    if(isset($arr)){
        header('location:myOrder.php');
    }else{
        session_start();
        $_SESSION['msg'] = "订单失败，请重新选择";
    }


}



function nav($method){
    $db = DBConfig::createDBConfig();
    $method($db);
}

nav($method);