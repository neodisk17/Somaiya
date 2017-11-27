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
session_start();
//$uploaded_By_Name = $_SESSION['login_user'];
//Select data from Html Controls
$SelectCourse=addslashes($_POST['SelectCourse']);
$SelectYear=addslashes($_POST['year']);
$Selectsem=addslashes($_POST['semester']);
$SelectSubject=addslashes($_POST['subject']);
$SelectContType=addslashes($_POST['SelectContType']);
$TxtTitle=addslashes($_POST['TxtTitle']);
$TxtDesc=addslashes($_POST['TxtDesc']);
$name       = $_FILES['FileUpload1']['name'];  
$temp_name  = $_FILES['FileUpload1']['tmp_name'];  
$target_dir = '../UploadedContentFiles/';
$target_file = $target_dir . basename($_FILES["FileUpload1"]["name"]);

$problem=0;

if (file_exists($target_file)) 
{
   $message = "Sorry, file already exists. Change file name upload again";
   echo "<script type='text/javascript'>alert('$message');</script>";
   //$uploadOk = 0;
}
else
{

if(empty($SelectCourse)){
  $problem+=1;
 echo("Course Name cant be empty");
}
/* Validation



*/



if(isset($name))
{
  if($problem==0){
        if(!empty($name))
        {
            $location = '../UploadedContentFiles/';    
            var_dump(move_uploaded_file($temp_name, $location.$name));  
            if(move_uploaded_file($temp_name, $location.$name))
            {
               $sql="Insert into content_master(course_id,year_id,sem_id,subject_id,content_type,content_title,content_desc,content_url,author) values('$SelectCourse','$SelectYear','$Selectsem','$SelectSubject','$SelectContType','$TxtTitle','$TxtDesc','$name','$uploaded_By_Name')";

               
               
               $result=mysqli_query($conn,$sql);
               if($result === FALSE) 
               { 
                 die(mysql_error()); // TODO: better error handling
               }
               else
               {
                 $message = "Content Uploaded Successfully!!!!";
                 echo "<script type='text/javascript'>alert('$message');</script>";
               }
            }
        }
}

}
else
{
  $message = "You should select a file to upload !!";
  echo "<script type='text/javascript'>alert('$message');</script>";
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
        <li class="active">Add Content</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- Main row -->
      <div class="row">
        <div class="col-lg-2"></div>
        <!-- Left col -->
        <section class="col-lg-8 connectedSortable">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-edit"></i>
              <h3 class="box-title">Add Content</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="" method="post"  enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-3">
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
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Select Year</label>
                      <select id="year" name="year" class="form-control">
                        <option value="none">none</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                     <label>Select Semister</label>
                     <select id="semester" name="semester">
                   <option value="none">none</option>
                 </select>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label>Select Subject Name</label>
                      <select id="subject" name="subject">
                   <option value="none">none</option>
                 </select>
                    </div>
                  </div>
                </div>
               <br />
               <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Select Content Type</label>
                    <select name="SelectContType" class="form-control">
                       <option>.txt</option>
                       <option>.pdf</option>
                       <option>.doc</option>
                       <option>.jpg</option>
                       <option>.mp4</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Enter Content Title</label>
                    <input type="text" class="form-control" name="TxtTitle" placeholder="Content Title">
                  </div>
                </div>
               </div>
               <br />
               <div class="form-group">
                  <label>Enter Content Description</label>
                  <textarea class="form-control" name="TxtDesc" placeholder="Enter Description" style="height: 90px;"></textarea>
               </div>
               <br />
               <div class="form-group">
                  <label>Select File To Upload</label>
                  <input type="file" name="FileUpload1" id="FileUpload1">
               </div>
                <!--<div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>-->
                <br />
                <div class="clearfix">
                  <input type="Submit" name="Btn_Submit" class="btn btn-Primary" value="Add Content">
                  <input type="button" name="Btn_update" class="btn btn-Primary" value="Update" style="float: right;">
                </div>
              </form>
            </div>
          </div>
        </section>
        <!-- /.Left col -->
        <div class="col-lg-2"></div>
      </div>
      <!-- /.row (main row) -->
    </section>
  </div>
</div>
<script type="text/javascript" src="ajax.js"></script>
</body>
</html>