<?php
	session_start();
	session_destroy();
	unset($_COOKIE['user']); 
	unset($_COOKIE['password']); 
	setcookie('user', null, -1, '/');
	setcookie('password', null, -1, '/');
	header("location: http://localhost/literledge/login.php");
?>