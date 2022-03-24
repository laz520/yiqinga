<?php
include("../conn.php");




//接收来自login.php的账号和密码的数据
$name = $_POST["name"];
$pass = $_POST["pass"];

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


if ($result->num_rows > 0) {
    // 输出数据
//判断账号密码正确或者错误
    while($row = $result->fetch_assoc()) {

        if ($row['name'] == $name  && $row['pass'] == $pass) {
            echo "<script>alert('用户名密码正确');window.location.assign('index.php')</script>";
        }else{
             echo "<script>alert('用户名或者密码错误'); window.location.assign('login.php')</script>";
        }



    }}




