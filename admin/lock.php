<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include('../config.php');
session_start();
$user_check=$_SESSION['login_user'];
 
$ses_sql=mysql_query("SELECT A_UserName FROM admin_master where A_UserName='$user_check'",$bd);
 
$row=mysql_fetch_array($ses_sql);
 
$login_session=$row['A_UserName'];
 
if(!isset($login_session))
{
header("Location: ../KP_Admin.php");
}
?>
</body>
</html>