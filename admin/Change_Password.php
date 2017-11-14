<html>
<head>
<title>Knowledge Park</title>
</head>
<body>
<?php
//include("../Config.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  // username and password sent from Form
$myTxtUName=addslashes($_POST['TxtUName']);
$myTxtOldPass=addslashes($_POST['TxtOldPass']);
$myTxtNewPass=addslashes($_POST['TxtNewPass']);
$myTxtConNewPass=addslashes($_POST['TxtConNewPass']);

}
?>
<div class="wrapper">
<!--Header-->
<?php
include("header.php");
?>
<!--left pannel-->
<?php
include("leftpanel.php");
?>

<!--Right pannel-->
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Admin <small>Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="deskboard.php"><i class="fa fa-dashboard"></i> DashBoard</a></li>
        <li class="active">Change Password</li>
      </ol>
    </section>
    <br />
    <br />
    <br />

    <!-- Main content -->
    <section class="content">
    <!-- Main row -->
      <div class="row">
        <div class="col-lg-3"></div>
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-edit"></i>
              <h3 class="box-title">Change Password</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="" method="post">
                <div class="form-group">
                  <label>Enter User Name</label>
                  <input type="text" class="form-control" name="TxtUName" placeholder="User Name" readonly="true">
                </div>
                <div class="form-group">
                  <label>Enter Old Password</label>
                  <input type="text" class="form-control" name="TxtOldPass" placeholder="Old Password">
                </div>
                <div class="form-group">
                  <label>Enter New Password</label>
                  <input type="text" class="form-control" name="TxtNewPass" placeholder="New Password">
                </div>
                <div class="form-group">
                  <label>Confirm New Password</label>
                  <input type="text" class="form-control" name="TxtConNewPass" placeholder="Confirm New Password">
                </div>
                <!--<div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>-->
                <div class="clearfix">
                  <center><input type="Submit" name="Btn_Submit" class="btn btn-Primary" value="Change Password"></center>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!-- /.Left col -->
        <div class="col-lg-3"></div>
      </div>
      <!-- /.row (main row) -->
    </section>
  </div>
</div>
</body>
</html>