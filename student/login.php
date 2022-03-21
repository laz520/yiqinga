<?php

include './header.php';
include ('conn.php');



?>




<div class="mdui-card ">
    
<div class="container p-textfield mdui-container">
  <center><h1 class="title mdui-text-color-theme mdui-center">疫情防控登陆界面</h1></center>
  
<!-- login用户名的文本框 -->
    <form method="post" action="test.php">
    <div class="mdui-textfield">
    <i class="mdui-icon material-icons">account_circle</i>
  <input class="mdui-textfield-input" type="text" placeholder="用户名" name="name"/>


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
    <a href="reg.php" class="text1 mdui-text-color-pink" >没有账号密码？点击注册 ！</a>
</div>

    </form>
    

</div>

<script src="css/js.js" ></script>