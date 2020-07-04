<?php
	require 'mysql_connect.php';
	if ($notcon == null) {

		$headers = "From: ".$_POST['email']."\r\n";
		$body = "<h1> Recupere sua senha <h1>
				Clique no link abaixo para recuperar sua senha. <br />
				<a href='http://localhost/literledge/account/recover_second.php'> Recuperar senha </a> <br />
				<br />";
		
		if (mail('literledge@gmail.com',$_POST['name']." te enviou um email",$_POST['message'],$headers)){echo "email sendo encaminhado";};
		header("location: ".$base_url."contacts.php?t=1");
	}
	
	$conn->close();
?>