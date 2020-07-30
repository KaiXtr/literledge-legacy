<?php
	require 'mysql_connect.php';
	if ($notcon == null) {
		$ys = false;
		if (@$_SESSION['user']) {
			$check = $conn->query("SELECT auctor FROM users WHERE nick='".$_SESSION['user']."'");
			if ($check->num_rows > 0) {
				$i = $check->fetch_assoc();
				if ($i['auctor'] == '2') {$ys = true;}
			}
		}
		if (($ys == true)&&(@$_POST['pagechanges'])&&(@$_POST['webpage'])) {
			$file = $_POST['webpage'];
			$htmc = fopen($file, 'r') or die('Unable to open file!');
			print_r($htmc);
			/*$cont = '<?php'
			.PHP_EOL.'	$shwpm = "<h1> '.$_POST['pname'][$x].' </h1>'
			.PHP_EOL.'	'.str_replace(PHP_EOL, '<br />'.PHP_EOL, $_POST['pcontent'][$x]).'<br />'
			.PHP_EOL.'	<span> ".$pnm." </span>'
			.PHP_EOL.'	<br />";'
			.PHP_EOL.'?>';
			fwrite($htmc, $cont);*/
			fclose($htmc);
		}
	$conn->close();
	}
?>