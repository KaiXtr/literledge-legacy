<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='MARXkarl'");
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

		<?php $user = 'MARXkarl'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Karl Marx[nota 1] (Tréveris, 5 de maio de 1818 — Londres, 14 de março de 1883)[2] foi um filósofo, sociólogo, historiador, economista, jornalista e revolucionário <br />
			 socialista. Nascido na Prússia, mais tarde se tornou apátrida e passou grande parte de sua vida em Londres, no Reino Unido. A obra de Marx em economia estabeleceu <br />
			 a base para muito do entendimento atual sobre o trabalho e sua relação com o capital, além do pensamento econômico posterior.[3][4][5][6] Publicou vários livros <br />
			 durante sua vida, sendo O Manifesto Comunista (1848) e O Capital (1867-1894) os mais proeminentes. <br />
			 <br />
			Marx nasceu numa família de classe média em Tréveris, na Renânia prussiana, e estudou nas universidades de Bonn e Berlim, onde se interessou pelas ideias filosóficas <br />
			dos jovens hegelianos. Depois dos estudos, escreveu para o Rheinische Zeitung, um jornal radical publicado em Colônia, e começou a trabalhar na teoria da concepção <br />
			materialista da história. Em 1843, mudou-se para Paris, onde começou a escrever para outros jornais radicais e conheceu Friedrich Engels, que se tornaria seu amigo <br />
			de longa data e colaborador. Em 1849, foi exilado e se mudou para Londres juntamente a sua esposa e filhos, onde continuou a escrever e formular suas teorias sobre <br />
			a atividade econômica e social. Também fez campanha para o socialismo e tornou-se uma figura significativa na Associação Internacional dos Trabalhadores.[7] <br />
			<br />
			As teorias de Marx sobre a sociedade, a economia e a política — a compreensão coletiva do que é conhecido como o marxismo — sustentam que as sociedades humanas <br />
			progridem através da luta de classes (um conflito entre uma classe social que controla os meios de produção e a classe trabalhadora, que fornece a mão de obra <br />
			para a produção) e que o Estado foi criado para proteger os interesses da classe dominante,[8] embora seja apresentado como um instrumento que representa o <br />
			interesse comum de todos. Além disso, ele previu que, assim como os sistemas socioeconômicos anteriores, o capitalismo produziria tensões internas que conduziriam <br />
			à sua autodestruição e substituição por um novo sistema: o socialismo. Ele argumentava que os antagonismos no sistema capitalista, entre a burguesia e o proletariado,[9] <br />
			seriam consequência de uma guerra perpétua entre a primeira e as demais classes ao longo da história.[10] Isto, associado à sociedade industrial e ao <br />
			acúmulo de capital,[11] geraria a sua classe antagônica,[12] que resultaria na "conquista do poder político pela classe operária e, eventualmente, no estabelecimento <br />
			de uma sociedade sem classes[13][14] e apátrida — o comunismo — regida por uma livre associação de produtores.[15][16] Marx ativamente argumentava que a <br />
			classe trabalhadora deveria realizar uma ação revolucionária organizada para derrubar o capitalismo e provocar mudanças socioeconômicas.[17] <br />
			<br />
			Elogiado e criticado, Marx tem sido descrito como uma das figuras mais influentes na história da humanidade.[18] Muitos intelectuais, sindicatos e <br />
			partidos políticos em nível mundial foram influenciados por suas ideias, com muitas variações sobre o seu trabalho base. Marx é normalmente citado, ao lado de <br />
			Émile Durkheim e Max Weber, como um dos três principais arquitetos da ciência social moderna.[19] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Karl_Marx' > Wikipedia </a>
		</div>
		<?php $auctor='MARXkarl'; include '../design/poemfind.php'; ?>
		<?php $user = 'MARXkarl'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>