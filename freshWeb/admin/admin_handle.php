<?php
require "../utils/DBConfig.php";
require "../upload.php";

if(isset($_POST['method'])){
    $method = $_POST['method'];
}else{
    $method = $_GET['method'];
}

function goList(){
    header('location:index.php');
}
function nav($method){
    $db = DBConfig::createDBConfig();
    $method($db);
}

/**
 * 用户登录
 * @param $db
 */
function login($db){
    $arr = $db->queryByVal('admin',[
        'aname'=>$_POST['aname'],
        'apwd'=>$_POST['apwd']
    ]);

    session_start();
    if(count($arr)>0){
        //开启session
        $_SESSION['id'] = $arr[0]['id'];
        $_SESSION['name'] = $_POST['aname'];
        goList();
    }else{
        $_SESSION['msg'] = "用户名或密码错误";
        header('location:login.php');
    }
}

/**
 * 新增一个管理员
 * @param $db
 */
function adminAdd($db){
    $row = $db->insert('admin',[
           'aname'=>$_POST["adminname"],
           'apwd'=>$_POST["adminpwd"],
           'aemail'=>$_POST["adminemail"],
           'atel'=>$_POST["admintel"]
        ]);
    if($row > 0){
        header('location:admin_list.php');
    }else{
        print_r("注册失败");
    }
}

/**
 * 删除一条管理员的信息
 * @param $db
 */
function adminDel($db){
    $row = $db->delete('admin',[
        'id'=>$_GET["id"]
    ]);
    if($row > 0){
        header('location:admin_list.php');
    }else{
        print_r("删除失败");
    }
}

/**
 *
 * 修改一条管理员的信息
 * @param $db
 */
function adminUpdate($db){

    $row = $db->update('admin',[
        "apwd"=>$_POST['apwd'],
        "aemail"=>$_POST['adminemail'],
        "atel"=>$_POST['admintel']
    ],[
        'id'=>$_POST['id']
    ]);

    if($row > 0){
        header('location:admin_list.php');
    }else{
        print_r("修改失败");
    }
}

/**
 * 新增一个商品分类
 * @param $db
 */
function adminCateAdd($db){
    $row = $db->insert('cate',[
        'catename'=>$_POST["catename"]
    ]);
    if($row > 0){
        header('location:proCate_list.php');
    }else{
        print_r("添加失败");
    }
}

/**
 * 删除一个商品分类
 * @param $db
 */
function proCateDel($db){
    $row = $db->delete('cate',[
        'id'=>$_GET["id"]
    ]);
    if($row > 0){
        header('location:proCate_list.php');
    }else{
        print_r("删除失败");
    }
}


/**
 * 新增一条商品信息
 * @param $db
 */
function proInfoAdd($db){
    $goodimg = $_FILES['goodimg'];
    $goodimgsize = $_FILES['goodimg']['size'];
    $goodimgname = $_FILES['goodimg']['name'];
    $goodimgtype = $_FILES['goodimg']['type'];

    $detailimg = $_FILES['detailimg'];
    $detailimgsize = $_FILES['detailimg']['size'];
    $detailimgname = $_FILES['detailimg']['name'];
    $detailimgtype = $_FILES['detailimg']['type'];

    $goodimgTep = upload($goodimg,$goodimgsize, $goodimgname, $goodimgtype);
    $detailimgTep = upload($detailimg,$detailimgsize, $detailimgname, $detailimgtype);


    $row = $db->insert('goods',[
        "goodname"=>$_POST['goodname'],
        "goodimg"=>$goodimgTep,
        "oldprice"=>$_POST['oldprice'],
        "nowprice"=>$_POST['nowprice'],
        "goodcateid"=>$_POST['goodcateid'],
        "detailimg"=>$detailimgTep
    ]);

    if($row > 0){
        header('location:proInfo_list.php');
    }else{
        print_r("添加失败");
    }

}

/**
 * 删除一条商品信息
 * @param $db
 */
function proDel($db){
    $row = $db->delete('goods',[
        'id'=>$_GET["id"]
    ]);
    if($row > 0){
        header('location:proInfo_list.php');

    }else{
        print_r("删除失败");
    }
}


/**
 * 新增一条新闻资讯
 * @param $db
 */
function newAdd($db){
    $row = $db->insert('news',[
        'newtitle'=>$_POST["newtitle"],
        'newdate'=>$_POST["newdate"],
        'news'=>$_POST["newcon"]
    ]);
    if($row > 0){
        header('location:news_list.php');
    }else{
        print_r("添加失败");
    }
}

/**
 * 删除一条新闻资讯
 * @param $db
 */
function newDel($db){
    $row = $db->delete('news',[
        'id'=>$_GET["id"]
    ]);
    if($row > 0){
        header('location:news_list.php');
    }else{
        print_r("删除失败");
    }
}


/**
 * 删除一条评论信息
 * @param $db
 */
function proComDel($db){
    $row = $db->delete('comments',[
        'id'=>$_GET["id"]
    ]);
    if($row > 0){
        header('location:proComment_list.php');
    }else{
        print_r("删除失败");
    }
}



//执行函数
nav($method);