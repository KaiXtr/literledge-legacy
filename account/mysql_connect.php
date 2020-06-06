<?php
	if (session_status() == PHP_SESSION_NONE) {session_start();}
	if (!isset($_SESSION['user'])) {header("location: http://localhost/literledge/login.php");}
	$conn = new mysqli('localhost', 'root', 'Gu@n@b@r@', 'literledge');
	if ($conn->connect_error) {$notcon = $conn->connect_error;}
	else {$notcon = null;}
?>