<?php


//用户退出登陆功能
setCookie("PHPSESSID","",time()-1,"/");
echo "<script>alert('成功退出登陆！');
window.location.assign('login.php')</script>";