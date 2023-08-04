<?php
include "connection.php";
?>


<?php

$sql = "delete from admission WHERE student_id=$id";

$delete = mysqli_query($conn , $sql);
if($delete){
	
	header("location:result_admission.php");
	}


?>