<!DOCTYPE html>
<?php
include "connection.php";
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Result</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

<?php
$sql = "select * from teacher";
$result = mysqli_query($conn , $sql);
$num = 1;
?>
  <h2 align="center">Teacher Login Result</h2>
<table class="table table-dark table-hover">
  <tr class="table-active">
  <th scope="row">S.No</th>
    <th scope="row">teacher_id</th>
    <th scope="row"> teacher_username</th>
    <th scope="row"> password</th>
    <th scope="row">View</th>
			<th scope="row">Edit</th>
			<th scope="row">Delete</th>
</tr>
<tr>

  <?php
  while($row = mysqli_fetch_assoc($result)){
     $id = $row['teacher_id'] ;
    ?>
     <td> <?php echo  $num ;   ?></td>
     <td> <?php echo $row['teacher_id'] ;   ?></td>
     <td> <?php echo $row['teacher_username'] ;   ?></td>
     <td> <?php echo $row['password'] ;   ?></td>
     
     <td scope="row"><a href="view.php?id=<?php echo $row['teacher_id'] ;?>"><button type="button" class="btn btn-primary">View</button></a></td>
	<td scope="row"><a href="update.php?id=<?php echo $row['teacher_id'] ;?>"><button type="button" name="edit_btn" class="btn btn-warning">Edit</button></a></td>
	<td scope="row"><a href="delete.php?id=<?php echo $row['teacher_id'] ;?>"><button type="button"  type="button"class="btn btn-danger">Delete</button></a> </td>
  </tr>
  <?php
    $num ++;
  }
  ?>
</table>

</body>
</html>