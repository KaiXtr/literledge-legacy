<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='VERNEjules'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'];}
				else {$v = $i[$_COOKIE['lang']];}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'VERNEjules'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Jules Gabriel Verne, conhecido nos países de língua portuguesa por Júlio Verne (Nantes, 8 de fevereiro de 1828 — Amiens, 24 de março de 1905), foi um escritor francês. <br />
			<br />
			Júlio Verne foi o primogênito dos cinco filhos de Pierre Verne, advogado, e Sophie Allote de la Fuÿe, esta de uma família burguesa de Nantes. <br />
			É considerado por críticos literários o inventor do gênero de ficção científica, tendo feito predições em seus livros sobre o aparecimento de novos avanços científicos, <br />
			como os submarinos, as máquinas voadoras e a viagem à Lua. <br />
			<br />
			Até hoje, Júlio Verne é um dos escritores cuja obra foi mais traduzida em toda a história, com traduções em 148 línguas, segundo estatísticas da UNESCO, <br />
			tendo escrito mais de 100 livros. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Júlio_Verne' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Jules Gabriel Verne, conhecido nos países de língua portuguesa por Júlio Verne (Nantes, 8 de fevereiro de 1828 — Amiens, 24 de março de 1905), foi um escritor francês. <br />
			<br />
			Júlio Verne foi o primogênito dos cinco filhos de Pierre Verne, advogado, e Sophie Allote de la Fuÿe, esta de uma família burguesa de Nantes. <br />
			É considerado por críticos literários o inventor do gênero de ficção científica, tendo feito predições em seus livros sobre o aparecimento de novos avanços científicos, <br />
			como os submarinos, as máquinas voadoras e a viagem à Lua. <br />
			<br />
			Até hoje, Júlio Verne é um dos escritores cuja obra foi mais traduzida em toda a história, com traduções em 148 línguas, segundo estatísticas da UNESCO, <br />
			tendo escrito mais de 100 livros. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Júlio_Verne' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Jules Gabriel Verne, conhecido nos países de língua portuguesa por Júlio Verne (Nantes, 8 de fevereiro de 1828 — Amiens, 24 de março de 1905), foi um escritor francês. <br />
			<br />
			Júlio Verne foi o primogênito dos cinco filhos de Pierre Verne, advogado, e Sophie Allote de la Fuÿe, esta de uma família burguesa de Nantes. <br />
			É considerado por críticos literários o inventor do gênero de ficção científica, tendo feito predições em seus livros sobre o aparecimento de novos avanços científicos, <br />
			como os submarinos, as máquinas voadoras e a viagem à Lua. <br />
			<br />
			Até hoje, Júlio Verne é um dos escritores cuja obra foi mais traduzida em toda a história, com traduções em 148 línguas, segundo estatísticas da UNESCO, <br />
			tendo escrito mais de 100 livros. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Júlio_Verne' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='VERNEjules'; include '../design/poemfind.php'; ?>
		<?php $user = 'VERNEjules'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>