<?php
	$conn = new mysqli('localhost', 'root', 'Gu@n@b@r@', 'literledge');
	if ($conn->connect_error) {echo("Connection failed: " . $conn->connect_error);}
	else {
		$find = $conn->query("SELECT email FROM users WHERE email='" .$_POST['email']. "';");

		if ($find->num_rows > 0) {
			$i = $find->fetch_assoc();
			$headers = "From: Literledge < ewertonmatheus2113@gmail.com >\n";
			$headers .= "Cc: Literledge < ewertonmatheus2113@gmail.com >\n"; 
			$headers .= "X-Sender: Literledge < ewertonmatheus2113@gmail.com >\n";
			$headers .= 'X-Mailer: PHP/' . phpversion();
			$headers .= "X-Priority: 1\n";
			$headers .= "Return-Path: ewertonmatheus2113@gmail.com\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=utf-8\n";

			$message = "<h1> Recupere sua senha <h1>
				Clique no link abaixo para recuperar sua senha. <br />
				<a href='http://localhost/literledge/account/recover_second.php'> Recuperar senha </a> <br />
				<br />";
			mail($_POST['email'],"Literledge - Recuperação de senha",$message,$headers);
			#header("location: http://localhost/literledge/recover.php?w=2");
		}
		else {header("location: http://localhost/literledge/recover.php?w=1");}
	}
	
	$conn->close();
?>