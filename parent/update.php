<?php
 include "connection.php";
 $id = $_POST['id'];
    $parent_username= $_POST['parent_username'];
	$password = $_POST['parent_password'];
	$update = "UPDATE parent SET parent_username='$parent_username', password='$password' where parent_id=$id";
$result = mysqli_query($conn , $update);
if($result){
	header('location: result_parent.php');
}
	
// if(isset($_POST['update_btn'])){
// 	$id = $_GET['id'];
// 	$parent_username= $_POST['parent_username'];
// 	$password = $_POST['password'];
// 	
	
// 	$result= mysqli_query($conn , $update);
// 	if($result){
	
// 	}
// 	else{ 
// 		echo "please check";
// 	}
// }

?>