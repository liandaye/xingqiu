<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>后台登录</title> 
<link href="css/login.css" type="text/css" rel="stylesheet"> 
<script type="text/javascript" src="index.js"></script>
</head> 
<body> 
<div class="login">
    <div class="message">猩球-管理登录</div>
    <div id="darkbannerwrap"></div>
    
    <form method="post" action="admin_ok.php">
		<input name="action" value="login" type="hidden">
		<input name="name" placeholder="用户名" required="" type="text">
		<hr class="hr15">
		<input name="pwd" placeholder="密码" required="" type="password">
		<hr class="hr15">
		<input value="登录" style="width:100%;" type="submit">
		<hr class="hr20">
	</form>	
</div>
</body>
</html>