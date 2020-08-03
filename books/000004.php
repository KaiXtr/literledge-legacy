<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000004'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']];
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '000004'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<a name='goto1'></a>
						<h1> Resenha </h1>
						Clara dos Anjos é um livro pertencente do Pré-Modernismo, apesar de ser escrito por Lima Barreto, o livro não pôde ser publicado pelo mesmo em decorrência 
						de seu falecimento em 1922. A obra póstuma foi publicada em pequenos capítulos na revista Souza Cruz em 1923, e só se tornou um livro 20 anos depois.
						O livro tem como tema principal o racismo, o preconceito e a posição das mulheres na época, mas também aborda a miséria, a pobreza, as injustiças e os 
						vários problemas que assolavam os subúrbios e as favelas do Rio de Janeiro, o espaço da narrativa. A obra também registra acontecimentos históricos como a 
						epidemia da febre amarela, a revolta da vacina e a inauguração do bondinho do pão de açúcar.
						<hr>
						<a name='goto2'></a>
						<h1> Personagens </h1>
						<ul>
						<li><b>Clara dos Anjos: </b>uma jovem ingênua, pobre, frágil, negra e filha única superprotegida pelos pais.</li>
						<li><b>Joaquim dos Anjos: </b>marido de Engrácia e pai de Clara dos Anjos, é um humilhe carteiro.</li>
						<li><b>Engrácia: </b>mãe de Clara, é uma dona de casa muito dedicada a filha e a rotina familiar.</li>
						<li><b>Cassi Jones de Azevedo: </b>antagonista da história, é um homem branco na faixa dos 30 anos.</li>
						<li><b>Antônio da Silva Marramaque: </b>deficiente, grande amigo de Joaquim e padrinho de Clara.</li>
						<li><b>Salustiana Baeta de Azevedo: </b>mãe de Cassi Jones, é uma mulher bastante racista e preconceituosa.</li>
						</ul>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'></a>
						<h1> Review </h1>
						Clara dos Anjos is a book belonging to Pre-Modernism, despite being written by Lima Barreto, the book could not be published by him due to
						of his death in 1922. The posthumous work was published in short chapters in Souza Cruz magazine in 1923, and it only became a book 20 years later.
						The main theme of the book is racism, prejudice and the position of women at the time, but it also addresses misery, poverty, injustices and
						several problems that plagued the suburbs and favelas of Rio de Janeiro, the space of the narrative. The work also records historical events such as the
						yellow fever epidemic, the vaccine revolt and the inauguration of the Sugar Loaf cable car.
						<hr>
						<a name='goto2'> </a>
						<h1> Characters </h1>
						<ul>
						<li><b> Clara dos Anjos: </b>a naive, poor, fragile, black girl and only daughter overprotected by her parents. </li>
						<li><b> Joaquim dos Anjos: </b>husband of Engrácia and father of Clara dos Anjos, he is a humble postman. </li>
						<li><b> Engrácia: </b>Clara's mother, is a housewife very dedicated to her daughter and her family routine. </li>
						<li><b> Cassi Jones de Azevedo: </b>antagonist of history, he is a white man in his 30s. </li>
						<li><b> Antônio da Silva Marramaque: </b>disabled, great friend of Joaquim and godfather of Clara. </li>
						<li><b> Salustiana Baeta de Azevedo: </b>mother of Cassi Jones, she is a very racist and prejudiced woman. </li>
						</ul>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'></a>
						<h1> Revisión </h1>
						Clara dos Anjos es un libro perteneciente al premodernismo, a pesar de haber sido escrito por Lima Barreto, el libro no pudo ser publicado por él debido a
						de su muerte en 1922. La obra póstuma se publicó en capítulos cortos en la revista Souza Cruz en 1923, y solo se convirtió en un libro 20 años después.
						El tema principal del libro es el racismo, los prejuicios y la posición de las mujeres en ese momento, pero también aborda la miseria, la pobreza, las 
						injusticias y Varios problemas que plagaron los suburbios y favelas de Río de Janeiro, el espacio de la narrativa. El trabajo también registra eventos 
						históricos como el epidemia de fiebre amarilla, la revuelta de las vacunas y la inauguración del teleférico de Sugar Loaf.
						<hr>
						<a name='goto2'> </a>
						<h1> Personajes </h1>
						<ul>
						<li><b> Clara dos Anjos: </b>una ingenua, pobre, frágil, negra y única hija sobreprotegida por sus padres. </li>
						<li><b> Joaquim dos Anjos: </b>esposo de Engrácia y padre de Clara dos Anjos, es un humilde cartero. </li>
						<li><b> Engrácia: </b>la madre de Clara, es una ama de casa muy dedicada a su hija y su rutina familiar. </li>
						<li><b> Cassi Jones de Azevedo: </b>antagonista de la historia, es un hombre blanco de unos 30 años. </li>
						<li><b> Antônio da Silva Marramaque: </b>discapacitado, gran amigo de Joaquim y padrino de Clara. </li>
						<li><b> Salustiana Baeta de Azevedo: </b>madre de Cassi Jones, es una mujer muy racista y prejuiciosa. </li>
						</ul>
						<hr>";
					}
				?>
			</div>
			<?php $book = '000004'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'BARRETOlima'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>