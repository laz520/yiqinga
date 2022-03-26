<?php

include 'header.php';
include ("ss.php");



?>


<div class="mdui-card ">
    
<div class="container p-textfield mdui-container">

  
<!-- 搜索框 -->
<div class="mdui-table-fluid mdui-center mdui-p-a-3  ">
    <center><h1 class="title mdui-text-color-green-600 mdui-center">搜索的名字是：<?php echo $keywords?></h1></center>

  <table class="mdui-table mdui-table-selectable   ">
    <thead >




      <tr>
          <th mdui-tooltip="{content: 'ID'}">ID</th>
        <th mdui-tooltip="{content: '名字'}">名字</th>
        <th class="mdui-table-col-numeric" mdui-tooltip="{content: '学校名称'}">学校名称</th>
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
      //设置变量sql的字段为


while($row=mysqli_fetch_array($result)) {

//          这里是有无风险的bug 判断不出 是否有风险 后续来更改
          if($row["zhenshu"] ==1){
              $a = "无风险";
          }else{
              $a = "有风险";

          }

//            输出学生数据库里面的数据
          echo "<tr><td>"  . $row["id"].  "</td>" , "<td>" . $row["xingming"]. "</td>"
          , "<td>" . $row["school"]. "</td>"
          , "<td>" . $row["xibu"]. "</td>" ,
          "<td>" . $row["class"]. "</td>" ,
          "<td>" . $row["zhenshu"]. "</td>" ,
          "<td>" . $a . "</td>" ,
          "<td>" . $row["name"]. "</td>" ,
          "<td>" . $row["pass"]. "</td>" ,

          "<br>";
          }
      ?>
      </tbody>

  </table>





    </div>






</div>
