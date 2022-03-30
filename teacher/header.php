<?php
include  ('../conn.php');
$sqla = "SELECT * FROM teacher WHERE user='".$_SESSION['user']."'";
$resulta = $conn->query($sqla);
$rowa  = mysqli_fetch_assoc($resulta);
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="renderer" content="webkit"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=5.0">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>疫情防控Admin</title>
    <meta name="description" content="currentItem.description" />
    <link rel="stylesheet" href="../css/style.css"  />
    <link rel="stylesheet" href="../css/mdui.min.css"><link rel="stylesheet" href="https://cdn.w3cbus.com/mdui/docs~1/static/index.0132e177.css">
</head>
<!-- 侧边栏边距 -->
<body

    class="
    mdui-drawer-body-left
    mdui-appbar-with-toolbar
    mdui-theme-primary-indigo
    mdui-theme-accent-pink
    mdui-theme-layout-auto"
    id="p-d"
>
<header class="appbar mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-green-600">
    <span
        class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white"
        mdui-drawer="{target: '#main-drawer', swipe: true}"
    >
      <i class="mdui-icon material-icons">menu</i>
    </span>
        <a href="index.php" class="mdui-typo-title">疫情防控</a>
        <div class="mdui-toolbar-spacer"></div>

        <a href="javascript:;" class="mdui-btn mdui-btn-icon mdui-collapse-item-close">
            <i class="mdui-icon material-icons">search</i>
        </a>

        </a>

        <a href="javascript:;" class="mdui-btn mdui-btn-icon "mdui-drawer="{target: '#main-xi', swipe: true}">
            <i class="mdui-icon material-icons"   aa="{target: '#aa', swipe: true}">more_vert</i>
        </a>
        </a>
    </div>
</header>

<!-- 右边栏的手风琴 -->
<div class="mdui-drawer mdui-drawer-right mdui-drawer-close" id="main-xi"  >
    <ul class="mdui-list">
        <form action="tc.php" method="post">
        <li class="mdui-list-item mdui-ripple">
            <button class="mdui-btn mdui-color-theme-accent mdui-ripple" name="tijiao">退出登陆</button>        </li>

        </form>
    </ul>
</div>



<div class="mdui-drawer" id="main-drawer">

    <!-- 侧边栏的头像和信息 -->
    <div class="mdui-list">

        <label class="mdui-list-item mdui-ripple">
            <div class="mdui-list-item-avatar">
                <img src="http://q1.qlogo.cn/g?b=qq&nk=2104819695&s=100"/>
            </div>
            <div class="mdui-list-item-content">姓名：<?php
               echo $rowa['name']
                ?>

                </div>
            <div class="mdui-checkbox">

            </div>
        </label>

        <!-- 侧边栏的头像和信息结束 -->

        <!-- 侧边栏菜单开始 -->
        <div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;">



            <div class="
          mdui-collapse-item
          "
            >
                <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                    <i class="
              mdui-list-item-icon
              mdui-icon
              material-icons
              mdui-text-color-blue"
                    >near_me</i>
                    <div class="mdui-list-item-content">开始使用</div>
                    <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                </div>
                <div class="mdui-collapse-item-body mdui-list">

                    <a href="./set.php" class="
          mdui-list-item
          mdui-ripple
          ">设置信息</a>


                </div>


            </div>


            <div class="
          mdui-collapse-item
          "
            >
                <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                    <i class="
              mdui-list-item-icon
              mdui-icon
              material-icons
              mdui-text-color-brown"
                    >view_carousel</i>
                    <div class="mdui-list-item-content">管理信息</div>
                    <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
                </div>
                <div class="mdui-collapse-item-body mdui-list">
                    <a
                        href="./list.php"
                        class="
                    mdui-list-item
                    mdui-ripple
                    "
                    >查看学生的信息</a>
                    <a
                            href="teacher.php"
                            class="
                    mdui-list-item
                    mdui-ripple
                    "
                    >查看自己的信息</a>

                </div>
            </div>

        </div>


    </div>

</div>
<a id="anchor-top"></a>


<script src="../js/mdui.min.js"></script><script src="https://cdn.w3cbus.com/mdui/docs~1/static/index.95ae2041.js"></script>

</body>
</html–