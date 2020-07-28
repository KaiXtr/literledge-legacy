<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='CRUZsousa'");
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

		<?php $user = 'CRUZsousa'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			João da Cruz e Sousa (Nossa Senhora do Desterro, 24 de novembro de 1861 — Curral Novo, 19 de março de 1898) foi um poeta brasileiro. Com a alcunha de Dante Negro ou Cisne Negro, foi um dos precursores do simbolismo no Brasil.

			Segundo Antonio Candido, Cruz e Sousa foi o \"único escritor eminente de pura raça negra na literatura brasileira, onde são numerosos os mestiços\".
			Nasceu dia 24 de novembro de 1861, filho dos escravos alforriados Guilherme da Cruz, mestre-pedreiro, e Carolina Eva da Conceição. João da Cruz desde pequeno recebeu a tutela e uma educação refinada de seu ex-senhor, o marechal Guilherme Xavier de Sousa - de quem adotou o nome de família, Sousa. A esposa de Guilherme Xavier de Sousa, Dona Clarinda Fagundes Xavier de Sousa, não tinha filhos, e passou a proteger e cuidar da educação de João. Aprendeu francês, latim e grego, além de ter sido discípulo do alemão Fritz Müller, com quem aprendeu Matemática e Ciências Naturais.

			Em 1881, dirigiu o jornal Tribuna Popular, no qual combateu a escravidão e o preconceito racial. Em 1883, foi recusado como promotor de Laguna por ser negro. Em 1885, lançou o primeiro livro, Tropos e Fantasias em parceria com Virgílio Várzea. Cinco anos depois foi para o Rio de Janeiro, onde trabalhou como arquivista na Estrada de Ferro Central do Brasil, colaborando também com diversos jornais. Em fevereiro de 1893, publicou Missal (prosa poética baudelairiana) e em agosto, Broquéis (poesia), dando início ao simbolismo no Brasil que se estende até 1922. Em novembro desse mesmo ano casou-se com Gavita Gonçalves, também negra, com quem teve quatro filhos, todos mortos prematuramente por tuberculose, levando-a à loucura.
			Fonte: <a href='https://pt.wikipedia.org/wiki/Cruz_e_Sousa' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			João da Cruz e Sousa (Nossa Senhora do Desterro, 24 de novembro de 1861 — Curral Novo, 19 de março de 1898) foi um poeta brasileiro. Com a alcunha de Dante Negro ou Cisne Negro, foi um dos precursores do simbolismo no Brasil.

			Segundo Antonio Candido, Cruz e Sousa foi o \"único escritor eminente de pura raça negra na literatura brasileira, onde são numerosos os mestiços\".
			Nasceu dia 24 de novembro de 1861, filho dos escravos alforriados Guilherme da Cruz, mestre-pedreiro, e Carolina Eva da Conceição. João da Cruz desde pequeno recebeu a tutela e uma educação refinada de seu ex-senhor, o marechal Guilherme Xavier de Sousa - de quem adotou o nome de família, Sousa. A esposa de Guilherme Xavier de Sousa, Dona Clarinda Fagundes Xavier de Sousa, não tinha filhos, e passou a proteger e cuidar da educação de João. Aprendeu francês, latim e grego, além de ter sido discípulo do alemão Fritz Müller, com quem aprendeu Matemática e Ciências Naturais.

			Em 1881, dirigiu o jornal Tribuna Popular, no qual combateu a escravidão e o preconceito racial. Em 1883, foi recusado como promotor de Laguna por ser negro. Em 1885, lançou o primeiro livro, Tropos e Fantasias em parceria com Virgílio Várzea. Cinco anos depois foi para o Rio de Janeiro, onde trabalhou como arquivista na Estrada de Ferro Central do Brasil, colaborando também com diversos jornais. Em fevereiro de 1893, publicou Missal (prosa poética baudelairiana) e em agosto, Broquéis (poesia), dando início ao simbolismo no Brasil que se estende até 1922. Em novembro desse mesmo ano casou-se com Gavita Gonçalves, também negra, com quem teve quatro filhos, todos mortos prematuramente por tuberculose, levando-a à loucura.
			Fonte: <a href='https://pt.wikipedia.org/wiki/Cruz_e_Sousa' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			João da Cruz e Sousa (Nossa Senhora do Desterro, 24 de novembro de 1861 — Curral Novo, 19 de março de 1898) foi um poeta brasileiro. Com a alcunha de Dante Negro ou Cisne Negro, foi um dos precursores do simbolismo no Brasil.

			Segundo Antonio Candido, Cruz e Sousa foi o \"único escritor eminente de pura raça negra na literatura brasileira, onde são numerosos os mestiços\".
			Nasceu dia 24 de novembro de 1861, filho dos escravos alforriados Guilherme da Cruz, mestre-pedreiro, e Carolina Eva da Conceição. João da Cruz desde pequeno recebeu a tutela e uma educação refinada de seu ex-senhor, o marechal Guilherme Xavier de Sousa - de quem adotou o nome de família, Sousa. A esposa de Guilherme Xavier de Sousa, Dona Clarinda Fagundes Xavier de Sousa, não tinha filhos, e passou a proteger e cuidar da educação de João. Aprendeu francês, latim e grego, além de ter sido discípulo do alemão Fritz Müller, com quem aprendeu Matemática e Ciências Naturais.

			Em 1881, dirigiu o jornal Tribuna Popular, no qual combateu a escravidão e o preconceito racial. Em 1883, foi recusado como promotor de Laguna por ser negro. Em 1885, lançou o primeiro livro, Tropos e Fantasias em parceria com Virgílio Várzea. Cinco anos depois foi para o Rio de Janeiro, onde trabalhou como arquivista na Estrada de Ferro Central do Brasil, colaborando também com diversos jornais. Em fevereiro de 1893, publicou Missal (prosa poética baudelairiana) e em agosto, Broquéis (poesia), dando início ao simbolismo no Brasil que se estende até 1922. Em novembro desse mesmo ano casou-se com Gavita Gonçalves, também negra, com quem teve quatro filhos, todos mortos prematuramente por tuberculose, levando-a à loucura.
			Fonte: <a href='https://pt.wikipedia.org/wiki/Cruz_e_Sousa' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='CRUZsousa'; include '../design/poemfind.php'; ?>
		<?php $user = 'CRUZsousa'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>