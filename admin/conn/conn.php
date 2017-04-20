<?php
$conn=mysql_connect("127.0.0.1","root","");		//连接数据库服务器
mysql_select_db("zhibo",$conn);				//选择数据库
mysql_query("set names utf8");						//设置编码格式
?>
