<?php  include("conn/conn.php"); ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
  <div class="panel-head"><strong class="icon-reorder"> 图表分析</strong></div>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td>
<?php 
    //查询数据库中当月总的访问量
    $query_3="select sum(name) as countes from tb_admin where date='".substr(date("Y-m-d"),0,7)."'";										
    $result_3=mysql_query($query_3);
    $countes_3=mysql_result($result_3,0,'countes');
	echo "<p class='STYLE2'>网站当月的访问量：$countes_3</p>";
	//查询数据库中当月的IP访问量
    $query_4="select * from tb_admin where date='".substr(date("Y-m-d"),0,7)."'";
    $result_4=mysql_query($query_4);
	$counts_4=array();
	while($myrow_4=mysql_fetch_array($result_4)){
		$counts_4[]=$myrow_4['name'];						//将获取的ip的值赋给变量
	}
	$results_4=array_unique($counts_4);					//去除数组中重复的值
	$countes_4=count($results_4);						//获取数组中值的数量，即总的ip访问量
	echo "<p class='STYLE2'>网站当月IP的访问量：$countes_4</p>";
?>
<img src="stat.php?lmbs=<?php echo $lmbs; ?>&das=<?php echo $das;?>"/>
</td>
  </tr>
</table>
</div>
</body>
</html>