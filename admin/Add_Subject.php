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
$SelectCourse=addslashes($_POST['SelectCourse']);
$SelectYear=addslashes($_POST['year']);
$Selectsem=addslashes($_POST['semester']);
$TxtSubject=addslashes($_POST['TxtSubject']);

$problem=0;
//Validation

if(empty($SelectCourse)){
  echo "Course Name cant be empty";
  $problem+=1;
}

if(empty($SelectYear)){
  echo "Year cant be empty";
  $problem+=1;
}

if(empty($Selectsem)){
  echo "Semester name cant be empty";
  $problem+=1;
}

if(empty($TxtSubject)){
  echo "Subject Name cant be empty";
  $problem+=1;
}

//End of validations

if($problem==0){


$availableSql="select * from subject_master where course_id=$SelectCourse and year_id=$SelectYear and semester_id=$Selectsem and subject_name='$TxtSubject'";

echo $availableSql;

$availableResult=mysqli_query($conn,$availableSql);
var_dump($availableResult);
$count=mysqli_num_rows($availableResult);
  var_dump($count);
if($count == 0){

    $sql="Insert into subject_master(course_id,year_id,semester_id,subject_name) values('$SelectCourse','$SelectYear','$Selectsem','$TxtSubject')";
$result=mysqli_query($conn,$sql);
if($result === TRUE) {
  $message = "Subject Added Successfully!!!!";
  echo "<script type='text/javascript'>alert('$message');</script>";
 }


}else{
  echo "This subject name already exist for this course , year and semester";
}

}else{
  echo "There are valiadation error in the form";
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
        <li class="active">Add Subject</li>
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
              <h3 class="box-title">Add Subject Details</h3>
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
                   echo "<select id='course' name='SelectCourse' class='form-control'>
                   <option value='none'>none</option>";
                   while ($row = mysqli_fetch_array($result))
                   {
                      echo "<option value='" . $row['course_id'] ."'>" . $row['course_name'] ."</option>";
                   }
                     echo "</select>";
                  ?>
                </div>
                <div class="form-group">
                  <label>Select Year</label>
                  <select id="year" name="year" class="form-control">
                    <option value="none">none</option>
                </select>
                </div>
                <div class="form-group">
                  <label>Select Semister</label>
                 <select id="semester" name="semester">
                   <option value="none">none</option>
                 </select>
                </div>
                <div class="form-group">
                  <label>Enter Subject Name</label>
                  <input type="text" class="form-control" name="TxtSubject" placeholder="Subject Name">
                </div>
                <!--<div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>-->
                <div class="clearfix">
                  <input type="Submit" name="Btn_Submit" class="btn btn-Primary" value="Add Subject">
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
<script type="text/javascript" src="ajax.js"></script>
</body>
</html>