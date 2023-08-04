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
	if(isset($_POST['update_btn'])){
		// print_r($_POST);die;
		$update = 'UPDATE admission
	SET 
	student_name = "'.$_POST['student_name'].'",
	father_name = "'.$_POST['father_name'].'",
	mother_name =  "'.$_POST['mother_name'].'",
	s_dob = "'.$_POST['s_dob'].'",
	gender = "'.$_POST['gender'].'",
	admission_of_class = "'.$_POST['admission_of_class'].'",
	address = "'.$_POST['address'].'",
	country = "'.$_POST['country'].'",
	state = "'.$_POST['state'].'",
	city = "'.$_POST['city'].'",
	locality = "'.$_POST['locality'].'",
	mobile_no = "'.$_POST['mobile_no'].'",
	email = "'.$_POST['email'].'"

	WHERE student_id = '.$_POST['student_id'].'';
	 $result = mysqli_query($conn , $update);
	 if(isset($result)){
		echo "data updated";
		header('Locaton:result_addmission.php');
	 }
	}
	
	 if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "select * from admission where student_id = $id";
		$result = mysqli_query($conn,$query);	
		if($row = mysqli_fetch_assoc($result)){
			$student_id = $row['student_id'];
			$student_name = $row['student_name'];
			$father_name = $row['father_name'];
			$mother_name = $row['mother_name'];
			$s_dob = $row['s_dob'] ;
			$gender = $row['gender'] ;
			$admission_of_class = $row['admission_of_class'] ;
			$address = $row['address'] ;
			$country = $row['country'] ;
			$state = $row['state'] ;
			$city =  $row['city'] ;
			$locality =  $row['locality'] ;
			$mobile_no = $row['mobile_no'] ;
			$email = $row['email'] ;
		}
	

	
     ?>
	<form action="edit_admission.php" method="POST">
		<h1 class="text-center mt-3 text-info">
			View Student Data
		</h1>
		<input type="hidden" class="form-control" value="<?php echo $student_id;?>" name="student_id">
		
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
			<input type="date" class="form-control" value="<?php echo $s_dob;?>" name="s_dob" required>
		</div>
		<label for="Name">gender :</label>
		<div class="form-check">
			
			<input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="option1" <?php echo ($gender=='option1')? 'checked' : '';?>>
			<label class="form-check-label" for="exampleRadios1">
			  Male
			</label>
		  </div>
		  <div class="form-check">
			<input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="option2" <?php echo ($gender=='option2')? 'checked' : '';?>>
			<label class="form-check-label" for="exampleRadios2">
			  Female
			</label>
		  </div>
		  <div class="form-check">
			<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" <?php echo ($gender=='option3')? 'checked' : '';?>>
			<label class="form-check-label" for="exampleRadios3">
			  Transegender
			</label>
		  </div>
		<div class="form-group">
			<label for="Admission For Class">Admission For Class :</label>
			<select class="select" value="<?php echo $admission_of_class;?>" name="admission_of_class">
				<option value="1" <?php echo ($admission_of_class==1)? 'selected' : '';?>>8TH</option>
				<option value="2" <?php echo ($admission_of_class==2)? 'selected' : '';?>>9th</option>
				<option value="3" <?php echo ($admission_of_class==3)? 'selected' : '';?>>10th</option>
				<option value="4" <?php echo ($admission_of_class==4)? 'selected' : '';?>>11th</option>
				<option value="5" <?php echo ($admission_of_class==5)? 'selected' : '';?>>12th</option>
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
				<option value="1" <?php echo ($state==1)? 'selected' : '';?>>Haryana</option>
				<option value="2" <?php echo ($state==2)? 'selected' : '';?>>U.T</option>
				<option value="3" <?php echo ($state==3)? 'selected' : '';?>>Punjab</option>
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
			<input type="text" class="form-control" value="<?php echo $mobile_no;?> "name="mobile_no" >
		</div>

		<div class="form-group">
			<label for="email">Email :</label>
			<input type="email" class="form-control" value="<?php echo $email;?> "name="email" required>
		</div>
		<br>
		<input type="submit" class="btn btn-outline-info btn-block" name="update_btn" value="Update">
		</form>

		<?php
	 }
	 else {
		echo "id not found please try again";
		die;
	 }
		?>
</body>
</html>