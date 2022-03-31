<?php

include ("../conn.php");



$title = $_POST['title'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$qq = $_POST['qq'];
$gg = $_POST['gg'];
$gg1 = $_POST['gg1'];
$gg2 = $_POST['gg2'];

$id = 1;
//mysqli修改语句
$sql = "update admin set title='$title',user='$user',pass='$pass',qq='$qq',gg='$gg',gg1='$gg1',gg2='$gg2' where id='$id'";

//执行sql语句
$result=mysqli_query($conn,$sql);

//判断执行成功的话就直接跳转ss1.php页面，反之提示无法修改数据，输出报错的原因
if(!$result){
    die('无法修改数据,:'.mysqli_error($conn));
}else{
    echo "<script>window.location.assign('set.php')</script>";
}