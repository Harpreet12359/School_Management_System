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
	<title>View Student Data</title>
</head>
<body>
	<?php
	$sql = "select * from admission";
	$result = mysqli_query($conn , $sql);
	$row = mysqli_fetch_assoc($result);
     
	// $student_id =	$row['student_id'] ;
$student_name =	$row['student_name'] ;
$father_name =	$row['father_name'] ;
$mother_name =	$row['mother_name'] ;
$student_DOB =	$row['s_dob'] ;
$gender =	$row['gender'] ;
$admission_class =	$row['admission_of_class'] ;
$address =	$row['address'] ;
$country =	$row['country'] ;
$state =	$row['state'] ;
$city =	$row['city'] ;
$locality =	$row['locality'] ;
$mobile =	$row['mobile_no'] ;
$email =	$row['email'] ;

	
	?>
	<form action="" method="">
		<h1 class="text-center mt-3 text-info">
			View Student Data
		</h1>
		
		<div class="form-group">
			<label for="Name">student Name :</label>
			<input type="text" class="form-control" value="<?php echo $student_name;?>" name="student_name" required>
		</div>
		<div class="form-group">
			<label for="Name">father Name :</label>
			<input type="text" class="form-control" value="<?php echo $father_name;?>" name="father_name" required>
		</div>
		<div class="form-group">
			<label for="Name">mother Name :</label>
			<input type="text" class="form-control" value="<?php echo $mother_name;?>" name="mother_name" required>
		</div>
		<div class="form-group">
			<label for="date of birth">student Date of Birth :</label>
			<input type="date" class="form-control" value="<?php echo $student_dob;?>" name="S_DOB" required>
		</div>
		<label for="Name">gender :</label>
		<div class="form-check">
			
			<input class="form-check-input" type="radio" value="<?php echo $gender;?> " name="Gender" id="exampleRadios1" value="option1" checked>
			<label class="form-check-label" for="exampleRadios1">
			  Male
			</label>
		  </div>
		  <div class="form-check">
			<input class="form-check-input" type="radio" value="<?php echo $gender;?>" name="gender" id="exampleRadios2" value="option2">
			<label class="form-check-label" for="exampleRadios2">
			  Female
			</label>
		  </div>
		  <div class="form-check">
			<input class="form-check-input" type="radio" value="<?php echo $gender;?> name="exampleRadios" id="exampleRadios3" value="option3">
			<label class="form-check-label" for="exampleRadios3">
			  Transegender
			</label>
		  </div>
		<div class="form-group">
			<label for="Admission For Class">Admission For Class :</label>
			<select class="select" value="<?php echo $admission_class;?> name="Admission_of_class">
				<option value="1">8TH</option>
				<option value="2">9th</option>
				<option value="3">10th</option>
				<option value="4">11th</option>
				<option value="5">12th</option>
			  </select>
		</div>


		<h1 class="text-center mt-3 text-info">
			Contact Detail
		</h1>
		<div class="form-group">
			<label for="address">address :</label>
			<input type="text" class="form-control" value="<?php echo $address;?> "name="address" required>
		</div>
		<div class="form-group">
			<label for="country">country :</label>
			<input type="text" class="form-control" value="<?php echo $country;?> " name="country" required>
		</div>
		<br>
		<div class="form-group">
			<label for="state">state :</label>
			<br>
			<select class="select" value="<?php echo $state;?>" name="state">
				<option value="1">Haryana</option>
				<option value="2">U.T</option>
				<option value="3">Punjab</option>
			  </select>
		<div class="form-group">
			<label for="city">city :</label>
			<input type="text" class="form-control" value="<?php echo $city;?> "name="city" required>
		</div>

		<div class="form-group">
			<label for="locality">locality :</label>
			<input type="text" class="form-control" value="<?php echo $locality;?> "name="locality" >
		</div>

		<div class="form-group">
			<label for="mobile No">Mobile No :</label>
			<input type="text" class="form-control" value="<?php echo $mobile;?> "name="mobile_no" >
		</div>

		<div class="form-group">
			<label for="email">Email :</label>
			<input type="email" class="form-control" value="<?php echo $email;?> "name="email" required>
		</div>
		<br>

	<!-- <button class="btn btn-outline-info btn-block" name="update_btn" type="submit">update</button>  -->
		</form>
</body>
</html>