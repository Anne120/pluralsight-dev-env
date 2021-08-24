<?php
session_start();
require '../config/connection.php';
if (isset($_POST['send']))
{
	$farmer = $_SESSION['username'];
	$agronomist = mysqli_real_escape_string($connect, $_POST['agronomist']);	
	$date = mysqli_real_escape_string($connect, $_POST['date']);
	$time = mysqli_real_escape_string($connect, $_POST['time']);
	$subject = mysqli_real_escape_string($connect, $_POST['subject']);
	$message = mysqli_real_escape_string($connect, $_POST['message']);
	
	if (empty($agronomist) || empty($date) || empty($time) || empty($subject) || empty($message)) {
		echo"<script>
				alert('Fill in all the fields!');
				location = '../appointments.php?register = empty';
				 </script>";	
			exit();		
	}
	else{
			$appointmentQuery = mysqli_query($connect, "INSERT INTO appointments (subject, message, farmer_username, agronomist_username, date_of_appointment, time_of_appointment) VALUES ('$subject', '$message', '$farmer', '$agronomist', CURDATE(), CURTIME())");
				echo"<script>
				alert('Appointment booked successfully!');
				location = '../appointments.php?register = empty';
				 </script>";	
			exit();
		}	
			
}
mysqli_close($connect);
?>