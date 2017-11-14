<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Knowledge Park</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini" style="background-color: #ecf0f5">
<br>
<br>
<br>
<br>
<br>
 <!-- Login Register Panel Start -->
<div class="row">
  	<div class="col-lg-3"></div>
        <!-- Left col -->
    <section class="col-lg-6 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom" style="background-color:White; box-shadow:0 0 33px -4px #1d2632; padding:10px 25px 10px 25px; border-radius:30px;">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#LogIn" data-toggle="tab">LogIn</a></li>
              <li><a href="#Register" data-toggle="tab">Register</a></li>
              <li class="pull-left header"><i class="fa fa-mortar-board"> Student Panel</i></li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Log In Form Start -->
              <div class="tab-pane active" id="LogIn">
              <center><h3>Student Log IN</h3></center>
              <div class="input-group">
                <span class="input-group-addon" style="padding: 6px 25px;"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email" style="height: 40px">
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon" style="padding: 6px 25px;"><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" placeholder="******" style="height: 40px">
              </div>
              <br>
                <center><input type="button" name="btn_Login" value="LogIn" class="btn btn-primary"></center>
                <br>
              </div>
              <!-- Log In Form End -->

              <!-- Register Form Start -->
              <div class="tab-pane" id="Register">
              	<center><h3>Student Registration</h3></center>
              	<label>User Name</label>
              	<div class="input-group">
                <span class="input-group-addon" style="padding: 6px 25px;"><i class="fa fa-user-plus"></i></span>
                <input type="text" name="TxtUName" class="form-control" placeholder="User Name" style="height: 40px">
              </div>
              <br>

              	<label>E-Mail</label>
              <div class="input-group">
                <span class="input-group-addon" style="padding: 6px 25px;"><i class="fa fa-envelope"></i></span>
                <input type="text" name="Txtemail" class="form-control" placeholder="Email@mail.com" style="height: 40px">
              </div>
              <br>

              <label>Course Name</label>
              	<div class="input-group">
                <span class="input-group-addon" style="padding: 6px 25px;"><i class="fa fa-user-circle-o"></i></span>
                <input type="text" name="TxtCourse" class="form-control" placeholder="Course Name Like MSC/Bsc.." style="height: 40px">
              </div>
              <br>

              	<label>Password</label>
              <div class="input-group">
                <span class="input-group-addon" style="padding: 6px 25px;"><i class="fa fa-key"></i></span>
                <input type="password" name="TxtPassword" class="form-control" placeholder="******" style="height: 40px">
              </div>
              <br>

              	<label>Confirm Password</label>
              <div class="input-group">
                <span class="input-group-addon" style="padding: 6px 25px;"><i class="fa fa-chain"></i></span>
                <input type="password" name="TxtConfPass" class="form-control" placeholder="******" style="height: 40px">
              </div>
              <br>
                <center><input type="button" name="btn_Register" value="Register" class="btn btn-primary"></center>
                <br>
              </div>
              <!-- Register Form End -->

            </div>
          </div>
          <!-- /.nav-tabs-custom -->
    </section>
    <div class="col-lg-3"></div>
</div>
 <!-- Login Register Panel End -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>