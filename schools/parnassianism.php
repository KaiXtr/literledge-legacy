<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Parnassianism';
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
				echo "O Parnasianismo surgiu no século XIX após a publicação do <b>Parnasse Contemporain</b>, uma coleção de poemas em três volumes que reuniu poetas e escritores dos mais diversos estilos. A origem do nome vem do <b>Monte Parnaso</b>, na grécia, que nos tempos antigos foi um local de adoração ao deus Apolo (deus grego da música) e ás musas da poesia, por isso o Parnasiansimo tem grande afeição á mitologia grega. Foi um movimento literário contemporâneo ao <a href='schools/realism.php'>Realismo</a> e o <a href='schools/naturalism.php'>Naturalismo</a>, pois também faz parte do <b>Ciclo Antirromântico</b> e é contra a visão fantasiosa da realidade retratada pelo <a href='schools/romanticism.php'>Romantismo</a>, além de valorizar a ciência e apresentar apoio aos ideais <b>Positivistas.</b> <br />
				<br />
				Os escritores parnasianistas são objetivos nos temas em que tratam, sem muita subjetividade, e deixem de lado sua visão sobre os fatos, tornando a poesia <b>Impessoal</b>. Além disso, o Parnasianismo tem como principais características a <b>metalinguagem</b> e a importância dada ás palavras, pois ao contrário da maioria dos poemas de seu tempo, onde o tema principal das poesias eram sentimentos e situações cotidianas, aqui as palavras por si só são o objeto central da poesia. Os Parnasianos seguem regras estritas á respeito da norma culta da língua e da métrica, preferindo os Sonetos e os versos alexandrinos, e vão além, experimentando o uso de <b>rimas raras e incomuns</b>. Uma bela frase utilizada para resumir a estética Parnasiana é <b>A Arte pela arte.</b><br />
				<br />
				O Parnasianismo predominou principalmente na França e no Brasil, já em Portugal o movimento não ganhou muito destaque. No Brasil, <a href='users/BILAColavo.php'>Olavo Bilac</a>, <a href='users/OLIVEIRAalberto.php'>Alberto de Oliveira</a> e <a href='users/CORREIAraimundo.php'>Raimundo Correia</a> foram os maiores representantes do Parnasianismo, sendo reconhecidos como a <b>Tríade Parnasiana</b>. Outros escritores também flertaram com o Parnasianismo, como por exemplo <a href='users/MACHADOassis.php'>Machado de Assis</a>, onde grande parte de sua obra é Realista.<br />
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo "Parnasianism emerged in the 19th century after the publication of <b> Parnasse Contemporain </b>, a collection of poems in three volumes that brought together poets and writers of the most diverse styles. The origin of the name comes from <b> Monte Parnaso </b>, in Greece, which in ancient times was a place of worship for the god Apollo (Greek god of music) and the muses of poetry, so Parnasiansimo has great affection Greek mythology. It was a contemporary literary movement to <a href='schools/realism.php'> Realism </a> and <a href='schools/naturalism.php'> Naturalismo </a>, as it is also part of <b > Antirromantic Cycle </b> and is against the fanciful vision of reality portrayed by <a href='schools/romanticism.php'> Romanticism </a>, in addition to valuing science and presenting support for <b> Positivist ideals. </b> <br />
				<br />
				Parnassian writers are objective in the subjects they deal with, without much subjectivity, and put aside their view of the facts, making poetry <b> Impersonal </b>. In addition, Parnasianism has as main characteristics <b> metalanguage </b> and the importance given to words, because unlike most of the poems of its time, where the main theme of the poetry was feelings and everyday situations, here the words alone are the central object of poetry. Parnasians follow strict rules regarding the cultured norm of language and metrics, preferring Sonnets and Alexandrian verses, and go further, experimenting with the use of <b> rare and unusual rhymes </b>. A beautiful phrase used to summarize Parnasian aesthetics is <b> Art for art. </b> <br />
				<br />
				Parnasianism predominated mainly in France and Brazil, whereas in Portugal the movement did not gain much prominence. In Brazil, <a href='users/BILAColavo.php'> Olavo Bilac </a>, <a href='users/OLIVEIRAalberto.php'> Alberto de Oliveira </a> and <a href = 'users / CORREIAraimundo .php '> Raimundo Correia </a> were the greatest representatives of Parnasianism, being recognized as the <b> Parnasian Triad </b>. Other writers have also flirted with Parnasianism, such as <a href='users/MACHADOassis.php'> Machado de Assis </a>, where much of his work is Realistic. <br />
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo "El parnasianismo surgió en el siglo XIX después de la publicación de <b> Parnasse Contemporain </b>, una colección de poemas en tres volúmenes que reunió a poetas y escritores de los más diversos estilos. El origen del nombre proviene del <b> Monte Parnaso </b>, en Grecia, que en la antigüedad era un lugar de culto al dios Apolo (dios griego de la música) y a las musas de la poesía, por lo que Parnasiansimo tiene un gran afecto. Mitología griega. Fue un movimiento literario contemporáneo para <a href='schools/realism.php'> Realism </a> y <a href='schools/naturalism.php'> Naturalismo </a>, ya que también forma parte de <b > Antirromantic Cycle </b> y está en contra de la fantástica visión de la realidad retratada por <a href='schools/romanticism.php'> Romanticism </a>, además de valorar la ciencia y presentar apoyo a los <b> ideales positivistas. </b> <br />
				<br />
				Los escritores parnasianos son objetivos en los temas que tratan, sin mucha subjetividad, y dejan de lado su visión de los hechos, haciendo que la poesía sea <b> Impersonal </b>. Además, el parnasianismo tiene como características principales el <b> metalenguaje </b> y la importancia dada a las palabras, porque a diferencia de la mayoría de los poemas de su tiempo, donde el tema principal de la poesía eran los sentimientos y las situaciones cotidianas, aquí el Las palabras solas son el objeto central de la poesía. Los parnasianos siguen reglas estrictas con respecto a la norma culta del lenguaje y las métricas, prefieren los sonetos y los versos alejandrinos, y van más allá, experimentando con el uso de <b> rimas raras e inusuales </b>. Una hermosa frase utilizada para resumir la estética parnasiana es <b> Arte por arte. </b> <br />
				<br />
				El parnasianismo predominaba principalmente en Francia y Brasil, mientras que en Portugal el movimiento no ganó mucha prominencia. En Brasil, <a href='users/BILAColavo.php'> Olavo Bilac </a>, <a href='users/OLIVEIRAalberto.php'> Alberto de Oliveira </a> y <a href = 'users / CORREIAraimundo .php '> Raimundo Correia </a> fueron los máximos representantes del parnasianismo, siendo reconocidos como la <b> Triada Parnasiana </b>. Otros escritores también coquetearon con el parnasianismo, como <a href='users/MACHADOassis.php'> Machado de Assis </a>, donde gran parte de su trabajo es realista. <br />
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Parnasianistas";}
						if ($_COOKIE['lang'] == 'en') {echo "Parnassianism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Parnasianismo";}
					?>
					</h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('BILAColavo','CORREIAraimundo','OLIVEIRAalberto','DRUMMONDandrade');
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