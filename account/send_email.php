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
			$headers = "From: ".$_POST['email']."\r\n";
			$body = "<h1> Recupere sua senha <h1>
					Clique no link abaixo para recuperar sua senha. <br />
					<a href='http://localhost/literledge/account/recover_second.php'> Recuperar senha </a> <br />
					<br />";
			
			if (mail('literledge@gmail.com',$_POST['name']." te enviou um email",$_POST['message'],$headers)){echo "email sendo encaminhado";};
		}
		else {header("location: ".$base_url."recover.php?w=1");}
	}
	
	$conn->close();
?>