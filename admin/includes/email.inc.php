<?php
session_start();
require '../phpmailer/PHPMailerAutoload.php';
require '../config/connection.php';
if (isset($_POST['send']))
{
	
  	$admin_username = $_SESSION['username'];
	$farmer_email = mysqli_real_escape_string($connect, $_POST['farmer_email']);	
	$subject = mysqli_real_escape_string($connect, $_POST['subject']);	
	$message = mysqli_real_escape_string($connect, $_POST['message']);
	
	if (empty($farmer_email) || empty($subject) || empty($message)) {
		echo"<script>
			alert('Fill in all fields.');
			location = '../email.php?register=empty';
			</script>";	
			exit();		
	}
	else{
			$farmerUsernameQuery = mysqli_query($connect, "SELECT * FROM `farmers` WHERE email = '$farmer_email'");
		  	$emailFetched = mysqli_fetch_assoc($farmerUsernameQuery);
		  	$receiverUsername = $emailFetched['username'];	
			
			$mail = new PHPMailer();

			//$mail->SMTPDebug = 4;

			$mail->isSMTP();

			$mail->Host='smtp.gmail.com';

			$mail->SMTPAuth='true';

			$mail->Username='kaydizzym@gmail.com';

			$mail->Password='kaydizzy2';

			$mail->SMTPSecure='tls';

			$mail->Port=587;

			$mail->SetFrom('admin@KENYA'S.staff.co.zw', 'KENYA'S (Pvt) Ltd.');
			$mail->addAddress($farmer_email);
			$mail->addReplyTo('noreply@KENYA'S.staff.co.zw', $receiverUsername);

			$mail->Subject=$subject;
			$mail->Body=$message;

			if ($mail->send()) {

			$userDetailsQuery = mysqli_query($connect, "INSERT INTO email_notification (sender_admin, receiver_farmer, subject, message, date_created, time_created) VALUES ('$admin_username', '$receiverUsername', '$subject', '$message', CURDATE(), CURTIME())");					

				echo "<script>
					  alert('Email sent successfully.');
					  location = '../email.php?email=success';
					  </script>";
				      exit();		   
			}
			else{
				echo "<script>
					alert('There has been an error in sending your email!');
					location = '../email.php?email=failed!';
					</script>"; 
					exit();			
			}			
					
		}		
}
mysqli_close($connect);
?>