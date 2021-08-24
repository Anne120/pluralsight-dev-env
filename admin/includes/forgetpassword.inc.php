<?php
session_start();
if (isset($_POST['verify'])) {

	include '../config/connection.php';	
	
	$username = mysqli_real_escape_string($connect, $_POST['username']);			

	if (empty($username)) {
		header("Location: ../forgot_password.php?forgotPassword=empty");	
		exit();		
	}
	else{			
			$forgotPasswordSql = "SELECT username FROM administrators WHERE username = '$username'";			
			$queryResult = mysqli_query($connect, $forgotPasswordSql);
			$queryRowCheck = mysqli_num_rows($queryResult);
			$queryTableFetch = mysqli_fetch_assoc($queryResult);
			
			if ($queryRowCheck == 0) {
				header("Location: ../forgot_password.php?forgotPassword=error");
				exit();
			}
			else{
				if ($queryTableFetch) {
					$_SESSION['username'] = $queryTableFetch['username'];							
					header("Location: ../reset_password.php?forgotPassword=success");
					exit();			
				}
				else{
					header("Location: ../forgot_password.php?forgotPassword=fetcherror");
					exit();
				}
			}
		}	
}
else{
	header("Location: ../forgot_password.php?forgotPassword=ultimateerror");
			exit();
}
mysqli_close($connect);
?>