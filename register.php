<?php
	$user=$_POST["user"];
	$pwd=$_POST["pwd"];
	if($user==""||$pwd=="")
		echo "<script>alert('用户名或密码不能为空');history.back(-1);</script>";
	else
	{
		include("conn.php");
		$sql="select user from userinfo where user='$user'";
		$result=mysql_query($sql);
		$flag=mysql_num_rows($result);
		if($flag)
			echo "<script>alert('用户名已存在');history.go(-1);</script>";
		else
		{
			$insert="insert into userinfo (user,pwd) values ('$user','$pwd')";
			$result_insert=mysql_query($insert);
			if($result_insert)
				echo "<script>alert('注册成功！');history.go(-1);</script>";
		}
	}	
?>