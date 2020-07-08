<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$conn->query("SET NAMES 'utf8'");
		$error = '';

		if (strlen($_POST['password']) < 8) {$error = $error .'1';}
		if ($_POST['password'] != $_POST['confirm']) {$error = $error .'2';}
		if ($_POST['name'] == '') {$error = $error .'3';}
		if ($_POST['nick'] == '') {$error = $error .'4';}
		if ($_POST['check'] = 0) {$error = $error .'5';}
		preg_match('/\b@\b/i',$_POST['email'],$e);
		if (sizeof($e) == 0) {$error = $error .'6';}

		$find = $conn->query("SELECT nick, email, password FROM users");
		if ($find->num_rows > 0) {
			while ($i = $find->fetch_assoc()) {
				if ($i['nick'] == 'new_user') {$error = $error .'8';}
				if ($i['nick'] == $_POST['nick']) {$error = $error .'8';}
				if ($i['email'] == $_POST['email']) {$error = $error .'9';}
			}
		}

	if ($error != '') {
		session_destroy();
		header("location: ".$_SERVER["HTTP_REFERER"]."?error=" .$error. "");
		}
	else {
		$b = $_POST['by']."-";
		if ($_POST['bm'] < 10) {$b = $b."0".$_POST['bm']."-";}
		else {$b = $b.$_POST['bm']."-";}
		if ($_POST['bd'] < 10) {$b = $b."0".$_POST['bd'];}
		else {$b = $b.$_POST['bd'];}

		$new = "'" .$_POST['name']."',null,null,'".$_POST['nick']."','".$b."',null,'".$_POST['country']."','','".$_POST['gender']."','-1','".$_POST['email']."','".$_POST['password']."',''";
		$conn->query("INSERT INTO users VALUES (".$new.");");
		$_SESSION['user'] = $_POST['nick'];
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['lang'] = substr($_POST['country'],0,2);

		copy('../media/images/profilepics/new_user.jpg','../media/images/profilepics/'.$_POST['nick'].'.jpg');
		copy('../media/images/banners/new_user.jpg','../media/images/banners/'.$_POST['nick'].'.jpg');

		$htmc = fopen('../users/'.$_POST['nick'].'.php', 'w') or die('Unable to open file!');
		$cont = file_get_contents('../users/new_user.php');
		$cont = str_replace('%user%', $_POST['nick'], $cont);
		fwrite($htmc, $cont);
		fclose($htmc);

		$headers = "From: Literledge <literledge@gmail.com>\r\n";
		$headers .= "Content-Type: text/html; charset=utf-8\n";
		$body = "<div style='font-size: 25px;'>
					<h1>Confirmação de conta</h1>
					<a href='".$base_url."account/account_verification.php'>clique aqui para confirmar sua conta</a>
				</div>";
		mail($_POST['email'],"Confirme sua conta",$body,$headers);

		header("location: ".$base_url."confirmation.php");
		}
	$conn->close();
	}
?>