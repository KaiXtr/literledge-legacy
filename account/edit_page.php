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
		if (($ys == true)&&(@$_POST['pagechanges'])&&(@$_POST['webpage'])&&(@$_POST['webpath'])) {
			$file = '../'.$_POST['webpath'].'/'.basename($_POST['webpage']);
			$cont = file_get_contents($file);
			if ($_POST['webpath'] == 'books') {$tabs = '						';$tbn = 25;}
			if ($_POST['webpath'] == 'users') {$tabs = '					';$tbn = 24;}

			if ($_COOKIE['lang'] == 'pt') {
				$old = substr($cont, strpos($cont, " == 'pt') {".PHP_EOL.$tabs.'echo "')+$tbn);
				$old = substr($old, 0, strpos($old, '";'));
			}
			if ($_COOKIE['lang'] == 'en') {
				$old = substr($cont, strpos($cont, " == 'en') {".PHP_EOL.$tabs.'echo "')+$tbn);
				$old = substr($old, 0, strpos($old, '";'));
			}
			if ($_COOKIE['lang'] == 'es') {
				$old = substr($cont, strpos($cont, " == 'es') {".PHP_EOL.$tabs.'echo "')+$tbn);
				$old = substr($old, 0, strpos($old, '";'));
			}
			$new = str_replace('"', '\"', $_POST['pagechanges']);
			$cont = str_replace($old, $new, $cont);
			$htmc = fopen($file, 'w') or die('Unable to open file!');
			fwrite($htmc, $cont);
			fclose($htmc);
		}
	$conn->close();
	}
	header("location: ".$_POST['webpage']);
?>