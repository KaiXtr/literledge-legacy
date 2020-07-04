<?php
	require 'mysql_connect.php';
	if (!isset($_SESSION['user'])) {header("location: http://localhost/literledge/login.php");}
	if ($notcon == null) {
		$error = '';
		echo $_POST['pauctor'];
		if ($_POST['request'] == 'poem') {
			if ((isset($_POST['pname']))&&(isset($_POST['pcontent']))&&(isset($_POST['pauctor']))) {
				if (($_POST['pname'] != '')&&($_POST['pcontent'] != '')&&($_POST['pauctor'] != '')) {
					$find = $conn->query("SELECT nick FROM users WHERE pt='".$_POST['pauctor']."'");
					if ($find->num_rows > 0) {
						$i = $find->fetch_assoc();
						$cont = 'pname='.$_POST['pname'].';pcontent='.$_POST['pcontent'].';pauctor='.$i['nick'].';';
						$conn->query("INSERT INTO requests(user,req) VALUES ('".$_SESSION['user']."','".$cont."');");
					}
					else {$error = $error.'1';}
				}
				else {$error = $error.'2';}
			}
			else {$error = $error.'3';}

			#if ($error != '') {header("location: http://localhost/literledge/upload.php?error=".$error."&t=1");}
			}
		else if ($_POST['request'] == 'book') {

			}
		else if ($_POST['request'] == 'auctor') {
			if (isset($_POST['aname'])) {
				if ($_POST['aname'] != '') {
					$find = $conn->query("SELECT name FROM users WHERE name='".$_POST['pauctor']."';");
					if ($find->num_rows == 0) {
						$cont = 'aname='.$_POST['aname'].';';
						$conn->query("INSERT INTO requests(user,req) VALUES ('".$_SESSION['user']."','".$cont."');");
					}
					else {$error = $error.'1';}
				}
				else {$error = $error.'2';}
			}
			else {$error = $error.'3';}

			if ($error != '') {header("location: http://localhost/literledge/upload.php?error=".$error."&t=3");}
			}
			$conn->close();
		}

	if ($error == '') {header("location: ".$base_url."upload.php");}
?>