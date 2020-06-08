<?php
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		$conn->query("SET NAMES 'utf8'");
		$profile = $conn->query("SELECT * FROM users WHERE nick='" .$user. "'");

		if ($profile->num_rows > 0) {
			$i = $profile->fetch_assoc();

			if ($i["auctor"] == '1') {$v = "<img id='vicon' src='media/images/icons/verified.png' />";}
			else {$v = "";};

			if (strlen($i['birth']) > 7)
				{$b = substr($i['birth'],8,2). '/'. substr($i['birth'],5,2) .'/'. substr($i['birth'],0,4);}
			else {$b = $i['birth'];}
			if ($i['auctor'] == '1') {
				$d = "<img src='media/images/icons/death.png' height='30' /><span>";
				if (strlen($i['death']) > 7)
					{$d = $d.substr($i['death'],8,2). '/'. substr($i['death'],5,2) .'/'. substr($i['death'],0,4);}
				else {$d = $d.$i['death'];}
				$d = $d."</span>";
			}
			else {$d = '';}

			$bnr = "media/images/banners/" .$i["nick"]. ".jpg";

			$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='".$i['nick']."'");
			$n = $find->fetch_assoc();
			if ($n[$_COOKIE['lang']] == null) {$nm = $n['name'];}
			else {$nm = $n[$_COOKIE['lang']];}

			if (strlen($nm) > 20) {$hst = 'style="transform:scale(0.7,1);right: 0px;"';}
			else {$hst = '';}

			$slf = '';
			$fav = '';
			if ((isset($_SESSION['user']))&&($_SESSION['user'] == $i['nick'])) {
				$shelf = $conn->query("SELECT b.id,b.name,u.name as auctor,s.state FROM shelves as s JOIN books as b JOIN users as u
					ON b.auctor=u.nick and s.book=b.id WHERE s.user='".$i['nick']."'");
				if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$lang='pt';}
				else {$lang = $_COOKIE['lang'];}

				if ($shelf->num_rows > 0) {
					$slf = "<div class='brow shelf'><h1>";
					if ($_COOKIE['lang'] == 'pt') {$slf = $slf."Na sua estante";}
					if ($_COOKIE['lang'] == 'en') {$slf = $slf."In your shelf";}
					if ($_COOKIE['lang'] == 'es') {$slf = $slf."En tu estante";}
					$slf = $slf."</h1><div class='displaybooks'>";

					$fav = "<div class='brow shelf'><h1>";
					if ($_COOKIE['lang'] == 'pt') {$fav = $fav."Favoritos";}
					if ($_COOKIE['lang'] == 'en') {$fav = $fav."Favorites";}
					if ($_COOKIE['lang'] == 'es') {$fav = $fav."Favoritos";}
					$fav = $fav."</h1><div class='displaybooks'>";

					while ($s = $shelf->fetch_assoc()) {
						$translation = $conn->query("SELECT * FROM translations WHERE fkey='".$s['id']."'");
						$t = $translation->fetch_assoc();
						$thb = "<a href='books/" .$s["id"]. ".php'>
									<button class='thumbs'>
										<div class='coverart'> <img  src='media/images/covers/" .$s["id"]. ".jpg' /> </div>
										<div class='description'>
										<h2> ".$t[$lang]." </h2>
										<h3> ".$s['auctor']." </h3>";
										$thb = $thb. file_get_contents('../sinopsis/'.$s['id'].'.php');
									$thb = $thb. "</div>
									</button>
								</a>";
						if ($s['state'] > 0) {$slf = $slf.$thb;}
						if ($s['state'] == 3) {$fav = $fav.$thb;}
						}
					$slf = $slf. "</div></div>";
					$fav = $fav. "</div></div>";
					}
				}

			echo "<div id='banner' style='background-image: url(".'"'.$bnr.'"'.")'></div>
				<div id='profile'>
					<img class='profilepic' src='media/images/profilepics/" .$i["nick"]. ".jpg' title='" .$i["name"]. "'/>
					<h1 id='username' ".$hst."> " .$nm. " </h1> " .$v. "
					<h2 id='nickname'> @" .$i["nick"]. " </h2>
					<div id='binfobar'>
						<img src='media/images/icons/birth.png' height='30' />
						<span> " .$b. " </span>
						" .$d. "
						<img src='media/images/icons/gender_" .$i["gender"]. ".png' height='30' />
						<span> " .$i["hometown"]. " </span>
						<a href='https://www.flaticon.com/authors/freepik' target='_blank'>
							<img id='couflag' src='media/images/icons/flags/" .$i["country"]. ".png' height='30' title='Icons made by Freepik' />
						</a>
					</div>
				</div>".$slf.$fav;
			}
	}
	$conn->close();
?>