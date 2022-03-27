<?php

include("./con.php");
header('Content-type:text/html; charset=utf-8');
// 开启Session
session_start();
$sql = "SELECT id, user,pass FROM admin";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
// 处理用户登录信息
if (isset($_POST['login'])) {
    # 接收用户的登录信息
    $user = trim($_POST['user']);
    $pass = trim($_POST['pass']);
    // 判断提交的登录信息
    if (($user == '') || ($pass == '')) {
        // 若为空,视为未填写,提示错误,并3秒后返回登录界面
        header('refresh:0.1; url=login.php');

        echo "<script>alert('用户名或密码不能为空,系统将在3秒后跳转到登录界面,请重新填写登录信息!')</script>";
        exit;
    } elseif (($user != $row['user']) || ($pass!= $row['pass'])) {
        # 用户名或密码错误,同空的处理方式
        header('refresh:0.1; url=login.php');
        echo "<script>alert('用户名或密码错误,系统将在3秒后跳转到登录界面,请重新填写登录信息!')</script>";
        exit;
    } elseif (($user = $row['user']) && ($pass = $row['pass'])) {
        # 用户名和密码都正确,将用户信息存到Session中
        $_SESSION['user'] = $user;
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


//$user = $_POST['user'];
//$pass = $_POST['pass'];
//
////调用数据库里面的数据
//$sql = "SELECT id, user,pass FROM admin";
//$result = $conn->query($sql);
//
//
//if ($result->num_rows > 0) {
//    // 输出数据
////判断账号密码正确或者错误
//    while($row = $result->fetch_assoc()) {
//
//        if ($row['user'] == $user && $row['pass'] == $pass) {
//            echo "<script>alert('用户名密码正确');window.location.assign('index.php')</script>";
//        }else{
//            echo "<script>alert('用户名或者密码错误'); window.location.assign('login.php')</script>";
//        }
//
//
//
//    }}
