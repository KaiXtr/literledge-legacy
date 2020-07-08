<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$headers = "From: no-reply <no-reply>\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\n";
		$body = "<div style='font-size: 25px;'>
					<h1>Erro reportado em ".$_POST['link']."</h1>
					".$_POST['message']."
				</div>";
		mail('literledge@gmail.com',"Um erro foi reportado.",$body,$headers);
		header("location: ".$base_url."books/".$_GET['l'].".php");
		$conn->close();
	}
	else {header("location: ".$base_url."contacts.php?t=2");}
?>