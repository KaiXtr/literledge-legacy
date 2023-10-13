<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='HUMEdavid'");
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

		<?php $user = 'HUMEdavid'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			David Hume (Edimburgo, 7 de maio (ou 26 de abril-Antigo) de 1711 – Edimburgo, 25 de Agosto de 1776) foi um filósofo, historiador e ensaísta britânico nascido na Escócia que se tornou célebre por seu empirismo radical e seu ceticismo filosófico. Ao lado de John Locke e George Berkeley, David Hume compõe a famosa tríade do empirismo britânico, sendo considerado um dos mais importantes pensadores do chamado iluminismo escocês e da própria filosofia ocidental.

			David Hume opôs-se particularmente a Descartes e às filosofias que consideravam o espírito humano desde um ponto de vista teológico-metafísico. Assim David Hume abriu caminho à aplicação do método experimental aos fenômenos mentais. Sua importância no desenvolvimento do pensamento contemporâneo é considerável. Teve profunda influência sobre Kant, sobre a filosofia analítica do início do século XX e sobre a fenomenologia.

			O estudo da sua obra tem oscilado entre aqueles que colocam ênfase no lado cepticista (tais como Reid, Greene, e os positivistas lógicos) e aqueles que enfatizam o lado naturalista (como Kemp Smith, Stroud e Galen Strawson). Por muito tempo apenas se destacou em seu pensamento o ceticismo destrutivo. Somente no fim do século XX os comentadores se empenharam em mostrar o caráter positivo e construtivo do seu projeto filosófico.

			David Hume foi um leitor voraz. Entre suas fontes, incluem-se tanto a Filosofia antiga como o pensamento científico de sua época, ilustrado pela física e pela filosofia empirista. Fortemente influenciado por Locke e Berkeley mas também por vários filósofos franceses, como Pierre Bayle e Nicolas Malebranche, e diversas figuras dos círculos intelectuais ingleses, como Samuel Clarke, Francis Hutcheson (seu professor) e Joseph Butler (a quem ele enviou seu primeiro trabalho para apreciação), é entretanto a Newton que Hume deve seu método de análise, conforme assinalado no subtítulo do Tratado da Natureza Humana – Uma Tentativa de Introduzir o Método Experimental de Raciocínio nos Assuntos Morais.

			Seguindo atentamente os acontecimentos nas colônias americanas, tomou partido pela independência americana. Em 1775, disse a Benjamin Franklin: \"sou americano em meus princípios\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/David_Hume' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			David Hume (Edimburgo, 7 de maio (ou 26 de abril-Antigo) de 1711 – Edimburgo, 25 de Agosto de 1776) foi um filósofo, historiador e ensaísta britânico nascido na Escócia que se tornou célebre por seu empirismo radical e seu ceticismo filosófico. Ao lado de John Locke e George Berkeley, David Hume compõe a famosa tríade do empirismo britânico, sendo considerado um dos mais importantes pensadores do chamado iluminismo escocês e da própria filosofia ocidental.

			David Hume opôs-se particularmente a Descartes e às filosofias que consideravam o espírito humano desde um ponto de vista teológico-metafísico. Assim David Hume abriu caminho à aplicação do método experimental aos fenômenos mentais. Sua importância no desenvolvimento do pensamento contemporâneo é considerável. Teve profunda influência sobre Kant, sobre a filosofia analítica do início do século XX e sobre a fenomenologia.

			O estudo da sua obra tem oscilado entre aqueles que colocam ênfase no lado cepticista (tais como Reid, Greene, e os positivistas lógicos) e aqueles que enfatizam o lado naturalista (como Kemp Smith, Stroud e Galen Strawson). Por muito tempo apenas se destacou em seu pensamento o ceticismo destrutivo. Somente no fim do século XX os comentadores se empenharam em mostrar o caráter positivo e construtivo do seu projeto filosófico.

			David Hume foi um leitor voraz. Entre suas fontes, incluem-se tanto a Filosofia antiga como o pensamento científico de sua época, ilustrado pela física e pela filosofia empirista. Fortemente influenciado por Locke e Berkeley mas também por vários filósofos franceses, como Pierre Bayle e Nicolas Malebranche, e diversas figuras dos círculos intelectuais ingleses, como Samuel Clarke, Francis Hutcheson (seu professor) e Joseph Butler (a quem ele enviou seu primeiro trabalho para apreciação), é entretanto a Newton que Hume deve seu método de análise, conforme assinalado no subtítulo do Tratado da Natureza Humana – Uma Tentativa de Introduzir o Método Experimental de Raciocínio nos Assuntos Morais.

			Seguindo atentamente os acontecimentos nas colônias americanas, tomou partido pela independência americana. Em 1775, disse a Benjamin Franklin: \"sou americano em meus princípios\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/David_Hume' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			David Hume (Edimburgo, 7 de maio (ou 26 de abril-Antigo) de 1711 – Edimburgo, 25 de Agosto de 1776) foi um filósofo, historiador e ensaísta britânico nascido na Escócia que se tornou célebre por seu empirismo radical e seu ceticismo filosófico. Ao lado de John Locke e George Berkeley, David Hume compõe a famosa tríade do empirismo britânico, sendo considerado um dos mais importantes pensadores do chamado iluminismo escocês e da própria filosofia ocidental.

			David Hume opôs-se particularmente a Descartes e às filosofias que consideravam o espírito humano desde um ponto de vista teológico-metafísico. Assim David Hume abriu caminho à aplicação do método experimental aos fenômenos mentais. Sua importância no desenvolvimento do pensamento contemporâneo é considerável. Teve profunda influência sobre Kant, sobre a filosofia analítica do início do século XX e sobre a fenomenologia.

			O estudo da sua obra tem oscilado entre aqueles que colocam ênfase no lado cepticista (tais como Reid, Greene, e os positivistas lógicos) e aqueles que enfatizam o lado naturalista (como Kemp Smith, Stroud e Galen Strawson). Por muito tempo apenas se destacou em seu pensamento o ceticismo destrutivo. Somente no fim do século XX os comentadores se empenharam em mostrar o caráter positivo e construtivo do seu projeto filosófico.

			David Hume foi um leitor voraz. Entre suas fontes, incluem-se tanto a Filosofia antiga como o pensamento científico de sua época, ilustrado pela física e pela filosofia empirista. Fortemente influenciado por Locke e Berkeley mas também por vários filósofos franceses, como Pierre Bayle e Nicolas Malebranche, e diversas figuras dos círculos intelectuais ingleses, como Samuel Clarke, Francis Hutcheson (seu professor) e Joseph Butler (a quem ele enviou seu primeiro trabalho para apreciação), é entretanto a Newton que Hume deve seu método de análise, conforme assinalado no subtítulo do Tratado da Natureza Humana – Uma Tentativa de Introduzir o Método Experimental de Raciocínio nos Assuntos Morais.

			Seguindo atentamente os acontecimentos nas colônias americanas, tomou partido pela independência americana. Em 1775, disse a Benjamin Franklin: \"sou americano em meus princípios\".
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/David_Hume' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='HUMEdavid'; include '../design/poemfind.php'; ?>
		<?php $user = 'HUMEdavid'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>