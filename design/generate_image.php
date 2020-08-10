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
		imagealphablending($src, false);
		imagesavealpha($src, true);
		$bgcol = imagecolorallocate($src, 0, 0, 0);
		$txcol = imagecolorallocate($src, 255, 255, 255);

		imagecopymerge($src, $img, 300, 0, 30, 0, 200, 300, 100);
		$distxt = array();
		$shwpm = str_replace('<h1>', '', $shwpm);
		$shwpm = str_replace('</h1>', '', $shwpm);
		$shwpm = str_replace('<br />', '', $shwpm);
		$shwpm = str_replace('	', '', $shwpm);
		$shwpm = str_replace(PHP_EOL, '#', $shwpm);
		$stx = 0;
		for ($x=0;$x<strlen($shwpm);$x++) {
			if ($shwpm[$x] == '#') {
				$distxt[] = substr($shwpm, $stx, $x);
				$stx = $x + 1;
			}
		}
		$py = 10;
		foreach ($distxt as $t) {
			imagestring($src, 1, 10, $py, $t, $txcol);
			$py += 20;
		}
		
		imagepng($src);
		imagedestroy($img);
		imagedestroy($src);
		$conn->close();
	}
?>