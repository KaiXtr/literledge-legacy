<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Troubadorism';
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
				echo "O Trovadorismo foi o primeiro movimento artístico a surgir na poesia europeia e vigorou durante os séculos da baixa idade média, principalmente nos séculos XI e XII. Nessa época muitas nações ainda estavam se formando, e vários idiomas românicos começavam a surgiram a partir do latim. O nome vem dos chamados Trovadores, que eram os poetas e músicos que se apresentavam nos feudos. A poesia característica do Trovadorismo é um híbrido de poesia e música, isso se deve principalmente pelo acesso restrito á educação da maior parte da população, como muitos eram analfabetos, incluindo muitos dos próprios trovadores, a única maneira de se passar a poesia era por método oral com a ajuda da música, eram as chamadas <b>Cantigas Trovadorescas</b>, geralmente acompanhadas de intrumentos musicais como a lira, a flauta e o bandolim. Graças é estruturação musical das cantigas, cheias de repetições e paralelismos, a memorização das mesmas foi facilitada.<br />
				<br />
				Apesar de ter nascido na classe camponesa, logo a poesia Trovadoresca se popularizou entre os feudos, e os nobres também passaram a consumir esse tipo de arte, assim os trovadores se dividiram entre o trovador <b>segrel</b> ou profissional, o cavaleiro que cantava suas cantigas para a corte por dinheiro, e o trovador <b>jogral</b> ou popular, que canta para os camponeses e trabalhadores. Eram chamados de menestrel os músicos trovadores e de baladeiras e soldadeiras as dançarinas que acompanhavam as cantigas. O Trovadorismo se espalhou pela Europa pois os Trovadores viajavam pelo continente espalhando sua arte e propagando o amor do cavaleiro apaixonado. <br />
				<br />
				O amor é um tema essencial para as cantigas trovadorescas, em especial a dor do amor, essas são as <b>cantigas líricas</b>, divididas entre cantigas de amor e cantigas de amigo. As cantigas de amor são cantadas pelo homem apaixonado, enquanto as cantigas de amor são atuações de mulheres falando aos seus maridos. Além do amor, a sátira e o humor também são temas recorrentes no Trovadorismo, são as <b>cantigas satíricas</b>, divididas em cantigas de escárnio e maldizer, feitas especialmente para ridicularizar. Enquanto o alvo das cantigas de escárnio são referencidos indiretamente, sem a menção de nomes, nas cantigas de maldizer, nomes são mencionados e o alvo da cantiga é ridicularizado diretamente. Como muitos dos trovadores não sabiam ler nem escrever, grande parte dos poemas trovadores que conhecemos não foram escritos por seus autores, mas foram registrados nos chamados <b>Cancioneiros</b>, manuscritos que compilam cantigas trovadorescas e ás vezes podem ser acompanhados com ilustrações e notações musicais.
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo "Troubadorism was the first artistic movement to appear in European poetry and was in force during the centuries of the low middle age, mainly in the 11th and 12th centuries. At that time many nations were still being formed, and several Romance languages ​​began to emerge from Latin. The name comes from the so-called Troubadours, who were the poets and musicians who performed at the fiefdoms. The characteristic poetry of Trovadorismo is a hybrid of poetry and music, this is mainly due to the restricted access to education of the majority of the population, as many were illiterate, including many of the troubadours themselves, the only way to pass poetry was by method oral with the help of music, were the so-called <b> Cantigas Trovadorescas </b>, usually accompanied by musical instruments such as the lyre, the flute and the mandolin. Thanks to the musical structuring of the songs, full of repetitions and parallels, their memorization has been facilitated. <br />
				<br />
				Despite being born in the peasant class, Trovadoresca poetry soon became popular among feuds, and nobles also began to consume this type of art, so troubadours were divided between the <b> secrel </b> or professional troubadour, the knight who sang his songs for the court for money, and the troubadour <b> jogral </b> or popular, who sings for peasants and workers. The minstrels and miners were the minstrels and the dancers who accompanied the songs were called minstrels. Troubadours spread throughout Europe as Troubadours traveled the continent spreading their art and spreading the love of the passionate knight. <br />
				<br />
				Love is an essential theme for troubadour songs, especially the pain of love, these are <b> lyrical songs </b>, divided between love songs and friend songs. Love songs are sung by the man in love, while love songs are performances by women talking to their husbands. In addition to love, satire and humor are also recurring themes in Troubadour, they are <b> satirical songs </b>, divided into songs of scorn and curse, made especially to ridicule. While the target of the mockery songs are referenced indirectly, without the mention of names, in the curse songs, names are mentioned and the target of the song is directly ridiculed. As many of the troubadours did not know how to read or write, most of the troubadour poems that we know were not written by their authors, but were recorded in the so-called <b> Cancioneiros </b>, manuscripts that compile troubadour songs and can sometimes be accompanied with illustrations and musical notations.
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo "El trovadorismo fue el primer movimiento artístico que apareció en la poesía europea y estuvo en vigor durante los siglos de la baja edad media, principalmente en los siglos XI y XII. En ese momento todavía se estaban formando muchas naciones, y varias lenguas romances comenzaron a surgir del latín. El nombre proviene de los llamados trovadores, que fueron los poetas y músicos que actuaron en los feudos. La poesía característica del trovadorismo es un híbrido de poesía y música, esto se debe principalmente al acceso restringido a la educación de la mayoría de la población, ya que muchos eran analfabetos, incluidos muchos de los trovadores, la única forma de transmitir poesía era por método Orales con la ayuda de la música, fueron las llamadas <b> Cantigas Trovadorescas </b>, generalmente acompañadas de instrumentos musicales como la lira, la flauta y la mandolina. Gracias a la estructuración musical de las canciones, llena de repeticiones y paralelos, se ha facilitado su memorización. <br />
				<br />
				A pesar de haber nacido en la clase campesina, la poesía trovadoresca pronto se hizo popular entre los feudos, y los nobles también comenzaron a consumir este tipo de arte, por lo que los trovadores se dividieron entre el <b> secrel </b> o trovador profesional, el caballero que cantaba sus canciones para la corte por dinero, y el trovador <b> jogral </b> o popular, que canta para campesinos y trabajadores. Los juglares y mineros eran los juglares y los bailarines que acompañaban las canciones se llamaban juglares. Los trovadores se extendieron por toda Europa a medida que los trovadores viajaban por el continente difundiendo su arte y difundiendo el amor del apasionado caballero. <br />
				<br />
				El amor es un tema esencial para las canciones de trovadores, especialmente el dolor del amor, estas son <b> canciones líricas </b>, divididas entre canciones de amor y canciones de amigos. Las canciones de amor son cantadas por el hombre enamorado, mientras que las canciones de amor son interpretaciones de mujeres que hablan con sus maridos. Además del amor, la sátira y el humor también son temas recurrentes en Troubadour, son <b> canciones satíricas </b>, divididas en canciones de desprecio y maldición, hechas especialmente para ridiculizar. Mientras que el objetivo de las canciones de burla se hace referencia indirectamente, sin la mención de nombres, en las canciones de maldición, se mencionan los nombres y el objetivo de la canción se ridiculiza directamente. Como muchos de los trovadores no sabían leer ni escribir, la mayoría de los poemas de trovadores que conocemos no fueron escritos por sus autores, sino que fueron grabados en los llamados <b> Cancioneiros </b>, manuscritos que compilan canciones de trovadores y a veces pueden acompañarse con ilustraciones y anotaciones musicales.
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Trovadores";}
						if ($_COOKIE['lang'] == 'en') {echo "Troubadorism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Troubadorism";}
					?>
					</h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('CAMOESluis');
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