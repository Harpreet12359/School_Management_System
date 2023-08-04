<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Staff Login To ERP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<body>
<h1 class="text-center mt-5 text-info">
Contact us
</h1>
<h3 class="text-center mt-5 text-dark">Your name : <?php  echo $_POST['name'];   ?></h3><br>
<h3 class="text-center mt-5 text-dark">Your email : <?php  echo $_POST['email'];   ?></h3><br>
<h3 class="text-center mt-5 text-dark">Subject : <?php  echo $_POST['subject'];   ?></h3><br>
<h3 class="text-center mt-5 text-dark">Your message : <?php  echo $_POST['message'];   ?></h3><br>
<?php
$to = "harps19893@gmail.com";
$subject = "contacts";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
	
</body>
</html>