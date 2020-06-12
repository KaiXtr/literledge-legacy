<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$conn->query("SET NAMES 'utf8'");
		$find = $conn->query("SELECT nick, email, password, auctor FROM users");
		$u = '';

		if ($find->num_rows > 0) {
			while ($i = $find->fetch_assoc()) {
				if (((($_POST['user'] == $i['nick']) && ($_POST['password'] == $i['password']))
				|| (($_POST['user'] == $i['email']) && ($_POST['password'] == $i['password'])))
				&& ($i['auctor'] == '0'))
					{$u = $i['nick'];$p = $i['password'];}
				}
			}
		if ($u == '') {
			session_destroy();
			header("location: ".$_SERVER["HTTP_REFERER"]."?error=1");
			}
		else {
			$_SESSION['user'] = $u;
			$_SESSION['password'] = $p;
			if (isset($_POST['remember'])) {
				setcookie('user',$_SESSION['user'],time() + (86400 * 10000), '/');
				setcookie('password',$_SESSION['password'],time() + (86400 * 10000), '/');
			}
			header("location: http://localhost/literledge/index.php");
			}
		}
	$conn->close();
?>