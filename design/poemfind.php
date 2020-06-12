<?php
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		$pom = glob('../poems/'.$auctor.'*.php');
		$list = "<div class='content'>";
		for ($x=0;$x<sizeof($pom);$x++) {
			$list = $list. "<blockquote class='quotepoem'>";
			$list = $list. file_get_contents($pom[$x]);
			$list = $list. "</blockquote>";
			}
		echo $list. "</div>";
		$conn->close();
		}
?>