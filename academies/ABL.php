<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$aca = 'ABL';
			$v = $acalst[$aca].' - ';
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo $aca; ?>.jpg")'></div>
		<?php echo "<div id='profile'><a href='http://www.academia.org.br/' target='_blank'><h1 id='litername'> ".$acalst[$aca]." </h1></a></div>"; ?>
		<div id='bio'>
		<?php
			if ($_COOKIE['lang'] == 'pt') {
			echo "Academia Brasileira de Letras (ABL - Loudspeaker.svg? Pronúncia) GCSE • MHSE é uma instituição literária brasileira fundada na cidade do Rio de Janeiro em 20 de julho de 1897 pelos escritores Machado de Assis, Lúcio de Mendonça, Inglês de Sousa, Olavo Bilac, Afonso Celso, Graça Aranha, Medeiros e Albuquerque, Joaquim Nabuco, Teixeira de Melo, Visconde de Taunay e Ruy Barbosa. É composta por quarenta membros efetivos e perpétuos (por isso alcunhados imortais) e por vinte sócios estrangeiros.<br />
				<br />
				Tem por objetivo o cultivo da língua portuguesa e da literatura brasileira. É-lhe reconhecido o mérito por esforços históricos em prol da unificação do idioma, do português brasileiro e do português europeu. Nomeadamente, teve um papel importante no Acordo Ortográfico de 1945, conseguido em conjunto com a Academia das Ciências de Lisboa, assim como foi de novo interlocutora quanto ao ainda \"polêmico\" Acordo Ortográfico de 1990.<br />
				<br />
				A instituição é responsável pela edição de obras de grande valor histórico e literário, e atribui diversos prêmios literários. A ABL remonta ao final do século XIX, quando escritores e intelectuais brasileiros desejaram criar uma academia nacional nos moldes da Academia Francesa.<br />
				<br />
				Esta tem quarenta cadeiras, ocupadas por quarenta membros efetivos perpétuos (no mínimo vinte e cinco devem morar na cidade que sedia a Academia, o Rio de Janeiro), sendo cada novo membro eleito pelos acadêmicos para ocupar uma cadeira vazia devido ao falecimento do último titular. Há ainda vinte membros estrangeiros correspondentes.";
			}

			if ($_COOKIE['lang'] == 'en') {
			echo "Academia Brasileira de Letras (ABL - Loudspeaker.svg? Pronunciation) GCSE • MHSE is a Brazilian literary institution founded in the city of Rio de Janeiro on July 20, 1897 by the writers Machado de Assis, Lúcio de Mendonça, Inglês de Sousa, Olavo Bilac , Afonso Celso, Graça Aranha, Medeiros and Albuquerque, Joaquim Nabuco, Teixeira de Melo, Viscount de Taunay and Ruy Barbosa.  It is made up of forty permanent and perpetual members (hence called immortals)  and twenty foreign members.  <br />
				<br />
				It aims to cultivate the Portuguese language  and Brazilian literature. It is recognized for its merit for its historic efforts to unify the language, Brazilian Portuguese and European Portuguese. Namely, it played an important role in the 1945 Orthographic Agreement, achieved jointly with the Lisbon Academy of Sciences,  as well as being a new interlocutor regarding the still \"controversial\" 1990 Orthographic Agreement. <br />
				<br />
				The institution is responsible for publishing works of great historical and literary value, and awards several literary awards.   GLA dates back to the end of the 19th century, when Brazilian writers and intellectuals wanted to create a national academy along the lines of the French Academy.  <br />
				<br />
				It has forty chairs, occupied by forty perpetual members (at least twenty-five must live in the city that houses the Academy, Rio de Janeiro), with each new member being elected by the academics to occupy an empty chair due to the death of the last holder . There are also twenty foreign correspondent members. ";
			}

			if ($_COOKIE['lang'] == 'es') {
			echo "Academia Brasileira de Letras (ABL - Loudspeaker.svg? Pronunciación) GCSE • MHSE es una institución literaria brasileña fundada en la ciudad de Río de Janeiro el 20 de julio de 1897 por los escritores Machado de Assis, Lúcio de Mendonça, Inglés de Sousa, Olavo Bilac , Afonso Celso, Graça Aranha, Medeiros y Albuquerque, Joaquim Nabuco, Teixeira de Melo, Vizconde de Taunay y Ruy Barbosa.  Se compone de cuarenta miembros permanentes y perpetuos (por lo tanto llamados inmortales)  y veinte miembros extranjeros.  <br />
				<br />
				Su objetivo es cultivar la lengua portuguesa  y la literatura brasileña. Es reconocido por su mérito por sus esfuerzos históricos para unificar el idioma, portugués brasileño y portugués europeo. A saber, jugó un papel importante en el Acuerdo Ortográfico de 1945, logrado conjuntamente con la Academia de Ciencias de Lisboa,  además de ser un nuevo interlocutor con respecto al Acuerdo Ortográfico de 1990 todavía \"controvertido\". <br />
				<br />
				La institución es responsable de publicar obras de gran valor histórico y literario, y otorga varios premios literarios.   GLA se remonta a finales del siglo XIX, cuando los escritores e intelectuales brasileños querían crear una academia nacional similar a la Academia Francesa.  <br />
				<br />
				Tiene cuarenta sillas, ocupadas por cuarenta miembros perpetuos (al menos veinticinco deben vivir en la ciudad que alberga la Academia, Río de Janeiro), y cada nuevo miembro es elegido por los académicos para ocupar una silla vacía debido a la muerte del último titular. . También hay veinte miembros corresponsales extranjeros. ";
			}
		?>
		</div>
		<div class='content'>
			<?php
				require '../account/mysql_connect.php';
				if ($notcon == null) {
					$find = $conn->query("SELECT nick,academy FROM users WHERE academy REGEXP '^".$aca."' ORDER BY academy");
					if ($find->num_rows > 0) {
						$ac = array();
						while ($i = $find->fetch_assoc()) {
							if (!array_key_exists(substr($i['academy'], 4,2), $ac)) {
								$ac[substr($i['academy'], 4,2)] = array();
							}
							$ac[substr($i['academy'], 4,2)][substr($i['academy'], 7,2)] = $i['nick'];
						}
						foreach ($ac as $chr => $ind) {
							echo "<div class='brow'><div class='blabel'><h1>";
							if ($_COOKIE['lang'] == 'pt') {echo "Posição ".$chr;}
							if ($_COOKIE['lang'] == 'en') {echo "Position ".$chr;}
							if ($_COOKIE['lang'] == 'es') {echo "Posición ".$chr;}
							echo "</h1></div><div class='displaybooks'>";
							foreach ($ind as $pos => $val) {
								$name = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$val."'");
								$n = $name->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}
								if (array_key_exists($chr, $acalst)) {$acachr = $acalst[$chr];}
								else {$acachr = $chr;}
								if (array_key_exists($pos, $acalst)) {$acapos = $acalst[$pos];}
								else {$acapos = "Posição ".$pos;}
								echo "<a href='users/".$val.".php'>
										<button class='portraits'>
											<img class='profilepic' src='media/images/profilepics/".$val.".jpg' />
											<h2> ".$nm." </h2>
											<span class='acainfo'>Cadeira ".$acachr." | ".$acapos."</span>
										</button>
									</a>";
							}
							echo "</div></div>";
						}
					}
				$conn->close();
				}
			?>
		</div>
		<script type='text/javascript'>
			if ($(window).width() < 720) {
				if ($('#litername').height() >= '120') {document.getElementById('litername').style.top = '80px';}
				else if ($('#litername').height() >= '80') {document.getElementById('litername').style.top = '120px';}
			}
			else if ($(window).width() < 2500) {
				if ($('#litername').height() >= '345') {document.getElementById('litername').style.top = '120px';}
				else if ($('#litername').height() >= '230') {document.getElementById('litername').style.top = '220px';}
			}
		</script>
		<?php include '../design/footer.php' ?>
	</body>
</html>