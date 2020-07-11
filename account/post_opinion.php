<?php
	require 'mysql_connect.php';
	if (!isset($_SESSION['user'])) {header("location: ".$base_url."/login.php");}
	if ($notcon == null){
		if ($_GET['a'] == '0') {
			if ((isset($_POST['book']))&&(strlen($_POST['comment']) > 200)&&(strlen($_POST['comment']) < 783)&&(isset($_POST['comment']))){
				$conn->query("INSERT INTO reviews (user,book,comment,datime) VALUES
				('".$_SESSION['user']."','".$_POST['book']."','".$_POST['comment']."','".date('Y/m/d h:m:s')."')");
			}
		}
		if ($_GET['a'] == '1') {
			if ((isset($_POST['book']))&&(strlen($_POST['comment']) > 200)&&(strlen($_POST['comment']) < 783)&&(isset($_POST['comment']))){
				$conn->query("UPDATE reviews SET comment='".$_POST['comment']."', datime='".date('Y/m/d h:m:s')."'
				WHERE user='".$_SESSION['user']."' and book='".$_POST['book']."'");
			}
		}
		if ($_GET['a'] == '2') {
			if ((isset($_POST['book']))&&(isset($_SESSION['user']))){
				$conn->query("DELETE FROM reviews WHERE user='".$_SESSION['user']."' and book='".$_POST['book']."'");
			}
		}
	$conn->close();
	}
	header("location: ".$base_url."books/" .$_POST['book']. ".php");
?>