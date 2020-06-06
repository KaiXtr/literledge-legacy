<?php
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		$find = $conn->query("SELECT pid, auctor FROM poems WHERE auctor='" .$auctor. "'");
		$check = $conn->query("SELECT auctor FROM users WHERE nick='" .$auctor. "'");

		if ($check->num_rows > 0) {
			$c = $check->fetch_assoc();
			if ($c['auctor'] == '1') {
				if ($find->num_rows > 0) {
					$list = "<div class='content'>";
					while ($i = $find->fetch_assoc()) {
							$list = $list. "<blockquote class='quotepoem'>";
							$list = $list. file_get_contents('../poems/' .$i['auctor']. '-' .$i['pid']. '.php');
							$list = $list. "</blockquote>";
						}
					echo $list. "</div>";
					}
				}
			}
			$conn->close();
		}
?>