<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Impressionism';
			$v = $ltslst[$lts].' - ';
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo strtolower($lts); ?>.jpg")'></div>
		<?php echo "<div id='profile'> <h1 id='litername'> ".$ltslst[$lts]." </h1> </div>"; ?>
		<div id='bio'>
		<?php
			if ($_COOKIE['lang'] == 'pt') {
				echo "O Impressionismo foi um movimento de vanguarda que surgiu no final do século XIX na França, e se manifestou principalmente na pintura e nas artes plásticas. Os impressionistas criticaram os padrões vigentes e buscaram inovações da maneira de se fazer arte. O nome do movimento veio de um crítico de arte, que chamou as pinturas de impressionistas e inacabadas para descrevê-las, isto pois ao invés das pinturas retratarem a realidade com fidelidade, elas passam uma impressão da realidade. Assim, os pintores impressionistas se preocupavam mais com a luz e as sombras da paisagem, por isso pintavam seus quadros em vários horários do dia.<br />
				<br />
				Apesar de ter se manifestado na literatura, <b>o Impressionismo não criou uma escola literária,</b> contudo, características da pintura Impressionista pode ser observada na literatura. Os escritores impressionistas tiveram uma preocupação maior em descrever detalhadamente aspectos psicológicos dos personagens e impressões sensorias de uma cena, além de dar mais importância ás emoções dos personagens e ás metáforas. As tramas passaram a dar mais importância á narrativa em detrimento da estrutura, geralmente seguindo assim uma narrativa não-linear. Os principais temas abordados nestas obras envolvem a mente do indivíduo e suas questões psicológicas e introspectivas, como o tempo, as memórias, a frustração e a morte. O tempo é um tema especial para os impressionistas, seguindo a visão de resgatar o tempo perdido, os impressionistas retratam a paisagem fragmentada e momentânea, como algo que deve ser admirado, e não justificado. <br />
				<br />
				Por possuir uma linguagem mais difícil de se entender, os livros de caráter impressionista necessitam por sua vez de leitores de caráter intelectual, indo contra a literatura democrática do <a href='schools/realism.php'>Realismo</a> e do <a href='schools/naturalism.php'>Naturalismo</a>.
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo "Impressionism was an avant-garde movement that emerged at the end of the 19th century in France, and manifested itself mainly in painting and fine arts. Impressionists criticized current standards and sought innovations in the way of making art. The movement's name came from an art critic, who called the paintings impressionist and unfinished to describe them, because instead of the paintings faithfully portray reality, they convey an impression of reality. Thus, impressionist painters were more concerned with the light and shadows of the landscape, which is why they painted their pictures at various times of the day. <br />
				<br />
				Despite having manifested itself in literature, <b> Impressionism did not create a literary school, </b> however, characteristics of Impressionist painting can be observed in literature. Impressionist writers were more concerned with describing in detail the psychological aspects of the characters and sensory impressions of a scene, as well as giving more importance to the emotions of the characters and the metaphors. The plots started to give more importance to the narrative at the expense of the structure, generally following a non-linear narrative. The main themes addressed in these works involve the individual's mind and its psychological and introspective issues, such as time, memories, frustration and death. Time is a special theme for impressionists, following the vision of making up for lost time, impressionists portray the fragmented and momentary landscape, as something that must be admired, and not justified. <br />
				<br />
				Because they have a more difficult language to understand, books of an Impressionist character in turn need readers of an intellectual character, going against the democratic literature of <a href='schools/realism.php'> Realism </a> and <a href='schools/naturalism.php'> Naturalismo </a>.
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo "El impresionismo fue un movimiento de vanguardia que surgió a fines del siglo XIX en Francia y se manifestó principalmente en la pintura y las bellas artes. Los impresionistas criticaron los estándares actuales y buscaron innovaciones en la forma de hacer arte. El nombre del movimiento provino de un crítico de arte, que llamó a las pinturas impresionistas e inacabadas para describirlas, porque en lugar de retratarlas fielmente, transmiten una impresión de la realidad. Por lo tanto, los pintores impresionistas estaban más preocupados por la luz y las sombras del paisaje, por eso pintaron sus cuadros en varios momentos del día. <br />
				<br />
				A pesar de haberse manifestado en la literatura, el <b> impresionismo no creó una escuela literaria </b>, sin embargo, las características de la pintura impresionista se pueden observar en la literatura. Los escritores impresionistas estaban más interesados ​​en describir en detalle los aspectos psicológicos de los personajes y las impresiones sensoriales de una escena, así como en dar más importancia a las emociones de los personajes y a las metáforas. Las tramas comenzaron a dar más importancia a la narrativa en detrimento de la estructura, generalmente siguiendo una narración no lineal. Los temas principales abordados en estos trabajos involucran la mente del individuo y sus problemas psicológicos e introspectivos, como el tiempo, los recuerdos, la frustración y la muerte. El tiempo es un tema especial para los impresionistas, siguiendo la visión de recuperar el tiempo perdido, los impresionistas retratan el paisaje fragmentado y momentáneo, como algo que debe ser admirado y no justificado. <br />
				<br />
				Debido a que tienen un lenguaje más difícil de entender, los libros de carácter impresionista a su vez necesitan lectores de carácter intelectual, que van en contra de la literatura democrática de <a href='schools/realism.php'> Realismo </a> y <a href='schools/naturalism.php'> Naturalismo </a>.
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Impressionistas";}
						if ($_COOKIE['lang'] == 'en') {echo "Impressionism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Impressionismo";}
					?>
					</h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('POMPEIAraul','GRACAaranha','MACHADOassis','QUEIROZeca');
							for ($x=0;$x<sizeof($a);$x++) {
								$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$a[$x]."'");
								$n = $find->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}

								echo "<a href='users/".$a[$x].".php'>
										<button class='portraits'>
											<img class='profilepic' src='media/images/profilepics/".$a[$x].".jpg' />
											<h2> ".$nm." </h2>
										</button>
									</a>";
								}
							$conn->close();
							}
					?>
				</div>
			</div>
			<?php $schl = $lts; include '../design/auctorbooks.php'; ?>
		</div>
		<?php include '../design/footer.php' ?>
	</body>
</html>