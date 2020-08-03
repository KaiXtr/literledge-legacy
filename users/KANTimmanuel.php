<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='KANTimmanuel'");
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

		<?php $user = 'KANTimmanuel'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Immanuel Kant (Königsberg, 22 de abril de 1724 — Königsberg, 12 de fevereiro de 1804) foi um filósofo prussiano. Amplamente considerado como o principal filósofo da era moderna, Kant operou, na epistemologia, uma síntese entre o racionalismo continental (de René Descartes, Baruch Espinoza e Gottfried Wilhelm Leibniz, onde impera a forma de raciocínio dedutivo), e a tradição empírica inglesa (de David Hume, John Locke, ou George Berkeley, que valoriza a indução).

			Nascido de uma modesta família de artesãos, depois de um longo período como professor secundário de geografia, Kant veio a estudar filosofia, física e matemática na Universidade de Königsberg e em 1755 começou a lecionar ensinando Ciências Naturais. Em 1770 foi nomeado professor catedrático da Universidade de Königsberg, cidade da qual nunca saiu, levando uma vida monotonamente pontual e só dedicada aos estudos filosóficos. Realizou numerosos trabalhos sobre ciências naturais e exatas.

			Kant é famoso sobretudo pela elaboração do denominado idealismo transcendental: todos nós trazemos formas e conceitos a priori (aqueles que não vêm da experiência) para a experiência concreta do mundo, os quais seriam de outra forma impossíveis de determinar. A filosofia da natureza e da natureza humana de Kant é historicamente uma das mais determinantes fontes do relativismo conceptual que dominou a vida intelectual do século XX.

			Kant é também conhecido pela filosofia moral e pela proposta, a primeira moderna, de uma teoria da formação do Sistema Solar, conhecida como a hipótese Kant-Laplace.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Immanuel_Kant' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Immanuel Kant (Königsberg, 22 de abril de 1724 — Königsberg, 12 de fevereiro de 1804) foi um filósofo prussiano. Amplamente considerado como o principal filósofo da era moderna, Kant operou, na epistemologia, uma síntese entre o racionalismo continental (de René Descartes, Baruch Espinoza e Gottfried Wilhelm Leibniz, onde impera a forma de raciocínio dedutivo), e a tradição empírica inglesa (de David Hume, John Locke, ou George Berkeley, que valoriza a indução).

			Nascido de uma modesta família de artesãos, depois de um longo período como professor secundário de geografia, Kant veio a estudar filosofia, física e matemática na Universidade de Königsberg e em 1755 começou a lecionar ensinando Ciências Naturais. Em 1770 foi nomeado professor catedrático da Universidade de Königsberg, cidade da qual nunca saiu, levando uma vida monotonamente pontual e só dedicada aos estudos filosóficos. Realizou numerosos trabalhos sobre ciências naturais e exatas.

			Kant é famoso sobretudo pela elaboração do denominado idealismo transcendental: todos nós trazemos formas e conceitos a priori (aqueles que não vêm da experiência) para a experiência concreta do mundo, os quais seriam de outra forma impossíveis de determinar. A filosofia da natureza e da natureza humana de Kant é historicamente uma das mais determinantes fontes do relativismo conceptual que dominou a vida intelectual do século XX.

			Kant é também conhecido pela filosofia moral e pela proposta, a primeira moderna, de uma teoria da formação do Sistema Solar, conhecida como a hipótese Kant-Laplace.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Immanuel_Kant' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Immanuel Kant (Königsberg, 22 de abril de 1724 — Königsberg, 12 de fevereiro de 1804) foi um filósofo prussiano. Amplamente considerado como o principal filósofo da era moderna, Kant operou, na epistemologia, uma síntese entre o racionalismo continental (de René Descartes, Baruch Espinoza e Gottfried Wilhelm Leibniz, onde impera a forma de raciocínio dedutivo), e a tradição empírica inglesa (de David Hume, John Locke, ou George Berkeley, que valoriza a indução).

			Nascido de uma modesta família de artesãos, depois de um longo período como professor secundário de geografia, Kant veio a estudar filosofia, física e matemática na Universidade de Königsberg e em 1755 começou a lecionar ensinando Ciências Naturais. Em 1770 foi nomeado professor catedrático da Universidade de Königsberg, cidade da qual nunca saiu, levando uma vida monotonamente pontual e só dedicada aos estudos filosóficos. Realizou numerosos trabalhos sobre ciências naturais e exatas.

			Kant é famoso sobretudo pela elaboração do denominado idealismo transcendental: todos nós trazemos formas e conceitos a priori (aqueles que não vêm da experiência) para a experiência concreta do mundo, os quais seriam de outra forma impossíveis de determinar. A filosofia da natureza e da natureza humana de Kant é historicamente uma das mais determinantes fontes do relativismo conceptual que dominou a vida intelectual do século XX.

			Kant é também conhecido pela filosofia moral e pela proposta, a primeira moderna, de uma teoria da formação do Sistema Solar, conhecida como a hipótese Kant-Laplace.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Immanuel_Kant' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='KANTimmanuel'; include '../design/poemfind.php'; ?>
		<?php $user = 'KANTimmanuel'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>