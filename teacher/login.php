<?php


include './header.php';
include("../conn.php");


?>

<div class="mdui-card ">

    <div class="container p-textfield mdui-container">
        <h1 class="title mdui-text-color-red-400 mdui-center ">疫情防控教师登陆界面</h1>

        <!-- login用户名的文本框 -->
        <form method="post" action="tea.php">
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons">account_circle</i>
                <input class="mdui-textfield-input" type="text" placeholder="用户名" name="user"/>


            </div>
            <!-- login密码文本框 -->
            <div class="mdui-textfield">
                <i class="mdui-icon material-icons">lock</i>
                <input class="mdui-textfield-input" type="password" placeholder="密码" name="pass"/>

            </div>
            <br>
            <!-- login登陆按钮 -->

            <div class="mdui-col">
                <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple" name="login">登陆</button>
            </div>
            <a href="./regteacher.php" class="text1 mdui-text-color-pink" >没有教师账号密码？点击注册 ！</a>
    </div>

    </form>


</div>

<script src="../css/js.js" ></script>
