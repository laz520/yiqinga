<?php
include ('./x.php');
// 22
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="renderer" content="webkit"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=5.0">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title><?php echo $row['title']; ?></title>

    <link rel="preconnect" href="//cdn.w3cbus.com">
    <link rel="stylesheet" href="css/mdui.min.css"><link rel="stylesheet" href="https://cdn.w3cbus.com/mdui/docs~1/static/index.0132e177.css">
</head>
<style>

li{
    list-style-type: none;
    background: url("icons/12.png") no-repeat 0rem 0.2rem;
    background-size: 1rem 1rem;
    text-indent: 2em;

}


</style>
<body
    class="

    mdui-appbar-with-toolbar
    mdui-theme-primary-indigo
    mdui-theme-accent-pink
    mdui-theme-layout-auto

"
    id="p-d"

    style="width: 100%";
>

<div class="bg">
<header class="appbar mdui-appbar mdui-appbar-fixed " >
    <div class="mdui-toolbar mdui-color-amber-200" >


        <a href="./" class="mdui-typo-title " style="font-weight:900;"></a>



</header>
</div>


<div class="container p-index mdui-container mdui-center">
    <h1 class="title mdui-text-color-theme  mdui-text-center "style="font-weight:900; font-size: 50px"><?php echo $row['title']; ?></h1>

    <div class="chapter">

<br>

        <div class="mdui-typo">
            <ul>

                <li>
                    <h1 class="mdui-text-color-orange-600">公告栏</h1>

                    <div class="mdui-panel" mdui-panel>

                        <div class="mdui-panel-item">
                            <div class="mdui-panel-item-header mdui-color-blue-a100">
                                <div class="mdui-panel-item-title">公告栏</div>

                                <i class="mdui-panel-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                            </div>
                            <div class="mdui-panel-item-body">

                                <div class="mdui-card-actions">
                                    <h3 class="mdui-typo-title">公告（一）：<span class="mdui-text-color-red-600"><?php echo $row['gg'];?>。</span></h3>
                                    <h3 class="mdui-typo-title">公告（二）：<span class="mdui-text-color-red-600"><?php echo $row['gg1'];?>。</span></h3>
                                    <h3 class="mdui-typo-title">公告（三）：<span class="mdui-text-color-red-600"><?php echo $row['gg2'];?>。</span></h3>

                                </div>
                            </div>

                        </div>
                    </div>

                </li>




           <li> <h1 class="mdui-text-color-orange-600">食用方法</h1></li>
                <br>
                <div class="bg">
               <div class="mdui-panel" mdui-panel>

                <div class="mdui-panel-item">
                    <div class="mdui-panel-item-header mdui-color-amber-200">
                        <div class="mdui-panel-item-title" >学生食用方法</div>

                        <i class="mdui-panel-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                    </div>
                    <div class="mdui-panel-item-body">

                            <div class="mdui-card-actions">
                                <img src="icons/2.png" height="100px" width="130px">
                                <h3>Tpis：点击一下哦！</h3>
                                <a class="mdui-btn mdui-ripple" href="./student/login.php">学生登陆</a>
                               <a class="mdui-btn mdui-ripple" href="./student/reg.php">学生注册</a>

                            </div>
                        </div>

                    </div>
                </div>
                </div>
                <div class="mdui-panel" mdui-panel>

                    <div class="mdui-panel-item">
                        <div class="mdui-panel-item-header mdui-color-pink-200 ">
                            <div class="mdui-panel-item-title">老师食用方法</div>

                            <i class="mdui-panel-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                        </div>
                        <div class="mdui-panel-item-body">

                            <div class="mdui-card-actions">
                                <img src="icons/a.png" height="100px" width="130px">
                                <h3>Tpis：点击一下哦！</h3>
                                <a class="mdui-btn mdui-ripple" href="./teacher/login.php">老师登陆</a>
                                <a class="mdui-btn mdui-ripple" href="./teacher/regteacher.php">老师注册</a>

                            </div>
                        </div>

                    </div>
                </div>


                <li>
                    <h1 class="mdui-text-color-orange-600">关于程序</h1>

                    <div class="mdui-panel" mdui-panel>

                        <div class="mdui-panel-item">
                            <div class="mdui-panel-item-header mdui-color-blue-a100">
                                <div class="mdui-panel-item-title">关于程序</div>

                                <i class="mdui-panel-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                            </div>
                            <div class="mdui-panel-item-body">

                                <div class="mdui-card-actions">
                                <h3 class="mdui-typo-title">想法：<span class="mdui-text-color-red-600">现在疫情又严重了，又碰到我的web程序开发的考试延迟了！就想着自己试试写着一个关于疫情防控的一个后台管理系统。</span></h3>
                                    <h3 class="mdui-typo-title">改正：<span class="mdui-text-color-red-600">如果这个项目有什么不足的地方请大家指出来，谢谢🙏！</span></h3>
                                    <h3 class="mdui-typo-title">邮箱：<span class="mdui-text-color-red-600">2104819695@qq.com📮</span></h3>

                                </div>
                            </div>

                        </div>
                    </div>

                </li>





                <li>
                    <h1 class="mdui-text-color-orange-600">关于作者</h1>

                    <div class="mdui-panel" mdui-panel>

                        <div class="mdui-panel-item">
                            <div class="mdui-panel-item-header mdui-color-cyan-50">
                                <div class="mdui-panel-item-title">关于作者</div>

                                <i class="mdui-panel-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                            </div>
                            <div class="mdui-panel-item-body">

                                <div class="mdui-card-actions">
                                  <h6 style="font-weight: 900; float: left">黑色童年:</h6>
                                    <img src="http://q1.qlogo.cn/g?b=qq&nk=2104819695&s=100" height="130px" width="130px" style="border-radius:100%;vertical-align:middle;"  >
                                  <p class="mdui-typo-title">职业：<span class="mdui-text-color-pink">学生</span></p>
                                    <p class="mdui-typo-title">专业：<span class="mdui-text-color-pink">计算机</span></p>
                                    <p class="mdui-typo-title">技能：<span class="mdui-text-color-pink">html5/css3/javascript 前端三剑客 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;后端：php/mysql</span></p>
                                    <p class="mdui-typo-title">目标：<span class="mdui-text-color-pink">熟练的精通前端和后端的交互！</span></p>


                                </div>
                            </div>

                        </div>
                    </div>

                </li>




        </ul>

    </div>


</div>
<footer>

    <div class="mdui-toolbar mdui-color-theme mdui-container-fluid xx" style="width: 100%;padding: 70px">

        <h4 class="title">&copy;版权说明：<?php echo $row['foot']; ?></h4>
    </div>
</footer>
</body>
<script src="./js/mdui.min.js"></script><script src="https://cdn.w3cbus.com/mdui/docs~1/static/index.95ae2041.js"></script>

</html>