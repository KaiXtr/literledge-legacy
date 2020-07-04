<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$headers = "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\n";
		$body = "<div style='font-size: 25px;'>
					<h1>Mensagem enviada por ".$_POST['name']."</h1>
					".$_POST['message']."
				</div>";
		mail('literledge@gmail.com',"Um usuário contatou os superiores",$body,$headers);
		header("location: ".$base_url."contacts.php?t=1");
		$conn->close();
	}
	else {header("location: ".$base_url."contacts.php?t=2");}
?>