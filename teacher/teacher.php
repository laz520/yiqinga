<?php
session_start();
include './header.php';
include ("../conn.php");
?>
<div class="mdui-card ">
    
    <div class="container p-textfield mdui-container">
      <center><h1 class="title mdui-text-color-green-600 mdui-center">查看自己的信息</h1></center>
    
      
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


    <div class="mdui-table-fluid ">
      <table class="mdui-table mdui-table-selectable  ">
        <thead >
          <tr>
              <th>id</th>
            <th>名字</th>
            <th class="mdui-table-col-numeric" mdui-tooltip="{content: 'The total amount of food energy in the given serving size.'}">学校名称</th>
            <th class="mdui-table-col-numeric">系部</th>
              <th>班级</th>
            <th class="mdui-table-col-numeric" mdui-tooltip="{content: 'The amount of calcium as a percentage of the recommended daily amount.'}">用户名</th>
            <th class="mdui-table-col-numeric">密码</th>
          </tr>
        </thead>
        <tbody>
<!--        获取教师自己的信息-->
        <?php
        $sqla = "SELECT * FROM teacher WHERE user='".$_SESSION['user']."'";
        $resulta = $conn->query($sqla);
        $rowa = mysqli_fetch_assoc($resulta);
        $user=$_SESSION['user'];
        ?>
          <tr>
            <td><?php echo $rowa['id'] ?></td>
            <td><?php echo $rowa['name']   ?></td>
            <td><?php echo $rowa['school']?></td>
           
            <td><?php echo $rowa['xibu']?></td>
            <td><?php echo $rowa['class']?></td>
            <td><?php echo $rowa['user']?></td>
            <td><?php echo $rowa['pass']?></td>
          </tr>

        </tbody>
        
      </table>
    



