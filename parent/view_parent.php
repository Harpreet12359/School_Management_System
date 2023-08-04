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
	<title>View Parent Data</title>
</head>
<body>
	<?php
	$id = $_GET['id'];
	$q = "select * from parent where parent_id='$id'";
	$result = mysqli_query($conn , $q);
	$row = mysqli_fetch_assoc($result)
	?>
	
	<form action="" method="">
		<h1 class="text-center mt-3 text-info">
			View Parent Data  
		</h1>
		<div class="form-group">
			<label for="parent_username">parent_username :</label>
			<input type="text" class="form-control" name="parent_username" value= "<?php echo $row['parent_username']; ?>" required>
		</div>
		<div class="form-group">
			<label for="Password">Password :</label>
			<input type="password" class="form-control" name="Parent_password" value ="<?php echo $row['Password']; ?>"  required>
		</div>
		<!-- <button class="btn btn-outline-info btn-block" name="submit" type="submit">Submit</button> -->
		</form>
</body>
</html>