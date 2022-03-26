<?php
include("config.php");

$keywords = $_POST['keywords'];



mysqli_select_db($conn, "333");//连接数据库
mysqli_query($conn, "set id 'utf-8'");//查询语句设置字符集

$sql = "select * from xxx  where xingming like '%". $keywords ."%'";  //查询语句
//$sql =$conn->query("SELECT * FROM" . xxx .  "_xxx WHERE xingming LIKE '%{$keywords}%'");

$result=mysqli_query($conn,$sql);
if(!$result){
    die('无法读取数据,:'.mysqli_error($conn));
}
//echo "你输入的是：", $keywords;
//echo "<h2>学生信息</h2>";
//echo "<table border='1'><tr><td>id</td><td>名字</td><td>用户名</td><td>学习</td> <td>系部</td><td>班级</td><td>针数</td><td>风险</td><td>密码</td></tr>";
//while($row=mysqli_fetch_array($result)){
//
//    echo "<tr>";
//    echo "<td>{$row['id']}</td>";
//    echo "<td>{$row['xingming']}</td>";
//    echo "<td>{$row['name']}</td>";
//    echo "<td>{$row['school']}</td>";
//    echo "<td>{$row['xibu']}</td>";
//    echo "<td>{$row['class']}</td>";
//    echo "<td>{$row['zhenshu']}</td>";
//    echo "<td>{$row['fengxian']}</td>";
//    echo "<td>{$row['pass']}</td>";
//
//    echo "</tr>";}

