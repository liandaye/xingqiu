<?php
	
	header("Content-type:text/html;charset=gb2312");
	//数据库配置信息(用户名,密码，数据库名，表前缀等)
	$cfg_dbhost = "127.0.0.1";
	$cfg_dbuser =	"root";
	$cfg_dbpwd = "";
	$cfg_dbname = "zhibo";
	

	$link = mysql_connect($cfg_dbhost,$cfg_dbuser,$cfg_dbpwd);
	mysql_select_db($cfg_dbname);
	mysql_query("set names gbk");
	//防止乱码
	$keywords = iconv("utf-8","gb2312//IGNORE",$_POST['keywords']);
	//匹配输入的关键字相关的标题，并按点击量排名，点击越多的排最前面
	$sql = "select name from tb_admin where name like '%".$keywords."%' order by id desc limit 0,9;";
	/* echo $sql;
	exit; */
	$res = mysql_query($sql,$link);
	
	$mNums = mysql_num_rows($res);
	//echo $mNums;
	$row=mysql_fetch_array($res);
	if($mNums<1){
		echo "no";
		exit();
	}else if($mNums==1){
		//返回json数据
		echo "[{'keywords':'".iconv_substr($row['name'],0,14,"gbk")."'}]";
	}else{
		$result="[{'keywords':'".iconv_substr($row['name'],0,14,"gbk")."'}";
		while($row=mysql_fetch_array($res)){
			$result.=",{'keywords':'".iconv_substr($row['name'],0,14,"gbk")."'}";
		}
		$result.=']';
		echo $result;
	}
	mysql_free_result($res);

?>

