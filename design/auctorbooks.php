<?php
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		if (isset($user)) {
			$profile = $conn->query("SELECT b.id, b.auctor, b.warning, b.series, b.volume, u.auctor as chk FROM books as b JOIN users as u
			ON b.auctor=u.nick WHERE b.auctor='".$user."'");
		}
		if (isset($schl)) {
			$profile = $conn->query("SELECT b.id, b.auctor, b.warning, b.series, b.volume, u.auctor as chk FROM books as b JOIN users as u
			ON b.auctor=u.nick WHERE b.litschool='".$schl."'");
		}

		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$lang='pt';}
		else {$lang = $_COOKIE['lang'];}

		if ($profile->num_rows > 0) {
			$serie = array("");
			$slst = array("");
			$list = "<div class='brow'>
						<div class='blabel'><h1>";
			if (isset($user)) {
				if ($_COOKIE['lang'] == 'pt') {$list = $list."Do mesmo autor </h1>";}
				if ($_COOKIE['lang'] == 'en') {$list = $list."From the same auctor </h1>";}
				if ($_COOKIE['lang'] == 'es') {$list = $list."Por el mismo auctor </h1>";}
			}
			if (isset($schl)) {
				if ($_COOKIE['lang'] == 'pt') {$list = $list."Livros </h1>";}
				if ($_COOKIE['lang'] == 'en') {$list = $list."Books </h1>";}
				if ($_COOKIE['lang'] == 'es') {$list = $list."Libros </h1>";}
			}
			$list = $list."</div><div id='books' class='displaybooks'>";

			while ($i = $profile->fetch_assoc()) {
				if ($i['chk'] == '1') {
					$translation = $conn->query("SELECT * FROM translations WHERE fkey='".$i['id']."'");
					$t = $translation->fetch_assoc();

					$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$i['auctor']."'");
					$n = $find->fetch_assoc();
					
					if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
					else {$nm = $n[$_COOKIE['lang']];}

					if ($i['warning'] == '0') {$wrg = '';}
					else {$wrg = "style='background-color: #BC4440;color: #5B090D;'";}

					$thb = "<a href='books/" .$i["id"]. ".php'>
							<button class='thumbs' ".$wrg.">
								<div class='coverart'> <img  src='media/images/covers/" .$i["id"]. ".jpg' /> </div>
								<div class='description'>
								<h2> ".$t[$lang]." </h2>
								<h3> ".$nm. " </h3>";
								include '../sinopsis/'.$i['id'].'.php';
							$thb = $thb.$sin."</div>
							</button>
						</a>";

					if ((isset($user))&&($i['series'] != null)) {
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
				}
			echo "<div class='content'>".$list;
			for ($x=0;$x<sizeof($serie);$x++) {echo $serie[$x]."</div></div>";}
			echo "</div>";
			}
		$conn->close();
		}
?>