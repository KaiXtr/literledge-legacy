<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$auctor = substr($_GET['p'], 0, strpos($_GET['p'], '-'));
		$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$auctor."'");
		$n = $find->fetch_assoc();
		if ($n[$_COOKIE['lang']] == null) {$pnm = $n['pt'];}
		else {$pnm = $n[$_COOKIE['lang']];}
		require '../poems/'.$_GET['p'];

		header("Content-Type: image/png");
		$img = imagecreatefromjpeg('../media/images/profilepics/'.$auctor.'.jpg');
		$src = imagecreate(500, 300);
		imagealphablending($img, false);
		imagesavealpha($img, true);
		$bgcol = imagecolorallocate($img, 0, 0, 0);
		$txcol = imagecolorallocate($img, 255, 255, 255);

		$shwpm = str_replace('<br />', '\n', $shwpm);
		imagestring($img, 10, 10, 10, $shwpm, $txcol);

		imagepng($img);
		imagedestroy($img);
		imagedestroy($src);
		$conn->close();
	}
?>