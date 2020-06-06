<?php
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		$conn->query("SET NAMES 'utf8'");
		$profile = $conn->query("SELECT b.id, b.name, u.name as auctor FROM books as b JOIN users as u ON b.auctor=u.nick WHERE b.auctor='" .$user. "'");
		$check = $conn->query("SELECT auctor FROM users WHERE nick='" .$user. "'");

		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$lang='pt';}
		else {$lang = $_COOKIE['lang'];}

		if ($check->num_rows > 0) {
			$c = $check->fetch_assoc();
			if ($c['auctor'] == '1') {
				if ($profile->num_rows > 0) {
					$list = "<div class='content'>
								<div class='brow'>
									<div class='blabel'>
										<div class='manlan' lang='pt'>
											<h1> Do mesmo autor </h1>
										</div>
										<div class='manlan' lang='en'>
											<h1> From the same auctor </h1>
										</div>
										<div class='manlan' lang='es'>
											<h1> Por el mismo auctor </h1>
										</div>
									</div>
									<div id='books' class='displaybooks'>";
					while ($i = $profile->fetch_assoc()) {
						$translation = $conn->query("SELECT * FROM translations WHERE fkey='".$i['id']."'");
						$t = $translation->fetch_assoc();

						$list = $list
							."<a href='books/" .$i["id"]. ".php'>
								<button class='thumbs'>
									<div class='coverart'> <img  src='media/images/covers/" .$i["id"]. ".jpg' /> </div>
									<div class='description'>
									<h2> ".$t[$lang]." </h2>
									<h3> ".$i['auctor']. " </h3>";
									$list = $list. file_get_contents('../sinopsis/'.$i['id'].'.php');
								$list = $list. "</div>
								</button>
							</a>";
						}
					echo $list ."</div></div></div>";
					}
				}
			}
		}
		$conn->close();
?>