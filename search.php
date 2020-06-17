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
		<?php
			include 'design/header.php';
			include 'design/lateralbar.php';

			function stripAccents($stripAccents){
				return strtr($stripAccents,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ','aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
			}

			$search = strtolower($search);

			if (@$_GET['oa'] == true) {$ofsa = (int) $_GET['oa'];} else {$ofsa = 0;}
			if (@$_GET['ob'] == true) {$ofsb = (int) $_GET['ob'];} else {$ofsb = 0;}
			if (@$_GET['op'] == true) {$ofsp = (int) $_GET['op'];} else {$ofsp = 0;}
			if (@$_GET['l']) {$flet = $_GET['l'];}
			else {$flet = '';}
			if (@$_GET['c']) {$fcou = $_GET['c'];}
			else {$fcou = '';}
			if (@$_GET['y']) {$fyer = $_GET['y'];}
			else {$fyer = '';}
			if (@$_GET['g']) {$fgen = $_GET['g'];}
			else {$fgen = '';}
			if (@$_GET['s']) {$flsc = $_GET['s'];}
			else {$flsc = '';}

			require 'account/mysql_connect.php';
			if ($notcon == null) {
				require 'design/array_lists.php';
				echo "<a name='auctors'></a><div class='content search'>";
				
				$result = $conn->query("SELECT nick, auctor, birth, country FROM users ORDER BY pt");
				$brusers = '';
				$aud = false;
				if ($result->num_rows > 0) {
					#LITSCHOOL SEARCH
					if ($search == '$schools') {
						$disp = "<div class='brow'> <div class='blabel'>";
						if (($search != '$auctors') || ($search != '$century') || ($search != '$schools')) {
							if ($_COOKIE['lang'] == 'pt') {$disp = $disp."<h1> Escolas Literárias </h1>";}
							if ($_COOKIE['lang'] == 'en') {$disp = $disp."<h1> Literary Schools </h1>";}
							if ($_COOKIE['lang'] == 'es') {$disp = $disp."<h1> Escuelas Literarias </h1>";}
							}
						$disp = $disp ."</div> <div class='displaybooks'>";

						$cn = array();
						foreach ($ltslst as $x => $v) {
							$cn[] = $x;
						}
						for ($y = 0; $y < sizeof($cn); $y++) {
							$disp = $disp ."<html>
									<a href='schools/".strtolower($cn[$y]).".php'>
										<button class='portraits'>
											<h2> " .$ltslst[$cn[$y]]. " </h2>
										</button>
									</a>
								</html>";
							};
						echo $disp ."</div></div>";
					}
					#CENTURIES SEARCH
					if ($search == '$century') {
						$disp = "<div class='brow'> <div class='blabel'>";
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
					else if ($search != '$books') {
						$disp = "<div class='brow'> <div class='blabel'>";
						if (($search != '$auctors') || ($search != '$century') || ($search != '$schools')) {
							if ($_COOKIE['lang'] == 'pt') {$disp = $disp."<h1> Autores </h1>";}
							if ($_COOKIE['lang'] == 'en') {$disp = $disp."<h1> Auctors </h1>";}
							if ($_COOKIE['lang'] == 'es') {$disp = $disp."<h1> Autores </h1>";}
							}
						$disp = $disp ."</div> <div class='displaybooks'>";

						$max = 0;
						while (($i = $result->fetch_assoc())&&($max < $ofsa + 20)) {
							if ($max < $ofsa) {$max++;}
							else {
								$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$i['nick']."'");
								$n = $find->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}

								$p = false;
								if (($search != '$auctors')&&($search != '$all')) {
									preg_match('/' .$search. '/i',$nm,$re);
									if (sizeof($re) > 0) {$p = true;}}

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

							$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$i['auctor']."'");
							$n = $find->fetch_assoc();
							if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
							else {$nm = $n[$_COOKIE['lang']];}

							$p = false;
							if (($search == '$all')||($search == '$books')) {$p = true;}
							else {
								preg_match('/\b' .$search. '\b/i',$t[$lang],$fn);
								preg_match('/\b' .$search. '\b/i',$nm,$fa);
								preg_match('/#' .$search. '/i',$i['tags'],$ft);
								preg_match('/' .$search. '/i',$gnrlst[$i['genre']],$fg);
								if ((sizeof($fn) > 0)||(sizeof($fa) > 0)||(sizeof($ft) > 0)||(sizeof($fg) > 0))
									{$p = true;}
								if ($i['litschool'] != null) {
									preg_match('/' .$search. '/i',$ltslst[$i['litschool']],$fl);
									if (sizeof($fl) > 0) {$p = true;}}
								if ($i['series'] != null) {
									preg_match('/' .$search. '/i',$i['series'],$fl);
									if (sizeof($fl) > 0) {$p = true;}}
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
					if ((sizeof($ppt)>0)||(sizeof($pen)>0)||(sizeof($pes)>0)) {$p = true;}

					if ((@$flet)&&($i['pt'][0] != $flet)) {$p = false;}

					if ($p == true) {
						$pom = glob('poems/'.$i['nick'].'*.php');
						if (sizeof($pom) > 0) {
							$list = $list."<div class='content'>";
							for ($max=$ofsp;$max < sizeof($pom);$max++) {
								$cn = file_get_contents($pom[$max]);
								$inx = substr($cn, strpos($cn, '<h1> ')+5);
								$inx = substr($inx, 0, strpos($inx, ' </h1>'));
								$list = $list."<a name='".$inx."'></a><blockquote class='quotepoem'>".$cn."</blockquote>";
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
				echo "<div id='filanch'></div><div class='filters'><div class='brow'><h2>";
				if ($_COOKIE['lang'] == 'pt') {echo "Filtros";}
				if ($_COOKIE['lang'] == 'en') {echo "Filters";}
				if ($_COOKIE['lang'] == 'es') {echo "Filtros";}
				echo "</h2>";
				#LETTER FILTER
				$found = array();
				if ($search != '$books') {
					$find = $conn->query("SELECT pt, auctor FROM users");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if ((in_array($i['pt'][0],$found) == false) && ($i['auctor'] == '1')) {
								$found[] = stripAccents($i['pt'][0]);
								}
							}
						}
					}
				if ($search != '$auctors') {
					$find = $conn->query("SELECT pt FROM translations");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if (in_array($i['pt'][0],$found) == false) {
								$found[] = $i['pt'][0];
								}
							}
						}
					}
				if (sizeof($found) > 0) {
					sort($found);
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
				if ($search != '$books') {
					$find = $conn->query("SELECT country, auctor FROM users");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if ((in_array($i['country'],$found) == false) && ($i['auctor'] == '1')) {
								$found[] = $i['country'];
								}
							}
						}
					}
				if ($search != '$auctors') {
					$find = $conn->query("SELECT country FROM books");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if (in_array($i['country'],$found) == false) {
								$found[] = $i['country'];
								}
							}
						}
					}
				if (sizeof($found) > 0) {
					$nam = array();
					foreach ($found as $val) {
						$nam[] = $coulst[$val];
					}
					array_multisort($nam, SORT_ASC, $found);

					echo "<select id='fcou' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
					if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
						{echo "País</option>";}
					if ($_COOKIE['lang'] == 'en')
						{echo "Country</option>";}
					if ($_COOKIE['lang'] == 'es')
						{echo "País</option>";}
					for ($x = 0;$x < sizeof($found);$x++) {
						if ($fcou == $found[$x])
							{echo "<option value='".$found[$x]."' selected>".$coulst[$found[$x]]."</option>";}
						else
							{echo "<option value='".$found[$x]."'>".$coulst[$found[$x]]."</option>";}
						}
					echo "</select>";
					}
				#CENTURY FILTER
				$found = array();
				if ($search != '$books') {
					$find = $conn->query("SELECT birth, auctor FROM users");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if (substr($i['birth'],-3,3) != 'a.c') {
								if ((in_array(substr($i['birth'],0,2)."00",$found) == false) && ($i['auctor'] == '1')) {
									$found[] = substr($i['birth'],0,2)."00";
									}
								}
							else {
								if ((in_array($i['birth'][0]."	BD",$found) == false) && ($i['auctor'] == '1')) {
									$found[] = $i['birth'][0]."BD";
									}
								}
							}
						}
					}
				if ($search != '$auctors') {
					$find = $conn->query("SELECT year FROM books");
					if ($find->num_rows > 0) {
						while ($i = $find->fetch_assoc()) {
							if (substr($i['year'],-3,3) != 'a.c') {
								if (in_array(substr($i['year'],0,2)."00",$found) == false) {
									$found[] = substr($i['year'],0,2)."00";
									}
								}
							else {
								if (in_array($i['year'][0]."BD",$found) == false) {
									$found[] = $i['year'][0]."BD";
									}
								}
							}
						}
					}
				if (sizeof($found) > 0) {
					rsort($found,SORT_NUMERIC);
					echo "<select id='fyer' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
					if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
						{echo "Século</option>";}
					if ($_COOKIE['lang'] == 'en')
						{echo "Century</option>";}
					if ($_COOKIE['lang'] == 'es')
						{echo "Siglo</option>";}
					for ($x = 0;$x < sizeof($found);$x++) {
						if ($fyer == $found[$x]) {$sl = 'selected';} else {$sl = '';}
						if (substr($found[$x],-2,2) == 'BD') {echo "<option value='".$found[$x]."' ".$sl.">".$cenlst[$found[$x]]." BD</option>";}
						else {echo "<option value='".$found[$x]."' ".$sl.">".$cenlst[substr($found[$x],0,2)]."</option>";}
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
					$nam = array();
					foreach ($found as $val) {
						if (in_array($gnrlst[$val], $nam)==false) {$nam[] = $gnrlst[$val];}
					}
					array_multisort($nam, SORT_ASC, $found);

					echo "<select id='fgen' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
					if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
						{echo "Gênero</option>";}
					if ($_COOKIE['lang'] == 'en')
						{echo "Genre</option>";}
					if ($_COOKIE['lang'] == 'es')
						{echo "Género</option>";}

					for ($x = 0;$x < sizeof($found);$x++) {
						if ($fgen == strtolower($found[$x]))
							{echo "<option value='".strtolower($found[$x])."'selected>".$gnrlst[$found[$x]]."</option>";}
						else
							{echo "<option value='".strtolower($found[$x])."'>".$gnrlst[$found[$x]]."</option>";}
						}
					echo "</select>";
					}
				#LITSCHOOL FILTER
				$found = array();
				$find = $conn->query("SELECT litschool FROM books");
				if ($find->num_rows > 0) {
					while ($i = $find->fetch_assoc()) {
						if (in_array($i['litschool'],$found) == false) {
							if ($i['litschool'] != null) {$found[] = $i['litschool'];}
							}
						}
					}
				if (sizeof($found) > 0) {
					$nam = array();
					foreach ($found as $val) {
						$nam[] = $ltslst[$val];
					}
					array_multisort($nam, SORT_ASC, $found);
					
					echo "<select id='flsc' class='selectbox' onchange='filter_search(".'"'.$search.'"'.")'><option value='none'>";
					if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
						{echo "Escola Literária</option>";}
					if ($_COOKIE['lang'] == 'en')
						{echo "Literary School</option>";}
					if ($_COOKIE['lang'] == 'es')
						{echo "Escuela Literaria</option>";}

					for ($x = 0;$x < sizeof($found);$x++) {
						if ($found[$x] != NULL) {
							if ($flsc == strtolower($found[$x]))
								{echo "<option value='".strtolower($found[$x])."'selected>".$ltslst[$found[$x]]."</option>";}
							else
								{echo "<option value='".strtolower($found[$x])."'>".$ltslst[$found[$x]]."</option>";}
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
						echo "<li><a href='".$lnk."#auctors'>";
						if ($_COOKIE['lang'] == 'pt') {echo "Autores";}
						if ($_COOKIE['lang'] == 'en') {echo "Auctors";}
						if ($_COOKIE['lang'] == 'es') {echo "Autores";}
						echo "</a></li>";
					}
					if ($brusers != '') {
						echo "<li><a href='".$lnk."#users'>";
						if ($_COOKIE['lang'] == 'pt') {echo "Usuários";}
						if ($_COOKIE['lang'] == 'en') {echo "Users";}
						if ($_COOKIE['lang'] == 'es') {echo "Usuarios";}
						echo "</a></li>";
					}
					if ($bod == true) {
						echo "<li><a href='".$lnk."#books'>";
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
					echo "</h2></a><ul>";
					for ($x=0;$x<sizeof($poemlst);$x++) {
						echo "<li><a href='".$lnk."#".$poemlst[$x]."'>".$poemlst[$x]."</a></li>";
					}
					echo "</ul></div>";
				}
				echo "</div>";

				$conn->close();
				}
		include 'design/footer.php'; ?>
	</body>
</html>