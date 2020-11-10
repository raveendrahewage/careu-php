<?php 
	require  "conn.php";
	require  "admin.php";

	 $username = $_POST['username'];
	 $email = $_POST['email'];
	 // $username = "damish";
	 // $email = "damishnisal100@gmail.com";
	// $sql= " select * from androidreg  where email = '$email'";

	// $check = mysql_query($con,$sql);

	// if ($check) {
		

		require 'PHPMailer/PHPMailerAutoload.php';
		require 'PHPMailer/class.phpmailer.php';
		require 'PHPMailer/class.smtp.php';

				$mail = new PHPMailer;

				//$mail->SMTPDebug = 3;                               // Enable verbose debug output

				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				// $mail->Username = 'hexclan640@gmail.com';                 // SMTP username
				// $mail->Password = "Hex@1800clan";   
				$mail->Username = $adminemail;                 // SMTP username
				$mail->Password = $password;                           // SMTP password
				$mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to

				$mail->setFrom($adminemail,'CARE-U_ADMIN');
				// $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
				$mail->addAddress($email);               // Name is optional
				// $mail->addReplyTo('hexclan640@gmail.com', 'Information');
				// $mail->addCC('cc@example.com');
				// $mail->addBCC('bcc@example.com');

				// Set email format to HTML

				$mail->Subject = 'CARE-U_ADMIN Forget Password';
				$mail->Body    = "Press here to reset :http://localhost/careu-php/resetpassword.php?username=$username";
				// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				if(!$mail->send()) {
				    echo 'Message could not be sent.';
				    echo 'Mailer Error: ' . $mail->ErrorInfo;
				} else {
				    echo 'Message has been sent';
				}






	// }else{
	// 	echo "Not valid email";
	// }



?>