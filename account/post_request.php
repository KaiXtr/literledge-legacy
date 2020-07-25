<?php
	require 'mysql_connect.php';
	if (!isset($_SESSION['user'])) {header("location: ".$base_url."login.php");}
	if ($notcon == null) {
		function resizeImage($file,$name,$path,$newW,$newH) {
			$imgprp = getimagesize($file);
			$typ = $imgprp[2];
			$oldW = $imgprp[0];
			$oldH = $imgprp[1];
			if ($typ == IMAGETYPE_JPEG) {
				$imgsrc = imagecreatefromjpeg($file);
				$imgrez = imagecreatetruecolor($newW,$newH);
				imagecopyresampled($imgrez,$imgsrc,0,0,0,0,$newW,$newH,$oldW,$oldH);
				return imagejpeg($imgrez,$path.'.jpg');
			}
			else {return null;}
		}
		function generate_id($path) {
			$pid = '000000';
			$ltrs = array('0','1','2','3','4','5','6','7','8','9',
				'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
			$inx = array(0,0,0,0,0,0);
			while (file_exists($path.$pid.'.php') == true) {
				if ($inx[5] < sizeof($ltrs)) {$inx[5]++;}
				if ($inx[5] == sizeof($ltrs)) {$inx[4]++;$inx[5] = 0;}
				if ($inx[4] == sizeof($ltrs)) {$inx[3]++;$inx[4] = 0;}
				if ($inx[3] == sizeof($ltrs)) {$inx[2]++;$inx[3] = 0;}
				if ($inx[2] == sizeof($ltrs)) {$inx[1]++;$inx[2] = 0;}
				if ($inx[1] == sizeof($ltrs)) {$inx[0]++;$inx[1] = 0;}
				$pid = $ltrs[$inx[0]].$ltrs[$inx[1]].$ltrs[$inx[2]].$ltrs[$inx[3]].$ltrs[$inx[4]].$ltrs[$inx[5]];
			}
			return $pid;
		}
		$error = '';
		#POEM REQUEST
		if ($_POST['request'] == 'poem') {
			for ($x=0;$x<sizeof($_POST['pblsh1']);$x++) {
				if ((@$_POST['pblsh1'][$x])&&($_POST['pblsh1'][$x] == 'on')) {
					if ((!isset($_POST['pname'][$x]))||(!isset($_POST['pcontent'][$x]))||(!isset($_POST['pauctor'][$x]))
					||($_POST['pname'][$x] == '')||($_POST['pcontent'][$x] == '')||($_POST['pauctor'][$x] == '')) {$error .= '1';}
					$find = $conn->query("SELECT nick FROM users WHERE nick='".$_POST['pauctor'][$x]."'");
					if ($find->num_rows == 0) {$error .= '2';}

					$fil = glob('../poems/'.$_POST['pauctor'][$x].'*.php');
					for ($x=0;$x<sizeof($fil);$x++) {
						include $fil[$x];
						$txt = str_replace('<br />', '', $shwpm);
						similar_text($txt, $_POST['pcontent'][$x], $prc);
						if (intval($prc) >= 80) {$error .= '3';break;}
					}

					if ($error != '') {header("location: ".$base_url."requests.php?error=".$error."&t=1");}
					else {
						if ((@$_POST['prid'][$x])&&($_POST['prid'][$x] != '')) {
							$conn->query("DELETE FROM requests WHERE rid='".$_POST['prid'][$x]."'");
						}

						$pid = generate_id('../poems/'.$_POST['pauctor'][$x].'-');
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
			}
		}

		#BOOK REQUEST
		else if ($_POST['request'] == 'book') {
			for ($x=0;$x<sizeof($_POST['pblsh2']);$x++) {
				if ((@$_POST['pblsh2'][$x])&&($_POST['pblsh2'][$x] == 'on')) {
					if ((!isset($_POST['bnamept'][$x]))||(!isset($_POST['bauctor'][$x]))||(!isset($_POST['byear'][$x]))
					||($_POST['bnamept'][$x] == '')||($_POST['bauctor'][$x] == '')||($_POST['byear'][$x] == '')
					||(!isset($_POST['bvolume'][$x]))||(!isset($_POST['bcdd'][$x]))||(!isset($_POST['btags'][$x]))
					||($_POST['bvolume'][$x] == '')||($_POST['bcdd'][$x] == '')||($_POST['btags'][$x] == '')
					||(!isset($_POST['bsinopsis'][$x]))||(!isset($_POST['binfo'][$x]))
					||($_POST['bsinopsis'][$x] == '')||($_POST['binfo'][$x] == '')
					||(!isset($_FILES['bcover']['tmp_name'][$x]))||($_FILES['bcover']['tmp_name'][$x] == '')) {$error .= '4';}
					$find = $conn->query("SELECT nick FROM users WHERE nick='".$_POST['bauctor'][$x]."'");
					if ($find->num_rows == 0) {$error .= '5';}

					if ($error != '') {header("location: ".$base_url."requests.php?error=".$error."&t=2");}
					else {
						if ((@$_POST['brid'][$x])&&($_POST['brid'][$x] != '')) {
							$conn->query("DELETE FROM requests WHERE rid='".$_POST['brid'][$x]."'");
						}

						$pid = generate_id('../books/');
						if ($_POST['blitschool'][$x] == 'null') {$blitschool = 'null';}
						else {$blitschool = "'".$_POST['blitschool'][$x]."'";}
						if ($_POST['bseries'][$x] == '') {$bseries = 'null';}
						else {$bseries = "'".$_POST['bseries'][$x]."'";}
						$btags = str_replace(' ', '#', $_POST['btags'][$x]);

						$conn->query("INSERT INTO books VALUES ('".$pid."','".$_POST['bauctor'][$x]."','".$_POST['byear'][$x]."','".$_POST['bgenre'][$x]."',
							'".$_POST['bcountry'][$x]."',".$blitschool.",".$bseries.",'".$_POST['bvolume'][$x]."','".$_POST['blicense'][$x]."',
							'".$_POST['bcdd'][$x]."','".$btags."','0','0','0')");
						$conn->query("INSERT INTO translations (fkey,pt,en,es) VALUES ('".$pid."',
							'".$_POST['bnamept'][$x]."','".$_POST['bnameen'][$x]."','".$_POST['bnamees'][$x]."')");

						resize_image($_FILES['bcover']['tmp_name'][$x],"../media/images/covers/".$pid,333,500);

						$binfopt = str_replace('"', '\"', $_POST['binfopt'][$x]);
						$binfoen = str_replace('"', '\"', $_POST['binfoen'][$x]);
						$binfoes = str_replace('"', '\"', $_POST['binfoes'][$x]);
						$htmc = fopen('../books/'.$pid.'.php', 'w') or die('Unable to open file!');
						$cont = file_get_contents('../books/new_book.php');
						$cont = str_replace('%bid%', $pid, $cont);
						$cont = str_replace('%bauctor%', $_POST['bauctor'][$x], $cont);
						$cont = str_replace('%binfopt%', $binfopt, $cont);
						$cont = str_replace('%binfoen%', $binfoen, $cont);
						$cont = str_replace('%binfoes%', $binfoes, $cont);
						fwrite($htmc, $cont);
						fclose($htmc);

						$bsinopsispt = str_replace(PHP_EOL, ' ', $_POST['bsinopsispt'][$x]);
						$bsinopsisen = str_replace(PHP_EOL, ' ', $_POST['bsinopsisen'][$x]);
						$bsinopsises = str_replace(PHP_EOL, ' ', $_POST['bsinopsises'][$x]);
						$htmc = fopen('../sinopsis/'.$pid.'.php', 'w') or die('Unable to open file!');
						$cont = "<?php".PHP_EOL.'if ($_COOKIE["lang"] == "pt") {$sin = "'.$bsinopsispt.'";}'.PHP_EOL.'if ($_COOKIE["lang"] == "en") {$sin = "'.$bsinopsisen.'";}'.PHP_EOL.'if ($_COOKIE["lang"] == "es") {$sin = "'.$bsinopsises.'";}'.PHP_EOL.'?>';
						fwrite($htmc, $cont);
						fclose($htmc);
					}
				}
			}
		}

		#AUCTOR REQUEST
		else if ($_POST['request'] == 'auctor') {
			for ($x=0;$x<sizeof($_POST['pblsh3']);$x++) {
				if ((@$_POST['pblsh3'][$x])&&($_POST['pblsh3'][$x] == 'on')) {
					if ((!isset($_POST['anamept'][$x]))||(!isset($_POST['anick'][$x]))||(!isset($_POST['abio'][$x]))
					||($_POST['anamept'][$x] == '')||($_POST['anick'][$x] == '')||($_POST['abio'][$x] == '')
					||(!isset($_POST['abirth'][$x]))||(!isset($_POST['ahometown'][$x]))||(!isset($_POST['aemail'][$x]))
					||($_POST['abirth'][$x] == '')||($_POST['ahometown'][$x] == '')||($_POST['aemail'][$x] == '')
					||(!isset($_FILES['apropic']['tmp_name'][$x]))||(!isset($_FILES['abanner']['tmp_name'][$x]))
					||($_FILES['apropic']['tmp_name'][$x] == '')||($_FILES['abanner']['tmp_name'][$x] == '')) {$error .= '6';}

					if ($error != '') {header("location: ".$base_url."requests.php?error=".$error."&t=3");}
					else {
						if ((@$_POST['arid'][$x])&&($_POST['arid'][$x] != '')) {
							$conn->query("DELETE FROM requests WHERE rid='".$_POST['arid'][$x]."'");
						}
						if ($_POST['anameen'][$x] == '') {$anameen = 'null';}
						else {$anameen = "'".$_POST['anameen'][$x]."'";}
						if ($_POST['anamees'][$x] == '') {$anamees = 'null';}
						else {$anamees = "'".$_POST['anamees'][$x]."'";}
						if ($_POST['adeath'][$x] == '') {$adeath = 'null';}
						else {$adeath = "'".$_POST['adeath'][$x]."'";}
						if ($_POST['aacademy'][$x] == '') {$aacademy = 'null';}
						else {$aacademy = "'".$_POST['aacademy'][$x]."'";}
						if ($_POST['abonds'][$x] == '') {$abonds = 'null';}
						else {$abonds = "'".$_POST['abonds'][$x]."'";}

						$conn->query("INSERT INTO users VALUES ('".$_POST['anamept'][$x]."',".$anameen.",".$anamees.",'".$_POST['anick'][$x]."',
							'".$_POST['abirth'][$x]."',".$adeath.",'".$_POST['acountry'][$x]."','".$_POST['ahometown'][$x]."','".$_POST['agender'][$x]."',
							'1',".$aacademy.",'".$_POST['aemail'][$x]."','Gu@n@b@r@',null,".$abonds.")");

						resize_image($_FILES['apropic']['tmp_name'][$x],"../media/images/profilepics/".$_POST['anick'][$x],250,333);
						resize_image($_FILES['abanner']['tmp_name'][$x],"../media/images/banners/".$_POST['anick'][$x],1920,500);

						$abiopt = str_replace('"', '\"', $_POST['abiopt'][$x]);
						$abioen = str_replace('"', '\"', $_POST['abioen'][$x]);
						$abioes = str_replace('"', '\"', $_POST['abioes'][$x]);
						$htmc = fopen('../users/'.$_POST['anick'][$x].'.php', 'w') or die('Unable to open file!');
						$cont = file_get_contents('../users/new_auctor.php');
						$cont = str_replace('%user%', $_POST['anick'][$x], $cont);
						$cont = str_replace('%abiopt%', $abiopt, $cont);
						$cont = str_replace('%abioen%', $abioen, $cont);
						$cont = str_replace('%abioes%', $abioes, $cont);
						fwrite($htmc, $cont);
						fclose($htmc);
					}
				}
			}
		}
		$conn->close();
	}
	if ($error == '') {header("location: ".$base_url."requests.php");}
?>