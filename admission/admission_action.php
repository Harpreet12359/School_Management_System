<?php
include "connection.php";
?>

<?php
if(isset($_POST['submit'])){
	$student_name = $_POST['student_name'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$s_dob = $_POST['s_dob'];
	$gender = $_POST['gender'];
	$admission_class = $_POST['admission_of_class'];
	$address = $_POST['address'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$locality = $_POST['locality'];
	$mobile = $_POST['mobile_no'];
	$email = $_POST['email'];

	$insert_query = "insert into admission values('','$student_name','$father_name','$mother_name','$s_dob','$gender','$admission_class','$address','$country','$state','$city','$locality',$mobile,'$email')";
	$result = mysqli_query($conn , $insert_query);
	


}


// if(isset($_POST['update_btn'])){
// 	$student_id = $_POST['student_id'];
// 	$student_name = $_POST['student_name'];
// 	$father_name = $_POST['father_name'];
// 	$mother_name = $_POST['mother_name'];
// 	$student_dob = $_POST['s_dob'];
// 	$gender = $_POST['gender'];
// 	$admission_class = $_POST['admission_of_class'];
// 	$address = $_POST['address'];
// 	$country = $_POST['country'];
// 	$state = $_POST['state'];
// 	$city = $_POST['city'];
// 	$locality = $_POST['locality'];
// 	$mobile = $_POST['mobile_no'];
// 	$email = $_POST['email'];


// 	$update = "UPDATE admission
// 	SET 
// 	student_id = '[$student_id]',
// 	student_name = '[$student_name]',
// 	father_name = '[$father_name]',
// 	mother_name = '[$mother_name]',
// 	s_dob = '[$student_dob]',
// 	gender = '[$gender]',
// 	admission_of_class = '[$admission_class]',
// 	address = '[$address]',
// 	country = '[$country]',
// 	state = '[$state]',
// 	city = '[$city]',
// 	locality = '[$locality]',
// 	mobile = '[$mobile]',
// 	email = '[$email]',

// 	WHERE student_id = '[$student_id]'";
// 	header("location:result_admission.php");
// }


?>