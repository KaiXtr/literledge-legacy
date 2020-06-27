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
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
					<div id='sl1'>
						<h1> Organize os seus livros lidos </h1>
						Entre no Literledge para manter uma lista
						dos livros que estiver lendo e que já leu.
						O sistema de banco de dados do Literledge	
						permite te manter organizado com seus
						livros favoritos.
					</div>
					<div id='sl2' style='display: none;'>
						<h1> Encontre dezenas de livros gratuitos </h1>
						Vários livros de vários sites diferentes,
						em formatos ePub, PDF, audiolivro, em vários
						idiomas diferentes. Tudo para permitir o acesso
						á leitura para todos.
					</div>
					<div id='sl3' style='display: none;'>
						<h1> Biografias de autores e resenhas de livros </h1>
						O site possuí informações detalhadas de cada
						autor e cada livro, baseados em fontes confiáveis
						e pesquisa em vários meios.
					</div>";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
					<div id='sl1'>
						<h1> Organize your read books </h1>
						Join Literledge to keep a list
						of the books you’re reading and have read.
						The Literledge database system
						lets you stay organized with your
						favorite books.
					</div>
					<div id='sl2' style='display: none;'>
						<h1> Encontre dezenas de livros gratuitos </h1>
						Vários livros de vários sites diferentes,
						em formatos ePub, PDF, audiolivro, em vários
						idiomas diferentes. Tudo para permitir o acesso
						á leitura para todos.
					</div>
					<div id='sl3' style='display: none;'>
						<h1> Authors' biographies and book reviews </h1>
						The website has detailed information for each
						author and each book, based on reliable sources
						and research in various media.
					</div>";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
					<div id='sl1'>
						<h1> Organiza tus libros leídos </h1>
						Únase a Literledge para mantener una lista
						de los libros que estás leyendo y has leído.
						El sistema de base de datos Literledge
						te permite mantenerte organizado con tu
						Libros Favoritos.
					</div>
					<div id='sl2' style='display: none;'>
						<h1> Encuentra docenas de libros gratis </h1>
						Varios libros de varios sitios web diferentes,
						en formato ePub, PDF, audiolibro, en varios
						idiomas diferentes. Todo para permitir el acceso
						leyendo para todos.
					</div>
					<div id='sl3' style='display: none;'>
						<h1> Biografías de los autores y reseñas de libros </h1>
						El sitio web tiene información detallada para cada
						autor y cada libro, basado en fuentes confiables
						e investigación en diversos medios.
					</div>";
				}
			?>
		</div>

		<script type='text/javascript'>
			slide_show();
		</script>
		<div class='content'>
			<?php
				require 'account/mysql_connect.php';
				if ($notcon == null) {
					require 'design/array_lists.php';
					$lists = array('SELECT id, auctor, warning FROM books ORDER BY readings desc LIMIT 10',
						'SELECT id, auctor, warning FROM books ORDER BY id desc LIMIT 10');
					$names = array($fltlst['Popular'],$fltlst['New']);
					$index = array(0,1);
					$x = 2;
					while ($x < 10) {
						$r = random_int(0,1);
						if ($r == 0) {
							$i = array_keys($gnrlst)[random_int(0,sizeof($gnrlst)-1)];
							if (in_array($gnrlst[$i], $names) == false) {
								$names[] = $gnrlst[$i];$lists[] = 'SELECT id, auctor, warning FROM books WHERE genre="'.$i.'" LIMIT 10';
								$index[] = $x; $x++;
							}
						}
						if ($r == 1) {
							$i = array_keys($ltslst)[random_int(0,sizeof($ltslst)-1)];
							if (in_array($ltslst[$i], $names) == false) {
								$names[] = $ltslst[$i];$lists[] = 'SELECT id, auctor, warning FROM books WHERE litschool="'.$i.'" LIMIT 10';
								$index[] = $x; $x++;
							}
						}
					}

					for ($q=0;$q<sizeof($lists);$q++) {
						echo "<div class='brow'><div class='blabel'><h1>".$names[$index[$q]]."</h1></div><div class='displaybooks'>";
						$result = $conn->query($lists[$index[$q]]);
						if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt')) {$lang='pt';}
						else {$lang = $_COOKIE['lang'];}

						if ($result->num_rows > 0) {
							while ($i = $result->fetch_assoc()) {
								$translation = $conn->query("SELECT * FROM translations WHERE fkey='".$i['id']."'");
								$t = $translation->fetch_assoc();

								$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='".$i['auctor']."'");
								$n = $find->fetch_assoc();
								if ($n[$_COOKIE['lang']] == null) {$nm = $n['pt'];}
								else {$nm = $n[$_COOKIE['lang']];}

								if ($i['warning'] == '0') {$wrg = '';}
								else {$wrg = "style='background-color: #BC4440;color: #5B090D;'";}

								echo "<a href='books/" .$i["id"]. ".php'>
										<button class='thumbs' ".$wrg.">
											<div class='coverart'> <img  src='media/images/covers/" .$i["id"]. ".jpg' /> </div>
											<div class='description'>
												<h2> ".$t[$lang]." </h2>
												<h3> ".$nm." </h3>";
												include 'sinopsis/'.$i['id'].'.php';
										echo $sin."</div>
										</button>
									</a>";
								}
							}
							echo "</div>
							</div>";
						}
						$conn->close();
					}
			?>
		</div>
		<?php include 'design/footer.php' ?>
		<script type='text/javascript'>cut_sinopsis();</script>
	</body>
</html>