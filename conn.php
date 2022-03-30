<?php
// 作者：黑色童年
// qq ：2104819695
//创建连接数据库文件
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "333";


// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

?>