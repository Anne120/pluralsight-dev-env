<?php
session_start();
if (isset($_POST['reset'])) {

	include '../config/connection.php';	
	
	$username = $_SESSION['username'];
	$password = mysqli_real_escape_string($connect, $_POST['password']);	
	$confirmPassword = mysqli_real_escape_string($connect, $_POST['confirm']);

	if (empty($password) || empty($confirmPassword)) {
		header("Location: ../reset_password.php?reset=empty");	
		exit();		
	}
	else{	
		if ($password === $confirmPassword) {
			$encryptPassword = md5($password);		
			$sql = "UPDATE farmers SET password = '$encryptPassword' WHERE username = '$username'";
			$queryResult = mysqli_query($connect, $sql);				
			if (!$queryResult) {
				header("Location: ../reset_password.php?reset=error");
				exit();				
				}
				else{									
					header("Location: ../index.php?reset=success");				
				}
			}
			else{
				header("Location: ../reset_password.php?reset=password_mismatch");	
				exit();
			}			
		}	
}
else{
	header("Location: ../reset_password.php?reset=ultimateerror");
			exit();
}
mysqli_close($connect);
?>