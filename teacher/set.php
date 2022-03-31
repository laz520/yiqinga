<?php
include ("function.php");
include './header.php';


?>

<div class="mdui-card ">

    <div class="container p-textfield mdui-container">
        <center><h1 class="title mdui-text-color-theme mdui-center">老师信息设置</h1></center>

        <form action="set1.php" method="post">
        <div class="mdui-textfield">
            <input class="mdui-textfield-input" type="text" name="user" placeholder="设置用户名"/>
            <br>
            <input class="mdui-textfield-input" type="text" name="qq" placeholder="设置你的QQ" />
            <br>
            <input class="mdui-textfield-input" type="text" name="pass" placeholder="设置密码"/>
            <br>

            <button class="mdui-btn mdui-center mdui-color-pink ">设置完成</button>
        </div>
        </form>