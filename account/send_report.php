<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$err = array('er1'=>'Erro gramatical','er2'=>'Informação incorreta','er3'=>'Erro geral');
		$headers = "From: no-reply <no-reply>\r\n
		Content-Type: text/html; charset=utf-8\n";
		$body = "<div style='font-size: 25px;'>
					<h1>Um erro foi reportado</h1>
					<h3>Tipo de erro: ".$err[$_POST['retyp']]."</h3>
					".$_POST['retxt']."<br />
					<a href='".$base_url."books/".$_GET['l'].".php'>Clique aqui para examinar</a>
				</div>";
		mail('literledge@gmail.com',$err[$_POST['retyp']]." reportado",$body,$headers);
		header("location: ".$base_url."books/".$_GET['l'].".php");
		$conn->close();
	}
	else {header("location: ".$base_url."contacts.php?t=2");}
?>