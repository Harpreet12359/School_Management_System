<!DOCTYPE html>
<?php
include "connection.php";
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<?php
if(isset($_POST['update_btn'])){
	$id= $_POST['id'];
	$teacher_username= $_POST['teacher_username'];
	$password= $_POST['password'];
	$update = "UPDATE teacher SET teacher_username='$teacher_username', password='$password' where teacher_id=$id";
	$result = mysqli_query($conn , $update);
	if($result == 1){
	header('location:result_teacher.php');
	}else{
		echo "Something Happens Wrong"; die;
	}
}
 $id= $_GET['id'];
$sql = "select * from teacher where teacher_id = $id";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
$teacher_username = $row['teacher_username'];
$password = $row['password'];
?>
<body>
<form action="update.php" method="POST">
		<a href="result_teacher.php">View Data</a>
		<h1 class="text-center mt-3 text-info">
			Teacher Login To ERP 
		</h1>
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<div class="form-group">
			<label for="teacher_username">teacher_username :</label>
			<input type="text" class="form-control" name="teacher_username" value="<?php echo $row['teacher_username']; ?>" required>
		</div>
		<div class="form-group">
			<label for="password">password :</label>
			<input type="password" class="form-control" value="<?php echo $row['password']; ?>" name="password" required>
		</div>
		<input type="submit" class="btn btn-outline-info btn-block" name="update_btn" value="Update">
		
	

</body>
</html>