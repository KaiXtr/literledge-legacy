<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000C'");
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
			<?php $book = '00000C'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<a name='goto1'></a>
						<h1> Resenha </h1>
						Publicado e escrito por José de Alencar em 1862, Lucíola é o quinto romance do autor, este livro inicia a série de Perfis de Mulher da obra de Alencar, 
						fazendo parte dela mais tarde Diva (1864) e Senhora (1875). Tanto a série quanto o livro Lucíola estuda o psicológico e a mente feminina. A obra foi 
						bastante influenciada pelo escritor <a href='users/DUMASalexandre.php'>Alexandre Dumas</a> e seu livro A Dama das Camélias,
						Lucíola é como uma Camille brasileira. <br />
						<br />
						O livro aborda principalmente o tema da prostituição, refletindo na protagonista as angústias em se submeter á tal condição, além da dualidade da 
						personagem em viver como uma prostituta e uma mulher digna. Isto também se reflete em Paulo, que apesar de respeitar e desejar independência para ela, 
						também anseia pela prazeres de Lucíola, também chamada de Maria da Glória. Ambos os nomes possuem significado na trama, visto que Lucíola remete á Lúcifer 
						e o lado tentador e pecaminoso da mulher, enquanto Maria da Glória remete à Virgem Maria, uma mulher pura e misericordiosa.
						<hr>
						<a name='goto2'></a>
						<h1> Personagens </h1>
						<ul>
						<li><b>Lucíola: </b>cortesã rica que é conhecida por todos como bela e excêntrica. É muito profunda e reflexiva, tendo grande complexidade psicológica.</li>
						<li><b>Paulo: </b>é um homem que Lúcia se apaixona.</li>
						<li><b>Sá: </b>amigo de infância de Paulo e ex-amante de Lúcia, ele quem apresenta os dois. Milionário e solteiro, é o típico homem burguês.</li>
						<li><b>Ana: </b>irmã mais nova de Lúcia, de apenas 12 anos, é muito parecida com sua irmã mais velha.</li>
						<li><b>Nina: </b>Paulo marca um encontro com Nina para fazer ciúmes em Lúcia, mas ela não vai.</li>
						<li><b>Rochinha: </b>na roda de amigos boêmios, é o mais novo, com 17 anos, e o mais inexperiente. Porém, tem uma vida irrigada por bebidas alcoólicas.</li>
						<li><b>Cunha: </b>Assim como Sá, fala muito mal de Lúcia. Ela o deixou no dia em que viu sua mulher sozinha, triste.</li>
						<li><b>Couto: </b>Foi ele que se aproveitou da inocência e necessidade de Lúcia quando esta tinha apenas 14 anos.</li>
						<li><b>Jesuína: </b>mulher que ajuda Lucia quando é expulsa de casa.</li>
						<li><b>Jacinto: </b>Paulo achava que ele e Lúcia eram amantes, o que não era verdade.</li>
						</ul>
						<hr>
						<a name='goto3'></a>
						<h1> Adaptações </h1>
						<a href='https://m.imdb.com/title/tt0203304/'> Lucíola, o Anjo Pecador (1975) - Alfredo Sterheim </a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'> </a>
						<h1> Review </h1>
						Published and written by José de Alencar in 1862, Lucíola is the author's fifth novel, this book begins the series of Woman Profiles of Alencar's work, 
						later being part of Diva (1864) and Senhora (1875). Both the series and the book Lucíola study the psychological and the female mind. The work was greatly 
						influenced by the writer <a href='users/DUMASalexandre.php'>Alexandre Dumas</a> and his book A Dama das Camélias, Lucíola is 
						like a Brazilian Camille. <br />
						<br />
						The book mainly addresses the theme of prostitution, reflecting in the protagonist the anxieties in submitting to such condition, in addition to the 
						duality of the character in living as a prostitute and a dignified woman. This is also reflected in Paulo, who despite respecting and desiring independence 
						for her, she also yearns for the pleasures of Lucíola, also called Maria da Glória. Both names have meaning in the plot, since Lucíola refers to Lucifer 
						and the tempting and sinful side of the woman, while Maria da Glória refers to the Virgin Mary, a pure and merciful woman.
						<hr>
						<a name='goto2'> </a>
						<h1> Characters </h1>
						<ul>
						<li><b> Lucíola: </b>rich courtesan who is known to everyone as beautiful and eccentric. It is very deep and reflective, with great psychological 
						complexity. </li>
						<li><b> Paulo: </b>is a man that Lúcia falls in love with. </li>
						<li><b> Sá: </b>childhood friend of Paulo and ex-lover of Lucia, he who introduces the two. Millionaire and single, he is the typical bourgeois man. </li>
						<li><b> Ana: </b>Lúcia's younger sister, only 12 years old, is very similar to her older sister. </li>
						<li><b> Nina: </b>Paulo makes an appointment with Nina to make Lucia jealous, but she won't. </li>
						<li><b> Rochinha: </b>the youngest in the circle of bohemian friends, with 17 years old, and the most inexperienced. However, it has a life irrigated by alcoholic beverages. </li>
						<li><b> Cunha: </b>like Sá, he speaks very badly of Lúcia. She left him the day he saw his wife alone, sad. </li>
						<li><b> Couto: </b>it was he who took advantage of Lucia's innocence and need when she was just 14 years old. </li>
						<li><b> Jesuína: </b>woman who helps Lucia when she is expelled from home. </li>
						<li><b> Jacinto: </b>Paulo thought he and Lúcia were lovers, which was not true. </li>
						</ul>
						<hr>
						<a name='goto3'> </a>
						<h1> Adaptations </h1>
						<a href='https://m.imdb.com/title/tt0203304/'> Lucíola, o Anjo Pecador (1975) - Alfredo Sterheim </a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'> </a>
						<h1> Revisión </h1>
						Publicada y escrita por José de Alencar en 1862, Lucíola es la quinta novela del autor. Tanto la serie como el libro Lucíola estudian la mente psicológica 
						y femenina. La obra estuvo muy influenciada por el escritor <a href='users/DUMASalexandre.php'> Alexandre Dumas </a> y su libro 
						A Dama das Camélias, Lucíola es como una Camille brasileña. <br />
						<br />
						El libro aborda principalmente el tema de la prostitución, reflejando en el protagonista las ansiedades de someterse a tal condición, además de la dualidad 
						del personaje en la vida como prostituta y mujer digna, esto también se refleja en Paulo, quien a pesar de respetar y desear la independencia. para ella, 
						ella también anhela los placeres de Lucíola, también llamada Maria da Glória. Ambos nombres tienen significado en la trama, ya que Lucíola se refiere a 
						Lucifer y al lado tentador y pecaminoso de la mujer, mientras que Maria da Glória se refiere a la Virgen María, una mujer pura y misericordiosa.
						<hr>
						<a name='goto2'> </a>
						<h1> Personajes </h1>
						<ul>
						<li><b> Lucíola: </b>rica cortesana que todos conocen como hermosa y excéntrica. Es muy profundo y reflexivo, con gran complejidad psicológica. </li>
						<li><b> Paulo: </b>es un hombre del que Lúcia se enamora. </li>
						<li><b> Sá: </b>amigo de la infancia de Paulo y ex amante de Lucía, el que presenta a los dos. Millonario y soltero, es el típico hombre burgués. </li>
						<li><b> Ana: </b>la hermana menor de Lúcia, de solo 12 años, es muy similar a su hermana mayor. </li>
						<li><b> Nina: </b>Paulo hace una cita con Nina para poner celosa a Lucía, pero ella no lo hará. </li>
						<li><b> Rochinha: </b>en el círculo de amigos bohemios, es el más joven, con 17 años y el más inexperto. Sin embargo, tiene una vida irrigada por las 
						bebidas alcohólicas. </li>
						<li><b> Cunha: </b>Al igual que Sá, habla muy mal de Lúcia. Ella lo dejó el día que vio a su esposa sola, triste. </li>
						<li><b> Couto: </b>Fue él quien se aprovechó de la inocencia y necesidad de Lucía cuando tenía solo 14 años. </li>
						<li><b> Jesuína: </b>mujer que ayuda a Lucía cuando es expulsada de su hogar. </li>
						<li><b> Jacinto: </b>Paulo pensó que él y Lúcia eran amantes, lo cual no era cierto. </li>
						</ul>
						<hr>
						<a name='goto3'> </a>
						<h1> Adaptaciones </h1>
						<a href='https://m.imdb.com/title/tt0203304/'> Lucíola, o Anjo Pecador (1975) - Alfredo Sterheim </a>
						<hr>";
					}
				?>
			</div>
			<?php $book = '00000C'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ALENCARjose'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>