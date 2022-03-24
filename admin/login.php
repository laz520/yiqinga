<?php


include './header.php';
include ('con.php');


?>

<div class="mdui-card ">

    <div class="container p-textfield mdui-container">
        <h1 class="title mdui-text-color-red-400 mdui-center "><?php  echo $row['title']?>登陆</h1>

        <!-- login用户名的文本框 -->
        <form method="post" action="xx.php">
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
                <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">登陆</button>
            </div>
             </div>

    </form>


</div>

<script src="../css/js.js" ></script>
