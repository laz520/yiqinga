<?php 

include '../admin/header.php';

?>
<div class="mdui-card ">
    
    <div class="container p-textfield mdui-container">
      <center><h1 class="title mdui-text-color-green-600 mdui-center">老师信息管理</h1></center>
    
      
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
            <th>名字</th>
            <th class="mdui-table-col-numeric" mdui-tooltip="{content: 'The total amount of food energy in the given serving size.'}">学校名称</th>
            <th class="mdui-table-col-numeric">系部</th>
         
            <th class="mdui-table-col-numeric">疫苗针数</th>
            <th class="mdui-table-col-numeric">有无去过中高风险地区</th>
            <th class="mdui-table-col-numeric" mdui-tooltip="{content: 'The amount of calcium as a percentage of the recommended daily amount.'}">用户名</th>
            <th class="mdui-table-col-numeric">密码</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>小林</td>
            <td>江西水利职业学院</td>
            <td>信息工程系</td>
           
            <td>3</td>
            <td>无</td>
            <td>admin</td>
            <td>123456</td>
          </tr>
          <tr>
            <td>小林</td>
            <td>江西水利职业学院</td>
            <td>信息工程系</td>
           
            <td>3</td>
            <td>无</td>
            <td>admin</td>
            <td>123456</td>
          </tr>
          <tr>
            <td>小林</td>
            <td>江西水利职业学院</td>
            <td>信息工程系</td>
           
            <td>3</td>
            <td>无</td>
            <td>admin</td>
            <td>123456</td>
          </tr>
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