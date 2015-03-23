<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<p>
  <?php
$address = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbtable = "neuphp";

$conn = mysqli_connect($address,$dbuser,$dbpassword);
mysqli_select_db($conn,$dbtable);
mysqli_query($conn,"SET NAMES utf-8");
?>