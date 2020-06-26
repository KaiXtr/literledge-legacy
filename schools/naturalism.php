<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Naturalism';
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
			O Naturalismo surgiu na segunda metade do século XIX e durou até o século XX, e se manifestou na literatura, teatro e artes plásticas. <br />
			Foi fundada pelo escritor francês <b>Émile Zola</b>, e veio com uma premissa parecida com a do Realismo, pois ambas são parte do <b>Ciclo Antirromântico</b>, ou seja, são contra á visão fantasiosa da realidade feita pelo <a href='schools/romanticism.php'>Romantismo</a> e buscam retratar a vida como ela realmente é vivida, denunciando vários problemas sociais no processo. As principais temáticas abordadas na literatura Naturalista são: política, sexualidade, criminalidade, violência, tradicionalismo, miséria, pobreza etc.<br />
			<br />
			Pode se dizer que o Naturalismo possui tendências mais radicais, como o próprio nome dá a entender, o Naturalismo foi baseado nas descobertas científicas do naturalista Charles Darwin, o cientista que propôs a teoria do Evolucionismo, e nos ideais de Evolucionismo social, Racismo Científico e Eugenia. Assim, os indivíduos e personagens da literatura Naturalista são sempre descritos como seres vivos inseridos num ambiente hostil e perigoso lutando pela sobrevivência, como numa experiência de laboratório, utilizando-se desse método para estudar os problemas que assolam a sociedade. Por conta disso, o <b>Determinismo</b> é peça-chave do Naturalismo, pois o indivíduo é visto como um sujeito sem controle sobre sua vida, quem realmente cria o destino dos humanos é a influência do meio, do tempo e até da raça.<br />
			<br />
			Na França, a obra que iniciou o Naturalismo foi <b>Madame Bovary</b>, por Gustave Flaubet. Em Portugal, a obra foi <b>O Crime do Padre Amaro</b>, por Eça de Queirós, e no Brasil, o marco do Naturalismo foi <a href='books/00001U.php'>O Mulato, de Aluísio de Azevedo.</a> No Brasil, um tema muito discutido era a questão escravista, pois o contexto era de muita pressão da Inglaterra para abolir a escravatura no país, o que veio a se concretizar em 1888.
			<br />
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1> Escritores Naturalistas </h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('ZOLAemile','AZEVEDOaluisio','CUNHAeuclides');
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