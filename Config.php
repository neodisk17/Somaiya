
<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "somaiya";
$conn = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);

if(mysqli_connect_errno()){
	echo "Failed to connect to the database";
}else{
	//echo "Connected to the database";
}

// mysqli_select_db($mysql_database, $bd) or die("Opps!! Database not found some thing went wrong");

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "somaiya";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//} 
?>