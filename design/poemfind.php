<?php
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		$pom = glob('../poems/'.$auctor.'*.php');
		$list = "<div class='content'>";
		for ($x=0;$x<sizeof($pom);$x++) {
			$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$auctor."'");
			$n = $find->fetch_assoc();
			if ($n[$_COOKIE['lang']] == null) {$pnm = $n['pt'];}
			else {$pnm = $n[$_COOKIE['lang']];}

			$list = $list. "<blockquote class='quotepoem'>";
			include $pom[$x];
			$list = $list. $shwpm;
			$list = $list. "</blockquote>";
			}
		echo $list. "</div>";
		$conn->close();
		}
?>