<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Futurism';
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
			O Futurismo surgiu na Itália em 20 de fevereiro de 1909 com a publicação do Manifesto Futurista no jornal francês <b>Le Figaro</b>, pelo poeta italiano Felippo Tommaso Marinetti. Como o próprio nome dá a entender, o movimento futurista se caracterizou principalmente pela exaltação dos avanços tecnológicos da idade contemporânea e a rejeição á arte e a cultura do passado. O Futurismo não só buscava engrandecer a industrialização e a modernização da sociedade, como também buscava valorizar a violência e a guerra, a rapidez e a velocidade da informação, a propaganda como meio de comunicação e o uso de onomatopeias, assim sendo a <b>velocidade</b> a principal característica do Futurismo. <br />
			<br />
			Por ter enormes tendências nacionalistas e armamentistas, muitos artistas e apoiadores do Futurismo encontraram na guerra, e principalmente no <b>Fascismo</b>, uma concretização do sonho Futurista, principalmente na Itália. Já na Rússia, o Futurismo recebeu grande influência do socialismo.<br />
			<br />
			Na literatura, o Futurismo é caracterizado por frases fragmentasas, versos livres e onomatopeias, tudo para expressar a idéia de velocidade. Na pintura futurista, os artistas se preocupam mais com o dinamismo e a ação ao invés da retratação dos objetos propriamente ditos, utilizando cores vibrantes, formas geométricas, colagens e as chamadas <b>Linhas de força</b>. <br />
			<br />
			O Futurismo exerceu forte influência na arte contemporânea, inspirando vários artistas e o surgimento de outros movimentos artísticos, como o <b>Surrealismo, Cubismo e Dadaísmo.</b>No Brasil, o Futurismo inspirou artistas Modernistas a deixar de lado o passado e as influências européias para começar a enxergar no futuro uma construção de uma arte totalmente brasileira. O Futurismo só chegou ao seu fim com o início da Segunda Guerra Mundial na década de 30.
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Futuristas </h1>
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