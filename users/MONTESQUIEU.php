<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='MONTESQUIEU'");
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

		<?php $user = 'MONTESQUIEU'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Charles-Louis de Secondat, barão de La Brède e de Montesquieu, conhecido como Montesquieu (castelo de La Brède, próximo a Bordéus, 18 de janeiro de 1689 — Paris, 10 de fevereiro de 1755), foi um político, filósofo e escritor francês. Ficou famoso pela sua teoria da separação dos poderes,[1] atualmente consagrada em muitas das modernas constituições internacionais, inclusive a Constituição Brasileira.[2]

			Aristocrata, filho de família nobre, nasceu no dia 18 de Janeiro de 1689 e cedo teve formação iluminista com padres oratorianos. Revelou-se um crítico severo e irônico da monarquia absolutista, bem como do clero católico.[1] Adquiriu sólidos conhecimentos humanísticos e jurídicos, mas também frequentou em Paris os círculos da boêmia literária. Em 1714, entrou para o tribunal provincial de Bordéus, que presidiu de 1716 a 1726. Fez longas viagens pela Europa e, de 1729 a 1731, esteve na Inglaterra.

			Proficiente escritor, concebeu livros importantes e influentes, como Cartas persas (1721), Considerações sobre as causas da grandeza dos romanos e de sua decadência (1734) e O Espírito das leis (1748), a sua mais famosa obra. Contribuiu também para a célebre Enciclopédia, juntamente com Diderot e D'Alembert.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Montesquieu' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Charles-Louis de Secondat, barão de La Brède e de Montesquieu, conhecido como Montesquieu (castelo de La Brède, próximo a Bordéus, 18 de janeiro de 1689 — Paris, 10 de fevereiro de 1755), foi um político, filósofo e escritor francês. Ficou famoso pela sua teoria da separação dos poderes,[1] atualmente consagrada em muitas das modernas constituições internacionais, inclusive a Constituição Brasileira.[2]

			Aristocrata, filho de família nobre, nasceu no dia 18 de Janeiro de 1689 e cedo teve formação iluminista com padres oratorianos. Revelou-se um crítico severo e irônico da monarquia absolutista, bem como do clero católico.[1] Adquiriu sólidos conhecimentos humanísticos e jurídicos, mas também frequentou em Paris os círculos da boêmia literária. Em 1714, entrou para o tribunal provincial de Bordéus, que presidiu de 1716 a 1726. Fez longas viagens pela Europa e, de 1729 a 1731, esteve na Inglaterra.

			Proficiente escritor, concebeu livros importantes e influentes, como Cartas persas (1721), Considerações sobre as causas da grandeza dos romanos e de sua decadência (1734) e O Espírito das leis (1748), a sua mais famosa obra. Contribuiu também para a célebre Enciclopédia, juntamente com Diderot e D'Alembert.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Montesquieu' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Charles-Louis de Secondat, barão de La Brède e de Montesquieu, conhecido como Montesquieu (castelo de La Brède, próximo a Bordéus, 18 de janeiro de 1689 — Paris, 10 de fevereiro de 1755), foi um político, filósofo e escritor francês. Ficou famoso pela sua teoria da separação dos poderes,[1] atualmente consagrada em muitas das modernas constituições internacionais, inclusive a Constituição Brasileira.[2]

			Aristocrata, filho de família nobre, nasceu no dia 18 de Janeiro de 1689 e cedo teve formação iluminista com padres oratorianos. Revelou-se um crítico severo e irônico da monarquia absolutista, bem como do clero católico.[1] Adquiriu sólidos conhecimentos humanísticos e jurídicos, mas também frequentou em Paris os círculos da boêmia literária. Em 1714, entrou para o tribunal provincial de Bordéus, que presidiu de 1716 a 1726. Fez longas viagens pela Europa e, de 1729 a 1731, esteve na Inglaterra.

			Proficiente escritor, concebeu livros importantes e influentes, como Cartas persas (1721), Considerações sobre as causas da grandeza dos romanos e de sua decadência (1734) e O Espírito das leis (1748), a sua mais famosa obra. Contribuiu também para a célebre Enciclopédia, juntamente com Diderot e D'Alembert.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Montesquieu' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='MONTESQUIEU'; include '../design/poemfind.php'; ?>
		<?php $user = 'MONTESQUIEU'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>