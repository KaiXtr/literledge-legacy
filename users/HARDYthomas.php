<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='HARDYthomas'");
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

		<?php $user = 'HARDYthomas'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Thomas Hardy (Higher Bockhampton, Dorset, 2 de junho de 1840 - Max Gate, Dorchester, 11 de janeiro de 1928) foi um novelista e poeta inglês. Autor de obras de grande importância, conhecido pelo pessimismo radical que caracteriza os seus romances.

			De uma família de classe média, filho de um próspero construtor civil, passou sua infância no campo. Estudou arquitetura e trabalhou na restauração de edifícios antigos, principalmente igrejas, enquanto escrevia poemas que só publicaria no fim da vida, quando se revelou um extraordinário poeta. No seu período de maturidade (1878-1895), escreveu obras que se tornaram clássicos da literatura inglesa. Também foi um brilhante contista, que traçou perfis psicológicos antitéticos, portadores e conscientes de seus desejos sexuais e de sua própria opressão pela sociedade. O estilo prosaico e objetivo da sua linguagem, cuja temática voltava-se para a velhice, o amor e a morte, influiu na reação anti-romântica. Por tudo isso, foi considerado o \"último dos grandes vitorianos\".

			Hardy casou-se com Emma Lavinia Gifford em 1874. Após a morte da esposa, em 1912, casou-se com Florence Emily Dugdale, autora de livros infantis. Morreu de causas naturais aos 87 anos. Ele está enterrado na Abadia de Westminster, com a excepção do seu coração, que está enterrado em Stinsford no condado de Dorset, próximo de Dorchester.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Thomas_Hardy' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Thomas Hardy (Higher Bockhampton, Dorset, 2 de junho de 1840 - Max Gate, Dorchester, 11 de janeiro de 1928) foi um novelista e poeta inglês. Autor de obras de grande importância, conhecido pelo pessimismo radical que caracteriza os seus romances.

			De uma família de classe média, filho de um próspero construtor civil, passou sua infância no campo. Estudou arquitetura e trabalhou na restauração de edifícios antigos, principalmente igrejas, enquanto escrevia poemas que só publicaria no fim da vida, quando se revelou um extraordinário poeta. No seu período de maturidade (1878-1895), escreveu obras que se tornaram clássicos da literatura inglesa. Também foi um brilhante contista, que traçou perfis psicológicos antitéticos, portadores e conscientes de seus desejos sexuais e de sua própria opressão pela sociedade. O estilo prosaico e objetivo da sua linguagem, cuja temática voltava-se para a velhice, o amor e a morte, influiu na reação anti-romântica. Por tudo isso, foi considerado o \"último dos grandes vitorianos\".

			Hardy casou-se com Emma Lavinia Gifford em 1874. Após a morte da esposa, em 1912, casou-se com Florence Emily Dugdale, autora de livros infantis. Morreu de causas naturais aos 87 anos. Ele está enterrado na Abadia de Westminster, com a excepção do seu coração, que está enterrado em Stinsford no condado de Dorset, próximo de Dorchester.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Thomas_Hardy' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Thomas Hardy (Higher Bockhampton, Dorset, 2 de junho de 1840 - Max Gate, Dorchester, 11 de janeiro de 1928) foi um novelista e poeta inglês. Autor de obras de grande importância, conhecido pelo pessimismo radical que caracteriza os seus romances.

			De uma família de classe média, filho de um próspero construtor civil, passou sua infância no campo. Estudou arquitetura e trabalhou na restauração de edifícios antigos, principalmente igrejas, enquanto escrevia poemas que só publicaria no fim da vida, quando se revelou um extraordinário poeta. No seu período de maturidade (1878-1895), escreveu obras que se tornaram clássicos da literatura inglesa. Também foi um brilhante contista, que traçou perfis psicológicos antitéticos, portadores e conscientes de seus desejos sexuais e de sua própria opressão pela sociedade. O estilo prosaico e objetivo da sua linguagem, cuja temática voltava-se para a velhice, o amor e a morte, influiu na reação anti-romântica. Por tudo isso, foi considerado o \"último dos grandes vitorianos\".

			Hardy casou-se com Emma Lavinia Gifford em 1874. Após a morte da esposa, em 1912, casou-se com Florence Emily Dugdale, autora de livros infantis. Morreu de causas naturais aos 87 anos. Ele está enterrado na Abadia de Westminster, com a excepção do seu coração, que está enterrado em Stinsford no condado de Dorset, próximo de Dorchester.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Thomas_Hardy' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='HARDYthomas'; include '../design/poemfind.php'; ?>
		<?php $user = 'HARDYthomas'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>