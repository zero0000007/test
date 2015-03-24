<html lang="en" manifest="cache.appcache">
<head>
  <meta charset="utf-8">
 </head>
 <body>

<?php
include("mysql.php");
if( $_POST )
{
	$sql = "INSERT INTO students ( username,regdate,remark ) 
	VALUES ( '".$_POST['username']."', '".$_POST['regdate']."', '".$_POST['remark']."') ";
	$result = mysqli_query( $conn, $sql );
	if( $result )
	{
		echo "插入数据成功";
	}
	else
	{
		echo "插入数据失败";
	}
}
$sql = "SELECT * FROM students ";
$result = mysqli_query( $conn, $sql );
mysqli_query($conn,"SET NAMES utf8");
$users = array();
while( $row = mysqli_fetch_array( $result ) )
{
	//echo "<li>".$row['username']."</li>";

	$users[] = $row;
}
?>
<table border="1">
	<tr>
		<th>学生编号</th>
		<th>学生姓名</th>
		<th>注册日期</th>
		<th>备注</th>
	  <th>操作</th>
	</tr>
	<?php
	foreach( $users as $v)
	{
		?>
	<tr>
		<td><?php echo $v['id']; ?></td>
		<td><?php echo $v['username']; ?></td>
		<td><?php echo $v['regdate']; ?></td>
		<td><?php echo $v['remark']; ?>&nbsp;</td>
		<td><a href="edit.php?id=<?php echo $v['id']; ?>">修改</a> | <a href="del.php?id=<?php echo $v['id']; ?>" onClick="return confirm('是否要删除这个学生?');">删除</a></td>
	</tr>
		<?php
	}
	?>
</table>
<p>Hello World</p>
<p><img src="../Ubuntu (2)-2014-11-21-15-52-52.png" width="1280" height="768"></p>
<form name="form1" method="post" action="">
  <label for="username">姓名</label>
  <input type="text" name="username" id="username" />
  <label for="regdate">注册日期</label>
  <input type="date" name="regdate" id="regdate" />
  <label for="remark">备注</label>
  <input type="text" name="remark" id="remark" />
  <br>
  <input type="submit" name="button" id="button" value="提交" />
</form>
</body>
</html>
