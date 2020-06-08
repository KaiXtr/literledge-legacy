<?php
	if (session_status() == PHP_SESSION_NONE) {session_start();}
	$conn = new mysqli('localhost', 'root', 'Gu@n@b@r@', 'literledge');
	if ($conn->connect_error) {$notcon = $conn->connect_error;}
	else {$notcon = null;}
?>