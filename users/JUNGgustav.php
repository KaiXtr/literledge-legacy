<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='JUNGgustav'");
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

		<?php $user = 'JUNGgustav'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Carl Gustav Jung ( /ˈjʊŋ/; Kesswil, na Turgóvia, Suíça, 26 de julho de 1875 — Küsnacht, em Zurique, Suíça, 6 de junho de 1961) foi um psiquiatra e psicoterapeuta suíço que fundou a psicologia analítica. Jung propôs e desenvolveu os conceitos de personalidade extrovertida e introvertida, arquétipo e inconsciente coletivo. Seu trabalho tem sido influente na psiquiatria, psicologia, ciência da religião, literatura e áreas afins.

			O conceito central da psicologia analítica é a individuação - o processo psicológico de integração dos opostos, incluindo o consciente e o inconsciente, mantendo, no entanto, a sua autonomia relativa.[3] Jung considerou a individuação como o processo central do desenvolvimento humano.[4]

			Ele criou alguns dos mais conhecidos conceitos psicológicos, incluindo o arquétipo, o inconsciente coletivo, o complexo, e a sincronicidade. A classificação tipológica de Myers Briggs (MBTI), um instrumento popular psicométrico, foi desenvolvido a partir de suas teorias.

			Via a psique humana como "de natureza simbólica",[5] e fez, deste simbolismo, o foco de suas explorações. Ele é um dos maiores estudiosos contemporâneos de análise de sonhos e simbolização.[6] Embora exercesse sua profissão como médico e se considerasse um cientista,[7] muito do trabalho de sua vida foi passado a explorar áreas tangenciais à ciência, incluindo a filosofia oriental e ocidental, alquimia, astrologia e sociologia, bem como a literatura e as artes. Seu interesse pela filosofia e ocultismo levaram muitos a vê-lo como um místico.[7]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Carl_Gustav_Jung' > Wikipedia </a>
			<br />
			<iframe width="560" height="315" src="https://www.youtube.com/embed/2AMu-G51yTY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='JUNGgustav'; include '../design/poemfind.php'; ?>
		<?php $user = 'JUNGgustav'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>