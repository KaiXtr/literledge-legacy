<?php
	require '../account/mysql_connect.php';
	if ($notcon == null) {
		$conn->query("SET NAMES 'utf8'");
		$bookinfo = $conn->query("SELECT * FROM books WHERE id='" .$book. "'");
		$auctorinfo = $conn->query("SELECT b.auctor,b.id,u.name FROM books as b JOIN users as u ON b.auctor=u.nick WHERE b.id='" .$book. "'");
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
			
			if ($ech == '1') {
				$wrng = '';
				if ($b['warning'] == '1') {
					$wrng = "<div id='warning'>
								<div class='manlan' lang='pt'>
									Esta obra pode possuir conteúdo inapropriado ou
									desatualizado com os valores dos dias de hoje,
									tais como discriminação, misoginia ou racismo.
								</div>
								<div class='manlan' lang='en'>
									This work may contain inappropriate content or
									outdated with today's values,
									such as discrimination, misogyny or racism.
								</div>
								<div class='manlan' lang='es'>
									Este trabajo puede contener contenido inapropiado o
									desactualizado con los valores de hoy,
									como la discriminación, la misoginia o el racismo.
								</div>
							</div>";
				}

				if ($b['serie'] != '')
					{$sv = "<h2> " .$b["serie"]. " • Vol. " .$b["volume"]. " </h2>";}
				else {$sv = '';}


				if ($b['litschool'] != '')
					{$ls = "<h2> <div class='manlan' lang='pt'> Escola Literária: " .$ltslst[$b["litschool"]]. "</div>
					<div class='manlan' lang='en'> Literary School: " .$ltslst[$b["litschool"]]. "</div>
					<div class='manlan' lang='es'> Escuela Literaria: " .$ltslst[$b["litschool"]]. "</div> </h2>";}
				else {$ls = '';}

				$rws = '';
				$urev = false;
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
				if ((isset($_SESSION['user']))&&($urev == false)) {
					$rws = $rws."<div class='thbcritic'>
									<div>
										<h2> Publique sua opinião </h2> <br />
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

				if ($lang == 'pt') {$shrmsg = "Venha dar uma olhada no livro ".$t[$lang]." no Literledge! books/".$b['id'].".php";}
				if ($lang == 'en') {$shrmsg = "Check out the book ".$t[$lang]." in Literledge! books/".$b['id'].".php";}
				if ($lang == 'es') {$shrmsg = "Ven a ver el libro ".$t[$lang]." disponible en Literledge! books/".$b['id'].".php";}

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
				
				echo "<div id='reportab'>
						<div class='manlan' lang='pt'>
							<button id='btexit' class='btpress' onclick='set_display(".'"reportab"'.")'><img src='media/images/icons/exit.png' /></button>
							<h1> Reportar Erro </h1>
							Se você encontrou algum erro, por favor, <br />
							envie sua contribuição aos desenvolvedores. <br />
							<select class='selectbox'>
								<option value='er1'> Erro de Ortografia </option>
								<option value='er2'> Informações Incorretas </option>
								<option value='er3'> Não mostra a página como deveria </option>
							</select> <br />
							<input class='textbox' type='text' /> <br />
							<input class='btpress' type='submit' />
						</div>
						<div class='manlan' lang='en'>
							<button id='btexit' class='btpress' onclick='set_display(".'"reportab"'.")'><img src='media/images/icons/exit.png' /></button>
							<h1> Report Error </h1>
							If you found any mistake, please <br />
							send your contribution to the developers. <br />
							<select class='selectbox'>
							<option value='er1'> Spelling Error </option>
							<option value='er2'> Incorrect Information </option>
							<option value='er3'> Don't show the page as it should </option>
							</select> <br />
							<input class='textbox' type='text' /> <br />
							<input class='btpress' type='submit' />
						</div>
						<div class='manlan' lang='es'>
							<button id='btexit' class='btpress' onclick='set_display(".'"reportab"'.")'><img src='media/images/icons/exit.png' /></button>
							<h1> Informar error </h1>
							Si encuentra algún error, por favor <br />
							envíe su contribución a los desarrolladores. <br />
							<select class='selectbox'>
							<option value='er1'> Error de ortografía </option>
							<option value='er2'> Información incorrecta </option>
							<option value='er3'> No mostrar la página como debería </option>
							</select> <br />
							<input class='textbox' type='text' /> <br />
							<input class='btpress' type='submit' />
						</div>
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
								</a> • <a href='users/" .$b["auctor"]. ".php'>" .$a["name"]. "</a> • " .$b["year"]. "
							</h2>
							" .$sv. "

							<h2> <div class='manlan' lang='pt'> Gênero: " .$gnrlst[$b["genre"]]. " </div>
							<div class='manlan' lang='en'> Genre: " .$gnrlst[$b["genre"]]. " </div>
							<div class='manlan' lang='es'> Género: " .$gnrlst[$b["genre"]]. " </div> </h2>

							" .$ls. "

							<h2> <div class='manlan' lang='pt'> Liçenca: " .$liclst[$b["license"]]. " </div>
							<div class='manlan' lang='en'> License: " .$liclst[$b["license"]]. " </div>
							<div class='manlan' lang='es'> Licencia: " .$liclst[$b["license"]]. " </div> </h2>
							".$wrng."

							<div id='sinopsis'>";
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
						."<div id='statistics'>
							<div class='manlan' lang='pt'>" .$v. " Visualizações  <br /> </div>
							<div class='manlan' lang='en'>" .$v. " Visualizations <br /> </div>
							<div class='manlan' lang='es'>" .$v. " Visualizaciónes <br /> </div>

							<div class='manlan' lang='pt'>" .$r. " Leituras <br /> </div>
							<div class='manlan' lang='en'>" .$r. " Readings <br /> </div>
							<div class='manlan' lang='es'>" .$r. " Lecturas <br /> </div>
						</div>
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
					<div id='opinions'>
						<h1> Opiniões </h1>
						".$rws."
					</div>";
				}
			}
	}
	$conn->close();
?>