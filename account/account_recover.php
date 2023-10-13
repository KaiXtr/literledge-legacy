<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		if (@$_POST['email']) {
			$find = $conn->query("SELECT email FROM users WHERE email='".$_POST['email']."'");
			if ($find->num_rows > 0) {
				$code = md5(rand(0,1000));
				$conn->query("UPDATE users SET code='".$code."' WHERE email='".$_POST['email']."'");
				$headers = "From: Literledge <literledge@gmail.com>\r\n";
				$headers .= "Content-Type: text/html; charset=utf-8\n";
				$body = "<div style='font-size: 18px;'>
							<h1> Recupere sua senha </h1>
							<a href='".$base_url."recover.php?e=".$_POST['email']."&t=".$code."'> Clique no aqui para recuperar sua senha.</a>
						</div>";
				
				mail($_POST['email'],"Recuperação de senha",$body,$headers);
				header("location: ".$base_url."recover.php?w=2");
			}
			else {header("location: ".$base_url."recover.php?w=1");}
		}
		if ((@$_POST['oldpassword'])&&(@$_POST['newpassword'])&&(@$_POST['confirm'])) {
			if (($_POST['oldpassword'] != '')&&($_POST['newpassword'] != '')&&($_POST['confirm'] != '')) {
				$find = $conn->query("SELECT nick,password FROM users WHERE email='".$_GET['e']."'");
				if ($find->num_rows > 0) {
					$i = $find->fetch_assoc();

					if ($_POST['oldpassword'] != $i['password']) {$error = $error.'1';}
					if (($_POST['oldpassword'] == $_POST['newpassword'])||($_POST['newpassword'] == $i['password'])) {$error = $error.'2';}
					if ($_POST['newpassword'] != $_POST['confirm']) {$error = $error.'3';}
					if (strlen($_POST['newpassword']) < 8) {$error = $error.'4';}
					if (preg_match("/[a-z]/", $_POST['newpassword']) == 0)  {$error = $error .'4';}
					if (preg_match("/[A-Z]/", $_POST['newpassword']) == 0)  {$error = $error .'4';}
					if (preg_match("/[0-9]/", $_POST['newpassword']) == 0)  {$error = $error .'4';}

					if ($error == '') {
						$conn->query("UPDATE users SET password='".$_POST['newpassword']."' WHERE email='".$_GET['e']."';");
						$_SESSION['user'] = $i['nick'];
						$_SESSION['password'] = $_POST['newpassword'];
						if ((isset($_COOKIE['user'])) && (isset($_COOKIE['password']))) {
							setcookie('user',$i['nick'],time() + (86400 * 10000), '/');
							setcookie('password',$_POST['newpassword'],time() + (86400 * 10000), '/');
						}
						header("location: ".$base_url."index.php");
						}
					else {header("location: ".$base_url."recover.php?e=".$_GET['e']."&t=".$_GET['t']."&w=".$error);}
				}
				else {header("location: ".$base_url."recover.php?e=".$_GET['e']."&t=".$_GET['t']."&w=".$error);}
			}
			else {header("location: ".$base_url."recover.php?e=".$_GET['e']."&t=".$_GET['t']."&w=5");}
		}
	$conn->close();
	}
?>