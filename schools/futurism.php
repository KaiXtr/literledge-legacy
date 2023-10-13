<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Futurism';
			$v = $ltslst[$lts];
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
				echo "O Futurismo surgiu na Itália em 20 de fevereiro de 1909 com a publicação do Manifesto Futurista no jornal francês <b>Le Figaro</b>, pelo poeta italiano Felippo Tommaso Marinetti. Como o próprio nome dá a entender, o movimento futurista se caracterizou principalmente pela exaltação dos avanços tecnológicos da idade contemporânea e a rejeição á arte e a cultura do passado. O Futurismo não só buscava engrandecer a industrialização e a modernização da sociedade, como também buscava valorizar a violência e a guerra, a rapidez e a velocidade da informação, a propaganda como meio de comunicação e o uso de onomatopeias, assim sendo a <b>velocidade</b> a principal característica do Futurismo. <br />
				<br />
				Por ter enormes tendências nacionalistas e armamentistas, muitos artistas e apoiadores do Futurismo encontraram na guerra, e principalmente no <b>Fascismo</b>, uma concretização do sonho Futurista, principalmente na Itália. Já na Rússia, o Futurismo recebeu grande influência do socialismo.<br />
				<br />
				Na literatura, o Futurismo é caracterizado por frases fragmentadas, versos livres e onomatopeias, tudo para expressar a idéia de velocidade. Na pintura futurista, os artistas se preocupam mais com o dinamismo e a ação ao invés da retratação dos objetos propriamente ditos, utilizando cores vibrantes, formas geométricas, colagens e as chamadas <b>Linhas de força</b>. <br />
				<br />
				O Futurismo exerceu forte influência na arte contemporânea, inspirando vários artistas e o surgimento de outros movimentos artísticos, como o <b>Surrealismo, Cubismo e Dadaísmo.</b>No Brasil, o Futurismo inspirou artistas Modernistas a deixar de lado o passado e as influências européias para começar a enxergar no futuro uma construção de uma arte totalmente brasileira. O Futurismo só chegou ao seu fim com o início da Segunda Guerra Mundial na década de 30.
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo "Futurism appeared in Italy on February 20, 1909 with the publication of the Futurist Manifesto in the French newspaper <b> Le Figaro </b>, by the Italian poet Felippo Tommaso Marinetti. As its name implies, the futurist movement was characterized mainly by the exaltation of technological advances of the contemporary age and the rejection of the art and culture of the past. Futurism not only sought to enhance the industrialization and modernization of society, but also sought to value violence and war, the speed and speed of information, advertising as a means of communication and the use of onomatopoeia, thus <b> speed </b> the main feature of Futurism. <br />
				<br />
				Due to its enormous nationalist and armamentist tendencies, many artists and supporters of Futurism found in the war, and especially in <b> Fascism </b>, a realization of the Futurist dream, mainly in Italy. In Russia, Futurism received great influence from socialism. <br />
				<br />
				In literature, Futurism is characterized by fragmented phrases, free verses and onomatopoeia, all to express the idea of ​​speed. In futuristic painting, artists are more concerned with dynamism and action instead of portraying the objects themselves, using vibrant colors, geometric shapes, collages and the so-called <b> lines of force </b>. <br />
				<br />
				Futurism had a strong influence on contemporary art, inspiring several artists and the emergence of other artistic movements, such as <b> Surrealism, Cubism and Dadaism. </b> In Brazil, Futurism inspired Modernist artists to put aside the past and European influences to begin to see in the future a construction of a totally Brazilian art. Futurism only came to an end with the start of World War II in the 1930s.
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo "El futurismo apareció en Italia el 20 de febrero de 1909 con la publicación del Manifiesto futurista en el periódico francés <b> Le Figaro </b>, del poeta italiano Felippo Tommaso Marinetti. Como su nombre lo indica, el movimiento futurista se caracterizó principalmente por la exaltación de los avances tecnológicos de la época contemporánea y el rechazo del arte y la cultura del pasado. El futurismo no solo buscó mejorar la industrialización y modernización de la sociedad, sino que también buscó valorar la violencia y la guerra, la velocidad y la velocidad de la información, la publicidad como medio de comunicación y el uso de la onomatopeya, por lo tanto <b> velocidad </b>, la característica principal del futurismo. <br />
				<br />
				Debido a sus enormes tendencias nacionalistas y armamentistas, muchos artistas y simpatizantes del futurismo encontraron en la guerra, y especialmente en el <b> fascismo </b>, una realización del sueño futurista, principalmente en Italia. En Rusia, el futurismo recibió una gran influencia del socialismo. <br />
				<br />
				En la literatura, el futurismo se caracteriza por frases fragmentadas, versos libres y onomatopeyas, todo para expresar la idea de la velocidad. En la pintura futurista, los artistas están más preocupados por el dinamismo y la acción en lugar de retratar los objetos en sí mismos, utilizando colores vibrantes, formas geométricas, collages y las llamadas <b> líneas de fuerza </b>. <br />
				<br />
				El futurismo tuvo una fuerte influencia en el arte contemporáneo, inspirando a varios artistas y la aparición de otros movimientos artísticos, como el <b> surrealismo, el cubismo y el dadaísmo. </b> En Brasil, el futurismo inspiró a los artistas modernistas a dejar a un lado el pasado y Influencias europeas para comenzar a ver en el futuro una construcción de un arte totalmente brasileño. El futurismo solo llegó a su fin con el comienzo de la Segunda Guerra Mundial en la década de 1930.
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Futuristas";}
						if ($_COOKIE['lang'] == 'en') {echo "Futurism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Futurismo";}
					?>
					</h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('PESSOAfernando','OSWALDandrade');
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