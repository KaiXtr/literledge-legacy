<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$conn->query("DELETE FROM shelves WHERE user='".$_SESSION['user']."'");
		$conn->query("DELETE FROM users WHERE nick='".$_SESSION['user']."'");
		unlink('../media/images/profilepics/'.$_SESSION['user'].'.jpg');
		unlink('../media/images/banners/'.$_SESSION['user'].'.jpg');
		unlink('../users/'.$_SESSION['user'].'.php');
		session_destroy();
		unset($_COOKIE['user']); 
		unset($_COOKIE['password']);
		setcookie('user', null, -1, '/');
		setcookie('password', null, -1, '/');
	}
	header("location: ".$base_url."login.php");
?>