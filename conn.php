<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "333";
// 1



// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

?>