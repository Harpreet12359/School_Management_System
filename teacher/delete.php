<?php
include "connection.php";
$id= $_GET['id'];
$sql = "delete from teacher WHERE teacher_id=$id";
// echo $sql; die("test");

$delete = mysqli_query($conn , $sql);
if($delete){
	header("location:result_teacher.php");
}

?>