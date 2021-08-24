<?php 
require '../config/connection.php';

$accept= $_GET['accept'];

if(empty($accept)){
	echo "you did not select any record";
}
else{
	$result1 = mysqli_query($connect, "SELECT * FROM appointments WHERE appointment_id = '$accept' ORDER BY appointment_id DESC"); 
    $row = mysqli_fetch_assoc($result1);
	if ($row['status'] == 1 || $row['status'] == 2) {
		echo "<script>
		    alert('Decision already applied. If you have any queries contact admin!');
		    location = '../agro_appointments.php?appointment=done';
		    </script>";      
			exit();	
	}
	else{
		$query="UPDATE appointments SET status = 2 WHERE appointment_id = '$accept' ORDER BY appointment_id DESC";
		$result=mysqli_query($connect, $query);
		echo "<script>
			    alert('Appointement Accepted!');
			    location = '../agro_appointments.php?appointment=accepted';
			    </script>";      
				exit();	
	}
	
}
mysqli_close($connect);
?>