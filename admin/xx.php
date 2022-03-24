<?php
include("./con.php");



$user = $_POST['user'];
$pass = $_POST['pass'];

//调用数据库里面的数据
$sql = "SELECT id, user,pass FROM admin";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // 输出数据
//判断账号密码正确或者错误
    while($row = $result->fetch_assoc()) {

        if ($row['user'] == $user && $row['pass'] == $pass) {
            echo "<script>alert('用户名密码正确');window.location.assign('index.php')</script>";
        }else{
            echo "<script>alert('用户名或者密码错误'); window.location.assign('login.php')</script>";
        }



    }}
