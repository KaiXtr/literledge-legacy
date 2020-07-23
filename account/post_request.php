<?php
	require 'mysql_connect.php';
	if (!isset($_SESSION['user'])) {header("location: ".$base_url."login.php");}
	if ($notcon == null) {
		$error = '';
		#POEM REQUEST
		print_r($_POST);
		if ($_POST['request'] == 'poem') {
			for ($x=0;$x<sizeof($_POST['pname']);$x++) {
				if ((@$_POST['pblsh'][$x])&&($_POST['pblsh'][$x] == 'on')&&($_POST['pname'] != '')&&($_POST['pcontent'] != '')&&(@$_POST['pauctor'])) {
					if ((@$_POST['rid'][$x])&&($_POST['rid'][$x] != '')) {
						$conn->query("DELETE FROM requests WHERE rid='".$_POST['rid'][$x]."'");
					}
					$pid = '000000';
					$ltrs = array('0','1','2','3','4','5','6','7','8','9',
						'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
					$inx = array(0,0,0,0,0,0);
					while (file_exists('../poems/'.$_POST['pauctor'][$x].'-'.$pid.'.php') == true) {
						if ($inx[5] < sizeof($ltrs)) {$inx[5]++;}
						if ($inx[5] == sizeof($ltrs)) {$inx[4]++;$inx[5] = 0;}
						if ($inx[4] == sizeof($ltrs)) {$inx[3]++;$inx[4] = 0;}
						if ($inx[3] == sizeof($ltrs)) {$inx[2]++;$inx[3] = 0;}
						if ($inx[2] == sizeof($ltrs)) {$inx[1]++;$inx[2] = 0;}
						if ($inx[1] == sizeof($ltrs)) {$inx[0]++;$inx[1] = 0;}
						$pid = $ltrs[$inx[0]].$ltrs[$inx[1]].$ltrs[$inx[2]].$ltrs[$inx[3]].$ltrs[$inx[4]].$ltrs[$inx[5]];
					}
					if ($_POST['plitschool'][$x] == 'null') {$plitschool = $_POST['plitschool'][$x];}
					else {$plitschool = "'".$_POST['plitschool'][$x]."'";}

					$conn->query("INSERT INTO poems (auctor,id,country,genre,litschool) VALUES
						('".$_POST['pauctor'][$x]."','".$pid."','".$_POST['pcountry'][$x]."','".$_POST['pgenre'][$x]."',".$plitschool.")");
					echo '../poems/'.$_POST['pauctor'][$x].'-'.$pid.'.php';
					$htmc = fopen('../poems/'.$_POST['pauctor'][$x].'-'.$pid.'.php', 'w') or die('Unable to open file!');
					$cont = '<?php'.PHP_EOL.'$shwpm = "<h1> '.$_POST['pname'][$x].' </h1>'.PHP_EOL.
							str_replace(PHP_EOL, '<br />'.PHP_EOL, $_POST['pcontent'][$x])
							.'<br />'.PHP_EOL.'<span> ".$pnm." </span>'.PHP_EOL.'<br />";'.PHP_EOL.'?>';
					fwrite($htmc, $cont);
					fclose($htmc);
				}
			}

			if ($error != '') {header("location: ".$base_url."requests.php?error=".$error."&t=1");}
			}

		#BOOK REQUEST
		else if ($_POST['request'] == 'book') {

			}

		#AUCTOR REQUEST
		else if ($_POST['request'] == 'auctor') {
			if (isset($_POST['aname'])) {
				if ($_POST['aname'] != '') {
					$find = $conn->query("SELECT name FROM users WHERE name='".$_POST['pauctor']."';");
					if ($find->num_rows == 0) {
						$cont = 'aname='.$_POST['aname'].';';
						$conn->query("INSERT INTO requests(user,req) VALUES ('".$_SESSION['user']."','".$cont."');");
					}
					else {$error = $error.'1';}
				}
				else {$error = $error.'2';}
			}
			else {$error = $error.'3';}

			if ($error != '') {header("location: ".$base_url."requests.php?error=".$error."&t=3");}
			}
			$conn->close();
		}

	#if ($error == '') {header("location: ".$base_url."requests.php");}
?>