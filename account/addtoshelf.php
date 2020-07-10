<?php
	require 'mysql_connect.php';
	if (!isset($_SESSION['user'])) {header("location: http://localhost/literledge/login.php");}
	if (($notcon == null)&&(isset($_POST['id']))&&(strlen($_POST['id']) == 6)) {
		$fuser = $conn->query("SELECT nick FROM users WHERE nick='".$_SESSION['user']."'");
		$fbook = $conn->query("SELECT id FROM books WHERE id='".$_POST['id']."'");

		if (($fuser->num_rows > 0)||($fbook->num_rows > 0)) {
			$shelf = $conn->query("SELECT * FROM shelves WHERE user='".$_SESSION['user']."' and book='".$_POST['id']."'");
			if ($shelf->num_rows == 0) {
				if (isset($_POST['add'])) {$conn->query("INSERT INTO shelves (user,book,state) VALUES ('".$_SESSION['user']."','".$_POST['id']."','1')");}
				if (isset($_POST['fav'])) {$conn->query("INSERT INTO shelves (user,book,state) VALUES ('".$_SESSION['user']."','".$_POST['id']."','3')");}
				}
			else {
				$i = $shelf->fetch_assoc();
				if (isset($_POST['rem'])) {$conn->query("DELETE FROM shelves WHERE id='".$i['id']."' and state != 0");}
				if (isset($_POST['fav'])) {$conn->query("UPDATE shelves SET state='3' WHERE id='".$i['id']."' and state != 0");}
				if (isset($_POST['unf'])) {$conn->query("UPDATE shelves SET state='1' WHERE id='".$i['id']."' and state != 0");}
				}
			header("location: ".$base_url."books/".$_POST['id'].".php");
			}
		$conn->close();
		}
	else {header('location: javascript://history.go(-1)');}
?>