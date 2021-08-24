<?php
session_start();
if (isset($_POST['login'])) {

	include '../config/connection.php';	
	
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);		

	if (empty($username) || empty($password)) {
		header("Location: ../index.php?login=empty");	
		exit();		
	}
	else{
			$enrcyptedPassword = md5($password);
			$farmersLoginSql = "SELECT * FROM farmers WHERE username = '$username' AND password = '$enrcyptedPassword'";			
			$queryResult = mysqli_query($connect, $farmersLoginSql);
			$queryRowCheck = mysqli_num_rows($queryResult);
			$queryTableFetch = mysqli_fetch_assoc($queryResult);
			
			if ($queryRowCheck == 0) {
				header("Location: ../index.php?login=error");
				exit();
			}
			else{
				if ($queryTableFetch) {
					$_SESSION['username'] = $queryTableFetch['username'];
					$_SESSION['region'] = $queryTableFetch['region_name'];							
					header("Location: ../home.php?login=success");
					exit();			
				}
				else{
					header("Location: ../index.php?login=fetcherror");
					exit();
				}
			}
		}	
}
else{
	header("Location: ../index.php?login=ultimateerror");
			exit();
}
mysqli_close($connect);
?>