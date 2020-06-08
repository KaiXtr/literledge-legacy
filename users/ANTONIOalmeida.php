<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='ANTONIOalmeida'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['name'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'ANTONIOalmeida'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Manuel Antônio de Almeida (Rio de Janeiro, 17 de novembro de 1830 — Macaé, 28 de novembro de 1861) foi um médico, escritor e professor brasileiro.[1] <br />
			Filho do tenente Antônio de Almeida, e de Josefina Maria de Almeida. Seu pai morreu quando Manuel Antônio tinha dez anos de idade. Concluiu a Faculdade de Medicina  <br />
			em 1855, mas nunca exerceu a profissão. Dificuldades financeiras o levaram ao jornalismo e às letras.  <br />
			<br />
			Quando tinha por volta de vinte anos, sua mãe faleceu.  <br />
			<br />
			Foi redator do jornal Correio Mercantil, para o qual escrevia um suplemento, A Pacotilha. Neste suplemento publicou nas páginas dos folhetins sua  <br />
			única obra em prosa de fôlego, a novela Memórias de um Sargento de Milícias, de 1852 a 1853, em capítulos.  <br />
			<br />
			Pertenceu à primeira sociedade carnavalesca do Rio de Janeiro, o Congresso das Sumidades Carnavalescas, fundado em 1855.  <br />
			<br />
			Foi professor do Liceu de Artes e Ofícios do Rio de Janeiro.  <br />
			<br />
			Em 1858 foi nomeado diretor da Tipografia Nacional, onde conheceu o jovem aprendiz de tipógrafo Machado de Assis.  <br />
			<br />
			Procurou iniciar a carreira na política. Quando iria fazer as primeiras consultas entre os eleitores, morreu no naufrágio do navio Hermes, em 1861,  <br />
			na costa fluminense.  <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Manuel_Antônio_de_Almeida' > Wikipedia </a>
		</div>
		<?php $auctor='ANTONIOalmeida'; include '../design/poemfind.php'; ?>
		<?php $user = 'ANTONIOalmeida'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>