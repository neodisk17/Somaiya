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
$SelectCourse=addslashes($_POST['course']);
$SelectYear=addslashes($_POST['year']);
$TxtSem=addslashes($_POST['sem_name']);

echo $SelectCourse."<br>";
echo $SelectYear."<br>";
echo $TxtSem."<br>";
// validation functions
$problem=0;


if(empty($SelectCourse)){
  $problem+=1;
  echo "Course Name cant be empty";
}

if(empty($SelectYear)){
  $problem+=1;
  echo "Year cant be empty";
}

if(empty(($TxtSem))){
  $problem+=1;
  echo "Semester name cant be empty";
}


//End of validation functions


if($problem==0){
  $availableSql='select semester_name from semester_master where course_id='.$SelectCourse.' and year_id='.$SelectYear. ' and semester_name="'.$TxtSem.'"';
  var_dump($availableSql);
  $result=mysqli_query($conn,$availableSql);
  var_dump($result);
  $count=mysqli_num_rows($result);
  var_dump($count);

  if($count==0){
    $sql="Insert into semester_master(course_id,year_id,semester_name) values('$SelectCourse','$SelectYear','$TxtSem')";
    $result=mysqli_query($conn,$sql);
    if($result === TRUE) { 
    $message = "Semister Added Successfully!!!!";
   echo "<script type='text/javascript'>alert('$message');</script>";
  }
  }else{
    echo "This semester already exist for this year and this course";
  }

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
        <li class="active">Add Semister</li>
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
              <h3 class="box-title">Add Semister Details</h3>
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
                  $data=mysqli_fetch_all($result);
                  //var_dump($data);
                 echo "<select id='course' name='course'>";
                 echo "<option value='none'>none</option>";
                  foreach ($data as $key=> $value) {
                    //print_r($value);
                    // echo $value[0];
                    // echo $value[1];
                    echo "<option value=".$value[0].">".$value[1]."</option>";
                    // echo "<br/>";
                  }
                  echo "</select>"
                  ?>
                </div>
                <div class="form-group">
                  <label>Select Year</label>
                 <select id="year" name='year'>
                   <option value="none">none</option>
                 </select>
                </div>
                <div class="form-group">
                  <label>Enter Semister</label>
                  <input type="text" class="form-control" name="sem_name" placeholder="Semister">
                </div>
                <!--<div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>-->
                <div class="clearfix">
                  <input type="Submit" name="Btn_Submit" class="btn btn-Primary" value="Add Sem">
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