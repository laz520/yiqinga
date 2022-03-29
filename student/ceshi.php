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


//判断数据库里面的用户名也没有相同的有的用户名，有就执行插入数据库的操作，反之提示用户名存在！
$sqla = "SELECT id, name, xingming, school , xibu  , class , zhenshu, fengxian , pass FROM xxx";

$resulta = $conn->query($sqla);

if (mysqli_num_rows($resulta) > 0) {
    // 输出数据
    while($rowa = mysqli_fetch_assoc($resulta)) {

        if ($rowa['name'] == $name ){
            echo "<script>alert('抱歉已存在用户名！！');window.location.assign('reg.php')</script>";

        }

         }
}
// 预处理及绑定


$sql = "SELECT id, name, xingming, school , xibu  , class , zhenshu, fengxian , pass FROM xxx";


$sql = "INSERT INTO `xxx`(`id`,`name`,`xingming`,`school`,`xibu`,`class`,`zhenshu`,`fengxian`,`pass`)
VALUES (null,'$name','$xingming','$school','$xibu','$class','$zhenshu','$fengxian','$pass')";

//插入数据库
$query = mysqli_query($conn, $sql);

if($query){
    echo "<script>alert('注册成功！！');window.location.assign('index.php')</script>";
}else{
    echo "<script>alert('注册失败');window.location.assign('reg.php')</script>" , $conn->error;
}






?>