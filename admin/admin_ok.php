<?php
 	session_start();                                                 //初始化SESSION变量
    header("content-type:text/html;charset=utf-8");//设置页面编码格式
	include_once 'conn/conn.php';				//执行连接数据库的操作
	if(!empty($_POST['name']) and !empty($_POST['pwd'])){		//判断用户名和密码是否为空
	 $name = $_POST['name'];
     $pwd = $_POST['pwd'];
	 $str_hash = mhash(MHASH_TIGER,$pwd);
	 $pwd1=bin2hex($str_hash);
		$sql = "select * from tb_ht where name = '$name' and pwd='$pwd1'";
		$result=mysql_query($sql,$conn);		//执行查询语句
		$count=mysql_num_rows($result);			//返回查询结果行数
		if($count>0){
		  	$_SESSION['name'] = $_POST['name'];//为SESSION变量赋值
            echo "<script> alert('登录成功!'); window.location.href='index.php';</script>";
		}else{
			echo "<script> alert('登录失败!'); window.location.href='admin.php';</script>";

		}
	}else{
			echo "<script> alert('用户名或密码不能为空!'); window.location.href='admin.php';</script>";
	}
?>