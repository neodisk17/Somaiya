<!DOCTYPE html>
<html>
<head>
  <title>Knowledge Park</title>
</head>
<body>
<div class="wrapper">
<!--Header-->
<?php
include("Header.php");
?>
<!--left pannel-->
<?php
include("Left_Pannel.php");
?>

<!--Right pannel-->
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard
        <small> Student panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Content</li>
      </ol>
    </section>   
<br>
<br>

 <!-- Login Register Panel Start -->
<div class="row">
  	<div class="col-lg-1"></div>
    <!-- Tabs start -->
    <section class="col-lg-10 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#Documents" data-toggle="tab">Documents</a></li>
              <li><a href="#Mp4" data-toggle="tab">Mp4 Videos</a></li>
              <li class="pull-left header"><i class="fa fa-edit"> Content Panel</i></li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Log In Form Start -->
              <div class="tab-pane active" id="Documents">
              <center><h3>Reading Content</h3></center>
              


              </div>
              <!-- Log In Form End -->

              <!-- Register Form Start -->
              <div class="tab-pane" id="Mp4">
              	<center><h3>Lecture Videos</h3></center>



              </div>
              <!-- Register Form End -->

            </div>
          </div>
          <!-- /.nav-tabs-custom -->
    </section>
    <!-- Tabs end -->

    <div class="col-lg-1"></div>
</div>
 <!-- Login Register Panel End -->
</div>
</div>
</div>
</body>
</html>