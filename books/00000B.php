<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000B'");
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
			<?php $book = '00000B'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "<a name='goto1'></a>
						<h1> Resenha </h1>
						Originalmente O Guarany: Romance Brasileiro, é um romance histórico escrito por José de Alencar, publicado primeiramente em folhetim, o capítulo 
						inicial foi publicado no dia 1º de janeiro de 1857, no Diário do Rio de Janeiro. No fim desse ano, foi publicado como livro, com alterações mínimas em 
						relação ao que fora publicado em folhetim. A obra fez de José de Alencar um autor reconhecido e foi republicada por diversas editoras.
						<hr>
						<a name='goto2'></a>
						<h1> Personagens </h1>
						<ul>
						<li><b>Peri: </b>índio da tribo dos Goitacases, fiel e honrado, é o herói da trama. Grande amigo do D. Antônio e apaixonado por Cecília.</li>
						<li><b>Cecília: </b>também chamada de Ceci, filha de D. Antônio de Mariz e D. Lauriana.</li>
						<li><b>D. Antônio de Mariz: </b>fidalgo português e pai de Cecília, dono da fazenda no interior do Rio de Janeiro.</li>
						<li><b>D. Lauriana: </b>dama paulistana e mãe de Cecília, possui tendências preconceituosas.</li>
						<li><b>D. Diogo: </b>irmão de Cecília.</li>
						<li><b>Isabel: </b>filha bastarda de D Antônio de Mariz, tida como sua sobrinha, apaixonada por Álvaro.</li>
						<li><b>D. Álvaro de Sá: </b>chefe dos aventureiros a serviço de dom Antônio.</li>
						<li><b>Loredano: </b>empregado da fazenda, é um dos grandes antagonistas.</li>
						<li><b>Bento Simões: </b>comparsa de Loredano e muito supersticioso</li>
						<li><b>Rui Soeiro: </b>comparsa de Loredano e pouco supersticioso</li>
						<li><b>Martim Vaz: </b>assume como braço-direito de Loredano.</li>
						</ul>
						<hr>
						<a name='goto3'></a>
						<h1> Adaptações </h1>
						O Guarani foi adaptado a ópera por Carlos Gomes em 1870, a ópera é conhecida por ser o tema musical da Voz do Brasil, um noticiário de rádio estatal. <br />
						<a href='https://m.imdb.com/title/tt0191169/'> O Guarani (1979) - Fauzi Mansur </a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'> </a>
						<h1> Review </h1>
						Originally The Guarany: Brazilian Romance, is a historical novel written by José de Alencar, first published in a serial, the chapter
						initial was published on January 1, 1857, in the Diário do Rio de Janeiro newspaper. At the end of that year, it was published as a book, with minor 
						changes in in relation to what had been published in the newsletter. The work made José de Alencar a recognized author and was republished by several 
						publishers.
						<hr>
						<a name='goto2'> </a>
						<h1> Characters </h1>
						<ul>
						<li><b> Peri: </b>Indian from the Goitacases tribe, faithful and honorable, is the hero of the histors. Great friend of D. Antônio and in love with 
						Cecília. </li>
						<li><b> Cecília: </b>also called Ceci, daughter of D. Antônio de Mariz and D. Lauriana. </li>
						<li><b> D. Antônio de Mariz: </b>Portuguese nobleman and father of Cecília, owner of the farm in the interior of Rio de Janeiro. </li>
						<li><b> D. Lauriana: </b>paulistana lady and Cecília's mother, has prejudiced tendencies. </li>
						<li><b> D. Diogo: </b>Cecília's brother. </li>
						<li><b> Isabel: </b>bastard daughter of D Antônio de Mariz, considered her niece, in love with Álvaro. </li>
						<li><b> D. Álvaro de Sá: </b>head of adventurers in the service of Dom Antônio. </li>
						<li><b> Loredano: </b>an employee of the farm, he is one of the great antagonists. </li>
						<li><b> Bento Simões: </b>Loredano's partner and very superstitious </li>
						<li><b> Rui Soeiro: </b>Loredano's partner and not superstitious </li>
						<li><b> Martim Vaz: </b>takes over as Loredano's right-hand man. </li>
						</ul>
						<hr>
						<a name='goto3'> </a>
						<h1> Adaptations </h1>
						Guarani was adapted to opera by Carlos Gomes in 1870, the opera is known for being the musical theme of Voz do Brasil, a state radio news. <br />
						<a href='https://m.imdb.com/title/tt0191169/'> O Guarani (1979) - Fauzi Mansur </a>
						<hr>";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'> </a>
						<h1> Revisión </h1>
						Originalmente O Guarany: Romance brasileño, es una novela histórica escrita por José de Alencar, publicada por primera vez en una serie, el capítulo
						Inicial se publicó el 1 de enero de 1857 en el Diário do Rio de Janeiro. A finales de ese año, se publicó como un libro, con pequeños cambios en
						en relación con lo publicado en un boletín informativo. La obra convirtió a José de Alencar en un autor reconocido y fue reeditado por varias editoriales.
						<hr>
						<a name='goto2'> </a>
						<h1> Personajes </h1>
						<ul>
						<li><b> Peri: </b>Un indio de la tribu Goitacases, fiel y honorable, es el héroe de la trama. Gran amigo de D. Antônio y enamorado de Cecília. </li>
						<li><b> Cecília: </b>también llamada Ceci, hija de D. Antônio de Mariz y D. Lauriana. </li>
						<li><b> D. Antônio de Mariz: </b>noble portugués y padre de Cecília, dueño de la granja en el interior de Río de Janeiro. </li>
						<li><b> D. Lauriana: </b>la señora paulistana y la madre de Cecília, tiene prejuicios tendencias. </li>
						<li><b> D. Diogo: </b>hermano de Cecília. </li>
						<li><b> Isabel: </b>hija bastarda de D Antônio de Mariz, considerada su sobrina, enamorada de Álvaro. </li>
						<li><b> D. Álvaro de Sá: </b>jefe de aventureros al servicio de Dom Antônio. </li>
						<li><b> Loredano: </b>un empleado de la granja, es uno de los grandes antagonistas. </li>
						<li><b> Bento Simões: </b>compañero de Loredano y muy supersticioso </li>
						<li><b> Rui Soeiro: </b>compañero de Loredano y no supersticioso </li>
						<li><b> Martim Vaz: </b>se hace cargo de la mano derecha de Loredano. </li>
						</ul>
						<hr>
						<a name='goto3'> </a>
						<h1> Adaptaciones </h1>
						Guaraní fue adaptado a la ópera por Carlos Gomes en 1870, la ópera es conocida por ser el tema musical de Voz do Brasil, una noticia de radio estatal.
						<br />
						<a href='https://m.imdb.com/title/tt0191169/'> O Guarani (1979) - Fauzi Mansur </a>
						<hr>";
					}
				?>
			</div>
			<?php $book = '00000B'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ALENCARjose'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>