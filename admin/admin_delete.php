<?php 
  include_once("conn/conn.php");
  $query=mysql_query("select * from tb_admin where id='$_GET[id]'");
  while($row=mysql_fetch_array($query)){
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="css/pintuer.css">
<link rel="stylesheet" href="css/admin.css">
<script src="js/jquery.js"></script>
<script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>删除信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="admin_deleteok.php">  
      <div class="form-group">
        <div class="label">
          <label>用户名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $row['name']?>" name="name"/>
          <div class="tips"></div>
        </div>
      </div>           
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>密码：</label>
        </div>
        <div class="field"> 
          <script src="js/laydate/laydate.js"></script>
          <input type="text" class="laydate-icon input w50" name="pwd" value="<?php echo $row['pwd']?>" />
          <input type="hidden" class="input w50" value="<?php echo $row['id']?>" name="id"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php }?>
</body></html>