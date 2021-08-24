<?php
require '../config/connection.php';
if (isset($_POST['updateAdmin']))
{
	$adminId=$_POST['admin_id'];
	$name = mysqli_real_escape_string($connect, $_POST['name']);
	// $surname = mysqli_real_escape_string($connect, $_POST['surname']);
	$username = mysqli_real_escape_string($connect, $_POST['username']);	
	
	$updateQuery = mysqli_query($connect, "UPDATE `administrators` SET `name` ='$name', `surname` ='$surname', `username` = '$username' WHERE admin_id = '$adminId'");
	
	echo "<script>
		alert('Admin updated successfully.');
		location = '../administrators.php?admin=pddate_successful';
		</script>";
	exit();
}

?>