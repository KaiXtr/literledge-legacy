<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php $v = ''; include 'design/metadata.php'; ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>

		<div id='banner' class='slide' style='background-image: url("media/images/banners/MACHADOassis.jpg")'></div>
		<div id='hpslide'>
			<div id='sl1'>
				<div class='manlan' lang='pt'>
					<h1> Organize os seus livros lidos </h1>
					Entre no Literledge para manter uma lista
					dos livros que estiver lendo e que já leu.
					O sistema de banco de dados do Literledge
					permite te manter organizado com seus
					livros favoritos.
				</div>
				<div class='manlan' lang='en'>
					<h1> Organize your read books </h1>
					Join Literledge to keep a list
					of the books you’re reading and have read.
					The Literledge database system
					lets you stay organized with your
					favorite books.
				</div>
				<div class='manlan' lang='es'>
					<h1> Organiza tus libros leídos </h1>
					Únase a Literledge para mantener una lista
					de los libros que estás leyendo y has leído.
					El sistema de base de datos Literledge
					te permite mantenerte organizado con tu
					Libros Favoritos.
				</div>
			</div>
			<div id='sl2' style='display: none;'>
				<div class='manlan' lang='pt'>
					<h1> Encontre dezenas de livros gratuitos </h1>
					Vários livros de vários sites diferentes,
					em formatos ePub, PDF, audiolivro, em vários
					idiomas diferentes. Tudo para permitir o acesso
					á leitura para todos.
				</div>
				<div class='manlan' lang='en'>
					<h1> Find dozens of free books </h1>
					Several books from several different websites,
					in ePub, PDF, audiobook formats, in various
					different languages. Everything to allow access
					reading for everyone.
				</div>
				<div class='manlan' lang='es'>
					<h1> Encuentra docenas de libros gratis </h1>
					Varios libros de varios sitios web diferentes,
					en formato ePub, PDF, audiolibro, en varios
					idiomas diferentes. Todo para permitir el acceso
					leyendo para todos.
				</div>
			</div>
			<div id='sl3' style='display: none;'>
				<div class='manlan' lang='pt'>
					<h1> Biografias de autores e resenhas de livros </h1>
					O site possuí informações detalhadas de cada
					autor e cada livro, baseados em fontes confiáveis
					e pesquisa em vários meios.
				</div>
				<div class='manlan' lang='en'>
					<h1> Authors' biographies and book reviews </h1>
					The website has detailed information for each
					author and each book, based on reliable sources
					and research in various media.
				</div>
				<div class='manlan' lang='es'>
					<h1> Biografías de los autores y reseñas de libros </h1>
					El sitio web tiene información detallada para cada
					autor y cada libro, basado en fuentes confiables
					e investigación en diversos medios.
				</div>
			</div>
		</div>

		<script type='text/javascript'>
			slide_show();
		</script>

		<div class='content'>
			<div class='brow'>
				<div class='blabel'>
					<div class='manlan' lang='pt'>
						<h1> Populares </h1>
						Os livros que estão bombando.
					</div>
					<div class='manlan' lang='en'>
						<h1> Popular </h1>
						The best books just for you.
					</div>
					<div class='manlan' lang='es'>
						<h1> Popular </h1>
						Los mejores libros del sitio.
					</div>
				</div>
				<div class='displaysearch'>
					<?php
						$conn = new mysqli('localhost', 'root', 'Gu@n@b@r@', 'literledge');
						if ($conn->connect_error) {echo("Connection failed: " . $conn->connect_error);}
						else{
							$conn->query("SET NAMES 'utf8'");
							$sql = "SELECT b.id, b.name, u.name as auctor FROM books as b JOIN users as u
									ON b.auctor=u.nick";
							$result = $conn->query($sql);
							if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$lang='pt';}
							else {$lang = $_COOKIE['lang'];}

							if ($result->num_rows > 0) {
								while ($i = $result->fetch_assoc()) {
									$translation = $conn->query("SELECT * FROM translations WHERE fkey='".$i['id']."'");
									$t = $translation->fetch_assoc();

									echo "<a href='books/" .$i["id"]. ".php'>
											<button class='thumbs'>
												<div class='coverart'> <img  src='media/images/covers/" .$i["id"]. ".jpg' /> </div>
												<div class='description'>
													<h2> ".$t[$lang]." </h2>
													<h3> ".$i['auctor']." </h3>";
													include 'sinopsis/'.$i['id'].'.php';
											echo "</div>
											</button>
										</a>";
									}
								}
						}
						$conn->close();
					?>
				</div>
			</div>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>