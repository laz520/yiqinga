<?php
include ("../conn.php");
//$id =35;
//$sql = "select * from xxx where id='".$id."'";

//获取提交过来的数据
$id =$_POST['id'];
$name = $_POST['name'];
$xingming= $_POST['xingming'];
$school =$_POST['school'];
$xibu= $_POST['xibu'];
$class =$_POST['class'];
$zhenshu = $_POST['zhenshu'];
$fengxian = $_POST['fengxian'];
$pass = $_POST['pass'];

//
//$sql="UPDATE xxx SET id=41
//WHERE xingming='Peter' AND school='Griffin'";
//

//mysqli修改语句
$sql = "update xxx set name='$name',xingming='$xingming',school='$school',xibu='$xibu',class='$class',zhenshu='$zhenshu',fengxian='$fengxian',pass='$pass' where id='$id'";

//执行sql语句
$result=mysqli_query($conn,$sql);

//判断执行成功的话就直接跳转ss1.php页面，反之提示无法修改数据，输出报错的原因
if(!$result){
    die('无法修改数据,:'.mysqli_error($conn));
}else{
    echo "<script>window.location.assign('ss1.php')</script>";
}