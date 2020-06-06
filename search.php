<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			if ((@$_POST['search'] == false)&&(@$_GET['q'] == false)) {header('location: index.php');}
			else if ((@$_POST['search'] == true)&&($_POST['search'] != '')) {header('location: search.php?q='.$_POST['search']);}
			else {$search = $_GET['q'];}
			if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
				{$v = 'Busca - ';}
			else if ($_COOKIE['lang'] == 'en')
				{$v = 'Search - ';}
			else if ($_COOKIE['lang'] == 'es')
				{$v = 'Busca - ';}
			include 'design/metadata.php';
		?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div class='content'>
			<?php
				function stripAccents($stripAccents){
					return strtr($stripAccents,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ','aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
				}

				$search = strtolower($search);

				if (@$_GET['oa'] == true) {$ofsa = (int) $_GET['oa'];} else {$ofsa = 0;}
				if (@$_GET['ob'] == true) {$ofsb = (int) $_GET['ob'];} else {$ofsb = 0;}
				if (@$_GET['op'] == true) {$ofsp = (int) $_GET['op'];} else {$ofsp = 0;}

				$conn = new mysqli('localhost', 'root', 'Gu@n@b@r@', 'literledge');
				if ($conn->connect_error) {echo("Connection failed: " . $conn->connect_error);}
				else{
					require 'design/array_lists.php';
					
					echo "<div class='brow'>";
					#LETTER FILTER
					$found = array();
					$find = $conn->query("SELECT name, auctor FROM users");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if ((in_array($i['name'][0],$found) == false) && ($i['auctor'] == '1')) {
								$found[] = stripAccents($i['name'][0]);
								}
							}
						}
					$find = $conn->query("SELECT name FROM books");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if (in_array($i['name'][0],$found) == false) {
								$found[] = $i['name'][0];
								}
							}
						}
					if (sizeof($found) > 0) {
						sort($found);
						if (@$_GET['l']) {$flet = $_GET['l'];}
						else {$flet = '';}
						echo "<select id='flet' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
						if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
							{echo "Letra</option>";}
						if ($_COOKIE['lang'] == 'en')
							{echo "Letter</option>";}
						if ($_COOKIE['lang'] == 'es')
							{echo "Letra</option>";}
						for ($x = 0;$x < sizeof($found);$x++) {
							if ($flet == $found[$x])
								{echo "<option value='".$found[$x]."' selected>".$found[$x]."</option>";}
							else
								{echo "<option value='".$found[$x]."'>".$found[$x]."</option>";}
							}
						echo "</select>";
						}
					#COUNTRY FILTER
					$found = array();
					$find = $conn->query("SELECT country, auctor FROM users");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if ((in_array($i['country'],$found) == false) && ($i['auctor'] == '1')) {
								$found[] = $i['country'];
								}
							}
						}
					$find = $conn->query("SELECT country FROM books");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if (in_array($i['country'],$found) == false) {
								$found[] = $i['country'];
								}
							}
						}
					if (sizeof($found) > 0) {
						sort($found);
						if (@$_GET['c']) {$fcou = $_GET['c'];}
						else {$fcou = '';}
						echo "<select id='fcou' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
						if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
							{echo "País</option>";}
						if ($_COOKIE['lang'] == 'en')
							{echo "Country</option>";}
						if ($_COOKIE['lang'] == 'es')
							{echo "País</option>";}
						for ($x = 0;$x < sizeof($found);$x++) {
							if ($fcou == $found[$x])
								{echo "<option value='".$found[$x]."' selected>".$found[$x]."</option>";}
							else
								{echo "<option value='".$found[$x]."'>".$found[$x]."</option>";}
							}
						echo "</select>";
						}
					#CENTURY FILTER
					$found = array();
					$find = $conn->query("SELECT birth, auctor FROM users");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if ((in_array(substr($i['birth'],0,2)."00",$found) == false) && ($i['auctor'] == '1')) {
								$found[] = substr($i['birth'],0,2)."00";
								}
							}
						}
					$find = $conn->query("SELECT year FROM books");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if (in_array(substr($i['year'],0,2)."00",$found) == false) {
								$found[] = substr($i['year'],0,2)."00";
								}
							}
						}
					if (sizeof($found) > 0) {
						rsort($found);
						if (@$_GET['y']) {$fyer = $_GET['y'];}
						else {$fyer = '';}
						echo "<select id='fyer' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
						if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
							{echo "Século</option>";}
						if ($_COOKIE['lang'] == 'en')
							{echo "Century</option>";}
						if ($_COOKIE['lang'] == 'es')
							{echo "Siglo</option>";}
						for ($x = 0;$x < sizeof($found);$x++) {
							if ($fyer == $found[$x])
								{echo "<option value='".$found[$x]."' selected>".(substr($found[$x],0,2) + 1)."</option>";}
							else
								{echo "<option value='".$found[$x]."'>".(substr($found[$x],0,2) + 1)."</option>";}
							}
						echo "</select>";
						}
					$found = array();
					#GENRE FILTER
					$find = $conn->query("SELECT genre FROM books");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if (in_array($i['genre'],$found) == false) {
								$found[] = $i['genre'];
								}
							}
						}
					if (sizeof($found) > 0) {
						sort($found);
						if (@$_GET['g']) {$fgen = $_GET['g'];}
						else {$fgen = '';}
						echo "<select id='fgen' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
						if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
							{echo "Gênero</option>";}
						if ($_COOKIE['lang'] == 'en')
							{echo "Genre</option>";}
						if ($_COOKIE['lang'] == 'es')
							{echo "Género</option>";}

						if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$lbl = $gnrlst;}
						else if ($_COOKIE['lang'] == 'en') {$lbl = $found;}
						else if ($_COOKIE['lang'] == 'es') {$lbl = $ges;}

						for ($x = 0;$x < sizeof($found);$x++) {
							if ($fgen == strtolower($found[$x]))
								{echo "<option value='".strtolower($found[$x])."'selected>".$lbl[$found[$x]]."</option>";}
							else
								{echo "<option value='".strtolower($found[$x])."'>".$lbl[$found[$x]]."</option>";}
							}
						echo "</select>";
						}
					#LITSCHOOL FILTER
					$found = array();
					$find = $conn->query("SELECT litschool FROM books");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if (in_array($i['litschool'],$found) == false) {
								$found[] = $i['litschool'];
								}
							}
						}
					if (sizeof($found) > 0) {
						sort($found);
						if (@$_GET['s']) {$flsc = $_GET['s'];}
						else {$flsc = '';}
						echo "<select id='flsc' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
						if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
							{echo "Escola Literária</option>";}
						if ($_COOKIE['lang'] == 'en')
							{echo "Literary School</option>";}
						if ($_COOKIE['lang'] == 'es')
							{echo "Escuela Literaria</option>";}

						if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$lbl = $ltslst;}
						else if ($_COOKIE['lang'] == 'en') {$lbl = $found;}

						for ($x = 0;$x < sizeof($found);$x++) {
							if ($found[$x] != NULL) {
								if ($flsc == strtolower($found[$x]))
									{echo "<option value='".strtolower($found[$x])."'selected>".$lbl[$found[$x]]."</option>";}
								else
									{echo "<option value='".strtolower($found[$x])."'>".$lbl[$found[$x]]."</option>";}
								}
							}
						echo "</select>";
						}
					echo "</div>";
					
					$sql = "SELECT name, nick, auctor, birth, country FROM users ORDER BY name";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						$disp = "<div class='brow'> <div class='blabel'>";
						if (($search != '$auctors') || ($search != '$century') || ($search != '$schools'))
							{$disp = $disp 
										."<div class='manlan' lang='pt'> <h1> Autores </h1> </div>
										<div class='manlan' lang='en'> <h1> Auctors </h1> </div>
										<div class='manlan' lang='es'> <h1> Autores </h1> </div>";}
						$disp = $disp ."</div> <div class='displaybooks'>";
						
						if ($search == 'century') {
							$c1 = array('XIII','XIV','XV','XVI','XVII','XVIII','XIX','XX');
							$c2 = array('12','13','14','15','16','17','18','19');
							for ($y = 0; $y < sizeof($c1); $y++) {
								$disp = $disp ."<html>
										<a href='search.php?q=".'$all'."&y=" .$c2[$y]. "00'>
											<button class='portraits'>
												<h2> " .$c1[$y]. " </h2>
											</button>
										</a>
									</html>";
								};
							echo $disp ."</div></div>";
						}
						else {
							$max = 0;
							while (($i = $result->fetch_assoc())&&($max < $ofsa + 20)) {
								if ($max < $ofsa) {$max++;}
								else {
									$p = false;
									if (($search != '$auctors')&&($search != '$all')) {
										preg_match('/' .$search. '/i',$i['name'],$re);
										if (sizeof($re) > 0) {$p = true;}}
									else if ($i['auctor'] == 1) {$p = true;}

									if ((@$flet) && ($i['name'][0] != $flet)) {$p = false;}
									if ((@$fcou) && ($i['country'] != $fcou)) {$p = false;}
									if ((@$fyer) && (substr($i['birth'],0,2) != substr($fyer,0,2) - 1)) {$p = false;}
									if ($p == true) {
										$disp = $disp ."<html>
												<a href='users/" .$i["nick"]. ".php'>
													<button class='portraits'>
														<img class='profilepic' src='media/images/profilepics/" .$i["nick"]. ".jpg' />
														<h2> " .$i["name"]. " </h2>
													</button>
												</a>
											</html>";
										$max++;
										};
									};
								};
							if ($ofsa > 0) {
								$btp = "<button class='btpress bp' onclick='filter_search(".'"'.$search.'","'.($ofsa - 21).'","'.($ofsb).'","'.($ofsp).'"'.")'>
										<div class='manlan' lang='pt'> Anterior </div>
										<div class='manlan' lang='en'> Previous </div>
										<div class='manlan' lang='es'> Anterior </div>
										</button>";} else {$btp = '';}
							if ($max == $ofsa + 20) {
								$btn = "<button class='btpress bn' onclick='filter_search(".'"'.$search.'","'.($ofsa + 21).'","'.($ofsb).'","'.($ofsp).'"'.")'>
										<div class='manlan' lang='pt'> Próximo </div>
										<div class='manlan' lang='en'> Next </div>
										<div class='manlan' lang='es'> Siguiente </div>
										</button>";} else {$btn = '';}
							echo $disp ."</div>".$btp.$btn."</div>";
						}
					}

					if ($search != '$auctors') {
						$result = $conn->query("SELECT b.id, b.name, u.name as auctor, u.nick, b.year, b.country, b.genre, b.litschool FROM books as b JOIN users as u
								ON b.auctor=u.nick ORDER BY b.name");
						if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$lang='pt';}
						else {$lang = $_COOKIE['lang'];}

						$disb = "<div class='brow'>
									<div class='blabel'>
										<div class='manlan' lang='pt'> <h1> Livros </h1> </div>
										<div class='manlan' lang='en'> <h1> Books </h1> </div>
										<div class='manlan' lang='es'> <h1> Libros </h1> </div>
									</div>
									<div class='displaysearch'>";
						$max = $ofsb;
						while (($i = $result->fetch_assoc())&&($max < $ofsb + 20)) {
							if ($max < $ofsb) {$max++;}
							else {
								$translation = $conn->query("SELECT * FROM translations WHERE fkey='".$i['id']."'");
								$t = $translation->fetch_assoc();

								$p = false;
								if (($search == '$all')||($search == '$books')) {$p = true;}
								else {
									preg_match('/\b' .$search. '\b/i',$i['name'],$fn);
									preg_match('/\b' .$search. '\b/i',$i['auctor'],$fa);
									if ((sizeof($fn) > 0) || (sizeof($fa) > 0)) {$p = true;}
									}

								if ((@$flet) && ($i['name'][0] != $flet)) {$p = false;}
								if ((@$fcou) && ($i['country'] != $fcou)) {$p = false;}
								if ((@$fyer) && (substr($i['year'],0,2) != substr($fyer,0,2) - 1)) {$p = false;}
								if ((@$fgen) && (strtolower($i['genre']) != $fgen)) {$p = false;}
								if ((@$flsc) && (strtolower($i['litschool']) != $flsc)) {$p = false;}

								if ($p == true) {
									$disb = $disb ."
										<a href='books/" .$i["id"]. ".php'>
											<button class='thumbs'>
												<div class='coverart'> <img  src='media/images/covers/" .$i["id"]. ".jpg' /> </div>
												<div class='description'>
												<h2> ".$t[$lang]." </h2>
												<h3> ".$i['auctor']." </h3>";
													$disb = $disb. file_get_contents('sinopsis/'.$i['id'].'.php');
											$disb = $disb. "</div>
											</button>
										</a>";
									$max++;
									};
								};
							};
						if ($ofsa > 0) {
							$btp = "<button class='btpress bp' onclick='filter_search(".'"'.$search.'","'.($ofsa).'","'.($ofsb - 21).'","'.($ofsp).'"'.")'>
									<div class='manlan' lang='pt'> Anterior </div>
									<div class='manlan' lang='en'> Previous </div>
									<div class='manlan' lang='es'> Anterior </div>
									</button>";} else {$btp = '';}
						if ($max == $ofsb + 20) {
							$btn = "<button class='btpress bn' onclick='filter_search(".'"'.$search.'","'.($ofsa).'","'.($ofsb + 21).'","'.($ofsp).'"'.")'>
									<div class='manlan' lang='pt'> Próximo </div>
									<div class='manlan' lang='en'> Next </div>
									<div class='manlan' lang='es'> Siguiente </div>
									</button>";} else {$btn = '';}
						echo $disb ."</div>".$btp.$btn."</div>";
						}
					$conn->close();
					}
			?>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>