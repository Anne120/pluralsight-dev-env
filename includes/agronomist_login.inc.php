<?php
session_start();
if (isset($_POST['login'])) {

	include '../config/connection.php';	
	
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);		

	if (empty($username) || empty($password)) {
		header("Location: ../agronomist.php?login=empty");	
		exit();		
	}
	else{
			$enrcyptedPassword = md5($password);
			$agronomistLoginSql = "SELECT * FROM agronomists WHERE username = '$username' AND password = '$enrcyptedPassword'";		
			$queryResult = mysqli_query($connect, $agronomistLoginSql);
			$queryRowCheck = mysqli_num_rows($queryResult);
			$queryTableFetch = mysqli_fetch_assoc($queryResult);
			
			if ($queryRowCheck < 0) {
				header("Location: ../agronomist.php?login=error");
				exit();
			}
			else{
				if ($queryTableFetch) {
					$_SESSION['username'] = $queryTableFetch['username'];							
					header("Location: ../agronomist_home.php?login=success");
					exit();			
				}
				else{
					header("Location: ../agronomist.php?login=fetcherror");
					exit();
				}
			}
		}	
}
else{
	header("Location: ../agronomist.php?login=ultimateerror");
			exit();
}
mysqli_close($connect);
?>