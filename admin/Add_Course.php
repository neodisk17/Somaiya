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


// Needs Server side validations

//This variable is used to count the number
//of validation errors
$problem=0;

$coursename=addslashes($_POST['TxtCourse']);

if(empty($coursename)){
  $problem+=1;
 echo("Course Name cant be empty");
}

// Needs server side validations



// If it passes all the validations then 
// perform the databae query
if($problem==0){

$sql='select * from course_master where course_name="'.$coursename.'"';
print $sql;

$checkDuplicate=mysqli_query($conn,$sql);

$count=mysqli_num_rows($checkDuplicate);
print $count;

if($count==0){

  echo "No Duplicate data found";
  $insertSql="Insert into course_master(course_name) values('$coursename')";
  $result=mysqli_query($conn,$insertSql);
 
  if($result === FALSE) 
{ 
    die(mysql_error()); // TODO: better error handling
}
else
{
  $message = "Course Added Successfully!!!!";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
}else{
  echo $coursename."This course laready exist";
}

//  $sql="Insert into course_master(course_name) values('$coursename')";


// var_dump($result);


mysqli_close($conn);
}else{
  echo "Please enter the data properly";
}


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
        <li class="active">Add Course</li>
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
              <h3 class="box-title">Add Course Name</h3>
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
                  <label>Add Course Name</label>
                  <input type="text" class="form-control" name="TxtCourse" placeholder="Course Name">
                </div>
                <!--<div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>-->
                <div class="clearfix">
                  <input type="Submit" name="Btn_Submit" class="btn btn-Primary" value="Add Course">
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