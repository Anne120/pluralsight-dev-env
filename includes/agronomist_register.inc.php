<?php
require '../config/connection.php';
if (isset($_POST['register']))
{
	$name = mysqli_real_escape_string($connect, $_POST['name']);
	 // $surname = mysqli_real_escape_string($connect, $_POST['surname']);
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$phone = mysqli_real_escape_string($connect, $_POST['phone']);
	$gender = mysqli_real_escape_string($connect, $_POST['gender']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);
	$confirmPassword = mysqli_real_escape_string($connect, $_POST['confirm']);	

	if (empty($username) || empty($password)) {
		echo"<script>
			alert('Fill in all fields.');
			location = '../agronomist_register.php?register = user_exists';
				 </script>";	
			exit();		
	}
	else{
		if ($password === $confirmPassword) {		
			$encryptedPassword = md5($password);
			$selectFarmer = mysqli_query($connect, "SELECT * FROM farmers WHERE username = '$username' OR email = '$email'");
			$rows = mysqli_num_rows($selectFarmer);
			if ($rows > 0) {
				echo"<script>
				alert('Username or Email already exists.');
				location = '../agronomist_register.php?register = user_exists';
				 </script>";	
			exit();
			}
			else{
				$passwordQuery = mysqli_query($connect, "INSERT INTO agronomists (name, username, email, phone, password, gender, date_created, time_created) VALUES ('$name', '$username', '$email', '$phone', '$encryptedPassword', '$gender', CURDATE(), CURTIME())");
				header("Location: ../agronomist.php?agronomist=success");	
					   exit();
			}					
		}
		else{
			echo"<script>
			alert('Passwords do not match!');
			location = '../agronomist_register.php?register = user_exists';
				 </script>";	
			exit();
		}
	}		
}
mysqli_close($connect);
?>