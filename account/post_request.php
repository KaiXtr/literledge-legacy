<?php
	require 'mysql_connect.php';
	if (!isset($_SESSION['user'])) {header("location: ".$base_url."login.php");}
	if ($notcon == null) {
		$error = '';
		#POEM REQUEST
		if ($_POST['request'] == 'poem') {
			for ($x=0;$x<sizeof($_POST['pname']);$x++) {
				if ((@$_POST['pblsh'][$x])&&($_POST['pblsh'][$x] == 'on')&&($_POST['pname'] != '')&&($_POST['pcontent'] != '')&&(@$_POST['pauctor'])) {
					if ((@$_POST['prid'][$x])&&($_POST['prid'][$x] != '')) {
						$conn->query("DELETE FROM requests WHERE rid='".$_POST['prid'][$x]."'");
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
			for ($x=0;$x<sizeof($_POST['bnamept']);$x++) {
				if ((@$_POST['pblsh'][$x])&&($_POST['pblsh'][$x] == 'on')&&($_POST['bnamept'] != '')&&($_POST['bsinopsis'] != '')&&(@$_POST['binfo'])) {
					if ((@$_POST['brid'][$x])&&($_POST['brid'][$x] != '')) {
						$conn->query("DELETE FROM requests WHERE rid='".$_POST['brid'][$x]."'");
					}
					$pid = '000000';
					$ltrs = array('0','1','2','3','4','5','6','7','8','9',
						'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
					$inx = array(0,0,0,0,0,0);
					while (file_exists('../books/'.$pid.'.php') == true) {
						if ($inx[5] < sizeof($ltrs)) {$inx[5]++;}
						if ($inx[5] == sizeof($ltrs)) {$inx[4]++;$inx[5] = 0;}
						if ($inx[4] == sizeof($ltrs)) {$inx[3]++;$inx[4] = 0;}
						if ($inx[3] == sizeof($ltrs)) {$inx[2]++;$inx[3] = 0;}
						if ($inx[2] == sizeof($ltrs)) {$inx[1]++;$inx[2] = 0;}
						if ($inx[1] == sizeof($ltrs)) {$inx[0]++;$inx[1] = 0;}
						$pid = $ltrs[$inx[0]].$ltrs[$inx[1]].$ltrs[$inx[2]].$ltrs[$inx[3]].$ltrs[$inx[4]].$ltrs[$inx[5]];
					}
					if ($_POST['blitschool'][$x] == 'null') {$blitschool = 'null';}
					else {$blitschool = "'".$_POST['blitschool'][$x]."'";}
					if ($_POST['bseries'][$x] == '') {$bseries = 'null';}
					else {$bseries = "'".$_POST['bseries'][$x]."'";}
					$btags = str_replace(' ', '#', $_POST['btags'][$x]);

					$conn->query("INSERT INTO books VALUES ("."'".$pid."','".$_POST['bauctor'][$x]."','".$_POST['byear'][$x]."','".$_POST['bgenre'][$x]."',
						'".$_POST['bcountry'][$x]."',".$blitschool.",".$bseries.",'".$_POST['bvolume'][$x]."','".$_POST['blicense'][$x]."',
						'".$_POST['bcdd'][$x]."','".$btags."','0','0','0'".")");
					$conn->query("INSERT INTO translations (fkey,pt,en,es) VALUES ('".$pid."',
						'".$_POST['bnamept'][$x]."','".$_POST['bnameen'][$x]."','".$_POST['bnamees'][$x]."')");

					move_uploaded_file($_FILES['bcover']['tmp_name'][$x],"../media/images/covers/".$pid.".jpg");
					$img = imagecreatefromjpeg($_FILES['bcover']['tmp_name'][$x]);
					$new = imagecrop($img, ['x'=>0,'y'=>0,'width'=>250,'height'=>230]);
					rename($new, "../media/images/covers/".$pid.".jpg");

					$binfo = str_replace('"', '\"', $_POST['binfo'][$x]);
					$htmc = fopen('../books/'.$pid.'.php', 'w') or die('Unable to open file!');
					$cont = file_get_contents('../books/new_book.php');
					$cont = str_replace('%bid%', $pid, $cont);
					$cont = str_replace('%bauctor%', $_POST['bauctor'][$x], $cont);
					$cont = str_replace('%binfopt%', $binfo, $cont);
					$cont = str_replace('%binfoen%', $binfo, $cont);
					$cont = str_replace('%binfoes%', $binfo, $cont);
					fwrite($htmc, $cont);
					fclose($htmc);

					$bsinopsis = str_replace(PHP_EOL, ' ', $_POST['bsinopsis'][$x]);
					$htmc = fopen('../sinopsis/'.$pid.'.php', 'w') or die('Unable to open file!');
					$cont = "<?php".PHP_EOL.'if ($_COOKIE["lang"] == "pt") {$sin = "'.$bsinopsis.'";}'.PHP_EOL.'if ($_COOKIE["lang"] == "en") {$sin = "'.$bsinopsis.'";}'.PHP_EOL.'if ($_COOKIE["lang"] == "es") {$sin = "'.$bsinopsis.'";}'.PHP_EOL.'?>';
					fwrite($htmc, $cont);
					fclose($htmc);
				}
			}

			if ($error != '') {header("location: ".$base_url."requests.php?error=".$error."&t=2");}
			}

		#AUCTOR REQUEST
		else if ($_POST['request'] == 'auctor') {
			for ($x=0;$x<sizeof($_POST['anamept']);$x++) {
				if ((@$_POST['pblsh'][$x])&&($_POST['pblsh'][$x] == 'on')&&($_POST['anamept'][$x] != '')&&($_POST['anick'][$x] != '')&&(@$_POST['abirth'])) {
					if ((@$_POST['arid'][$x])&&($_POST['arid'][$x] != '')) {
						$conn->query("DELETE FROM requests WHERE rid='".$_POST['arid'][$x]."'");
					}
					if ($_POST['anameen'][$x] == '') {$anameen = 'null';}
					else {$anameen = "'".$_POST['anameen'][$x]."'";}
					if ($_POST['anamees'][$x] == '') {$anamees = 'null';}
					else {$anamees = "'".$_POST['anamees'][$x]."'";}
					if ($_POST['adeath'][$x] == 'null') {$adeath = 'null';}
					else {$adeath = "'".$_POST['adeath'][$x]."'";}
					if ($_POST['abonds'][$x] == 'null') {$abonds = 'null';}
					else {$abonds = "'".$_POST['abonds'][$x]."'";}

					$conn->query("INSERT INTO users VALUES ('".$_POST['anamept'][$x]."',".$anameen.",".$anamees.",'".$_POST['anick'][$x]."',
						'".$_POST['abirth'][$x]."',".$adeath.",'".$_POST['acountry'][$x]."','".$_POST['ahometown'][$x]."','".$_POST['agender'][$x]."',
						'1','".$_POST['aacademy'][$x]."','".$_POST['aemail'][$x]."','Gu@n@b@r@',null,".$abonds.")");

					move_uploaded_file($_FILES['apropic']['tmp_name'][$x],"../media/images/profilepics/".$_POST['anick'][$x].".jpg");
					$img = imagecreatefromjpeg($_FILES['apropic']['tmp_name'][$x]);
					$new = imagecrop($img, ['x'=>0,'y'=>0,'width'=>250,'height'=>230]);
					rename($new, "../media/images/profilepics/".$_POST['anick'][$x].".jpg");
					move_uploaded_file($_FILES['abanner']['tmp_name'][$x],"../media/images/banners/".$_POST['anick'][$x].".jpg");
					$img = imagecreatefromjpeg($_FILES['abanner']['tmp_name'][$x]);
					$new = imagecrop($img, ['x'=>0,'y'=>0,'width'=>250,'height'=>230]);
					rename($new, "../media/images/banners/".$_POST['anick'][$x].".jpg");

					$abio = str_replace('"', '\"', $_POST['abio'][$x]);
					$htmc = fopen('../users/'.$_POST['anick'][$x].'.php', 'w') or die('Unable to open file!');
					$cont = file_get_contents('../users/new_auctor.php');
					$cont = str_replace('%user%', $_POST['anick'][$x], $cont);
					$cont = str_replace('%abiopt%', $abio, $cont);
					$cont = str_replace('%abioen%', $abio, $cont);
					$cont = str_replace('%abioes%', $abio, $cont);
					fwrite($htmc, $cont);
					fclose($htmc);
				}
			}

			if ($error != '') {header("location: ".$base_url."requests.php?error=".$error."&t=3");}
			}
			$conn->close();
		}

	if ($error == '') {header("location: ".$base_url."requests.php");}
?>