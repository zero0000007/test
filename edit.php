<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
include("mysql.php");

if( $_POST )
{
	$sql = "UPDATE students 
	SET username = '".$_POST['username']."', 
		regdate = '".$_POST['regdate']."', 
		remark = '".$_POST['remark']."' 
	WHERE id = '".$_GET['id']."' LIMIT 1 ";
	$result = mysqli_query( $conn, $sql );
	if( $result )
	{
		echo "修改数据成功";
	}
	else
	{
		echo "修改数据失败";
	}
}

$sql = "SELECT * FROM students WHERE id = '".$_GET['id']."' LIMIT 1";
$result = mysqli_query(  $conn,$sql );  //为何conn和sql不能调换？
$user = mysqli_fetch_array( $result );
?>

<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="username">姓名</label>
    <input name="username" type="text" id="username" value="<?php echo $user['username']; ?>" />
  </p>
  <p>
    <label for="regdate">注册日期</label>
    <input name="regdate" type="text" id="regdate" value="<?php echo $user['regdate']; ?>" />
    <label for="remark"><br />
      <br />
    备注<br />
    </label>
    <textarea name="remark" id="remark" cols="45" rows="5"><?php echo $user['remark']; ?></textarea>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="提交" />
  </p>
</form>
<p><a href="index.php">返回</a></p>

</body>
</html>