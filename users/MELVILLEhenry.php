<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='MELVILLEhenry'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'MELVILLEhenry'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Herman Melville (Nova Iorque, 1º de agosto de 1819—Nova Iorque, 28 de setembro de 1891) foi um escritor, poeta e ensaísta estadunidense. Embora tenha obtido grande sucesso no início de sua carreira, sua popularidade foi decaindo ao longo dos anos. Faleceu quase completamente esquecido, sem conhecer o sucesso que sua mais importante obra, o romance Moby Dick, alcançaria no século XX. O livro, dividido em três volumes, foi publicado em 1851 com o título de A baleia e não obteve sucesso de crítica, tendo sido considerado o principal motivo para o declínio da carreira do autor.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Herman_Melville' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Herman Melville (Nova Iorque, 1º de agosto de 1819—Nova Iorque, 28 de setembro de 1891) foi um escritor, poeta e ensaísta estadunidense. Embora tenha obtido grande sucesso no início de sua carreira, sua popularidade foi decaindo ao longo dos anos. Faleceu quase completamente esquecido, sem conhecer o sucesso que sua mais importante obra, o romance Moby Dick, alcançaria no século XX. O livro, dividido em três volumes, foi publicado em 1851 com o título de A baleia e não obteve sucesso de crítica, tendo sido considerado o principal motivo para o declínio da carreira do autor.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Herman_Melville' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Herman Melville (Nova Iorque, 1º de agosto de 1819—Nova Iorque, 28 de setembro de 1891) foi um escritor, poeta e ensaísta estadunidense. Embora tenha obtido grande sucesso no início de sua carreira, sua popularidade foi decaindo ao longo dos anos. Faleceu quase completamente esquecido, sem conhecer o sucesso que sua mais importante obra, o romance Moby Dick, alcançaria no século XX. O livro, dividido em três volumes, foi publicado em 1851 com o título de A baleia e não obteve sucesso de crítica, tendo sido considerado o principal motivo para o declínio da carreira do autor.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Herman_Melville' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='MELVILLEhenry'; include '../design/poemfind.php'; ?>
		<?php $user = 'MELVILLEhenry'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>