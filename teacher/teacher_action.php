<?php
include "connection.php";
?>

<?php
if(isset($_POST['submit'])){
	// $teacher_id = $_POST['teacher_id'];
	$teacher_username = $_POST['teacher_username'];
	$password = $_POST['password'];
	$sql = "insert into teacher values('$teacher_username' , '$password')";
	$result = mysqli_query($conn , $sql);
	// header('location:result_teacher.php');
}if(isset($_POST['update_btn'])){
    $teacher_id = $_POST['teacher_id'];
	$teacher_username = $_POST['teacher_username'];
    $password = $_POST['password'];
	$update = "UPDATE `teacher` SET `teacher_id`='[$teacher_id]', `teacher_username`='[$teacher_username]',`password`='[$password]' WHERE `teacher_id`='[$teacher_id]' ";
    $result = mysqli_query($conn , $update);
    header('location:result_teacher.php');
}





?>
