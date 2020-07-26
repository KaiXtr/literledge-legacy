<?php
	require 'mysql_connect.php';
	if (!isset($_SESSION['user'])) {header("location: ".$base_url."login.php");}
	if ($notcon == null) {
		$error = '';
		if ($_POST['edit'] == 'account') {
			function resize_image($file,$path,$newW,$newH) {
				$imgprp = getimagesize($file);
				$typ = $imgprp[2];
				$oldW = $imgprp[0];
				$oldH = $imgprp[1];
				if ($typ == IMAGETYPE_JPEG) {
					$imgsrc = imagecreatefromjpeg($file);
					$imgrez = imagecreatetruecolor($newW,$newH);
					imagecopyresampled($imgrez,$imgsrc,0,0,0,0,$newW,$newH,$oldW,$oldH);
					return imagejpeg($imgrez,$path.'.jpg');
				}
				else {return null;}
			}
			if ((isset($_FILES['propic']['name']))&&($_FILES['propic']['name'] != '')) {
				resize_image($_FILES['propic']['tmp_name'],"../media/images/profilepics/".$_SESSION['user'],250,333);
				}

			if ((isset($_FILES['banner']['name']))&&($_FILES['banner']['name'] != '')) {
				resize_image($_FILES['banner']['tmp_name'],"../media/images/banners/".$_SESSION['user'],1920,500);
				}

			if ((isset($_POST['name']))&&($_POST['name'] != ''))
				{$conn->query("UPDATE users SET pt='".$_POST['name']."' WHERE nick='".$_SESSION['user']."';");}
			if ((isset($_POST['email']))&&($_POST['email'] != ''))
				{$conn->query("UPDATE users SET email='".$_POST['email']."' WHERE nick='".$_SESSION['user']."';");}
			if ((isset($_POST['gender']))&&($_POST['gender'] != ''))
				{$conn->query("UPDATE users SET gender='".$_POST['gender']."' WHERE nick='".$_SESSION['user']."';");}
			if ((isset($_POST['country']))&&($_POST['country'] != ''))
				{$conn->query("UPDATE users SET country='".$_POST['country']."' WHERE nick='".$_SESSION['user']."';");}
			if ((isset($_POST['by']))&&($_POST['by'] != '')&&(isset($_POST['bm']))&&($_POST['bm'] != '')&&(isset($_POST['bd']))&&($_POST['bd'] != '')) {
				$dd = $_POST['bd'];
				if ($dd < 10) {$dd = '0'.$dd;}
				$mm = $_POST['bm'];
				if ($mm < 10) {$mm = '0'.$mm;}
				$conn->query("UPDATE users SET birth='".$_POST['by']."-".$mm."-".$dd."' WHERE nick='".$_SESSION['user']."';");
				}

			if ($error == '') {
				
				}
			else {header("location: ".$base_url."usersettings.php?error=".$error."&t=1");}
			}
		if ($_POST['edit'] == 'security') {
			if (($_POST['oldpassword'] == '')&&($_POST['newpassword'] == '')&&($_POST['confirm'] == '')) {
				if (isset($_POST['delete'])) {echo $_POST['delete'];}
				}
			else {
				if ($_POST['oldpassword'] != $_SESSION['password']) {$error = $error.'1';}
				if (($_POST['oldpassword'] == $_POST['newpassword'])||($_POST['newpassword'] == $_SESSION['password'])) {$error = $error.'2';}
				if ($_POST['newpassword'] != $_POST['confirm']) {$error = $error.'3';}
				if (strlen($_POST['newpassword']) < 8) {$error = $error.'4';}
				if (preg_match("/[a-z]/", $_POST['newpassword']) == 0)  {$error = $error .'4';}
				if (preg_match("/[A-Z]/", $_POST['newpassword']) == 0)  {$error = $error .'4';}
				if (preg_match("/[0-9]/", $_POST['newpassword']) == 0)  {$error = $error .'4';}
				if (($_POST['oldpassword'] == '')||($_POST['newpassword'] == '')||($_POST['confirm'] == '')) {$error = $error.'5';}

				if ($error == '') {
					$conn->query("UPDATE users SET password='".$_POST['newpassword']."' WHERE nick='".$_SESSION['user']."';");
					$_SESSION['password'] = $_POST['newpassword'];
					}
				else {header("location: ".$base_url."usersettings.php?error=".$error."&t=2");}
				}
			}
		if ($_POST['edit'] == 'navigation') {
			if (isset($_POST['theme'])) {	
				if (isset($_POST['theme'])) {setcookie('theme',$_POST['theme'],time() + (86400 * 10000), '/');}
				else if (isset($_GET['t'])) {setcookie('theme',$_GET['t'],time() + (86400 * 10000), '/');}
				}
			}
			$conn->close();
		}

	if ($error == '') {header("location: ".$base_url."users/".$_SESSION['user'].".php");}
?>