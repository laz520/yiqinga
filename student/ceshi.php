<?php
include("../conn.php");


$name = $_POST['name'];
$xingming= $_POST['xingming'];

$school = $_POST['school'];

$xibu= $_POST['xibu'];

$class = $_POST['class'];

$zhenshu= $_POST['zhenshu'];

$fengxian = $_POST['fengxian'];
$pass = $_POST['pass'];


// 预处理及绑定

//
//$sql = "INSERT INTO xxx ".
//    "( id,name,xingming,school,xibu,class,zhenshu,fengxian,pass) ".sa
//    "VALUES ".
//    "(1,$name,$xingming,$school,$xibu,$class,$zhenshu,$fengxian,$pass)";
//

//$sql = "SELECT id, name, xingming, school , xibu  , class , zhenshu, fengxian , pass FROM xxx";

//获取数据库里面的各个数据
$sql = "INSERT INTO `xxx`(`id`,`name`,`xingming`,`school`,`xibu`,`class`,`zhenshu`,`fengxian`,`pass`)
VALUES (null,'$name','$xingming','$school','$xibu','$class','$zhenshu','$fengxian','$pass')";

//插入数据库
$query = mysqli_query($conn, $sql);
if($query){
    echo "<script>alert('注册成功！！');window.location.assign('index.php')</script>";
}else{
    echo "<script>alert('注册失败');window.location.assign('reg.php.php')</script>" , $conn->error;
}






?>