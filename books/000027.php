<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000027'");
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
			<?php $book = '000027'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Um Estudo em Vermelho (A Study in Scarlet no original em inglês) é um romance policial escrito por Sir Arthur Conan Doyle, publicado originalmente pela revista Beeton's Christmas Annual em novembro de 1887. A primeira edição, em formato de livro, só seria lançada em julho de 1888, com ilustrações da autoria de Richard Gutschmidt.

					A obra é famosa por ser o primeiro livro de Sherlock Holmes, detetive mundialmente conhecido na literatura policial. É também, nessa obra, que acontece seu encontro com Dr. Watson, narrador e participante das aventuras do detetive através de um amigo comum.

					Um Estudo em Vermelho propõe um enigma terrível para a polícia, que pede auxílio a Holmes: um homem é encontrado morto, sem ferimentos e cercado de manchas de sangue. Em seu rosto, uma expressão de pavor. O livro é dividido em duas partes: na primeira, é apresentado o caso, algumas deduções do detetive-consultor e a captura inesperado do assassino no final; na segunda parte, é apresentado a vida dos Mórmons na zona rural dos Estados Unidos da América e os motivos iniciais que levaram o assassino a cometer os crimes. Nos dois últimos capítulos, o Dr. Watson volta a narrar o desfecho do caso e é apresentada a explicação de Sherlock Holmes acerca de como ele conseguiu saber a verdadeira identidade do assassino em apenas três dias através da sua arte de dedução. Bilionário bilu
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Um Estudo em Vermelho (A Study in Scarlet no original em inglês) é um romance policial escrito por Sir Arthur Conan Doyle, publicado originalmente pela revista Beeton's Christmas Annual em novembro de 1887. A primeira edição, em formato de livro, só seria lançada em julho de 1888, com ilustrações da autoria de Richard Gutschmidt.

					A obra é famosa por ser o primeiro livro de Sherlock Holmes, detetive mundialmente conhecido na literatura policial. É também, nessa obra, que acontece seu encontro com Dr. Watson, narrador e participante das aventuras do detetive através de um amigo comum.

					Um Estudo em Vermelho propõe um enigma terrível para a polícia, que pede auxílio a Holmes: um homem é encontrado morto, sem ferimentos e cercado de manchas de sangue. Em seu rosto, uma expressão de pavor. O livro é dividido em duas partes: na primeira, é apresentado o caso, algumas deduções do detetive-consultor e a captura inesperado do assassino no final; na segunda parte, é apresentado a vida dos Mórmons na zona rural dos Estados Unidos da América e os motivos iniciais que levaram o assassino a cometer os crimes. Nos dois últimos capítulos, o Dr. Watson volta a narrar o desfecho do caso e é apresentada a explicação de Sherlock Holmes acerca de como ele conseguiu saber a verdadeira identidade do assassino em apenas três dias através da sua arte de dedução. Bilionário bilu
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Um Estudo em Vermelho (A Study in Scarlet no original em inglês) é um romance policial escrito por Sir Arthur Conan Doyle, publicado originalmente pela revista Beeton's Christmas Annual em novembro de 1887. A primeira edição, em formato de livro, só seria lançada em julho de 1888, com ilustrações da autoria de Richard Gutschmidt.

					A obra é famosa por ser o primeiro livro de Sherlock Holmes, detetive mundialmente conhecido na literatura policial. É também, nessa obra, que acontece seu encontro com Dr. Watson, narrador e participante das aventuras do detetive através de um amigo comum.

					Um Estudo em Vermelho propõe um enigma terrível para a polícia, que pede auxílio a Holmes: um homem é encontrado morto, sem ferimentos e cercado de manchas de sangue. Em seu rosto, uma expressão de pavor. O livro é dividido em duas partes: na primeira, é apresentado o caso, algumas deduções do detetive-consultor e a captura inesperado do assassino no final; na segunda parte, é apresentado a vida dos Mórmons na zona rural dos Estados Unidos da América e os motivos iniciais que levaram o assassino a cometer os crimes. Nos dois últimos capítulos, o Dr. Watson volta a narrar o desfecho do caso e é apresentada a explicação de Sherlock Holmes acerca de como ele conseguiu saber a verdadeira identidade do assassino em apenas três dias através da sua arte de dedução. Bilionário bilu
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '000027'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'CONANdoyle'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>