<?php
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		$conn->query("SET NAMES 'utf8'");
		$bookinfo = $conn->query("SELECT * FROM books WHERE id='" .$book. "'");
		$auctorinfo = $conn->query("SELECT b.auctor,b.id,u.nick FROM books as b JOIN users as u ON b.auctor=u.nick WHERE b.id='" .$book. "'");
		$editioninfo = $conn->query("SELECT b.id,e.* FROM books as b JOIN editions as e ON b.id=e.title WHERE b.id='" .$book. "'");
		$translation = $conn->query("SELECT * FROM translations WHERE fkey='" .$book. "'");
		$reviews = $conn->query("SELECT u.pt,u.nick,r.* FROM users as u JOIN reviews as r ON u.nick=r.user WHERE r.book='" .$book. "'");

		if ($bookinfo->num_rows > 0) {
			$b = $bookinfo->fetch_assoc();
			$a = $auctorinfo->fetch_assoc();
			$t = $translation->fetch_assoc();

			require '../design/array_lists.php';

			if (!isset($_COOKIE['lang'])) {$lang = 'pt';}
			else {$lang = $_COOKIE['lang'];}

			$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$a['nick']."'");
			$n = $find->fetch_assoc();
			if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
			else {$nm = $n[$_COOKIE['lang']];}
			
			if ($ech == '1') {
				#WARNING
				$wrng = '';
				if ($b['warning'] == '1') {
					$wrng = "<div id='warning'>";
					if ($_COOKIE['lang'] == 'pt') {
						$wrng = $wrng."Esta obra pode possuir conteúdo inapropriado ou
									desatualizado com os valores dos dias de hoje,
									tais como discriminação, misoginia ou racismo.";}
					if ($_COOKIE['lang'] == 'en') {
						$wrng = $wrng."This work may contain inappropriate content or
									outdated with today's values,
									such as discrimination, misogyny or racism.";}
					if ($_COOKIE['lang'] == 'es') {
						$wrng = $wrng."Este trabajo puede contener contenido inapropiado o
									desactualizado con los valores de hoy,
									como la discriminación, la misoginia o el racismo.";}
					$wrng = $wrng."</div>";
				}

				#SERIES AND VOLUMES
				if ($b['series'] != null)
					{$sv = "<h2><a href='search.php?q=".strtolower($b["series"])."'>".$b["series"]." • Vol. ".$b["volume"]."</a></h2>";}
				else {$sv = '';}

				#LITERARY SCHOOLS
				if ($b['litschool'] != null) {
					$ls = "<h2><a href='schools/".strtolower($b["litschool"]).".php'>";
					if ($_COOKIE['lang'] == 'pt') {$ls = $ls."Escola Literária: ".$ltslst[$b["litschool"]];}
					if ($_COOKIE['lang'] == 'en') {$ls = $ls."Literary School: ".$ltslst[$b["litschool"]];}
					if ($_COOKIE['lang'] == 'es') {$ls = $ls."Escuela Literaria: ".$ltslst[$b["litschool"]];}
					$ls = $ls.'</a><h2>';
					}
				else {$ls = '';}

				/*$rr = (float) $b['rating'];
				if ($rr == 10.00) {$rc = 'CDFF66';}
				if (($rr > 8.00) && ($rr < 10.00)) {$rc = 'FFFB66';}
				if (($rr > 6.00) && ($rr <= 8.00)) {$rc = 'FFCA4F';}
				if (($rr > 4.00) && ($rr <= 6.00)) {$rc = 'FF8022';}
				if (($rr > 2.00) && ($rr <= 4.00)) {$rc = 'FF2722';}
				if (($rr > 0.00) && ($rr <= 2.00)) {$rc = '8C0300';}
				if ($rr == 0.00) {$rc = '000000';}*/

				#STASTISTICS
				$v = (int) $b['visualizations'];
				if (($v >= 10000)&&($v < 10000000)){$sl = strlen($b['visualizations']); $v = substr($b['visualizations'],0,$sl-3).'K';}
				else if ($v >= 10000000){$sl = strlen($b['visualizations']); $v = substr($b['visualizations'],0,$sl-6).'M';}

				$r = (int) $b['readings'];
				if (($r >= 10000)&&($r < 10000000)){$sl = strlen($b['readings']); $r = substr($b['readings'],0,$sl-3).'K';}
				else if ($r >= 10000000){$sl = strlen($b['readings']); $r = substr($b['readings'],0,$sl-6).'M';}

				#SHARING
				$shurl = 'literledge.000webhostapp.com/!'.$b['id'];
				if ($lang == 'pt') {$shrmsg = "Venha dar uma olhada no livro ".$t[$lang]." no Literledge! ".$shurl;}
				if ($lang == 'en') {$shrmsg = "Check out the book ".$t[$lang]." in Literledge! ".$shurl;}
				if ($lang == 'es') {$shrmsg = "Ven a ver el libro ".$t[$lang]." disponible en Literledge! ".$shurl;}

				$btns = "";
				if (isset($_SESSION['user'])) {
					#SHELF BUTTONS
					$ys = false;
					$check = $conn->query("SELECT auctor FROM users WHERE nick='".$_SESSION['user']."'");
					if ($check->num_rows > 0) {
						$i = $check->fetch_assoc();
						if ($i['auctor'] != '-1') {$ys = true;}
					}

					if ($ys == true) {
						$shelf = $conn->query("SELECT * FROM shelves WHERE user='".$_SESSION['user']."' and book='".$b['id']."' and state='0'");
						$quant = $conn->query("SELECT * FROM shelves WHERE user='".$_SESSION['user']."' and state='0'");
						if ($shelf->num_rows > 0) {$conn->query("DELETE FROM shelves WHERE user='".$_SESSION['user']."' and book='".$b['id']."' and state='0'");}
						if ($quant->num_rows > 20) {$conn->query("DELETE FROM shelves WHERE user='".$_SESSION['user']."' and state='0' LIMIT ".($quant->num_rows-20));}
						$conn->query("INSERT INTO shelves (user,book,state) VALUES ('".$_SESSION['user']."','".$b['id']."','0')");

						$btns = "<form id='ubuttons' action='account/addtoshelf.php' method='post'>";
						$ainpt = "<input class='btpress' type='submit' name='add' value='' style='background-image: url(media/images/icons/addto.png);' ";
						$rinpt = "<input class='btpress' type='submit' name='rem' value='' style='background-image: url(media/images/icons/remshelf.png);' ";
						$finpt = "<input class='btpress' type='submit' name='fav' value='' style='background-image: url(media/images/icons/fav.png);' ";
						$uinpt = "<input class='btpress' type='submit' name='unf' value='' style='background-image: url(media/images/icons/unfav.png);' ";
						$shrbt = "<a href='https://twitter.com/intent/tweet?source=&text=".$shrmsg."' target='_blank'>
						<button class='btpress' type='button' name='shr' value='' style='background-image: url(media/images/icons/share.png);'></button></a>";

						$find = $conn->query("SELECT id,state FROM shelves WHERE user='".$_SESSION['user']."' and book='".$b["id"]."' and state > '0'");
						if ($find->num_rows == 0) {
							$btns = $btns ."
								<div class='manlan' lang='pt'>
									".$ainpt." alt='adicionar livro á sua estante' />
									".$finpt." alt='adicionar livro aos favoritos' />
									".$shrbt."
								</div>
								<div class='manlan' lang='en'>
									".$ainpt." alt='add book to your shelf' />
									".$finpt." alt='add book to favorites' />
									".$shrbt."
								</div>
								<div class='manlan' lang='es'>
									".$ainpt." alt='agregar libro a sua estante' />
									".$finpt." alt='agregar libro a los favoritos' />
									".$shrbt."
								</div>";
							}
						else {
							$i = $find->fetch_assoc();
							if ($i['state'] == 3) {
								$btns = $btns."
									<div class='manlan' lang='pt'>
										".$rinpt." alt='remover livro da sua estante' />
										".$uinpt." alt='remover livro dos favoritos' />
										".$shrbt."
									</div>
									<div class='manlan' lang='en'>
										".$rinpt." alt='remove book from your shelf' />
										".$uinpt." alt='remove book from favorites' />
										".$shrbt."
									</div>
									<div class='manlan' lang='es'>
										".$ainpt." alt='sacar libro de tu estante' />
										".$finpt." alt='sacar libro dos favoritos' />
										".$shrbt."
									</div>";
									}
							else {
								$btns = $btns."
									<div class='manlan' lang='pt'>
										".$rinpt." alt='remover livro da sua estante' />
										".$finpt." alt='adicionar livro aos favoritos' />
										".$shrbt."
									</div>
									<div class='manlan' lang='en'>
										".$rinpt." alt='remove book from your shelf' />
										".$finpt." alt='add book to favorites' />
										".$shrbt."
									</div>
									<div class='manlan' lang='es'>
										".$ainpt." alt='sacar libro de tu estante' />
										".$finpt." alt='agregar libro a los favoritos' />
										".$shrbt."
									</div>";
									}
							}
						}
					}
				$btns = $btns."<input name='id' value='".$b['id']."' style='display: none;' /></form>";
				
				echo "<div id='reportab' style='visibility: hidden;'>
						<form action='account/send_report.php?l=".$b['id']."' method='post'>
							<button id='btexit' class='btpress' type='button' onclick='set_display(".'"reportab"'.")'><img src='media/images/icons/exit.png' /></button>";

						if ($_COOKIE['lang'] == 'pt') {
							echo "<h1> Reportar Erro </h1>
							Se você encontrou algum erro, por favor, <br />
							envie sua contribuição aos desenvolvedores. <br />
							<select class='selectbox' name='retyp'>
								<option value='er1'> Erro de Ortografia </option>
								<option value='er2'> Informações Incorretas </option>
								<option value='er3'> Não mostra a página como deveria </option>";
							}
						if ($_COOKIE['lang'] == 'en') {
							echo "<h1> Report Error </h1>
							If you found any mistake, please <br />
							send your contribution to the developers. <br />
							<select class='selectbox' name='retyp'>
							<option value='er1'> Spelling Error </option>
							<option value='er2'> Incorrect Information </option>
							<option value='er3'> Don't show the page as it should </option>";
							}
						if ($_COOKIE['lang'] == 'es') {
							echo "<h1> Informar error </h1>
							Si encuentra algún error, por favor <br />
							envíe su contribución a los desarrolladores. <br />
							<select class='selectbox' name='retyp'>
							<option value='er1'> Error de ortografía </option>
							<option value='er2'> Información incorrecta </option>
							<option value='er3'> No mostrar la página como debería </option>";
							}

					echo "</select> <br />
							<textarea class='textbox long' name='retxt' maxlength='1000'></textarea><br />
							<input class='btpress' type='submit' />
						</form>
					</div>
					<div id='bookblock'>
						<button id='reportbt' class='btpress' onclick='set_display(".'"reportab"'.")'><img src='media/images/icons/report.png' /></button>
						<img id='coverart' src='media/images/covers/" .$b["id"]. ".jpg'/>
						<div id='info'>
							<h1> " .$t[$lang]. " </h1>
							<h2> 
								<a href='https://www.flaticon.com/authors/freepik' target='_blank'>
									<img id='couflag' src='media/images/icons/flags/" .$b["country"]. ".png' height='30' title='Icons made by Freepik' 
									alt='" .$b["country"]. "' />
								</a> • <a href='users/" .$b["auctor"]. ".php'>" .$nm. "</a> • " .$b["year"]. "
							</h2>
							" .$sv. "<h2><a href='search.php?q=".'$books'."&g=".strtolower($b["genre"])."'>";
						if ($_COOKIE['lang'] == 'pt') {echo "Gênero: ";}
						if ($_COOKIE['lang'] == 'en') {echo "Genre: ";}
						if ($_COOKIE['lang'] == 'es') {echo "Género: ";}
					echo $gnrlst[$b["genre"][0]]." - ".$gnrlst[$b["genre"]]."</a></h2>" .$ls. "<h2>";
						if ($_COOKIE['lang'] == 'pt') {echo "Liçenca: ";}
						if ($_COOKIE['lang'] == 'en') {echo "License: ";}
						if ($_COOKIE['lang'] == 'es') {echo "Licencia: ";}
					echo $liclst[$b["license"]]."</h2><h2>CDD: ".$b["cdd"]."</h2>".$wrng."<div id='sinopsis'>";
					include '../sinopsis/'.$b['id'].'.php';
					echo $sin."</div>";
					/*		<div class='summary'>
								<ul>
									<li> <a href='books/".$b['id'].".php#goto1'> Resenha </a> </li>
									<li> <a href='books/".$b['id'].".php#goto2'> Sobre o livro </a> </li>
									<li> <a href='books/".$b['id'].".php#goto3'> Adaptações </a> </li>
									<li> <a href='books/".$b['id'].".php#goto4'> Downloads </a> </li>
								</ul>
							</div>*/
					echo "</div>
					</div>
					<div id='status'>"
						#<div id='rating' style='background-color: #" .$rc. ";'> <span>" .$b["rating"]. " </span> </div>
						."<div id='statistics'>";
						if ($_COOKIE['lang'] == 'pt') {echo $v." Visualizações";}
						if ($_COOKIE['lang'] == 'en') {echo $v." Visualizations";}
						if ($_COOKIE['lang'] == 'es') {echo $v." Visualizaciónes";}
					echo "<br />";
						if ($_COOKIE['lang'] == 'pt') {echo $r." Leituras";}
						if ($_COOKIE['lang'] == 'en') {echo $r." Readings";}
						if ($_COOKIE['lang'] == 'es') {echo $r." Lecturas";}
					echo "<br /></div>
						" .$btns. "
					</div>";
				}

			if ($ech == '2') {
				$d = '';
				$red = '';
				if ($editioninfo->num_rows > 0) {
					while ($e = $editioninfo->fetch_assoc()) {
						if ($e['price'] == '0.00') {
							if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$pr = 'gratuito';}
							if ($_COOKIE['lang'] == 'en') {$pr = 'free';}
							if ($_COOKIE['lang'] == 'es') {$pr = 'gratuito';}
						}
						else {$pr = $e['price'];}
						$l = $e["link"];
						#$byt = filesize(substr($l,0,strlen($l)-5));
						$byt = '---';
						if ($byt >= 1073741824) {$byt = round($byt/1073741824).' GB';}
						else if ($byt >= 1048576){$byt = round($byt/1048576).' MB';}
						else if ($byt >= 1024) {$byt = round($byt/1024).' KB';}
						else if ($byt > 1) {$byt = $byt.' byt';}
						else if ($byt == 1) {$byt = $byt.' byt';}
						else {$byt = '---';}

						if (($e['filtyp'] == 'pdf')&&(strtolower($e['language']) == $_COOKIE['lang'])) {$red = $l;}
						#$d = $d ."<tr onclick='download_file(".'"'.$l.'"'.",".'"'.$t[$lang].'"'.");window.location.href=".'"'."design/bstatistics.php?id=".$b['id'].'"'."'>
						$d = $d ."<tr onclick='window.location.href=".'"'.$e['link'].'"'.";'>
							<th>".$e['filtyp']."</th><th>".$e['credit']."</th><th>".$e['language']."</th>
							</tr>";
						#inserir isto depois: <th>".$pr. "</th> <th>".$byt."</th>
						}
					if ($red == '') {$red = $l;}
					}
				else {
					$d = "<tr id='nodownloads'><th>";
					if ($_COOKIE['lang'] == 'pt') {$d = $d."Não há downloads disponíveis";}
					if ($_COOKIE['lang'] == 'en') {$d = $d."No downloads available";}
					if ($_COOKIE['lang'] == 'es') {$d = $d."No hay descargas disponibles.";}
					$d = $d."</th></tr>";
					}
				echo "<a name='goto4'></a>
					<div id='getbooks'>
						<h1> Downloads </h1>
						<table id='downloads' cellpadding='0' cellspacing='0'> " .$d. "</table>";
					if ($red != '') {echo "<a href='".$red."' target='_blank'><button class='btpress'> Ler </button></a>";}
					echo "<a href='https://busca.saraiva.com.br/busca?q=".$t[$lang]."' target='_blank'><button class='btpress'> Comprar </button></a>
					</div>
					<a name='goto5'></a>
					<div id='opinions'><h1>";
					if ($_COOKIE['lang'] == 'pt') {echo "Opiniões";}
					if ($_COOKIE['lang'] == 'en') {echo "Opinions";}
					if ($_COOKIE['lang'] == 'es') {echo "Opiniónes";}
					echo "</h1>";

				$rws = '';
				$urev = false;
				if ($reviews->num_rows > 0) {
					while ($rw = $reviews->fetch_assoc()) {
						if ((isset($_SESSION['user']))&&($rw['nick'] == $_SESSION['user'])) {$urev = true;}

						$fnms = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$rw['nick']."'");
						$rn = $fnms->fetch_assoc();
						if ($rn[$_COOKIE['lang']] == null) {$rwnm = $rn['pt'];}
						else {$rwnm = $rn[$_COOKIE['lang']];}

						if ((@$_SESSION['user'])&&($rw['nick'] == $_SESSION['user'])) {
							echo "<div id='cridel' style='visibility: hidden'>
								<form action='account/post_opinion.php?a=2' method='post'>";
							if ($_COOKIE['lang'] == 'pt') {
								echo "Você quer mesmo remover sua opinião? <br />
								<button type='submit' class='btpress'> Sim </button>
								<button type='button' id='btcridelexit' class='btpress'> Não </button>";
							}
							if ($_COOKIE['lang'] == 'en') {
								echo "Do you really want to remove your opinion? <br />
								<button type='submit' class='btpress'> Yes </button>
								<button type='button' id='btcridelexit' class='btpress'> No </button>";
							}
							if ($_COOKIE['lang'] == 'es') {
								echo "¿De verdad quieres eliminar tu opinión? <br />
								<button type='submit' class='btpress'> Sí </button>
								<button type='button' id='btcridelexit' class='btpress'> No </button>";
							}
							echo "<input name='book' value='".$b['id']."' style='display: none' /></form></div>";
							$rws = "<div class='thbcritic'>
										<div id='criopi'>
											<div class='cribts'>
												<button id='btcridel' class='btpress' style='background-image: url(media/images/icons/cridel-".$_COOKIE['theme'].".png)' >
												</button>
												<button id='btcridit' class='btpress' style='background-image: url(media/images/icons/cridit-".$_COOKIE['theme'].".png)' >
												</button>
											</div>
											<a href='users/".$rw['nick'].".php'><h2> ".$rwnm." </h2></a>
											<h3><a href='users/".$rw['nick'].".php'> @".$rw['nick']."</a> | ".$rw['datime']." </h3>
											<div id='cricom'>" .$rw['comment']. "</div>
										</div>
										<div id='cridit' style='display: none'>
											<div class='cribts'>
												<button id='btcriditexit' class='btpress' style='background-image: url(media/images/icons/exit.png)' >
												</button>
											</div>
											<h2> Edite sua opinião </h2>
											<br />
											<form action='account/post_opinion.php?a=1' method='post'>
												<textarea id='texcom' class='textbox long' name='comment' oninput='char_count();' maxlength='736'>".$rw['comment']."</textarea>
												<br />
												<span id='coucom'>0/200</span>
												<input id='subcom' class='btpress' type='submit' disabled />
												<input name='book' value='".$b['id']."' style='display: none;' />
											</form>
										</div>
									</div>".$rws;
							}
						else {
							$rws = $rws."<div class='thbcritic'>
											<div>
												<a href='users/".$rw['nick'].".php'><h2> ".$rwnm." </h2></a>
												<h3><a href='users/".$rw['nick'].".php'> @".$rw['nick']."</a> | ".$rw['datime']." </h3>
												<div id='cricom'>" .$rw['comment']. "</div>
											</div>
										</div>";
									}
						}
					}
				if ((isset($_SESSION['user']))&&($urev == false)) {
					$ys = false;
					$check = $conn->query("SELECT auctor FROM users WHERE nick='".$_SESSION['user']."'");
					if ($check->num_rows > 0) {
						$i = $check->fetch_assoc();
						if ($i['auctor'] != '-1') {$ys = true;}
					}

					if ($ys == true) {
						$rws = "<div class='thbcritic'>
									<div>
										<h2> Publique sua opinião </h2>
										<br />
										<form action='account/post_opinion.php?a=0' method='post'>
											<textarea id='texcom' class='textbox long' name='comment' oninput='char_count();' maxlength='736'></textarea> <br />
											<span id='coucom'>0/200</span>
											<input id='subcom' class='btpress' type='submit' disabled />
											<input name='book' value='".$b['id']."' style='display: none;' />
										</form>
									</div>
								</div>".$rws;
						}
					}
				if ($rws == '') {
					$rws = "Nenhuma opinião sobre este livro. <a href='login.php'>Seja o primeiro a opinar!</a>";
					}

				echo $rws."</div>
					<div id='tags'>";
					$tg = 0;
					for($x=0;$x<strlen($b['tags']);$x++) {
						if ($b['tags'][$x] == '#') {
							$t = substr(substr($b['tags'],$x-$tg,$tg),1);
							echo "<a href='search.php?q=".$t."'><u>".$t."</u></a> ";
							$tg = 0;
						}
						$tg++;
					}
				echo "</div>";
				}
			}
	}
	$conn->close();
?>