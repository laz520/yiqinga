<?php
include ('../conn.php');

$user = $_POST['user'];
$name= $_POST['name'];
$school = $_POST['school'];
$xibu= $_POST['xibu'];
$class = $_POST['class'];
$pass = $_POST['pass'];



//判断数据库里面的用户名也没有相同的有的用户名，有就执行插入数据库的操作，反之提示用户名存在！
$sqla = "SELECT user FROM teacher";

$resulta = $conn->query($sqla);

if (mysqli_num_rows($resulta) > 0) {
    // 输出数据
    while($rowa = mysqli_fetch_assoc($resulta)) {

        if ($rowa['user'] == $user ){
            echo "<script>alert('抱歉已存在用户名！！');window.location.assign('regteacher.php')</script>";

        }

    }
}




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