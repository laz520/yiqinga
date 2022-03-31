<?php
include './header.php';
// 网站的标题
// $title = "疫情管理系统"

// // 站长信息
// $zuozhe = "黑色童年"

// // 管理员账号密码
// $username ="admin"
// $pass = '123456'

// // qq头像的qq号
// $qqimg = "2104819695"


?>

<div class="mdui-card ">

    <div class="container p-textfield mdui-container">
        <center><h1 class="title mdui-text-color-theme mdui-center">学生信息设置</h1></center>
<form action="set1.php" method="post">
        <div class="mdui-textfield">
            <input class="mdui-textfield-input" name="name" type="text" placeholder="设置用户名"/>
            <br>
            <input class="mdui-textfield-input" name="qq" type="text" placeholder="设置qq" />
        </br>
            <input class="mdui-textfield-input" name="pass" type="text" placeholder="设置密码"/>
            <br>

            <button class="mdui-btn mdui-center mdui-color-pink ">设置完成</button>
        </div>
</form>