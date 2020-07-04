<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	#require 'vendor/autoload.php';
	require 'mysql_connect.php';
	if ($notcon == null) {
		$find = $conn->query("SELECT email FROM users WHERE email='" .$_POST['email']. "';");

		if ($find->num_rows > 0) {
			$i = $find->fetch_assoc();
			$headers = "From: Literledge <".$_POST['email'].">\n";
			$headers .= "Reply-to: ".$_POST['email']."\n"; 
			$headers .= "Cc: Literledge < ewertonmatheus2113@gmail.com >\n"; 
			$headers .= "X-Sender: Literledge < ewertonmatheus2113@gmail.com >\n";
			$headers .= 'X-Mailer: PHP/' . phpversion();
			$headers .= "X-Priority: 1\n";
			$headers .= "Return-Path: ewertonmatheus2113@gmail.com\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=utf-8\n";
			$body = "<h1> Recupere sua senha <h1>
					Clique no link abaixo para recuperar sua senha. <br />
					<a href='".$base_url."account/recover_second.php'> Recuperar senha </a> <br />
					<br />";
			

			/*$mail = new PHPMailer();
			$mail->CharSet = 'UTF-8';
			try {

				$body = "<h1> Recupere sua senha <h1>
					Clique no link abaixo para recuperar sua senha. <br />
					<a href='http://localhost/literledge/account/recover_second.php'> Recuperar senha </a> <br />
					<br />";

				$mail->IsSMTP();
				$mail->Host = 'smtp.gmail.com';

				$mail->SMTPSecure = 'tls';
				$mail->Port = 587;
				$mail->SMTPDebug = 1;
				$mail->SMTPAuth = true;

				$mail->Username = 'thekaixtr@gmail.com';
				$mail->Password = 'Qu@sePerdiUmEm@il';

   				$mail->isHTML(true);  
				$mail->SetFrom('me.sender@gmail.com', $name);
				$mail->AddReplyTo('no-reply@mycomp.com','no-reply');
				$mail->Subject = 'Password recover';
				$mail->Body = $body;

				$mail->AddAddress('thekaixtr@gmail.com', 'titulo');

				$mail->AddAttachment($fileName);
				$mail->send();
				echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}*/
			if (mail($_POST['email'],"Literledge - Recuperação de senha",$body,$headers)){echo "email sendo encaminhado";};
			#header("location: http://localhost/literledge/recover.php?w=2");
		}
		else {header("location: ".$base_url."recover.php?w=1");}
	}
	
	$conn->close();
?>