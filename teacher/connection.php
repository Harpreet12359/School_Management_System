<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "school_management";

$conn = mysqli_connect($hostname ,$username ,$password ,$database);
if($conn){
}else{
	echo "Connection Not Done"; die;
}
?>