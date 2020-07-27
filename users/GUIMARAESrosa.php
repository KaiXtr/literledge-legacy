<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='GUIMARAESrosa'");
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

		<?php $user = 'GUIMARAESrosa'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			João Guimarães Rosa (Cordisburgo, 27 de junho de 1908 — Rio de Janeiro, 19 de novembro de 1967) foi um escritor, diplomata, novelista, romancista, contista e médico brasileiro, considerado por muitos o maior escritor brasileiro do século XX e um dos maiores de todos os tempos. Foi o segundo marido de Aracy de Carvalho, conhecida como \"Anjo de Hamburgo\".[2][3]

			Os contos e romances escritos por Guimarães Rosa ambientam-se quase todos no chamado sertão brasileiro. A sua obra destaca-se, sobretudo, pelas inovações de linguagem, sendo marcada pela influência de falares populares e regionais que, somados à erudição do autor, permitiu a criação de inúmeros vocábulos a partir de arcaísmos e palavras populares, invenções e intervenções semânticas e sintáticas.[4]

			Foi eleito membro da Academia Brasileira de Letras em 6 de agosto de 1963, sendo o terceiro ocupante da cadeira nº 2, que tem como patrono Álvares de Azevedo.[5]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Guimar%C3%A3es_Rosa' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			João Guimarães Rosa (Cordisburgo, 27 de junho de 1908 — Rio de Janeiro, 19 de novembro de 1967) foi um escritor, diplomata, novelista, romancista, contista e médico brasileiro, considerado por muitos o maior escritor brasileiro do século XX e um dos maiores de todos os tempos. Foi o segundo marido de Aracy de Carvalho, conhecida como \"Anjo de Hamburgo\".[2][3]

			Os contos e romances escritos por Guimarães Rosa ambientam-se quase todos no chamado sertão brasileiro. A sua obra destaca-se, sobretudo, pelas inovações de linguagem, sendo marcada pela influência de falares populares e regionais que, somados à erudição do autor, permitiu a criação de inúmeros vocábulos a partir de arcaísmos e palavras populares, invenções e intervenções semânticas e sintáticas.[4]

			Foi eleito membro da Academia Brasileira de Letras em 6 de agosto de 1963, sendo o terceiro ocupante da cadeira nº 2, que tem como patrono Álvares de Azevedo.[5]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Guimar%C3%A3es_Rosa' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			João Guimarães Rosa (Cordisburgo, 27 de junho de 1908 — Rio de Janeiro, 19 de novembro de 1967) foi um escritor, diplomata, novelista, romancista, contista e médico brasileiro, considerado por muitos o maior escritor brasileiro do século XX e um dos maiores de todos os tempos. Foi o segundo marido de Aracy de Carvalho, conhecida como \"Anjo de Hamburgo\".[2][3]

			Os contos e romances escritos por Guimarães Rosa ambientam-se quase todos no chamado sertão brasileiro. A sua obra destaca-se, sobretudo, pelas inovações de linguagem, sendo marcada pela influência de falares populares e regionais que, somados à erudição do autor, permitiu a criação de inúmeros vocábulos a partir de arcaísmos e palavras populares, invenções e intervenções semânticas e sintáticas.[4]

			Foi eleito membro da Academia Brasileira de Letras em 6 de agosto de 1963, sendo o terceiro ocupante da cadeira nº 2, que tem como patrono Álvares de Azevedo.[5]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Guimar%C3%A3es_Rosa' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='GUIMARAESrosa'; include '../design/poemfind.php'; ?>
		<?php $user = 'GUIMARAESrosa'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>