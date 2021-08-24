<?php
require '../config/connection.php';
if (isset($_POST['updateFarmer']))
{
	$farmersId=$_POST['farmersId'];
	$name = mysqli_real_escape_string($connect, $_POST['name']);
	// $surname = mysqli_real_escape_string($connect, $_POST['surname']);
	$username = mysqli_real_escape_string($connect, $_POST['username']);
    $region_name = mysqli_real_escape_string($connect, $_POST['region_name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);	
	
	$updateQuery = mysqli_query($connect, "UPDATE `farmers` SET `name` ='$name',  `username` = '$username', `region_name` ='$region_name', `email` ='$email', `phone` ='$phone', WHERE farmersId = '$farmersId'");
	
	echo "<script>
		alert('Farmer updated successfully.');
		location = '../farmers.php?farmer=pddate_successful';
		</script>";
	exit();
}

?>