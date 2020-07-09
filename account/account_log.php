<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$conn->query("SET NAMES 'utf8'");
		$find = $conn->query("SELECT nick, email, password, auctor FROM users");
		$u = '';

		if ($find->num_rows > 0) {
			while ($i = $find->fetch_assoc()) {
				$ys = false;
				if (($_POST['user'] == $i['nick'])&&($_POST['password'] == $i['password'])) {$ys = true;}
				if (($_POST['user'] == $i['email'])&&($_POST['password'] == $i['password'])) {$ys = true;}
				if (($ys == true)&&($i['auctor'] != '1')) {$u = $i['nick']; $p = $i['password'];}
				}
			}

		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LcXVK8ZAAAAAO5wyj5ab97kjrX4FXLYDoROG4BI&response='
			.$_POST['g-recaptcha-response']);
		$responseData = json_decode($verifyResponse);

		if ($responseData->success) {
			if ($u == '') {
				session_destroy();
				header("location: ".$base_url."login.php?error=1");
				}
			else {
				$_SESSION['user'] = $u;
				$_SESSION['password'] = $p;
				if (isset($_POST['remember'])) {
					setcookie('user',$_SESSION['user'],time() + (86400 * 10000), '/');
					setcookie('password',$_SESSION['password'],time() + (86400 * 10000), '/');
				}
				header("location: ".$base_url."index.php");
				}
			}
		else {header("location: ".$base_url."login.php?error=2");}
		$conn->close();
		}
?>