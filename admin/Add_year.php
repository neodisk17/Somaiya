<html>
<head>
<title>Knowledge Park</title>
</head>
<body>
<div class="wrapper">
<!--Insert data-->
<?php
include("../Config.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
//Select course name from database
$courseName=addslashes($_POST['course_name']);
$courseYear=addslashes($_POST['TxtYear']);

//For Server Side Validationx

//This variable is used to count the number
//of validation errors
$problem=0;

// echo $courseName;
// echo $courseYear;

// End of Server Side Validations
if(empty($courseName)){
  $problem+=1;
  echo("Course Name cant be empty");
}
if(empty($courseYear)){
  $problem+=1;
 echo("Course Year cant be empty");
}

if($problem==0){
  $sql="Insert into year_master(course_id,year) values('$courseName','$courseYear')";
  //echo $sql;
$result=mysqli_query($conn,$sql);
if($result === FALSE) 
{ 
    //die(mysql_error()); // TODO: better error handling
}
else
{
  $message = "Year Added Successfully!!!!";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
}else{
  echo "There are validation errors";
}

mysqli_close($conn);


}
?>
<!--Header-->
<?php
//include("header.php");
?>
<!--left pannel-->
<?php
//include("leftpanel.php");
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
        <li class="active">Add Year</li>
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
              <h3 class="box-title">Add Year</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="" method="post">
                <div class="form-group">
                  <label>Select Course Name</label>
                  <?php
                  include("../Config.php");
                  $sql = "SELECT * FROM course_master";
                  $result = mysqli_query($conn,$sql);
                  $rowCount=mysqli_num_rows($result);
                  if($rowCount!=0){
                     $data=mysqli_fetch_all($result);
                  //var_dump($data);
                 echo "<select name='course_name'>";
                  foreach ($data as $key=> $value) {
                    //print_r($value);
                    // echo $value[0];
                    // echo $value[1];
                    echo "<option value=".$value[0].">".$value[1]."</option>";
                    // echo "<br/>";
                  }
                  echo "</select>";
                  }else{
                    echo "No Courses are add Please add them.";
                  }

                  mysqli_close($conn);
                 
                  ?>
                </div>
                <div class="form-group">
                  <label>Enter Year</label>
                  <input type="text" class="form-control" name="TxtYear" placeholder="Year">
                </div>
                <!--<div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>-->
                <div class="clearfix">
                  <input type="Submit" name="Btn_Submit" class="btn btn-Primary" value="Add Year">
                  <input type="button" name="Btn_update" class="btn btn-Primary" value="Update" style="float: right;">
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