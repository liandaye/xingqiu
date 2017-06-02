<?php
header("content-type:text/html;charset=utf-8");
include("conn/conn.php");
$name = $_POST['name'];
$pwd = md5($_POST['pwd']);
$id = $_POST['id'];
	$update=mysql_query("update tb_admin set name='$name',pwd='$pwd' where id='$id'",$conn);
	if($update){
		echo "<script>alert('密码修改成功！');window.location.href='index.php';location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	}else{
		echo "<script>alert('密码修改失败！');window.location.href='admin_update.php';location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	}
?>