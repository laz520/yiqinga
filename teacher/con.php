<?php
include ('../conn.php');

$user = $_POST['user'];
$name= $_POST['name'];
$school = $_POST['school'];
$xibu= $_POST['xibu'];
$class = $_POST['class'];
$pass = $_POST['pass'];


//获取数据
$sql = "INSERT INTO `teacher`(`id`,`user`,`name`,`school`,`xibu`,`class`,`pass`)
VALUES (null,'$user','$name','$school','$xibu','$class','$pass')";

//插入数据库
$query = mysqli_query($conn, $sql);
if($query){
    echo "<script>alert('注册成功！！');window.location.assign('index.php')</script>";
}else{
    echo "<script>alert('注册失败');window.location.assign('regteacher.php')</script>" , $conn->error;
}



?>