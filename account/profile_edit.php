<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$error = '';
		if ($_POST['edit'] == 'account') {
			if ((isset($_FILES['propic']['name']))&&($_FILES['propic']['name'] != '')) {
				echo $_FILES['propic']['name'];
				$info = pathinfo($_FILES['propic']['name']);
				$ext = $info['extension'];
				move_uploaded_file($_FILES['propic']['tmp_name'], "../media/images/profilepics/" .$_SESSION['user'].".".$ext);
				}
			if ((isset($_FILES['banner']['name']))&&($_FILES['banner']['name'] != '')) {
				echo $_FILES['banner']['name'];
				$info = pathinfo($_FILES['banner']['name']);
				$ext = $info['extension'];
				move_uploaded_file($_FILES['banner']['tmp_name'], "../media/images/banners/" .$_SESSION['user'].".".$ext);
				}
			if ((isset($_POST['name']))&&($_POST['name'] != ''))
				{$conn->query("UPDATE users SET name='".$_POST['name']."' WHERE nick='".$_SESSION['user']."';");}
			if ((isset($_POST['email']))&&($_POST['email'] != ''))
				{$conn->query("UPDATE users SET email='".$_POST['email']."' WHERE nick='".$_SESSION['user']."';");}
			if ((isset($_POST['gender']))&&($_POST['gender'] != ''))
				{$conn->query("UPDATE users SET gender='".$_POST['gender']."' WHERE nick='".$_SESSION['user']."';");}
			if ((isset($_POST['by']))&&($_POST['by'] != '')&&(isset($_POST['bm']))&&($_POST['bm'] != '')&&(isset($_POST['bd']))&&($_POST['bd'] != '')) {
				$dd = $_POST['bd'];
				if ($dd < 10) {$dd = '0'.$dd;}
				$mm = $_POST['bm'];
				if ($mm < 10) {$mm = '0'.$mm;}
				$conn->query("UPDATE users SET birth='".$_POST['by']."-".$mm."-".$dd."' WHERE nick='".$_SESSION['user']."';");
				}

			if ($error == '') {
				
				}
			else {header("location: http://localhost/literledge/usersettings.php?error=".$error."&t=1");}
			}
		if ($_POST['edit'] == 'security') {
			if ($_POST['oldpassword'] != $_SESSION['password']) {$error = $error.'1';}
			if (($_POST['oldpassword'] == $_POST['newpassword'])||($_POST['newpassword'] == $_SESSION['password'])) {$error = $error.'2';}
			if ($_POST['newpassword'] != $_POST['confirm']) {$error = $error.'3';}
			if (strlen($_POST['newpassword']) < 8) {$error = $error.'4';}
			if (($_POST['oldpassword'] == '')||($_POST['newpassword'] == '')||($_POST['confirm'] == '')) {$error = $error.'5';}

			if ($error == '') {
				$conn->query("UPDATE users SET password='".$_POST['newpassword']."' WHERE nick='".$_SESSION['user']."';");
				$_SESSION['password'] = $_POST['newpassword'];
				}
			else {header("location: http://localhost/literledge/usersettings.php?error=".$error."&t=2");}
			}
		if ($_POST['edit'] == 'navigation') {
			if ($error == '') {
				
				}
			else {header("location: http://localhost/literledge/usersettings.php?error=".$error."&t=3");}
			}
			$conn->close();
		}

	if ($error == '') {header("location: http://localhost/literledge/users/" .$_SESSION['user']. ".php");}
?>