<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000L'");
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
			<?php $book = '00000L'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Leviatã ou Matéria, Palavra e Poder de um Governo Eclesiástico e Civil, comumente chamado de Leviatã, é um livro escrito por Thomas Hobbes e publicado em 1651. Ele é intitulado em referência ao Leviatã bíblico. O livro diz respeito à estrutura da sociedade e do governo legítimo, e é considerado como um dos exemplos mais antigos e mais influentes da teoria do contrato social.[1] O editor foi Andrew Crooke, parceiro da Andrew Crooke e William Crooke. Muitas vezes, é considerada uma das obras mais influentes já escritas do pensamento político.

					No livro, que foi escrito durante a Guerra Civil Inglesa, Thomas Hobbes defende um contrato social e o governo de um soberano absoluto. Hobbes escreveu que o caos ou a guerra civil - situações identificadas como um estado de natureza e pelo famoso lema Bellum omnium contra omnes (eterna luta de todos contra todos) - só poderia ser evitado por um governo central forte.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Leviatã ou Matéria, Palavra e Poder de um Governo Eclesiástico e Civil, comumente chamado de Leviatã, é um livro escrito por Thomas Hobbes e publicado em 1651. Ele é intitulado em referência ao Leviatã bíblico. O livro diz respeito à estrutura da sociedade e do governo legítimo, e é considerado como um dos exemplos mais antigos e mais influentes da teoria do contrato social.[1] O editor foi Andrew Crooke, parceiro da Andrew Crooke e William Crooke. Muitas vezes, é considerada uma das obras mais influentes já escritas do pensamento político.

					No livro, que foi escrito durante a Guerra Civil Inglesa, Thomas Hobbes defende um contrato social e o governo de um soberano absoluto. Hobbes escreveu que o caos ou a guerra civil - situações identificadas como um estado de natureza e pelo famoso lema Bellum omnium contra omnes (eterna luta de todos contra todos) - só poderia ser evitado por um governo central forte.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Leviatã ou Matéria, Palavra e Poder de um Governo Eclesiástico e Civil, comumente chamado de Leviatã, é um livro escrito por Thomas Hobbes e publicado em 1651. Ele é intitulado em referência ao Leviatã bíblico. O livro diz respeito à estrutura da sociedade e do governo legítimo, e é considerado como um dos exemplos mais antigos e mais influentes da teoria do contrato social.[1] O editor foi Andrew Crooke, parceiro da Andrew Crooke e William Crooke. Muitas vezes, é considerada uma das obras mais influentes já escritas do pensamento político.

					No livro, que foi escrito durante a Guerra Civil Inglesa, Thomas Hobbes defende um contrato social e o governo de um soberano absoluto. Hobbes escreveu que o caos ou a guerra civil - situações identificadas como um estado de natureza e pelo famoso lema Bellum omnium contra omnes (eterna luta de todos contra todos) - só poderia ser evitado por um governo central forte.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00000L'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'HOBBESthomas'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>