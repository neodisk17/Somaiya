<!DOCTYPE html>

<html>
<head>
<title>Knowledge park Admin</title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<head>
<body>
<!--Log in Code-->
<?php
include("Config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=addslashes($_POST['TxtUName']);
$mypassword=addslashes($_POST['TxtPass']);

//validation to form controls
if($myusername=="" || $mypassword=="")
{
	$message = "Plzz!! enter UserName and Password";
	echo "<script type='text/javascript'>alert('$message');</script>";
}

else
{
$sql="SELECT A_ID FROM admin_master WHERE A_UserName='$myusername' and A_Password='$mypassword'";
$result=mysql_query($sql);
if($result === FALSE) 
{ 
    die(mysql_error()); // TODO: better error handling
}
$row=mysql_fetch_array($result);
//$active=$row['active'];
$count=mysql_num_rows($result);
 
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
	session_start();
	$_SESSION['login_user']=$myusername;
	header("location: Administrator/deskboard.php");
	//$message = "Log in success!!!";
	//echo "<script type='text/javascript'>alert('$message');</script>";
}

else
{
	$message = "Your UserName Or Password Invalid";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
mysql_close($bd);
}
}
?>

<!--HTML Code Start-->
<div class="container">
    <div class="row">
    <div class="col-lg-3"></div>

    <div class="col-lg-6">
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <div style="background-color:White; box-shadow:0 0 33px -4px #888; padding:10px 25px 10px 25px; border-radius:50px;">
    <center>
    <img src="images/KnowledgePark.png" class="img-responsive" height="150px" width="150px" />
   </center>   
    <br />
    <form action="" method="post">
        Admin Name<input type="Text" name="TxtUName" placeholder="Admin UserName" class="form-control" style="height: 45px" />
        <br />
        Password<input type="Password" name="TxtPass" placeholder="Password" class="form-control" style="height: 45px" />
        <br />
        <center><input type="Submit" name="sub_btn" value="Log In" class="btn btn-primary"></center>
    </form>
    <br />
    </div>   
    </div>

    <div class="col-lg-3"></div>
    </div>    
    </div>

</body>
</html>