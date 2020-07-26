<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001U'");
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
			<?php $book = '00001U'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Mulato é o segundo romance de Aluísio Azevedo, escrito no ano de 1881. Foi responsável pelo início do naturalismo no Brasil.

					Denúncia do preconceito racial na sociedade maranhense e da corrupção do clero, o livro irritou os comprovincianos de Aluísio a ponto de o escritor resolver mudar-se para a Corte, onde faria sucesso. Encontra-se atualmente em domínio público de acordo com as leis autorais do Brasil.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Mulato é o segundo romance de Aluísio Azevedo, escrito no ano de 1881. Foi responsável pelo início do naturalismo no Brasil.

					Denúncia do preconceito racial na sociedade maranhense e da corrupção do clero, o livro irritou os comprovincianos de Aluísio a ponto de o escritor resolver mudar-se para a Corte, onde faria sucesso. Encontra-se atualmente em domínio público de acordo com as leis autorais do Brasil.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Mulato é o segundo romance de Aluísio Azevedo, escrito no ano de 1881. Foi responsável pelo início do naturalismo no Brasil.

					Denúncia do preconceito racial na sociedade maranhense e da corrupção do clero, o livro irritou os comprovincianos de Aluísio a ponto de o escritor resolver mudar-se para a Corte, onde faria sucesso. Encontra-se atualmente em domínio público de acordo com as leis autorais do Brasil.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001U'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'AZEVEDOaluisio'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>