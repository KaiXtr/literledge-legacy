<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
	$ys = false
	$check = $conn->query("SELECT code FROM users WHERE nick='".$_SESSION['user']."'");
	if ($check->num_rows > 0){
		$i = $check->fetch_assoc();
		if ($_GET['t'] == $i['code']) {
			$conn->query("UPDATE users SET auctor='0' WHERE nick='".$_SESSION['user']."'");
			$ys = true;
		}
	}
	$conn->close();
	if ($ys == true) {header('location: '.$base_url.'index.php');}
	else {header('location: '.$base_url.'confirmation.php?e=1');}
	}
?>