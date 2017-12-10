<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>查看留言</title>
	<?php
		include("conn.php");
	?>
</head>
<body>
	<table width=1000 border="1">
		<?php
		$sql="select * from message order by id desc";
		$query=mysql_query($sql);
		while($row=mysql_fetch_array($query))
		{ ?>
			<tr>
				<td>
					用户：<?php echo $row['user'];?>
				</td>
			</tr>
			<tr>
				<td>
					留言内容：<?php echo $row['content'];?>
				</td>
			</tr>
			<tr>
				<td><div align="right">
					时间：<?php echo $row['lastdate'];?>
				</td>
			</tr>
  <?php } ?>
	</table>
</body>
</html>