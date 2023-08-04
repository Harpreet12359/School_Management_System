<?php
include "connection.php";
?>

<?php

if(isset($_POST['submit'])){
    // $parent_id = $_POST['parent_id'];
    
$parent_username = $_POST['parent_username'];
$password = $_POST['password'];
$sql = "INSERT INTO parent(parent_username,password) VALUES ('$parent_username','$password')";
$result = mysqli_query($conn , $sql);
header('location:result_parent.php');
echo $parent_name;
echo $password;

}
if(isset($_POST['update_btn'])){
    // $parent_id = $_POST['parent_id'];
    $parent_username = $_POST['parent_username'];
    $password = $_POST['password'];
    $update = "UPDATE `parent` SET `parent_username`='[$parent_username]',`password`='[$password]' WHERE `parent_id`='$parent_id' ";
    $result = mysqli_query($conn , $update);
    header('location:result_parent.php');
}

?>
