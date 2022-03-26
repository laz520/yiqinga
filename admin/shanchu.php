<?php
include ("../conn.php");
$id = $_POST['id'];
echo $id;
$sql = "DELETE FROM xxx WHERE id='$id'";


if(mysqli_query($conn, $sql)){
    echo "<script>window.location.assign('ss1.php')</script>";
}else{
    echo "删除失败！: ". mysqli_error($conn);
}

mysqli_close($conn);
