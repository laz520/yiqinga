<?php 

include './header.php';
?>

<link rel="stylesheet" href="css/style.css"  />
<div class="mdui-card ">
    
<div class="container p-textfield mdui-container">
  <center><h1 class="title mdui-text-color-theme mdui-center">疫情防控学生注册界面</h1></center>
  
<!-- reg用户名的文本框 -->
    <form method="post" action="ceshi.php">
    <div class="mdui-textfield">
    <i class="mdui-icon material-icons">account_circle</i>
  <input class="mdui-textfield-input" type="text" placeholder="用户名" name="name"/>


</div>


<div class="mdui-textfield">
<i class="mdui-icon material-icons">class</i>  
<input class="mdui-textfield-input" type="text" placeholder="学生名字" name="xingming"/>


</div>

 
<div class="mdui-textfield">
<i class="mdui-icon material-icons">assignment</i>
  <input class="mdui-textfield-input" type="text" placeholder="学校名称" name="school"/>


</div>

 
<div class="mdui-textfield">
<i class="mdui-icon material-icons">border_all</i>
  <input class="mdui-textfield-input" type="text" placeholder="系部" name="xibu"/>


</div>

 
<div class="mdui-textfield">
<i class="mdui-icon material-icons">branding_watermark</i>
  <input class="mdui-textfield-input" type="text" placeholder="班级" name="class"/>


</div>


<div class="mdui-textfield">
<i class="mdui-icon material-icons">colorize</i>
  <input class="mdui-textfield-input" type="text" placeholder="疫苗针数" name="zhenshu"/>


</div>


<div class="mdui-textfield">

<select class="mdui-select" name="fengxian"  >

  <option value="1">去过中高风险地区</option>
  <option value="2">未去过中高风险地区</option>
 
</select>

</div>

<!-- reg密码文本框 -->
<div class="mdui-textfield">
<i class="mdui-icon material-icons">lock</i>
  <input class="mdui-textfield-input" type="password" placeholder="密码" name="pass"/>

</div>


<br>
<!-- reg登陆按钮 -->
<div class="mdui-col">
    <button class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">注册</button>
  </div>
  <a href="login.php" class="text1 mdui-text-color-pink" >已注册？点击登录！</a>
</div>


    
    </div>
</div>
</form>