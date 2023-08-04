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
<body>
	<table class="table table-dark table-hover">
		<h2 align="center">Admissions</h2>
		<tr class="table-active">
			<th scope="row">S.No</th>
			<th scope="row">student_id</th>
			<th scope="row">student_name</th>
			<th scope="row">father_name</th>
			<th scope="row">mother_name</th>
			<th scope="row">s_dob</th>
			<th scope="row">gender</th>
			<th scope="row">admission_of_class</th>
			<th scope="row">address</th>
			<th scope="row">country</th>
			<th scope="row">state</th>
			<th scope="row">city</th>
			<th scope="row">locality</th>
			<th scope="row">mobile_no</th>
			<th scope="row">email</th>
			<th scope="row">View</th>
			<th scope="row">Edit</th>
			<th scope="row">Delete</th>
		</tr>
<?php
$sql = "select * from admission ";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
$num = 1;


while($row = mysqli_fetch_assoc($result)){
	
?>


 <tr class="table-active">
	
	 <td scope="row"><?php echo $num ; ?></td>
	 
	<td scope="row"><?php echo $row['student_name'] ; ?></td>
	<td scope="row"><?php echo $row['father_name'] ;?></td>
	<td scope="row"><?php echo $row['mother_name'] ;?></td>
	<td scope="row"><?php echo $row['s_dob'] ;?></td>
	<td scope="row"><?php echo $row['gender'] ;?></td>
	<td scope="row"><?php echo $row['admission_of_class'] ;?></td>
	<td scope="row"><?php echo $row['address'] ;?></td>
	<td scope="row"><?php echo $row['country'] ;?></td>
	<td scope="row"><?php echo $row['state'] ;?></td>
	<td scope="row"><?php echo $row['city'] ;?></td>
	<td scope="row"><?php echo $row['locality'] ;?></td>
	<td scope="row"><?php echo $row['mobile_no'] ;?></td>
	<td scope="row"><?php echo $row['email'] ;?></td>
	<td scope="row"><a href="view_admission.php?id=<?php echo $row['student_id']?>"><button type="submit" value="iew" class="btn btn-primary">View</button></a></td>
	<td scope="row"><a href="edit_admission.php?id=<?php echo $row['student_id']?>"><button type="submit" value="Edit" class="btn btn-warning">Edit</button></a></td>
	<td scope="row"><button  type="button" value="Delete" class="btn btn-danger">Delete</button></td>
</tr>
<?php
$num ++;
}
?>


	</table>
</body>
</html>


