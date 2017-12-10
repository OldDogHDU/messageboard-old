<?php
	$user=$_POST["user"];
	$pwd=$_POST["pwd"];
	if($user==""||$pwd=="")
		echo "<script>alert('请输入用户名或密码');history.back(-1);</script>";
	else
	{
		include("conn.php");
		$sql="select user,pwd from userinfo where user='$user' and pwd='$pwd'";
		$result=mysql_query($sql);
		$flag=mysql_num_rows($result);
		if($flag)
		{
			session_start();
			$_SESSION['user']=$user;
			$nowusers=mysql_fetch_array($result);
			echo "<script>alert('登录成功！');location.href='login.html';</script>";
		}
		else
			echo "<script>alert('用户名或密码不正确！');history.back(-1);</script>";
	}	
?>