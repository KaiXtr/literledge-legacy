<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$conn->query("DELETE FROM requests WHERE rid='".$_GET['d']."'");
	}
	header("location: ".$base_url."requests.php");
?>