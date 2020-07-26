<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000001'");
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
			<?php $book = '000001'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<a name='goto1'></a>
						<h1> Resenha </h1>
						O livro é um marco do pré-modernismo brasileiro, foi originalmente publicado em edições do jornal do commercio em 1911, e só foi
						publicado como livro em 1915. Escrito por Lima Barreto durante o período da República Oliguárquica, no início da República no Brasil,
						a obra satiriza e ironiza o nacionalismo, além de expor problemas políticos e críticas sociais á respeito do país. <br />
						<br />
						Apesar de exacerbadamente nacionalista, Policarpo é um homem bom mas muito ingênuo, e ele é utilizado na obra para explicar os contras
						em não possuir uma visão crítica e não enxergar os defeitos de sua pátria. O personagem é considerado por muitos Quixotesco,
						em referência á <a href='http://localhost/literledge/books/00000O.php'><b>Dom Quixote de La Mancha</b></a>, um personagem incompreendido lutando contra 
						inimgos imaginários e gastando seus esforços em vão. Ao mesmo tempo que Policarpo é um personagem cômico, também é um personagem para se sentir pena, pois é 
						graças à sua ingenuidade e bondade que ele sempre se dá mal. <br />
						<br />
						Mesmo sendo uma ficção, vários fatos reais são registrados no livro, como a Guerra do Paraguai, a Revolta da Armada, a Revolução Federalista e a figura do 
						presidente Floriano Peixoto, que realmente existiu. O narrador em terceira pessoa não expõe suas opiniões sobre os fatos, sempre deixando para o leitor o 
						que ele deve pensar sobre tal cena. Como uma obra pré-modernista, ela foge de alguns padrões impostos na literatuta até então, Lima Barreto optar por 
						escrever numa linguagem mais coloquial e acessível, indo contra uma linguagem mais acadêmica. Além disso o autor se utiliza do livro para denunciar
						vários problemas sociais e o enredo é baseado em fatos cotidianos e históricos, se afastando da fantasia do romantismo.
						<hr>
						<a name='goto2'></a>
						<h1> Personagens </h1>
						<ul>
						<li><b>Policarpo Quaresma: </b>O protagonista patriota, honesto, bondoso e apaixonado por livros.</li>
						<li><b>Adelaide: </b>irmã de Quaresma que morava com ele.</li>
						<li><b>Ricardo Coração dos Outros: </b>professor de violão de Quaresma.</li>
						<li><b>Olga: </b>afilhada de Policarpo.</li>
						<li><b>Vicente Coleoni: </b>pai de Olga.</li>
						<li><b>Amando Borges: </b>marido de Olga.</li>
						<li><b>Anastácio: </b>caseiro de Quaresma.</li>
						<li><b>Tenente Antonino Dutra: </b>escrivão e funcionário da prefeitura de Curuzu.</li>
						<li><b>Doutor Campos: </b>presidente da Câmara de Curuzu. </li>
						<li><b>General Albernaz: </b>vizinho de Quaresma</li>
						<li><b>Marechal Floriano: </b>governante do país. Realmente existiu e foi presidente do Brasil de 1891 a 1894.</li>
						</ul>
						<hr>
						<a name='goto3'></a>
						<h1> Adaptações </h1>
						<a href='https://m.imdb.com/title/tt0142771/'> Policarpo Quaresma, Herói do Brasil (1997) - Paulo Thiago </a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'></a>
						<h1> Review </h1>
						The book is a landmark of Brazilian pre-modernism, it was originally published in editions of the newspaper do commercio in 1911, and was only
						published as a book in 1915. Written by Lima Barreto during the period of the Oliguárquica Republic, at the beginning of the Republic in Brazil,
						the work satirizes and ironic nationalism, in addition to exposing political problems and social criticisms about the country. <br />
						<br />
						Despite being overly nationalistic, Policarpo is a good man but very naive, and he is used in the work to explain the cons
						in not having a critical view and not seeing the defects of their homeland. The character is considered by many Quixotesco,
						in reference to <a href='http://localhost/literledge/books/00000O.php'> <b> Don Quixote de La Mancha </b> </a>, a misunderstood character fighting against
						imaginary enemies and spending their efforts in vain. While Policarpo is a comic character, he is also a character to feel sorry for,
						thanks to his naivete and kindness he always gets along. <br />
						<br />
						Even though it is a fiction, several real events are recorded in the book, such as the Paraguayan War, the Armada Revolt, the Federalist Revolution and the figure of the
						President Floriano Peixoto, who really existed. The third person narrator does not expose his opinions about the facts, always leaving the reader the
						that he must think about such a scene. As a pre-modernist work, it differs from some standards imposed on the literatute until then, Lima Barreto choose to
						write in a more colloquial and accessible language, going against a more academic language. In addition, the author uses the book to denounce
						various social problems and the plot is based on everyday and historical facts, moving away from the fantasy of romanticism.
						<hr>
						<a name='goto2'> </a>
						<h1> Characters </h1>
						<ul>
						<li><b> Policarpo Quaresma: </b>The patriotic protagonist, honest, kind and passionate about books. </li>
						<li><b> Adelaide: </b>Quaresma's sister who lived with him. </li>
						<li><b> Ricardo Coração dos Outros: </b>guitar teacher from Quaresma. </li>
						<li><b> Olga: </b>godson of Policarpo. </li>
						<li><b> Vicente Coleoni: </b>Olga's father. </li>
						<li><b> Amando Borges: </b>Olga's husband. </li>
						<li><b> Anastácio: </b>homemade from Lent. </li>
						<li><b> Lieutenant Antonino Dutra: </b>notary and employee of Curuzu City Hall. </li>
						<li><b> Doutor Campos: </b>Mayor of Curuzu. </li>
						<li><b> General Albernaz: </b>Lent's neighbor </li>
						<li><b> Marshal Floriano: </b>ruler of the country. He did exist and was president of Brazil from 1891 to 1894. </li>
						</ul>
						<hr>
						<a name='goto3'> </a>
						<h1> Adaptations </h1>
						<a href='https://m.imdb.com/title/tt0142771/'> Policarpo Quaresma, Herói do Brasil (1997) - Paulo Thiago </a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'></a>
						<h1> Revisión </h1>
						El libro es un hito del premodernismo brasileño, fue publicado originalmente en ediciones del periódico do commercio en 1911, y fue solo
						publicado como libro en 1915. Escrito por Lima Barreto durante el período de la República Oliguárquica, al comienzo de la República en Brasil,
						El trabajo satiriza y nacionalismo irónico, además de exponer problemas políticos y críticas sociales sobre el país. <br />
						<br />
						A pesar de ser demasiado nacionalista, Policarpo es un buen hombre pero muy ingenuo, y se utiliza en el trabajo para explicar las desventajas.
						en no tener una visión crítica y no ver los defectos de su tierra natal. El personaje es considerado por muchos quijotescos,
						en referencia a <a href='http://localhost/literledge/books/00000O.php'> <b> Don Quijote de La Mancha </b> </a>, un personaje incomprendido que lucha contra
						enemigos imaginarios y gastando sus esfuerzos en vano. Si bien Policarpo es un personaje cómico, también es un personaje por el que sentir pena,
						Gracias a su ingenuidad y amabilidad siempre se lleva bien. <br />
						<br />
						Aunque es una ficción, en el libro se registran varios eventos reales, como la Guerra de Paraguay, la Revuelta de la Armada, la Revolución Federalista y la figura del
						El presidente Floriano Peixoto, quien realmente existió. El narrador en tercera persona no expone sus opiniones sobre los hechos, dejando siempre al lector el
						que debe pensar en tal escena. Como trabajo premodernista, difiere de algunos estándares impuestos a los literatos hasta entonces, Lima Barreto eligió
						escribir en un lenguaje más coloquial y accesible, en contra de un lenguaje más académico. Además, el autor usa el libro para denunciar
						diversos problemas sociales y la trama se basa en hechos cotidianos e históricos, alejándose de la fantasía del romanticismo.
						<hr>
						<a name='goto2'> </a>
						<h1> Personajes </h1>
						<ul>
						<li><b> Policarpo Quaresma: </b>El protagonista patriótico, honesto, amable y apasionado por los libros. </li>
						<li><b> Adelaide: </b>la hermana de Quaresma que vivía con él. </li>
						<li><b> Ricardo Coração dos Outros: </b>profesor de guitarra de Quaresma. </li>
						<li><b> Olga: </b>ahijado de Policarpo. </li>
						<li><b> Vicente Coleoni: </b>el padre de Olga. </li>
						<li><b> Amando Borges: </b>el esposo de Olga. </li>
						<li><b> Anastácio: </b>hecho en casa desde la Cuaresma. </li>
						<li><b> Teniente Antonino Dutra: </b>notario y empleado del Ayuntamiento de Curuzu. </li>
						<li><b> Doutor Campos: </b>Alcalde de Curuzu. </li>
						<li><b> General Albernaz: </b>vecino de Cuaresma </li>
						<li><b> Mariscal Floriano: </b>gobernante del país. Existió y fue presidente de Brasil desde 1891 hasta 1894. </li>
						</ul>
						<hr>
						<a name='goto3'> </a>
						<h1> Adaptaciones </h1>
						<a href='https://m.imdb.com/title/tt0142771/'> Policarpo Quaresma, Herói do Brasil (1997) - Paulo Thiago </a>
						<hr>";
					}
				?>
			</div>
			<?php $book = '000001'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'BARRETOlima'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>