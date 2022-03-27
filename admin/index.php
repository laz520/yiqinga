<?php

include './header.php';
//session_start();




////取Session中的用户信息
//$user=$_SESSION['user'];

////判断是否有效
//if(!isset($user)){
// echo "您未登录！登录";
// exit();
//}
//
////登录时保存的该用户SessionID
//$sessin_id=file_get_contents('session_id/'.$user);
//
////如果当前的SessionID与之前记录的SessionID不匹配
////说明已在别处登录
//if(session_id() != $sessin_id){
// //注销当前用户
// unset($_SESSION['user']);
// echo "您已在别处登录！从新登录";
// exit();
//}else{
// echo "欢迎您：".$user;
// echo " 注销";
//}
?>
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
    <li class="mdui-list-item mdui-ripple"><a href="list.php">学生信息管理</a></li>
    <li class="mdui-list-item mdui-ripple"><a href="teacher.php">老师信息管理</a></li>
  </ul>
</li>



</ul>
  
</div>

</div>
</body>
</html>