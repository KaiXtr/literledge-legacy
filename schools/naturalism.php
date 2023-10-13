<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Naturalism';
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
				echo "O Naturalismo surgiu na segunda metade do século XIX e durou até o século XX, e se manifestou na literatura, teatro e artes plásticas. <br />
				Foi fundada pelo escritor francês <a href='users/ZOLAemile.php'>Émile Zola</a>, e veio com uma premissa parecida com a do Realismo, pois ambas são parte do <b>Ciclo Antirromântico</b>, ou seja, são contra á visão fantasiosa da realidade feita pelo <a href='schools/romanticism.php'>Romantismo</a> e buscam retratar a vida como ela realmente é vivida, denunciando vários problemas sociais no processo. As principais temáticas abordadas na literatura Naturalista são: política, sexualidade, criminalidade, violência, tradicionalismo, miséria, pobreza etc.<br />
				<br />
				Pode se dizer que o Naturalismo possui tendências mais radicais, como o próprio nome dá a entender, o Naturalismo foi baseado nas descobertas científicas do naturalista Charles Darwin, o cientista que propôs a teoria do Evolucionismo, e nos ideais de Evolucionismo social, Racismo Científico e Eugenia. Assim, os indivíduos e personagens da literatura Naturalista são sempre descritos como seres vivos inseridos num ambiente hostil e perigoso lutando pela sobrevivência, como numa experiência de laboratório, utilizando-se desse método para estudar os problemas que assolam a sociedade. Por conta disso, o <b>Determinismo</b> é peça-chave do Naturalismo, pois o indivíduo é visto como um sujeito sem controle sobre sua vida, quem realmente cria o destino dos humanos é a influência do meio, do tempo e até da raça.<br />
				<br />
				Na França, a obra que iniciou o Naturalismo foi <b>Madame Bovary</b>, por <a href='users/FLAUBERTgustave.php'>Gustave Flaubert</a>. Em Portugal, a obra foi <b>O Crime do Padre Amaro</b>, por <a href='users/QUEIROZeca.php'>Eça de Queirós</a>, e no Brasil, o marco do Naturalismo foi <a href='books/00001U.php'>O Mulato, de Aluísio de Azevedo.</a> No Brasil, um tema muito discutido era a questão escravista, pois o contexto era de muita pressão da Inglaterra para abolir a escravatura no país, o que veio a se concretizar em 1888.
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo "Naturalism emerged in the second half of the 19th century and lasted until the 20th century, and was manifested in literature, theater and fine arts. <br />
				It was founded by the French writer <a href='users/ZOLAemile.php'> Émile Zola </a>, and came with a premise similar to that of Realism, as both are part of the <b> Antirromantic Cycle </b>, that is, they are against the fanciful vision of reality made by <a href='schools/romanticism.php'> Romanticism </a> and seek to portray life as it really is lived, denouncing various social problems in the process. The main themes addressed in the Naturalist literature are: politics, sexuality, criminality, violence, traditionalism, misery, poverty etc. <br />
				<br />
				It can be said that Naturalism has more radical tendencies, as its name implies, Naturalism was based on the scientific discoveries of naturalist Charles Darwin, the scientist who proposed the theory of Evolutionism, and on the ideals of social Evolutionism, Scientific Racism and Eugenics. Thus, individuals and characters in Naturalist literature are always described as living beings inserted in a hostile and dangerous environment fighting for survival, as in a laboratory experiment, using this method to study the problems that plague society. Because of this, <b> Determinism </b> is a key part of Naturalism, as the individual is seen as a subject without control over his life, who really creates the destiny of humans is the influence of environment, time and even the race. <br />
				<br />
				In France, the work that started Naturalism was <b> Madame Bovary </b>, by <a href='users/FLAUBERTgustave.php'> Gustave Flaubert </a>. In Portugal, the work was <b> O Crime do Padre Amaro </b>, by <a href='users/QUEIROZeca.php'> Eça de Queirós </a>, and in Brazil, the landmark of Naturalism was < a href = 'books / 00001U.php'> O Mulato, by Aluísio de Azevedo. </a> In Brazil, a much discussed topic was the slavery issue, as the context was of great pressure from England to abolish slavery in the country , which came to fruition in 1888.
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo "El naturalismo surgió en la segunda mitad del siglo XIX y duró hasta el siglo XX, y se manifestó en la literatura, el teatro y las bellas artes. <br />
				Fue fundada por el escritor francés <a href='users/ZOLAemile.php'> Émile Zola </a>, y vino con una premisa similar a la del realismo, ya que ambos forman parte del <b> Ciclo Antirromántico </b>, es decir, están en contra de la fantástica visión de la realidad hecha por <a href='schools/romanticism.php'> Romanticism </a> y buscan retratar la vida como realmente se vive, denunciando varios problemas sociales en el proceso. Los principales temas abordados en la literatura naturalista son: política, sexualidad, criminalidad, violencia, tradicionalismo, miseria, pobreza, etc. <br />
				<br />
				Se puede decir que el naturalismo tiene tendencias más radicales, como su nombre lo indica, el naturalismo se basó en los descubrimientos científicos del naturalista Charles Darwin, el científico que propuso la teoría del evolucionismo, y en los ideales del evolucionismo social, el racismo científico y Eugenesia. Por lo tanto, los individuos y los personajes de la literatura naturalista siempre se describen como seres vivos insertados en un ambiente hostil y peligroso que lucha por la supervivencia, como en un experimento de laboratorio, utilizando este método para estudiar los problemas que afectan a la sociedad. Debido a esto, el <b> determinismo </b> es una parte clave del naturalismo, ya que el individuo es visto como un sujeto sin control sobre su vida, quien realmente crea el destino de los humanos es la influencia del medio ambiente, el tiempo y incluso la carrera. <br />
				<br />
				En Francia, el trabajo que inició el naturalismo fue <b> Madame Bovary </b>, por <a href='users/FLAUBERTgustave.php'> Gustave Flaubert </a>. En Portugal, el trabajo fue <b> O Crime do Padre Amaro </b>, por <a href='users/QUEIROZeca.php'> Eça de Queirós </a>, y en Brasil, el hito del naturalismo fue < a href = 'books / 00001U.php'> O Mulato, por Aluísio de Azevedo. </a> En Brasil, un tema muy discutido fue el tema de la esclavitud, ya que el contexto fue una gran presión de Inglaterra para abolir la esclavitud en el país , que llegó a buen término en 1888.
				<br />";
			}
		?>
		</div>
		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<h1>
					<?php
						if ($_COOKIE['lang'] == 'pt') {echo "Escritores Naturalistas";}
						if ($_COOKIE['lang'] == 'en') {echo "Naturalism Writers";}
						if ($_COOKIE['lang'] == 'es') {echo "Escritores del Naturalismo";}
					?>
					</h1>
				</div>
				<div class='displaybooks'>
					<?php
						require '../account/mysql_connect.php';
						if ($notcon == null) {
							$a = array('ZOLAemile','FLAUBERTgustave','AZEVEDOaluisio','CUNHAeuclides','QUEIROZeca');
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