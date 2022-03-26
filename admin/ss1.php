<?php
include 'header.php';

?>

<html>
<head>

    <meta charset="utf-8">
</head>
<style>
    *{
        font-weight: 700;

    }


</style>
<body>

<h1 class="mdui-text-color-amber-200 mdui-text-center ">学生信息管理</h1><br/>
<form action="list.php" method="post" class="mdui-text-center">
    <div class="mdui-textfield">
        <input class="mdui-textfield-input mdui-center" type="text" placeholder="搜索名字" name="keywords" style="width: 300px"/>
    </div>
    <input type="submit" value="搜索" class="mdui-btn mdui-color-theme-accent mdui-ripple" id="btn">
</form>
<table class="mdui-table ">
    <form action="shanchu.php" method="post">
    <thead >




    <tr>
        <th mdui-tooltip="{content: 'ID'}">ID</th>
        <th mdui-tooltip="{content: '名字'}">名字</th>
        <th class="mdui-table-col-numeric" mdui-tooltip="{content: '用户名'}">用户名</th>
        <th class="mdui-table-col-numeric" mdui-tooltip="{content: '系部'}">系部</th>
        <th class="mdui-table-col-numeric" mdui-tooltip="{content: '班级'}">班级</th>
        <th class="mdui-table-col-numeric" mdui-tooltip="{content: '疫苗针数'}">疫苗针数</th>
        <th class="mdui-table-col-numeric" mdui-tooltip="{content: '风险地区'}">风险地区</th>
        <th class="mdui-table-col-numeric" mdui-tooltip="{content: '用户名.'}">用户名</th>
        <th class="mdui-table-col-numeric" mdui-tooltip="{content: '密码'}">密码</th>
    </tr>

    </thead>

    <tbody>



<?php
$sql = "SELECT id, name, xingming, school , xibu  , class , zhenshu, fengxian , pass FROM xxx";
$result = $conn->query($sql);


    while($row=mysqli_fetch_array($result)) {

        echo "<tr><td>"  . $row["id"].  "</td>" , "<td>" . $row["xingming"]. "</td>"
        , "<td>" . $row["school"]. "</td>"
        , "<td>" . $row["xibu"]. "</td>" ,
            "<td>" . $row["class"]. "</td>" ,
            "<td>" . $row["zhenshu"]. "</td>" ,
            "<td>" . $row['fengxian'] . "</td>" ,
            "<td>" . $row["name"]. "</td>" ,
            "<td>" . $row["pass"]. "</td>";
       echo "<td><input type='submit' class='mdui-btn mdui-color-theme-accent mdui-ripple' value='删除'> </td>";

}



?>
       </tbody>

</table></form>
<script>


</script>
</body>
</html>

