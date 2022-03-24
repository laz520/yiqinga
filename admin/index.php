<?php

include './header.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    .mdui-tab{
        margin-top:20px;
    }
    .mdui-card-media{
        margin:10px;
       
    }
    
</style>
<body>

<div class="mdui-card">

<!-- 卡片头部，包含头像、标题、副标题 -->
<div class="mdui-card-header">
  <img class="mdui-card-header-avatar" src="http://q1.qlogo.cn/g?b=qq&nk=2104819695s&s=100"/>
  <div class="mdui-card-header-title">管理员</div>
  <div class="mdui-card-header-subtitle">黑色童年</div>
</div>

<!-- 管理员顶部的信息 -->
<div class="mdui-card-media">
  <img src="../icons/a.png" style=" border-radius:20px ; height:300px;  object-fit: cover;"/>

  <!-- 可以有按钮可以没有 -->
  <div class="mdui-card-menu">
   
  </div>
</div>

<!-- 我的标题 -->
<div class="mdui-card-primary">
  <div class="mdui-card-primary-title">欢迎登陆<?php echo $row['title']; ?></div>
  <div class="mdui-card-primary-subtitle">welcome </div>
</div>

<!-- 卡片的内容 -->
<div class="mdui-card-content"><script type="text/javascript" src="https://api.uixsj.cn/hitokoto/get?type=hitokoto&code=js"></script><div id="hitokoto"><script>hitokoto()</script></div></div>

<!-- 卡片的按钮 -->
<div class="mdui-card-actions">
  <ul class="mdui-list" mdui-collapse="{accordion: true}">
<li class="mdui-collapse-item">
  <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
    <i class="mdui-list-item-icon mdui-icon material-icons">device_hub</i>
    <div class="mdui-list-item-content">管理员操作</div>
    <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
  </div>
  <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
    <li class="mdui-list-item mdui-ripple"><a href="gg.php">网站公告设置</a></li>
    <li class="mdui-list-item mdui-ripple"><a href="set.php">网站信息设置</a></li>
    <li class="mdui-list-item mdui-ripple"><a href="../student/list.php">学生信息管理</a></li>
    <li class="mdui-list-item mdui-ripple"><a href="../teacher/teacher.php">老师信息管理</a></li>
  </ul>
</li>



</ul>
  
</div>

</div>
</body>
</html>