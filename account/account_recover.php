<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$find = $conn->query("SELECT email FROM users WHERE email='" .$_POST['email']. "';");

		if ($find->num_rows > 0) {
			$i = $find->fetch_assoc();
			$headers = "From: Literledge <".$_POST['email'].">\n";
			$headers .= "Reply-to: ".$_POST['email']."\n"; 
			$headers .= "Cc: Literledge < literledge@gmail.com >\n"; 
			$headers .= "X-Sender: Literledge < literledge@gmail.com >\n";
			$headers .= 'X-Mailer: PHP/' . phpversion();
			$headers .= "X-Priority: 1\n";
			$headers .= "Return-Path: literledge@gmail.com\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=utf-8\n";
			$body = "<h1> Recupere sua senha <h1>
					Clique no link abaixo para recuperar sua senha. <br />
					<a href='".$base_url."account/recover_second.php'> Recuperar senha </a> <br />
					<br />";
			
			mail($_POST['email'],"Literledge - Recuperação de senha",$body,$headers);
			header("location: ".$base_url."recover.php?w=2");
		}
		else {header("location: ".$base_url."recover.php?w=1");}
	$conn->close();
	}
?>