<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			if ((@$_POST['search'] == false)&&(@$_GET['q'] == false)) {header('location: index.php');}
			else if ((@$_POST['search'] == true)&&($_POST['search'] != '')) {header('location: search.php?q='.$_POST['search']);}
			#else if ((@$_POST['search'] == true)&&($_POST['search'] != '')) {$search = $_POST['search'];}
			else {$search = $_GET['q'];}
			if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
				{$v = 'Busca';}
			else if ($_COOKIE['lang'] == 'en')
				{$v = 'Search';}
			else if ($_COOKIE['lang'] == 'es')
				{$v = 'Busca';}
			include 'design/metadata.php';
		?>
	</head>

	<body>
		<?php
			include 'design/header.php';
			include 'design/lateralbar.php';

			if (@$_GET['oa'] == true) {$ofsa = (int) $_GET['oa'];} else {$ofsa = 0;}
			if (@$_GET['ob'] == true) {$ofsb = (int) $_GET['ob'];} else {$ofsb = 0;}
			if (@$_GET['op'] == true) {$ofsp = (int) $_GET['op'];} else {$ofsp = 0;}
			if (@$_GET['l']) {$flet = $_GET['l'];} else {$flet = '';}
			if (@$_GET['c']) {$fcou = $_GET['c'];} else {$fcou = '';}
			if (@$_GET['y']) {$fyer = $_GET['y'];} else {$fyer = '';}
			if (@$_GET['g']) {$fgen = $_GET['g'];} else {$fgen = '';}
			if (@$_GET['s']) {$flsc = $_GET['s'];} else {$flsc = '';}
			$foundlet = array();
			$foundcou = array();
			$foundyer = array();
			$foundgen = array();
			$foundlsc = array();

			require 'account/mysql_connect.php';
			if ($notcon == null) {
				require 'design/array_lists.php';

				echo "<div class='content search'>";
				if ($search[0] != '$') {
					echo "<div class='brow'><div class='blabel'><h1>";
					if ($_COOKIE['lang'] == 'pt') {echo "Resultados para ";}
					if ($_COOKIE['lang'] == 'en') {echo "Results for ";}
					if ($_COOKIE['lang'] == 'es') {echo "Resultados para ";}
					echo $search."</h1></div></div>";
				}

				$result = $conn->query("SELECT nick, auctor, birth, country FROM users ORDER BY pt");
				$brusers = '';
				$aud = false;
				if ($result->num_rows > 0) {
					#LITSCHOOL SEARCH
					if ($search == '$schools') {
						$disp = "<div class='brow'><a name='auctors'><div class='blabel'>";
						if (($search != '$auctors') || ($search != '$century') || ($search != '$schools')) {
							if ($_COOKIE['lang'] == 'pt') {$disp = $disp."<h1> Escolas Literárias </h1>";}
							if ($_COOKIE['lang'] == 'en') {$disp = $disp."<h1> Literary Schools </h1>";}
							if ($_COOKIE['lang'] == 'es') {$disp = $disp."<h1> Escuelas Literarias </h1>";}
							}
						$disp = $disp ."</div></a><div class='displaybooks'>";

						$cn = array();
						foreach ($ltslst as $x => $v) {
							$cn[] = $x;
						}
						for ($y = 0; $y < sizeof($cn); $y++) {
							$disp = $disp ."<a href='schools/".strtolower($cn[$y]).".php'>
										<button class='litbut' style='background-image: url(media/images/banners/".strtolower($cn[$y]).".jpg)'>
											<h2> " .$ltslst[$cn[$y]]. " </h2>
										</button>
									</a>";
							};
						echo $disp ."</div></div>";
					}
					#CENTURIES SEARCH
					if ($search == '$century') {
						$disp = "<div class='brow'><a name='auctors'><div class='blabel'>";
						if (($search != '$auctors') || ($search != '$century') || ($search != '$schools')) {
							if ($_COOKIE['lang'] == 'pt') {$disp = $disp."<h1> Séculos </h1>";}
							if ($_COOKIE['lang'] == 'en') {$disp = $disp."<h1> Centuries </h1>";}
							if ($_COOKIE['lang'] == 'es') {$disp = $disp."<h1> Siglos </h1>";}
							}
						$disp = $disp ."</div> <div class='displaybooks'>";

						$cn = array('20','19','18','17','16','15','14','13','12','11','10');
						for ($y = 0; $y < sizeof($cn); $y++) {
							$disp = $disp ."<html>
									<a href='search.php?q=".'$all'."&y=" .$cn[$y]. "00'>
										<button class='portraits'>
											<h2> " .$cenlst[$cn[$y]]. " </h2>
										</button>
									</a>
								</html>";
							};
						echo $disp ."</div></div>";
					}
					#AUCTORS SEARCH
					else if (($search != '$books')&&($flsc == '')&&($fgen == '')) {
						$disp = "<div class='brow'><a name='auctors'><div class='blabel'><h1>";
						if (($search != '$auctors') || ($search != '$century') || ($search != '$schools')) {
							if ($_COOKIE['lang'] == 'pt') {$disp = $disp."Autores";}
							if ($_COOKIE['lang'] == 'en') {$disp = $disp."Auctors";}
							if ($_COOKIE['lang'] == 'es') {$disp = $disp."Autores";}
							}
						$disp .= "</h1></div><div class='displaybooks'>";

						$max = 0;
						while (($i = $result->fetch_assoc())&&($max < $ofsa + 20)) {
							if ($max < $ofsa) {$max++;}
							else {
								$find = $conn->query("SELECT pt,en,es FROM users WHERE nick='".$i['nick']."'");
								$n = $find->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}

								$p = false;
								if (($search != '$auctors')&&($search != '$all')) {
									preg_match('/'.$search.'/i',$n['pt'],$rept);
									preg_match('/'.$search.'/i',$n['en'],$reen);
									preg_match('/'.$search.'/i',$n['es'],$rees);
									preg_match('/'.$search.'/i',stripacc($n['pt']),$reptstacc);
									preg_match('/'.$search.'/i',stripacc($n['en']),$reenstacc);
									preg_match('/'.$search.'/i',stripacc($n['es']),$reesstacc);
									if ((sizeof($rept) > 0)||(sizeof($reen) > 0)||(sizeof($rees) > 0)
									||(sizeof($reptstacc) > 0)||(sizeof($reenstacc) > 0)||(sizeof($reesstacc) > 0))
										{$p = true;}
								}
								else {$p = true;}

								if ($p == true) {
									if ((in_array($nm[0],$foundlet) == false)) {
										$foundlet[] = strtoupper(stripacc($nm[0]));
										}
									if (substr($i['birth'],-3,3) != 'a.c') {
										if ((in_array(substr($i['birth'],0,2)."00",$foundyer) == false)) {
											$foundyer[] = substr($i['birth'],0,2)."00";
											}
										}
									else {
										if ((in_array($i['birth'][0]."	BD",$foundyer) == false)) {
											$foundyer[] = $i['birth'][0]."BD";
											}
										}
									if (in_array($i['country'],$foundcou) == false) {
										$foundcou[] = $i['country'];
									}
								}

								if ($search == '$auctors') {$p = true;}
								if ((@$flet) && ($nm[0] != $flet)) {$p = false;}
								if ((@$fcou) && ($i['country'] != $fcou)) {$p = false;}
								if (@$fyer) {
									if ((substr($fyer,-2,2) != 'BD')&&(substr($i['birth'],0,2) != substr($fyer,0,2))) {$p = false;}
									else if ($i['birth'][0] != $fyer[0]) {$p = false;}
								}

								if ($p == true) {
									$por = "<a href='users/" .$i["nick"]. ".php'>
												<button class='portraits'>
													<img class='profilepic' src='media/images/profilepics/" .$i["nick"]. ".jpg' />
													<h2> " .$nm. " </h2>
												</button>
											</a>";
									if ($i['auctor'] == 1) {$disp = $disp.$por;}
									if ($i['auctor'] == 0) {$brusers = $brusers.$por;}
									$aud = true;
									$max++;
									}
								}
							}
						if ($ofsa > 0) {
							$btp = "<button class='btpress bp' onclick='filter_search(".'"'.$search.'","'.($ofsa - 21).'","'.($ofsb).'","'.($ofsp).'"'.")'>";
							if ($_COOKIE['lang'] == 'pt') {$btp = $btp."Anterior";}
							if ($_COOKIE['lang'] == 'en') {$btp = $btp."Previous";}
							if ($_COOKIE['lang'] == 'es') {$btp = $btp."Anterior";}
							$btp = $btp."</button>";
							}
						else{$btp = '';}
						if ($max == $ofsa + 20) {
							$btn = "<button class='btpress bn' onclick='filter_search(".'"'.$search.'","'.($ofsa + 21).'","'.($ofsb).'","'.($ofsp).'"'.")'>";
							if ($_COOKIE['lang'] == 'pt') {$btn = $btn."Próximo";}
							if ($_COOKIE['lang'] == 'en') {$btn = $btn."Next";}
							if ($_COOKIE['lang'] == 'es') {$btn = $btn."Siguiente";}
							$btn = $btn."</button>";
							}
						else {$btn = '';}
					if ($aud == true) {echo $disp ."</div>".$btp.$btn."</div>";}
					}
				if ($brusers != '') {
					echo "<div class='brow'><a name='users'></a><div class='blabel'>";
					if (($search != '$auctors') || ($search != '$century') || ($search != '$schools')) {
						if ($_COOKIE['lang'] == 'pt') {echo "<h1> Usuários </h1>";}
						if ($_COOKIE['lang'] == 'en') {echo "<h1> Users </h1>";}
						if ($_COOKIE['lang'] == 'es') {echo "<h1> Usuarios </h1>";}
						}
					echo "</div><div class='displaybooks'>".$brusers."</div></div>";
					}
				}

				#BOOK SEARCH
				$result = $conn->query("SELECT b.*, u.nick as auctor FROM books as b JOIN users as u
						ON b.auctor=u.nick");
				if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$lang='pt';}
				else {$lang = $_COOKIE['lang'];}

				if ($result->num_rows > 0) {
					$list = "<div class='brow'><a name='books'></a><div class='blabel'>";
					if ($_COOKIE['lang'] == 'pt') {$list = $list."<h1> Livros </h1>";}
					if ($_COOKIE['lang'] == 'en') {$list = $list."<h1> Books </h1>";}
					if ($_COOKIE['lang'] == 'es') {$list = $list."<h1> Libros </h1>";}
					$list = $list."</div><div class='displaysearch'>";

					$max = 0;
					$bod = false;
					while (($i = $result->fetch_assoc())&&($max < $ofsb + 21)) {
						if ($max < $ofsb) {$max++;}
						else {
							$translation = $conn->query("SELECT * FROM translations WHERE fkey='".$i['id']."'");
							$t = $translation->fetch_assoc();

							$find = $conn->query("SELECT pt,en,es FROM users WHERE nick='".$i['auctor']."'");
							$n = $find->fetch_assoc();
							if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
							else {$nm = $n[$_COOKIE['lang']];}

							$p = false;
							if (($search == '$all')||($search == '$books')) {$p = true;}
							else {
								preg_match('/\b'.$search.'\b/i',$t['pt'],$fnpt);
								preg_match('/\b'.$search.'\b/i',$t['en'],$fnen);
								preg_match('/\b'.$search.'\b/i',$t['es'],$fnes);
								preg_match('/\b'.$search.'\b/i',$n['pt'],$fapt);
								preg_match('/\b'.$search.'\b/i',$n['en'],$faen);
								preg_match('/\b'.$search.'\b/i',$n['es'],$faes);
								preg_match('/\b'.$search.'\b/i',stripacc($t['pt']),$fnptstacc);
								preg_match('/\b'.$search.'\b/i',stripacc($t['en']),$fnenstacc);
								preg_match('/\b'.$search.'\b/i',stripacc($t['es']),$fnesstacc);
								preg_match('/\b'.$search.'\b/i',stripacc($n['pt']),$faptstacc);
								preg_match('/\b'.$search.'\b/i',stripacc($n['en']),$faenstacc);
								preg_match('/\b'.$search.'\b/i',stripacc($n['es']),$faesstacc);
								preg_match('/#'.$search.'/i',$i['tags'],$ft);
								preg_match('/'.$search.'/i',$gnrlst[$i['genre']],$fg);
								if ((sizeof($fnpt) > 0)||(sizeof($fnen) > 0)||(sizeof($fnes) > 0)
								||(sizeof($fapt) > 0)||(sizeof($faen) > 0)||(sizeof($faes) > 0)
								||(sizeof($ft) > 0)||(sizeof($fg) > 0)
								||(sizeof($fnptstacc) > 0)||(sizeof($fnenstacc) > 0)||(sizeof($fnesstacc) > 0)
								||(sizeof($faptstacc) > 0)||(sizeof($faenstacc) > 0)||(sizeof($faesstacc) > 0))
									{$p = true;}
								if ($i['litschool'] != null) {
									preg_match('/' .$search. '/i',$ltslst[$i['litschool']],$fl);
									if (sizeof($fl) > 0) {$p = true;}}
								if ($i['series'] != null) {
									preg_match('/' .$search. '/i',$i['series'],$fl);
									if (sizeof($fl) > 0) {$p = true;}}
								}

							if ($p == true) {
								if ((in_array($t[$lang][0],$foundlet) == false)) {
									$foundlet[] = strtoupper(stripacc($t[$lang][0]));
									}
								if (substr($i['year'],-3,3) != 'a.c') {
									if (in_array(substr($i['year'],0,2)."00",$foundyer) == false) {
										$foundyer[] = substr($i['year'],0,2)."00";
										}
									}
								else {
									if (in_array($i['year'][0]."BD",$foundyer) == false) {
										$foundyer[] = $i['year'][0]."BD";
										}
									}
								if (in_array($i['country'],$foundcou) == false) {
									$foundcou[] = $i['country'];
								}
								if (in_array($i['genre'],$foundgen) == false) {
									$foundgen[] = $i['genre'];
								}
								if ((in_array($i['litschool'],$foundlsc) == false)&&($i['litschool'] != null)) {
									$foundlsc[] = $i['litschool'];
								}
							}

							if ((@$flet) && ($t[$lang][0] != $flet)) {$p = false;}
							if ((@$fcou) && ($i['country'] != $fcou)) {$p = false;}
							if (@$fyer) {
									if ((substr($fyer,-2,2) != 'BD')&&(substr($i['year'],0,2) != substr($fyer,0,2))) {$p = false;}
									else if (substr($i['year'],0,1) != substr($fyer,0,1)) {$p = false;}
								}
							if ((@$fgen) && (strtolower($i['genre']) != $fgen)) {$p = false;}
							if ((@$flsc) && (strtolower($i['litschool']) != $flsc)) {$p = false;}

							if ($i['warning'] == '0') {$wrg = '';}
							else {$wrg = "style='background-color: #BC4440;color: #5B090D;'";}

							if ($p == true) {
								$list = $list."<a href='books/" .$i["id"]. ".php'>
										<button class='thumbs' ".$wrg.">
											<div class='coverart'> <img  src='media/images/covers/" .$i["id"]. ".jpg' /> </div>
											<div class='description'>
											<h2> ".$t[$lang]." </h2>
											<h3> ".$nm." </h3>";
											include 'sinopsis/'.$i['id'].'.php';
										$list = $list.$sin."</div>
										</button>
									</a>";
								$bod = true;
								$max++;
								}
							}
						}
					if ($ofsb > 0) {
						$btp = "<button class='btpress bp' onclick='filter_search(".'"'.$search.'","'.($ofsa).'","'.($ofsb - 21).'","'.($ofsp).'"'.")'>";
							if ($_COOKIE['lang'] == 'pt') {$btp = $btp."Anterior";}
							if ($_COOKIE['lang'] == 'en') {$btp = $btp."Previous";}
							if ($_COOKIE['lang'] == 'es') {$btp = $btp."Anterior";}
							$btp = $btp."</button>";
							}
					else {$btp = '';}
					if ($max == $ofsb + 21) {
						$btn = "<button class='btpress bn' onclick='filter_search(".'"'.$search.'","'.($ofsa).'","'.($ofsb + 21).'","'.($ofsp).'"'.")'>";
							if ($_COOKIE['lang'] == 'pt') {$btn = $btn."Próximo";}
							if ($_COOKIE['lang'] == 'en') {$btn = $btn."Next";}
							if ($_COOKIE['lang'] == 'es') {$btn = $btn."Siguiente";}
							$btn = $btn."</button>";
							}
					else {$btn = '';}
				if ($bod == true) {echo $list."</div></div>".$btn.$btp;}
				}

				#POEM SEARCH
				$poemlst = array();
				$pfind = $conn->query("SELECT * FROM poems");
				$pi = $pfind->fetch_assoc();
				$find = $conn->query("SELECT pt,en,es,nick FROM users");
				$list = "<div class='brow'><a name='poems'><div class='blabel'>";
				if ($_COOKIE['lang'] == 'pt') {$list = $list."<h1> Poemas </h1>";}
				if ($_COOKIE['lang'] == 'en') {$list = $list."<h1> Poems </h1>";}
				if ($_COOKIE['lang'] == 'es') {$list = $list."<h1> Poemas </h1>";}
				$list = $list."</div></div></div></a>";
				$pod = false;

				while ($i = $find->fetch_assoc()) {
					$p = false;
					preg_match('/'.$search.'/i',$i['pt'],$ppt);
					preg_match('/'.$search.'/i',$i['en'],$pen);
					preg_match('/'.$search.'/i',$i['es'],$pes);
					preg_match('/'.$search.'/i',stripacc($i['pt']),$pptstacc);
					preg_match('/'.$search.'/i',stripacc($i['en']),$penstacc);
					preg_match('/'.$search.'/i',stripacc($i['es']),$pesstacc);
					if ((sizeof($ppt)>0)||(sizeof($pen)>0)||(sizeof($pes)>0)
					||(sizeof($pptstacc)>0)||(sizeof($penstacc)>0)||(sizeof($pesstacc)>0)) {$p = true;}

					if ($p == true) {
						$pom = glob('poems/'.$i['nick'].'*.php');
						if (in_array($pi['country'],$foundcou) == false) {
							$foundcou[] = $pi['country'];
						}
						if (in_array($pi['genre'],$foundgen) == false) {
							$foundgen[] = $pi['genre'];
						}
						if ((in_array($pi['litschool'],$foundlsc) == false)&&($pi['litschool'] != null)) {
							$foundlsc[] = $pi['litschool'];
						}
					}

					if ((@$flet)&&($i['pt'][0] != $flet)) {$p = false;}
					if ((@$fcou)&&($pi['country'] != $fcou)) {$p = false;}
					if ((@$fgen)&&(strtolower($pi['genre']) != $fgen)) {$p = false;}
					if ((@$flsc)&&(strtolower($pi['litschool']) != $flsc)) {$p = false;}

					if ($p == true) {
						if (sizeof($pom) > 0) {
							$list = $list."<div class='content'>";
							for ($max=$ofsp;$max < sizeof($pom);$max++) {
								$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$i['nick']."'");
								$n = $find->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$pnm = $n['pt'];}
								else {$pnm = $n[$_COOKIE['lang']];}

								include $pom[$max];
								$inx = substr($shwpm, strpos($shwpm, '<h1> ')+5);
								$inx = substr($inx, 0, strpos($inx, ' </h1>'));
								$list = $list."<a name='".$inx."'></a><blockquote class='quotepoem'>".$shwpm."</blockquote>";
								$poemlst[] = $inx;
								$pod = true;
								}
							$list = $list."</div>";
							}
						}
					}
				if ($ofsp > 0) {
					$btp = "<button class='btpress bp' onclick='filter_search(".'"'.$search.'","'.($ofsa).'","'.($ofsb).'","'.($ofsp - 21).'"'.")'>";
						if ($_COOKIE['lang'] == 'pt') {$btp = $btp."Anterior";}
						if ($_COOKIE['lang'] == 'en') {$btp = $btp."Previous";}
						if ($_COOKIE['lang'] == 'es') {$btp = $btp."Anterior";}
						}
				else {$btp = '';}
				if ($max == $ofsp + 21) {
					$btn = "<button class='btpress bn' onclick='filter_search(".'"'.$search.'","'.($ofsa).'","'.($ofsb).'","'.($ofsp + 21).'"'.")'>";
						if ($_COOKIE['lang'] == 'pt') {$btn = $btn."Próximo";}
						if ($_COOKIE['lang'] == 'en') {$btn = $btn."Next";}
						if ($_COOKIE['lang'] == 'es') {$btn = $btn."Siguiente";}
						}
				else {$btn = '';}
				if ($pod == true) {echo $list."</div>".$btp.$btn;}

				#EMPTY SEARCH
				if (($search[0] != '$')&&($aud == false)&&($brusers == '')&&($bod == false)) {
					echo "<div class='login'>";
					if ($_COOKIE['lang'] == 'pt') {
						echo "<h1> Nada foi encontrado </h1><ul>
						<li>Tente pesquisar por palavras mais simples</li>
						<li>Desative alguns filtros</li>
						<li>Veja se escreveu corretamente</li></ul>";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<h1> Nothing was found </h1><ul>
						<li>Try searching for simpler words</li>
						<li>Disable some filters</li>
						<li>See if you wrote it correctly</li></ul>";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<h1> No se encontró nada </h1><ul>
						<li>Intenta buscar palabras más simples</li>
						<li>Deshabilitar algunos filtros</li>
						<li>Vea si lo escribió correctamente</li></ul>";
					}
					echo "</div>";
					}
				echo "</div>";

				#FILTERS
				echo "<div id='filanch'></div><div id='filters'>
				<script type='text/javascript'>
					if ($(window).width() < 720) {set_display('filters',true);}
				</script>
				<div class='brow'><h2>";
				if ($_COOKIE['lang'] == 'pt') {echo "Filtros";}
				if ($_COOKIE['lang'] == 'en') {echo "Filters";}
				if ($_COOKIE['lang'] == 'es') {echo "Filtros";}
				echo "</h2>";

				#LETTER FILTER
				if (sizeof($foundlet) > 0) {
					sort($foundlet);
					echo "<select id='flet' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
					if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
						{echo "Letra</option>";}
					if ($_COOKIE['lang'] == 'en')
						{echo "Letter</option>";}
					if ($_COOKIE['lang'] == 'es')
						{echo "Letra</option>";}
					for ($x = 0;$x < sizeof($foundlet);$x++) {
						if ($flet == $foundlet[$x])
							{echo "<option value='".$foundlet[$x]."' selected>".$foundlet[$x]."</option>";}
						else
							{echo "<option value='".$foundlet[$x]."'>".$foundlet[$x]."</option>";}
						}
					echo "</select>";
					}
				#COUNTRY FILTER
				if (sizeof($foundcou) > 0) {
					$nam = array();
					foreach ($foundcou as $val) {
						$nam[] = $coulst[$val];
					}
					array_multisort($nam, SORT_ASC, $foundcou);

					echo "<select id='fcou' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
					if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
						{echo "País</option>";}
					if ($_COOKIE['lang'] == 'en')
						{echo "Country</option>";}
					if ($_COOKIE['lang'] == 'es')
						{echo "País</option>";}
					for ($x = 0;$x < sizeof($foundcou);$x++) {
						if ($fcou == $foundcou[$x])
							{echo "<option value='".$foundcou[$x]."' selected>".$coulst[$foundcou[$x]]."</option>";}
						else
							{echo "<option value='".$foundcou[$x]."'>".$coulst[$foundcou[$x]]."</option>";}
						}
					echo "</select>";
					}
				#CENTURY FILTER
				if (sizeof($foundyer) > 0) {
					rsort($foundyer,SORT_NUMERIC);
					echo "<select id='fyer' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
					if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
						{echo "Século</option>";}
					if ($_COOKIE['lang'] == 'en')
						{echo "Century</option>";}
					if ($_COOKIE['lang'] == 'es')
						{echo "Siglo</option>";}
					for ($x = 0;$x < sizeof($foundyer);$x++) {
						if ($fyer == $foundyer[$x]) {$sl = 'selected';} else {$sl = '';}
						if (substr($foundyer[$x],-2,2) == 'BD') {echo "<option value='".$foundyer[$x]."' ".$sl.">".$cenlst[$foundyer[$x]]." BD</option>";}
						else {echo "<option value='".$foundyer[$x]."' ".$sl.">".$cenlst[substr($foundyer[$x],0,2)]."</option>";}
					}
					echo "</select>";
					}
				#GENRE FILTER
				if (sizeof($foundgen) > 0) {
					$nam = array();
					foreach ($foundgen as $val) {
						if (in_array($gnrlst[$val], $nam)==false) {$nam[] = $gnrlst[$val];}
					}
					array_multisort($nam, SORT_ASC, $foundgen);

					echo "<select id='fgen' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
					if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
						{echo "Gênero</option>";}
					if ($_COOKIE['lang'] == 'en')
						{echo "Genre</option>";}
					if ($_COOKIE['lang'] == 'es')
						{echo "Género</option>";}

					echo "<optgroup label='".$gnrlst['N']."'>";
					for ($x = 0;$x < sizeof($foundgen);$x++) {
						if ($foundgen[$x][0] == 'N') {
							if ($fgen == strtolower($foundgen[$x]))
								{echo "<option value='".strtolower($foundgen[$x])."'selected>".$gnrlst[$foundgen[$x]]."</option>";}
							else
								{echo "<option value='".strtolower($foundgen[$x])."'>".$gnrlst[$foundgen[$x]]."</option>";}
							}
						}
					echo "</optgroup><optgroup label='".$gnrlst['L']."'>";
					for ($x = 0;$x < sizeof($foundgen);$x++) {
						if ($foundgen[$x][0] == 'L') {
							if ($fgen == strtolower($foundgen[$x]))
								{echo "<option value='".strtolower($foundgen[$x])."'selected>".$gnrlst[$foundgen[$x]]."</option>";}
							else
								{echo "<option value='".strtolower($foundgen[$x])."'>".$gnrlst[$foundgen[$x]]."</option>";}
							}
						}
					echo "</optgroup><optgroup label='".$gnrlst['D']."'>";
					for ($x = 0;$x < sizeof($foundgen);$x++) {
						if ($foundgen[$x][0] == 'D') {
							if ($fgen == strtolower($foundgen[$x]))
								{echo "<option value='".strtolower($foundgen[$x])."'selected>".$gnrlst[$foundgen[$x]]."</option>";}
							else
								{echo "<option value='".strtolower($foundgen[$x])."'>".$gnrlst[$foundgen[$x]]."</option>";}
							}
						}
					echo "</optgroup></select>";
					}
				#LITSCHOOL FILTER
				if (sizeof($foundlsc) > 0) {
					$nam = array();
					foreach ($foundlsc as $val) {
						$nam[] = $ltslst[$val];
					}
					array_multisort($nam, SORT_ASC, $foundlsc);
					
					echo "<select id='flsc' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
					if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
						{echo "Escola Literária</option>";}
					if ($_COOKIE['lang'] == 'en')
						{echo "Literary School</option>";}
					if ($_COOKIE['lang'] == 'es')
						{echo "Escuela Literaria</option>";}

					for ($x = 0;$x < sizeof($foundlsc);$x++) {
						if ($foundlsc[$x] != NULL) {
							if ($flsc == strtolower($foundlsc[$x]))
								{echo "<option value='".strtolower($foundlsc[$x])."'selected>".$ltslst[$foundlsc[$x]]."</option>";}
							else
								{echo "<option value='".strtolower($foundlsc[$x])."'>".$ltslst[$foundlsc[$x]]."</option>";}
							}
						}
					echo "</select>";
					}
				echo "</div>";
				$lnk = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				if (($aud == true)||($brusers != '')||($bod == true)) {
					echo "<div class='brow'><h2>";
					if ($_COOKIE['lang'] == 'pt') {echo "Conteúdo";}
					if ($_COOKIE['lang'] == 'en') {echo "Content";}
					if ($_COOKIE['lang'] == 'es') {echo "Conteudo";}
					echo "</h2><ul>";
					if ($aud == true) {
						echo "<li><a href='".$lnk."#auctors' onclick='if ($(window).width() < 720) {set_display(".'"filters"'.",true);}'>";
						if ($_COOKIE['lang'] == 'pt') {echo "Autores";}
						if ($_COOKIE['lang'] == 'en') {echo "Auctors";}
						if ($_COOKIE['lang'] == 'es') {echo "Autores";}
						echo "</a></li>";
					}
					if ($brusers != '') {
						echo "<li><a href='".$lnk."#users' onclick='if ($(window).width() < 720) {set_display(".'"filters"'.",true);}'>";
						if ($_COOKIE['lang'] == 'pt') {echo "Usuários";}
						if ($_COOKIE['lang'] == 'en') {echo "Users";}
						if ($_COOKIE['lang'] == 'es') {echo "Usuarios";}
						echo "</a></li>";
					}
					if ($bod == true) {
						echo "<li><a href='".$lnk."#books' onclick='if ($(window).width() < 720) {set_display(".'"filters"'.",true);}'>";
						if ($_COOKIE['lang'] == 'pt') {echo "Livros";}
						if ($_COOKIE['lang'] == 'en') {echo "Books";}
						if ($_COOKIE['lang'] == 'es') {echo "Libros";}
						echo "</a></li>";
					}
					echo "</ul></div>";
				}

				if (sizeof($poemlst) > 0) {
					echo "<div id='poemlst' class='brow'><a href='".$lnk."#poems'><h2>";
					if ($_COOKIE['lang'] == 'pt') {echo "Poemas";}
					if ($_COOKIE['lang'] == 'en') {echo "Poems";}
					if ($_COOKIE['lang'] == 'es') {echo "Poemas";}
					echo "</h2></a><div id='pomscroll'><ul>";
					for ($x=0;$x<sizeof($poemlst);$x++) {
						echo "<li><a href='".$lnk."#".$poemlst[$x]."' onclick='if ($(window).width() < 720) {set_display(".'"filters"'.",true);}'>".$poemlst[$x]."</a></li>";
					}
					echo "</ul></div></div>";
				}
				echo "</div>
					<button id='filtbut' class='btpress'><img src='media/images/icons/filters-".$_COOKIE['theme'].".png' /></button>";

				$conn->close();
				}
		include 'design/footer.php'; ?>
		<script type='text/javascript'>cut_sinopsis();</script>
	</body>
</html>