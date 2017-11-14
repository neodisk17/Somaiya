<?php 


require('../Config.php');
if($_SERVER['REQUEST_METHOD']==	"GET"){
 //echo $_GET['q'];
 
 $value=$_GET['q'];

 $sql='select * from subject_master where semester_id='.$value;

 //echo $sql;

 $result=mysqli_query($conn,$sql);
 if($result===false){
 	echo "No Result found";
 }else{
 	
 	
 	$jsonData=array();

 	while ($data=mysqli_fetch_assoc($result)){
 		//var_dump($data);
 		$jsonData[]=$data;
 	}
 	
 	echo(json_encode($jsonData));
 	
 }

}

?>