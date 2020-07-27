<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ECOumberto'");
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

		<?php $user = 'ECOumberto'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Umberto Eco OMRI (Alexandria, 5 de janeiro de 1932 — Milão, 19 de fevereiro de 2016)[1] foi um escritor, filósofo, semiólogo, linguista e bibliófilo italiano de fama internacional.[2] Foi titular da cadeira de Semiótica e diretor da Escola Superior de ciências humanas na Universidade de Bolonha.[3] Ensinou temporariamente em Yale, na Universidade Columbia, em Harvard, Collège de France e Universidade de Toronto. Colaborador em diversos periódicos acadêmicos, dentre eles colunista da revista semanal italiana L'Espresso, na qual escreveu sobre uma infinidade de temas.[4] Eco foi, ainda, notório escritor de romances,[5] entre os quais O nome da rosa e O pêndulo de Foucault. Junto com o escritor e roteirista Jean-Claude Carrière, lançou em 2010 \"N’Espérez pas vous Débarrasser des Livres\" (“Não Espere se Livrar dos Livros”, publicado em Portugal com o título \"A Obsessão do Fogo\" no Brasil como \"Não contem com o fim do livro\").[6]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Umberto_Eco' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Umberto Eco OMRI (Alexandria, 5 de janeiro de 1932 — Milão, 19 de fevereiro de 2016)[1] foi um escritor, filósofo, semiólogo, linguista e bibliófilo italiano de fama internacional.[2] Foi titular da cadeira de Semiótica e diretor da Escola Superior de ciências humanas na Universidade de Bolonha.[3] Ensinou temporariamente em Yale, na Universidade Columbia, em Harvard, Collège de France e Universidade de Toronto. Colaborador em diversos periódicos acadêmicos, dentre eles colunista da revista semanal italiana L'Espresso, na qual escreveu sobre uma infinidade de temas.[4] Eco foi, ainda, notório escritor de romances,[5] entre os quais O nome da rosa e O pêndulo de Foucault. Junto com o escritor e roteirista Jean-Claude Carrière, lançou em 2010 \"N’Espérez pas vous Débarrasser des Livres\" (“Não Espere se Livrar dos Livros”, publicado em Portugal com o título \"A Obsessão do Fogo\" no Brasil como \"Não contem com o fim do livro\").[6]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Umberto_Eco' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Umberto Eco OMRI (Alexandria, 5 de janeiro de 1932 — Milão, 19 de fevereiro de 2016)[1] foi um escritor, filósofo, semiólogo, linguista e bibliófilo italiano de fama internacional.[2] Foi titular da cadeira de Semiótica e diretor da Escola Superior de ciências humanas na Universidade de Bolonha.[3] Ensinou temporariamente em Yale, na Universidade Columbia, em Harvard, Collège de France e Universidade de Toronto. Colaborador em diversos periódicos acadêmicos, dentre eles colunista da revista semanal italiana L'Espresso, na qual escreveu sobre uma infinidade de temas.[4] Eco foi, ainda, notório escritor de romances,[5] entre os quais O nome da rosa e O pêndulo de Foucault. Junto com o escritor e roteirista Jean-Claude Carrière, lançou em 2010 \"N’Espérez pas vous Débarrasser des Livres\" (“Não Espere se Livrar dos Livros”, publicado em Portugal com o título \"A Obsessão do Fogo\" no Brasil como \"Não contem com o fim do livro\").[6]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Umberto_Eco' > Wikipedia </a>
			<br />
					";
				}
			?>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/rMSOvDAyH5c\" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
		</div>
		<?php $auctor='ECOumberto'; include '../design/poemfind.php'; ?>
		<?php $user = 'ECOumberto'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>