<?php
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		$conn->query("SET NAMES 'utf8'");
		$profile = $conn->query("SELECT id, auctor, warning, series, volume FROM books WHERE auctor='".$user."'");
		$check = $conn->query("SELECT auctor FROM users WHERE nick='".$user."'");

		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$lang='pt';}
		else {$lang = $_COOKIE['lang'];}

		if ($check->num_rows > 0) {
			$c = $check->fetch_assoc();
			if ($c['auctor'] == '1') {
				if ($profile->num_rows > 0) {
					$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='".$user."'");
					$n = $find->fetch_assoc();
					if ($n[$_COOKIE['lang']] == null) {$nm = $n['name'];}
					else {$nm = $n[$_COOKIE['lang']];}

					$serie = array("");
					$slst = array("");
					$list = "<div class='brow'>
								<div class='blabel'><h1>";
					if ($_COOKIE['lang'] == 'pt') {$list = $list."Do mesmo autor </h1>";}
					if ($_COOKIE['lang'] == 'en') {$list = $list."From the same auctor </h1>";}
					if ($_COOKIE['lang'] == 'es') {$list = $list."Por el mismo auctor </h1>";}
					$list = $list."</div><div id='books' class='displaybooks'>";

					while ($i = $profile->fetch_assoc()) {
						$translation = $conn->query("SELECT * FROM translations WHERE fkey='".$i['id']."'");
						$t = $translation->fetch_assoc();

						if ($i['warning'] == '0') {$wrg = '';}
						else {$wrg = "style='background-color: #BC4440;color: #5B090D;'";}

						$thb = "<a href='books/" .$i["id"]. ".php'>
								<button class='thumbs' ".$wrg.">
									<div class='coverart'> <img  src='media/images/covers/" .$i["id"]. ".jpg' /> </div>
									<div class='description'>
									<h2> ".$t[$lang]." </h2>
									<h3> ".$nm. " </h3>";
									$thb = $thb. file_get_contents('../sinopsis/'.$i['id'].'.php');
								$thb = $thb. "</div>
								</button>
							</a>";

						if ($i['series'] != null) {
							if (in_array($i['series'], $slst) == false) {
								$slst[] = $i['series'];
								$serie[] = "<div class='brow'><div class='blabel'><h1> ".$i['series']." </h1></div><div id='books' class='displaybooks'>";
							}
							for ($x=0;$x<sizeof($serie);$x++){
								if ($i['series'] == $slst[$x]) {$serie[$x] = $serie[$x].$thb;}
								}
							}
						$list = $list.$thb;
						}
					echo "<div class='content'>".$list;
					for ($x=0;$x<sizeof($serie);$x++) {echo $serie[$x]."</div></div>";}
					echo "</div>";
					}
				}
			}
		}
		$conn->close();
?>