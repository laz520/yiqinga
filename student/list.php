<?php

include '../admin/header.php';
include("../conn.php");

?>

<div class="mdui-card ">
    
<div class="container p-textfield mdui-container">
  <center><h1 class="title mdui-text-color-green-600 mdui-center">学生信息管理</h1></center>

  
<!-- 搜索框 -->
<div class="mdui-table-fluid mdui-center mdui-p-a-3  ">
  <table class="mdui-table mdui-table-selectable   ">
    <thead >
    <div class="mdui-textfield mdui-textfield-expandable">
  <button class="mdui-textfield-icon mdui-btn mdui-btn-icon">
    <i class="mdui-icon material-icons">search</i>
  </button>
  <input class="mdui-textfield-input" type="text" placeholder="搜索信息"/>
  <button class="mdui-textfield-close mdui-btn mdui-btn-icon">
    <i class="mdui-icon material-icons">close</i>
 
  </button>
 
</div>

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
      $sql = "SELECT id, name, xingming, school , xibu  , class , zhenshu, fengxian , pass FROM xxx";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
      // 输出数据

      while($row = $result->fetch_assoc()) {

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
          } else {
          echo "0 结果";
          }
      ?>
      </tbody>

  </table>

  <div class="mdui-clearfix">
  <div class="mdui-float-left mdui-m-l-2 mdui-p-a-3">
 
  <button class="mdui-btn mdui-btn-icon mdui-color-theme-accent mdui-ripple">
  
  <i class="mdui-icon material-icons">add</i>

</button>
<h3 class="mdui-text-center">添加</h3>
  </div>
  <div class="mdui-float-right mdui-m-r-2 mdui-p-a-3">

  <button class="mdui-btn mdui-btn-icon mdui-color-theme-accent mdui-ripple">
  <i class="mdui-icon material-icons">close</i>
 
</button>
<h3 class="mdui-text-center">删除</h3>
  </div>
</div>

</div>

</div>