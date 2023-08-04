<?php
 include "connection.php";
  $id = $_GET['id'];
	$delete = "delete from parent where parent_id=$id";//"UPDATE parent SET username='$Parent_name', password='$Password' where parent_id='$id'";
$result = mysqli_query($conn , $delete);
if($result){
	header('location: result_parent.php');
}
?>