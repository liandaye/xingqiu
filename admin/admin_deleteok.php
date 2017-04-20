<?PHP 
include("conn/conn.php");
$id=$_POST[id];
$query=mysql_query("delete from tb_admin where id='$id'");
if($query==true){
	echo "<script>alert('删除成功!');window.location.href='index.php';location.href='".$_SERVER["HTTP_REFERER"]."'</script>";
}else{
	echo "<script>alert('删除失败!');history.back();location.href='".$_SERVER["HTTP_REFERER"]."'</script>";
}
?>