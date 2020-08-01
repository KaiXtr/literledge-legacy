<?php
	require 'array_lists.php';
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		$conn->query("SET NAMES 'utf8'");
		$profile = $conn->query("SELECT * FROM users WHERE nick='" .$user. "'");

		if ($profile->num_rows > 0) {
			$i = $profile->fetch_assoc();

			#NAME
			$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$i['nick']."'");
			$n = $find->fetch_assoc();
			if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
			else {$nm = $n[$_COOKIE['lang']];}

			if (strlen($nm) > 20) {
				$hst = 'style="transform:scale(0.7,1);right: 0px;"';
				echo "<script type='text/javascript'>
					if ($(window).width() > 720) {namescroll(40,0);}
					else {namescroll(-20,0);}
				</script>";
			}
			else {
				$hst = '';
				echo "<script type='text/javascript'>
					if ($(window).width() > 720) {namescroll(160,200);}
					else {namescroll(0,20);}
				</script>";
			}

			#DEVELOPER TOOLS
			if (@$_SESSION['user']) {
				$chk = $conn->query("SELECT auctor FROM users WHERE nick='".$_SESSION['user']."'");
				if ($chk->num_rows > 0) {
					$ck = $chk->fetch_assoc();
					if ($ck['auctor'] == '2') {
						echo "<button id='editbio' class='btpress'>";
						if ($_COOKIE['lang'] == 'pt') {echo "Editar biografia";}
						if ($_COOKIE['lang'] == 'en') {echo "Edit biography";}
						if ($_COOKIE['lang'] == 'es') {echo "Editar biografía";}
						echo "</button>";
					}
				}
			}

			#VERIFICATION
			if ($i["auctor"] == '1') {$v = "<img id='vicon' src='media/images/icons/verified.png' />";}
			else {$v = "";};

			#BIRTH & DEATH
			if (strlen($i['birth']) > 7) {
				$dd = substr($i['birth'],8,2);
				$mm = substr($i['birth'],5,2);
				$yy = substr($i['birth'],0,4);
				$b = $dd.'/'.$mm.'/'.$yy;

				if ((($dd >= 22)&&($mm == '11'))||(($dd <= 21)&&($mm == '12'))) {$sgn='01';}
				else if ((($dd >= 22)&&($mm == '12'))||(($dd <= 19)&&($mm == '01'))) {$sgn = '02';}
				else if ((($dd >= 20)&&($mm == '01'))||(($dd <= 18)&&($mm == '02'))) {$sgn = '03';}
				else if ((($dd >= 19)&&($mm == '02'))||(($dd <= 20)&&($mm == '03'))) {$sgn = '04';}
				else if ((($dd >= 21)&&($mm == '03'))||(($dd <= 19)&&($mm == '04'))) {$sgn = '05';}
				else if ((($dd >= 20)&&($mm == '04'))||(($dd <= 20)&&($mm == '05'))) {$sgn = '06';}
				else if ((($dd >= 21)&&($mm == '05'))||(($dd <= 20)&&($mm == '06'))) {$sgn = '07';}
				else if ((($dd >= 21)&&($mm == '06'))||(($dd <= 22)&&($mm == '07'))) {$sgn = '08';}
				else if ((($dd >= 23)&&($mm == '07'))||(($dd <= 22)&&($mm == '08'))) {$sgn = '09';}
				else if ((($dd >= 23)&&($mm == '08'))||(($dd <= 22)&&($mm == '09'))) {$sgn = '10';}
				else if ((($dd >= 23)&&($mm == '09'))||(($dd <= 22)&&($mm == '10'))) {$sgn = '11';}
				else if ((($dd >= 23)&&($mm == '10'))||(($dd <= 21)&&($mm == '11'))) {$sgn = '12';}
				$zd = "<span id='tbirth' class='binfotip'><a href='https://www.flaticon.com/authors/bqlqn' target='_blank'>
							<img src='media/images/icons/zodiac/".$sgn.".png' height='30' title='Icons made by Freepik' />
						</a>".$zdclst[$sgn]."</span>";
			}
			else {$b = $i['birth'];$yy = substr($i['birth'],0,4);$zd = '';}

			if (($i['death'] != null)&&($i['auctor'] == '1')) {
				$d = "<span id='dhover'><img src='media/images/icons/death-".$_COOKIE['theme'].".png' height='30' />";
				if (strlen($i['death']) > 7) {
					$d = $d.substr($i['death'],8,2).'/'.substr($i['death'],5,2).'/'.substr($i['death'],0,4);
					$dth = substr($i['death'],0,5);
				}
				else {$d = $d.$i['death'];$dth=substr($i['death'],0,5);}
				$age = abs(abs($dth) - abs($yy));
				if ($_COOKIE['lang'] == 'pt') {$age = $age." anos";}
				if ($_COOKIE['lang'] == 'en') {$age = $age." years old";}
				if ($_COOKIE['lang'] == 'es') {$age = $age." años";}
				$d = $d."<span id='tdeath' class='binfotip'>".$age."</span></span>";
			}
			else {$d = '';$age = '';}

			#ACADEMY
			if ($i['academy'] != null) {
				$acd = "<div id='academy' style='background-image: url(media/images/icons/" .substr($i["academy"],0,3). ".png);'>".substr($i['academy'],4,2)."
				<span id='tacademy' class='binfotip'>".$acalst[substr($i["academy"],0,3)]."<br />Cadeira ".substr($i['academy'],4,2)." - Posição ".substr($i['academy'],7,2)
				."</span></div>";
			}
			else {$acd = '';}

			#BONDS
			if ($i['bonds'] != null) {
				$bnds = "<div id='bondsbar'>";
				$inx = 0;
					for($x=0;$x<strlen($i['bonds']);$x++) {
						if ($i['bonds'][$x] == ';') {
							$nm = substr($i['bonds'],$x-$inx,$inx);
							$kb = substr($nm,strlen($nm)-2,1);
							$t = substr($nm,0,strlen($nm)-3);
							$bnds = $bnds."<a href='users/".$t.".php'>
									<button class='pormini'>
										<img class='profilepic' src='media/images/profilepics/" .$t. ".jpg' />
										<span class='binfotip'>".$bndlst[$kb]."</span>
									</button>
								</a>";
							$inx = 0;
						}
						$inx++;
					}
				$bnds = $bnds."</div>";
			}
			else {$bnds = '';}

			#GALLERY
			if ($i['auctor'] == '1') {
				$pht = glob('../media/images/gallery/'.$i['nick'].'*.jpg');
				$pht = array_slice($pht, 2);
				if (sizeof($pht) > 0) {
					$gly = "<div class='brow' style='margin-top: 40px;'><div class='blabel'><h1>";
					if ($_COOKIE['lang'] == 'pt') {$gly = $gly."Galeria";}
					if ($_COOKIE['lang'] == 'en') {$gly = $gly."Gallery";}
					if ($_COOKIE['lang'] == 'es') {$gly = $gly."Galería";}
					$gly = $gly."</h1></div><div class='displaybooks'>";
					for ($x=0;$x<sizeof($pht);$x++) {
						$gly = $gly."<img class='uphoto' src='literledge/".$pht[$x]."' onclick='show_image(".'"literledge/'.$pht[$x].'"'.")' />";
					}
					$gly = $gly."</div></div><div id='displayimg'></div><button id='imageclose' class='btpress' onclick='show_image(null)'>sair</button>";
				}
				else {$gly = '';}
			}
			else {$gly = '';}

			#SHELVES
			$slf = '';
			$fav = '';
			$htc = '';
			if ((isset($_SESSION['user']))&&($_SESSION['user'] == $i['nick'])) {
				$shelf = $conn->query("SELECT b.id,u.pt,u.".$_COOKIE['lang'].",s.state FROM shelves as s JOIN books as b JOIN users as u
					ON b.auctor=u.nick and s.book=b.id WHERE s.user='".$i['nick']."' ORDER BY s.id desc");
				if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$lang='pt';}
				else {$lang = $_COOKIE['lang'];}

				if ($shelf->num_rows > 0) {
					$slf = "<div class='brow shelf'><div class='blabel'><h1>";
					if ($_COOKIE['lang'] == 'pt') {$slf = $slf."Na sua estante";}
					if ($_COOKIE['lang'] == 'en') {$slf = $slf."In your shelf";}
					if ($_COOKIE['lang'] == 'es') {$slf = $slf."En tu estante";}
					$slf = $slf."</h1></div><div class='displaybooks'>";

					$fav = "<div class='brow shelf'><div class='blabel'><h1>";
					if ($_COOKIE['lang'] == 'pt') {$fav = $fav."Favoritos";}
					if ($_COOKIE['lang'] == 'en') {$fav = $fav."Favorites";}
					if ($_COOKIE['lang'] == 'es') {$fav = $fav."Favoritos";}
					$fav = $fav."</h1></div><div class='displaybooks'>";

					$htc = "<div class='brow shelf'><div class='blabel'><h1>";
					if ($_COOKIE['lang'] == 'pt') {$htc = $htc."Histórico";}
					if ($_COOKIE['lang'] == 'en') {$htc = $htc."Historic";}
					if ($_COOKIE['lang'] == 'es') {$htc = $htc."Histórico";}
					$htc = $htc."</h1></div><div class='displaybooks'>";

					while ($s = $shelf->fetch_assoc()) {
						if ($s[$_COOKIE['lang']] == null) {$nm = $s['pt'];}
						else {$nm = $s[$_COOKIE['lang']];}

						$translation = $conn->query("SELECT * FROM translations WHERE fkey='".$s['id']."'");
						$t = $translation->fetch_assoc();
						$thb = "<a href='books/" .$s["id"]. ".php'>
									<button class='thumbs'>
										<div class='coverart'> <img  src='media/images/covers/" .$s["id"]. ".jpg' /> </div>
										<div class='description'>
										<h2> ".$t[$lang]." </h2>
										<h3> ".$nm." </h3>";
										include '../sinopsis/'.$s['id'].'.php';
									$thb = $thb.$sin."</div>
									</button>
								</a>";
						if ($s['state'] > 0) {$slf = $slf.$thb;}
						if ($s['state'] == 3) {$fav = $fav.$thb;}
						if ($s['state'] == 0) {$htc = $htc.$thb;}
						}
					$slf = $slf. "</div></div>";
					$fav = $fav. "</div></div>";
					$htc = $htc. "</div></div>";
					}
				}

			#OPINIONS
			$opn = '';
			if ((isset($_SESSION['user']))&&($_SESSION['user'] == $i['nick'])) {

				$opn .= "<div class='brow shelf'><div class='blabel'><h1>";
				if ($_COOKIE['lang'] == 'pt') {$opn .= "Opiniões";}
				if ($_COOKIE['lang'] == 'en') {$opn .= "Opinions";}
				if ($_COOKIE['lang'] == 'es') {$opn .= "Opiniónes";}
				$opn .= "</h1></div><div class='displaybooks'>";

				$find = $conn->query("SELECT * FROM reviews WHERE user='".$_SESSION['user']."'");
				if ($find->num_rows > 0) {
					while ($rw = $find->fetch_assoc()) {
						$fnms = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM translations WHERE fkey='".$rw['book']."'");
						$rn = $fnms->fetch_assoc();
						if ($rn[$_COOKIE['lang']] == null) {$rwnm = $rn['pt'];}
						else {$rwnm = $rn[$_COOKIE['lang']];}

						$opn = $opn."<div class='thbcritic'>
										<div>
											<a href='books/".$rw['book'].".php'><h2> ".$rwnm." </h2></a>
											<h3> ".$rw['datime']." </h3>
											<div id='cricom'>" .$rw['comment']. "</div>
										</div>
									</div>";
					}
				}
				$opn .= "</div></div>";
			}

			if ($i[$_COOKIE['lang']] == null) {$nm = $i['pt'];}
			else {$nm = $i[$_COOKIE['lang']];}

			echo "<div id='banner' style='background-image: url(".'media/images/banners/'.$i["nick"].'.jpg'.")'></div>
				<div id='profile'>
					<img  id='propic' class='profilepic' src='media/images/profilepics/" .$i["nick"]. ".jpg' title='" .$nm. "'/>
					<h1 id='username' ".$hst."> " .$nm. " </h1> " .$v. "
					<h2 id='nickname'> @" .$i["nick"]. " </h2>
					<div id='binfobar'>
						<div>
							<img src='media/images/icons/gender_" .$i["gender"]. "-".$_COOKIE['theme'].".png' height='30' />
							<span> " .$i["hometown"]. " </span>
							<span id='chover'>
								<a href='https://www.flaticon.com/authors/freepik' target='_blank'>
									<img src='media/images/icons/flags/" .$i["country"]. ".png' height='30' title='Icons made by Freepik' />
								</a>
								<span id='tcountry' class='binfotip'>".$coulst[$i['country']]."</span>
							</span>".$acd."
						</div>
						<div>
							<span id='bhover'> 
								<img src='media/images/icons/birth-".$_COOKIE['theme'].".png' height='30' />
								" .$b.$zd."
							</span>
							" .$d. "
						</div>
					</div>".$bnds."
				</div>".$gly.$slf.$fav.$htc.$opn
				."<script type='text/javascript'>
					if ($(window).width() < 720) {
						if ($('#username').height() >= '120') {document.getElementById('username').style.top = '80px';}
						else if ($('#username').height() >= '80') {document.getElementById('username').style.top = '120px';}
					}
					else if ($(window).width() < 2500) {
						if ($('#username').height() >= '345') {document.getElementById('username').style.top = '120px';}
						else if ($('#username').height() >= '230') {document.getElementById('username').style.top = '220px';}
					}
				</script>";
			}
	}
	$conn->close();
?>