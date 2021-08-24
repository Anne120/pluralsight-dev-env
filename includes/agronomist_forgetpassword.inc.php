<?php
session_start();
if (isset($_POST['verify'])) {

	include '../config/connection.php';	
	
	$username = mysqli_real_escape_string($connect, $_POST['username']);			

	if (empty($username)) {
		header("Location: ../agronomist_forgotpassword.php?forgotPassword=empty");	
		exit();		
	}
	else{			
			$forgotPasswordSql = "SELECT username FROM agronomists WHERE username = '$username'";			
			$queryResult = mysqli_query($connect, $forgotPasswordSql);
			$queryRowCheck = mysqli_num_rows($queryResult);
			$queryTableFetch = mysqli_fetch_assoc($queryResult);
			
			if ($queryRowCheck == 0) {
				header("Location: ../agronomist_forgotpassword.php?forgotPassword=error");
				exit();
			}
			else{
				if ($queryTableFetch) {
					$_SESSION['username'] = $queryTableFetch['username'];							
					header("Location: ../agronomist_resetpassword.php?forgotPassword=success");
					exit();			
				}
				else{
					header("Location: ../agronomist_forgotpassword.php?forgotPassword=fetcherror");
					exit();
				}
			}
		}	
}
else{
	header("Location: ../agronomist_forgotpassword.php?forgotPassword=ultimateerror");
			exit();
}
mysqli_close($connect);
?>