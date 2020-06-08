<?php
	require 'mysql_connect.php';
	if (!isset($_SESSION['user'])) {header("location: http://localhost/literledge/login.php");}
	if (($notcon == null)&&(isset($_POST['book']))&&(strlen($_POST['comment']) > 200)&&(strlen($_POST['comment']) < 783)&&(isset($_POST['comment']))){
		$conn->query("INSERT INTO reviews (user,book,comment,datime) VALUES ('".$_SESSION['user']."','".$_POST['book']."','".$_POST['comment']."','".date('Y/m/d h:m:s')."');");
		$conn->close();
	}
	header("location: http://localhost/literledge/books/" .$_POST['book']. ".php");
?>