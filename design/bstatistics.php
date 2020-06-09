<?php
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		$find = $conn->query("SELECT readings FROM books WHERE id='".$_GET['id']."'");
		if ($find->num_rows > 0) {
			$i = $find->fetch_assoc();
			$conn->query("UPDATE books SET readings='".($i['readings']+1)."' WHERE id='".$_GET['id']."'");
		}
	$conn->close();
	header('location: ' . $_SERVER["HTTP_REFERER"]);
	}
?>