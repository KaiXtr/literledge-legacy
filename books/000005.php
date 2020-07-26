<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000005'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']].' - ';
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '000005'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<a name='goto1'></a>
						<h1> Resenha </h1>
						O livro retrata a urbanização da cidade do Rio de Janeiro no século XIX, quando a cidade era a capital do Brasil. Influenciado por Émile Zola, Aluísio de 
						Azevedo conta a história sobre um Cortiço segundo uma crítica científica á sociedade, comparando o Cortiço á uma floresta e seus animais, lutando pela 
						sobrevivência. <br />
						<br />
						A obra chegou a ter um prestígio tão grande quanto as obras de Machado de Assis pela repercussão que o Naturalismo ganhava na Europa, uma corrente literária 
						muito fundamentada na Eugenia, usando a ciência para justificar o preconceito e a discriminação direcionada á outras etnias, essas influências evidenciam as tendências racistas do livro. Apesar disso, a obra possui muitas críticas sociais ao capitalismo emergente na época e ás desigualdades sociais.
						<hr>
						<a name='goto2'></a>
						<h1> Personagens </h1>
						<ul>
						<li><b>João Romão: </b>o vendedor que junta suas economias para construir o cortiço.</li>
						<li><b>Miranda: </b>rival de João Romão, um português rico de 35 anos, pertencente á elite local.</li>
						<li><b>Estela: </b>mulher de Miranda há treze anos.</li>
						<li><b>Bertoleza: </b>negra ex-escrava, amiga e companheira de João Romão.</li>
						<li><b>Firmo: </b>um jovem malandro que anima a vizinhança do cortiço.</li>
						<li><b>Rita Baiana: </b>lavadeira de profissão, atrai vários homens por sua beleza.</li>
						<li><b>Piedade e Jerônimo: </b>um casal de imigrantes portugueses que aos poucos começam a se adaptar aos costumes brasileiros.</li>
						</ul>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'></a>
						<h1> Review </h1>
						The book portrays the urbanization of the city of Rio de Janeiro in the 19th century, when the city was the capital of Brazil. Influenced by Émile Zola, 
						Aluísio de Azevedo tells the story about a Cortiço according to a scientific critique of society, comparing the Cortiço to a forest and its animals, 
						fighting for survival. <br />
						<br />
						The work came to have a prestige as great as the works of Machado de Assis due to the repercussion that Naturalism gained in Europe, a literary current
						very grounded in Eugenia, using science to justify prejudice and discrimination towards other ethnicities, these influences highlight the book's racist 
						tendencies. Despite this, the work has many social criticisms of capitalism emerging at the time and social inequalities.
						<hr>
						<a name='goto2'> </a>
						<h1> Characters </h1>
						<ul>
						<li><b> João Romão: </b>the salesman who gathers his savings to build the tenement. </li>
						<li><b> Miranda: </b>rival to João Romão, a 35-year-old wealthy Portuguese man belonging to the local elite. </li>
						<li><b> Estela: </b>Miranda's wife for thirteen years. </li>
						<li><b> Bertoleza: </b>black ex-slave, friend and companion of João Romão. </li>
						<li><b> Firmo: </b>a young rascal who animates the neighborhood of the tenement. </li>
						<li><b> Rita Baiana: </b>washerwoman by profession, she attracts several men for her beauty. </li>
						<li><b> Piedade and Jerônimo: </b>a couple of Portuguese immigrants who are gradually beginning to adapt to Brazilian customs. </li>
						</ul>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'></a>
						<h1> Revisión </h1>
						El libro retrata la urbanización de la ciudad de Río de Janeiro en el siglo XIX, cuando la ciudad era la capital de Brasil. Influenciado por Émile Zola, 
						Aluísio de Azevedo cuenta la historia de un Cortiço según una crítica científica de la sociedad, comparando el Cortiço con un bosque y sus animales, 
						luchando por supervivencia. <br />
						<br />
						La obra llegó a tener un prestigio tan grande como las obras de Machado de Assis debido a la repercusión que ganó el naturalismo en Europa, una corriente 
						literaria.
						Muy arraigado en Eugenia, utilizando la ciencia para justificar los prejuicios y la discriminación hacia otras etnias, estas influencias resaltan las 
						tendencias racistas del libro. A pesar de esto, el trabajo tiene muchas críticas sociales del capitalismo emergente en ese momento y las desigualdades 
						sociales.
						<hr>
						<a name='goto2'> </a>
						<h1> Personajes </h1>
						<ul>
						<li><b> João Romão: </b>el vendedor que reúne sus ahorros para construir la vivienda. </li>
						<li><b> Miranda: </b>rival de João Romão, un hombre portugués rico de 35 años perteneciente a la élite local. </li>
						<li><b> Estela: </b>la esposa de Miranda durante trece años. </li>
						<li><b> Bertoleza: </b>negro ex esclavo, amigo y compañero de João Romão. </li>
						<li><b> Firmo: </b>un joven bribón que anima el vecindario de la vivienda. </li>
						<li><b> Rita Baiana: </b>lavandera de profesión, atrae a varios hombres por su belleza. </li>
						<li><b> Piedade y Jerônimo: </b>una pareja de inmigrantes portugueses que gradualmente comienzan a adaptarse a las costumbres brasileñas. </li>
						</ul>
						<hr>";
					}
				?>
			</div>
			<?php $book = '000005'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'AZEVEDOaluisio'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>