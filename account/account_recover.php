<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$find = $conn->query("SELECT email FROM users WHERE email='" .$_POST['email']. "';");
		if ($find->num_rows > 0) {
			$headers = "From: Literledge <literledge@gmail.com>\r\n";
			$headers .= "Content-Type: text/html; charset=utf-8\n";
			$body = "<div style='font-size: 18px;'>
						<h1> Recupere sua senha </h1>
						<a href='".$base_url."account/recover_second.php'> Clique no aqui para recuperar sua senha.</a>
					</div>";
			
			mail($_POST['email'],"Recuperação de senha",$body,$headers);
			header("location: ".$base_url."recover.php?w=2");
		}
		else {header("location: ".$base_url."recover.php?w=1");}
	$conn->close();
	}
?>