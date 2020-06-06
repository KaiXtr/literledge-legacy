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
				if ($i['nick'] == $_POST['nick']) {$error = $error .'8';}
				if ($i['email'] == $_POST['email']) {$error = $error .'9';}
			}
		}
	}

	if ($error != '') {
		session_destroy();
		header("location: http://localhost/literledge/signin.php?error=" .$error. "");
		}
	else {
		$b = $_POST['by']."-".$_POST['bm']."-".$_POST['bd'];
		$new = "'" .$_POST['name']."','".$_POST['nick']."','".$b."','".$_POST['country']."','','".$_POST['gender']."','0','".$_POST['email']."','".$_POST['password']."',''";
		$conn->query("INSERT INTO users VALUES (".$new.");");
		$_SESSION['user'] = $_POST['nick'];
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['lang'] = substr($_POST['country'],0,2);
		header("location: http://localhost/literledge/index.php");
		}
	$conn->close();
?>