<?php
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		$conn->query("SET NAMES 'utf8'");
		$bookinfo = $conn->query("SELECT * FROM books WHERE id='" .$book. "'");
		$auctorinfo = $conn->query("SELECT b.auctor,b.id,u.nick FROM books as b JOIN users as u ON b.auctor=u.nick WHERE b.id='" .$book. "'");
		$editioninfo = $conn->query("SELECT b.id,e.* FROM books as b JOIN editions as e ON b.id=e.title WHERE b.id='" .$book. "'");
		$translation = $conn->query("SELECT * FROM translations WHERE fkey='" .$book. "'");
		$reviews = $conn->query("SELECT u.name,u.nick,r.* FROM users as u JOIN reviews as r ON u.nick=r.user WHERE r.book='" .$book. "'");

		if ($bookinfo->num_rows > 0) {
			$b = $bookinfo->fetch_assoc();
			$a = $auctorinfo->fetch_assoc();
			$t = $translation->fetch_assoc();

			require '../design/array_lists.php';

			if (!isset($_COOKIE['lang'])) {$lang = 'pt';}
			else {$lang = $_COOKIE['lang'];}

			$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='".$a['nick']."'");
			$n = $find->fetch_assoc();
			if ($n[$_COOKIE['lang']] == null) {$nm = $n['name'];}
			else {$nm = $n[$_COOKIE['lang']];}
			
			if ($ech == '1') {
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

				if ($b['serie'] != '')
					{$sv = "<h2> " .$b["serie"]. " • Vol. " .$b["volume"]. " </h2>";}
				else {$sv = '';}


				if ($b['litschool'] != '') {
					$ls = '<h2>';
					if ($_COOKIE['lang'] == 'pt') {$ls = $ls."Escola Literária: ".$ltslst[$b["litschool"]];}
					if ($_COOKIE['lang'] == 'en') {$ls = $ls."Literary School: ".$ltslst[$b["litschool"]];}
					if ($_COOKIE['lang'] == 'es') {$ls = $ls."Escuela Literaria: ".$ltslst[$b["litschool"]];}
					$ls = $ls.'<h2>';
					}
				else {$ls = '';}

				$rws = '';
				$urev = false;
				if ((isset($_SESSION['user']))&&($urev == false)) {
					$rws = $rws."<div class='thbcritic'>
									<div>
										<h2> Publique sua opinião </h2>
										<br />
										<form action='account/post_opinion.php' method='post'>
											<textarea id='texcom' class='textbox long' name='comment' oninput='char_count();'
											pInputTextArea [(ngModel)]='value' (ngModelChange)='valueChange(value)' maxlength='736'></textarea> <br />
											<span id='coucom'>0/200</span>
											<input id='subcom' class='btpress' type='submit' disabled />
											<input name='book' value='".$b['id']."' style='display: none;' />
										</form>
									</div>
								</div>";
				}
				while ($rw = $reviews->fetch_assoc()) {
					if ((isset($_SESSION['user']))&&($rw['nick'] == $_SESSION['user'])) {$urev = true;}
					$rws = $rws."<div class='thbcritic'>
									<div>
										<h2> ".$rw['name']." </h2>
										<h3> @".$rw['nick']." | ".$rw['datime']." </h3>
										<div id='cricom'>" .$rw['comment']. "</div>
									</div>
								</div>";
				}

				/*$rr = (float) $b['rating'];
				if ($rr == 10.00) {$rc = 'CDFF66';}
				if (($rr > 8.00) && ($rr < 10.00)) {$rc = 'FFFB66';}
				if (($rr > 6.00) && ($rr <= 8.00)) {$rc = 'FFCA4F';}
				if (($rr > 4.00) && ($rr <= 6.00)) {$rc = 'FF8022';}
				if (($rr > 2.00) && ($rr <= 4.00)) {$rc = 'FF2722';}
				if (($rr > 0.00) && ($rr <= 2.00)) {$rc = '8C0300';}
				if ($rr == 0.00) {$rc = '000000';}*/

				$v = (int) $b['visualizations'];
				if (($v >= 10000)&&($v < 10000000)){$sl = strlen($b['visualizations']); $v = substr($b['visualizations'],0,$sl-3).'K';}
				else if ($v >= 10000000){$sl = strlen($b['visualizations']); $v = substr($b['visualizations'],0,$sl-6).'M';}

				$r = (int) $b['readings'];
				if (($r >= 10000)&&($r < 10000000)){$sl = strlen($b['readings']); $r = substr($b['readings'],0,$sl-3).'K';}
				else if ($r >= 10000000){$sl = strlen($b['readings']); $r = substr($b['readings'],0,$sl-6).'M';}

				if ($lang == 'pt') {$shrmsg = "Venha dar uma olhada no livro ".$t[$lang]." no Literledge! https://literledge.com/books/".$b['id'].".php";}
				if ($lang == 'en') {$shrmsg = "Check out the book ".$t[$lang]." in Literledge! https://literledge.com/books/".$b['id'].".php";}
				if ($lang == 'es') {$shrmsg = "Ven a ver el libro ".$t[$lang]." disponible en Literledge! https://literledge.com/books/".$b['id'].".php";}

				$btns = "<form id='ubuttons' action='account/addtoshelf.php' method='post'>";
				$ainpt = "<input class='btpress' type='submit' name='add' value='' style='background-image: url(media/images/icons/addto.png);' ";
				$rinpt = "<input class='btpress' type='submit' name='rem' value='' style='background-image: url(media/images/icons/remshelf.png);' ";
				$finpt = "<input class='btpress' type='submit' name='fav' value='' style='background-image: url(media/images/icons/fav.png);' ";
				$uinpt = "<input class='btpress' type='submit' name='unf' value='' style='background-image: url(media/images/icons/unfav.png);' ";
				$shrbt = "<a href='https://twitter.com/intent/tweet?source=&text=".$shrmsg."' target='_blank'>
				<button class='btpress' type='button' name='shr' value='' style='background-image: url(media/images/icons/share.png);'></button></a>";

				if (isset($_SESSION['user'])) {
					$find = $conn->query("SELECT id,state FROM shelves WHERE user='".$_SESSION['user']."' and book='".$b["id"]."'");
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
				$btns = $btns."<input name='id' value='".$b['id']."' style='display: none;' /></form>";
				
				echo "<div id='reportab' style='visibility: hidden;'>
						<button id='btexit' class='btpress' onclick='set_display(".'"reportab"'.")'><img src='media/images/icons/exit.png' /></button>";

						if ($_COOKIE['lang'] == 'pt') {
							echo "<h1> Reportar Erro </h1>
							Se você encontrou algum erro, por favor, <br />
							envie sua contribuição aos desenvolvedores. <br />
							<select class='selectbox'>
								<option value='er1'> Erro de Ortografia </option>
								<option value='er2'> Informações Incorretas </option>
								<option value='er3'> Não mostra a página como deveria </option>";
							}
						if ($_COOKIE['lang'] == 'en') {
							echo "<h1> Report Error </h1>
							If you found any mistake, please <br />
							send your contribution to the developers. <br />
							<select class='selectbox'>
							<option value='er1'> Spelling Error </option>
							<option value='er2'> Incorrect Information </option>
							<option value='er3'> Don't show the page as it should </option>";
							}
						if ($_COOKIE['lang'] == 'es') {
							echo "<h1> Informar error </h1>
							Si encuentra algún error, por favor <br />
							envíe su contribución a los desarrolladores. <br />
							<select class='selectbox'>
							<option value='er1'> Error de ortografía </option>
							<option value='er2'> Información incorrecta </option>
							<option value='er3'> No mostrar la página como debería </option>";
							}

					echo "</select> <br />
							<input class='textbox' type='text' /> <br />
							<input class='btpress' type='submit' />
					</div>
					<div id='bookblock'>
						<button id='reportbt' class='btpress' onclick='set_display(".'"reportab"'.")'><img src='media/images/icons/report.png' /></button>
						<img id='coverart' src='media/images/covers/" .$b["id"]. ".jpg'/>
						<div id='info'>
							<h1> " .$t[$lang]. " </h1>
							<h2> 
								<a href='https://www.flaticon.com/authors/freepik' >
									<img id='couflag' src='media/images/icons/flags/" .$b["country"]. ".png' height='30' title='Icons made by Freepik' 
									alt='" .$b["country"]. "'/>
								</a> • <a href='users/" .$b["auctor"]. ".php'>" .$nm. "</a> • " .$b["year"]. "
							</h2>
							" .$sv. "<h2>";
						if ($_COOKIE['lang'] == 'pt') {echo "Gênero: " .$gnrlst[$b["genre"]];}
						if ($_COOKIE['lang'] == 'en') {echo "Genre: " .$gnrlst[$b["genre"]];}
						if ($_COOKIE['lang'] == 'es') {echo "Género: " .$gnrlst[$b["genre"]];}
					echo "</h2>" .$ls. "<h2>";
						if ($_COOKIE['lang'] == 'pt') {echo "Liçenca: " .$liclst[$b["license"]];}
						if ($_COOKIE['lang'] == 'en') {echo "License: " .$liclst[$b["license"]];}
						if ($_COOKIE['lang'] == 'es') {echo "Licencia: " .$liclst[$b["license"]];}
					echo $wrng."</h2><div id='sinopsis'>";
							include '../sinopsis/'.$b['id'].'.php';
					echo "</div>
							<div class='summary'>
								<ul>
									<li> <a href='books/".$b['id'].".php#goto1'> Resenha </a> </li>
									<li> <a href='books/".$b['id'].".php#goto2'> Sobre o livro </a> </li>
									<li> <a href='books/".$b['id'].".php#goto3'> Adaptações </a> </li>
									<li> <a href='books/".$b['id'].".php#goto4'> Downloads </a> </li>
								</ul>
							</div>
						</div>
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
				while ($e = $editioninfo->fetch_assoc()) {
					if ($e['price'] == '0.00') {
						if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$pr = 'gratuito';}
						if ($_COOKIE['lang'] == 'en') {$pr = 'free';}
						if ($_COOKIE['lang'] == 'es') {$pr = 'gratuito';}
					}
					else {$pr = $e['price'];}
					$l = "media/books/" .$b["id"]. "-" .$e["id"]. "." .$e["filtyp"];
					if (($e['filtyp'] == 'pdf')&&(strtolower($e['language']) == $_COOKIE['lang'])) {$red = $l;}
					$d = $d ."<tr onclick='download_file(".'"'.$l.'"'.",".'"'.$b['name'].'"'.")'>
						<th>" .$e['filtyp']. "</th><th>" .$e['credit']. "</th><th>" .$e['language']. "</th><th>" .$pr.  "</th>
						</tr>";
					}

				if ($red == '') {$red = $l;}
				echo "<a name='goto4'></a>
					<div id='getbooks'>
						<h1> Downloads </h1>
						<table id='downloads' cellpadding='0' cellspacing='0'> " .$d. "</table>
						<a href='".$red."' target='_blank'><button class='btpress'> Ler </button></a>
						<a href='https://busca.saraiva.com.br/busca?q=".$t[$lang]."' target='_blank'><button class='btpress'> Comprar </button></a>
					</div>
					<a name='goto5'></a>
					<div id='opinions'><h1>";
						if ($_COOKIE['lang'] == 'pt') {echo "Opiniões";}
						if ($_COOKIE['lang'] == 'en') {echo "Opinions";}
						if ($_COOKIE['lang'] == 'es') {echo "Opiniónes";}
				echo "</h1>".$rws."
					</div>
					<div id='tags'>
						".$b['tags']."
					</div>";
				}
			}
	}
	$conn->close();
?>