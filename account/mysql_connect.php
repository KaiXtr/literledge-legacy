<?php
	if (session_status() == PHP_SESSION_NONE) {session_start();}
	$base_url = 'http://localhost/literledge/';
	if (!isset($_COOKIE['lang'])) {header('location: '.$base_url.'design/cookieset.php?l='.substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2));}
	if (!isset($_COOKIE['theme'])) {header('location: '.$base_url.'design/cookieset.php?t=sepia');}
	$conn = new mysqli('localhost', 'root', '', 'literledge');
	if ($conn->connect_error) {$notcon = $conn->connect_error;}
	else {$notcon = null;}
?>