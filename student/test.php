<?php


include("../conn.php");
header('Content-type:text/html; charset=utf-8');
session_start();
//接收来自login.php的账号和密码的数据

//
//session_start();
//if (isset($_POST ['user'])) {
//    $user = $_POST ['user'];
//    $password = $_POST ['password'];
//    if ($user == 'admin' && $password == 'Password') { //验证正确
//        $_SESSION ['user'] = $user;
//        //跳转到首页
//        header('location:index.php');
//    } else {
//        echo "<script>alert('登录失败，用户名或密码不正确');</script>";
//        exit ();
//    }
//}
//
//调用数据库里面的数据
$sql = "SELECT id, name, xingming, school , xibu  , class , zhenshu, fengxian , pass FROM xxx";
$result = $conn->query($sql);


//判断账号密码正确或者错误
$row = $result->fetch_assoc();


// 处理用户登录信息
if (isset($_POST['login'])) {
    # 接收用户的登录信息
    $user = trim($_POST['name']);
    $pass = trim($_POST['pass']);



    // 判断提交的登录信息
    if (($user == '') || ($pass == '')) {
        // 若为空,视为未填写,提示错误,并3秒后返回登录界面
        header('refresh:0.1; url=login.php');

        echo "<script>alert('用户名或密码不能为空,系统将在3秒后跳转到登录界面,请重新填写登录信息!')</script>";
        exit;
    } elseif (($user != $row['name']) || ($pass!= $row['pass'])) {
        # 用户名或密码错误,同空的处理方式
        header('refresh:0.1; url=login.php');
        echo "<script>alert('用户名或密码错误,系统将在3秒后跳转到登录界面,请重新填写登录信息!')</script>";
        exit;
    } elseif (($user = $row['name']) && ($pass = $row['pass'])) {
        # 用户名和密码都正确,将用户信息存到Session中
        $_SESSION['name'] = $user;
        $_SESSION['islogin'] = 1;
        $remember = "yes";
        // 若勾选7天内自动登录,则将其保存到Cookie并设置保留7天
        if ($_POST['remember'] == "yes") {
            setcookie('user', $user, time()+7*24*60*60);
            setcookie('code', md5($user.$pass), time()+7*24*60*60);
        } else {
            // 没有勾选则删除Cookie
            setcookie('user', '', time()-999);
            setcookie('code', '', time()-999);
        }
        // 处理完附加项后跳转到登录成功的首页

        header('location:index.php');

    }
}





