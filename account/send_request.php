<?php
	require 'mysql_connect.php';
	if (!isset($_SESSION['user'])) {header("location: ".$base_url."login.php");}
	if ($notcon == null) {
		$error = '';
		#POEM REQUEST
		if ($_POST['request'] == 'poem') {
			$find = $conn->query("SELECT nick FROM users WHERE nick='".$_POST['pauctor']."'");
			if ($find->num_rows == 0) {$error = $error.'1';}
			if (($_POST['pname'] == '')||($_POST['pcontent'] == '')||($_POST['pauctor'] == '')) {$error = $error.'2';}
			if ((!isset($_POST['pname']))||(!isset($_POST['pcontent']))||(!isset($_POST['pauctor']))) {$error = $error.'2';}

			if ($error != '') {header("location: ".$base_url."upload.php?error=".$error."&t=1");}
			else {
				$i = $find->fetch_assoc();
				$cont = 'pname='.$_POST['pname'].';pcontent='.$_POST['pcontent'].';pauctor='.$i['nick'].';';
				$fil = glob('../poems/'.$i['nick'].'*.php');

				$chk = $conn->query("SELECT req FROM requests WHERE req='".$cont."'");
				if ($chk->num_rows == 0) {
					$can = true;
					for ($x=0;$x<sizeof($fil);$x++) {
						include $fil[$x];
						$txt = str_replace('<br />', '', $shwpm);
						similar_text($txt, $_POST['pcontent'], $prc);
						if (intval($prc) >= 80) {$can = false;break;}
					}
					if ($can == true)
						{$conn->query("INSERT INTO requests(user,req) VALUES ('".$_SESSION['user']."','".$cont."')");}
					else {header("location: ".$base_url."upload.php?error=".$error."3&t=1");}
				}
				else {header("location: ".$base_url."upload.php?error=".$error."4&t=1");}
			}
		}

		#BOOK REQUEST
		else if ($_POST['request'] == 'book') {
			$find = $conn->query("SELECT nick FROM users WHERE nick='".$_POST['bauctor']."'");
			if ($find->num_rows == 0) {$error = $error.'5';}
			if (($_POST['bname'] == '')||($_POST['byear'] == '')||($_POST['bcountry'] == '')||($_POST['bauctor'] == '')) {$error = $error.'6';}
			if ((!isset($_POST['bname']))||(!isset($_POST['byear']))||(!isset($_POST['bcountry']))||(!isset($_POST['bauctor']))) {$error = $error.'6';}

			if ($error != '') {header("location: ".$base_url."upload.php?error=".$error."&t=2");}
			else {
				$i = $find->fetch_assoc();
				$cont = 'bname='.$_POST['bname'].';byear='.$_POST['byear'].';bcountry='.$_POST['bcountry'].';bauctor='.$i['nick'].';';

				$chk1 = $conn->query("SELECT req FROM requests WHERE req='".$cont."'");
				if ($chk1->num_rows == 0) {
					$conn->query("INSERT INTO requests(user,req) VALUES ('".$_SESSION['user']."','".$cont."')");
				}
				else {header("location: ".$base_url."upload.php?error=".$error."7&t=1");}
			}
		}

		#AUCTOR REQUEST
		else if ($_POST['request'] == 'auctor') {
			if (($_POST['aname'] == '')||($_POST['acountry'] == '')) {$error = $error.'8';}
			if ((!isset($_POST['aname']))||(!isset($_POST['acountry']))) {$error = $error.'8';}

			if ($error != '') {header("location: ".$base_url."upload.php?error=".$error."&t=3");}
			else {
				$cont = 'aname='.$_POST['aname'].';acountry='.$_POST['acountry'].';';
				$chk = $conn->query("SELECT req FROM requests WHERE req='".$cont."'");
				if ($chk->num_rows == 0) {
					$conn->query("INSERT INTO requests(user,req) VALUES ('".$_SESSION['user']."','".$cont."')");
				}
				else {header("location: ".$base_url."upload.php?error=".$error."9&t=1");}
			}
		}
		$conn->close();
	}

	if ($error == '') {header("location: ".$base_url."upload.php");}
?>