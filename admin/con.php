
<?php
include ('../conn.php');
//设置变量sql的字段为
$sql = "SELECT id,title,user, pass , gg,gg1,gg2,foot,qq FROM admin";
$result = $conn->query($sql);

    // 输出数据

    $row = $result->fetch_assoc();

?>