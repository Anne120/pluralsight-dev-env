<?php
session_start();
if (isset($_POST['saveAdmin'])) {

	require '../config/connection.php';	
	$username = $_SESSION['username'];
	
	$name = mysqli_real_escape_string($connect, $_POST['name']);
	//$surname = mysqli_real_escape_string($connect, $_POST['surname']);		
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);	
	$confirm = mysqli_real_escape_string($connect, $_POST['confirm']);	
	$password = mysqli_real_escape_string($connect, $_POST['password']);	

	if (empty($name) || empty($surname) || empty($username) || empty($password) || empty($confirm)) {
		header("Location: ../administrators.php?admin=empty");	
		exit();		
	}
	else{
			$adminQuery = mysqli_query($connect, "SELECT * FROM administrators WHERE username = '$username'");
        	$rowCheck = mysqli_num_rows($adminQuery);
        	
		if ($rowCheck <= 0) {
			if ($password != $confirm) {
				echo "<script>
					alert('Passwords do not match.');
					location = '../administrators.php?admin=passwords_mismatch';
					</script>";
			}
			else{
			
				$encryptedPassword = md5($password);				
				$adminSql = mysqli_query($connect, "INSERT INTO administrators (`name`, `username`, `password`) VALUES ('$name',  '$username', '$encryptedPassword')");			
				
				echo "<script>
					alert('Admin added successfully.');
					location = '../administrators.php?admin=success';
					</script>";
				}
			
			}
			else{
				echo "<script>
					alert('Admin already exists.');
					location = '../administrators.php?admin=exists';
					</script>";			
				}
		}

	}
	else{
		header("Location: ../administrators.php?admin=ultimateerror");
				exit();
		}
mysqli_close($connect);			
?>