<?php
	include("conn.php");
	session_start();
	$user=$_SESSION['user'];
	if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
	{
		$content=$_POST['content'];
		$sql="insert into message (user,content,lastdate) values ('$user','$content',now())";
		mysql_query($sql);
		echo "<script>alert('留言成功！');history.back(-1);</script>";
	}
	else
		echo "<script>alert('请先登录！');location.href='index.html';</script>";
?>