<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='MACHIAVELLIniccolo'");
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

		<?php $user = 'MACHIAVELLIniccolo'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Nicolau Maquiavel (em italiano: Niccolò di Bernardo dei Machiavelli; Florença, 3 de maio de 1469 — Florença, 21 de junho de 1527) foi um filósofo, historiador, <br />
			poeta, diplomata e músico de origem florentina do Renascimento. É reconhecido como fundador do pensamento e da ciência política moderna, pelo fato de ter <br />
			escrito sobre o Estado e o governo como realmente são, e não como deveriam ser. <br />
			<br />
			Desde as primeiras críticas, feitas postumamente pelo cardeal inglês Reginald Pole, cunhou-se um entendimento equivocado da obra completa de Maquiavel. <br />
			Com o choque de realidade causado pelas suas ideias sobre a dinâmica do poder, seus textos geraram uma ameaça aos valores cristãos vigentes, <br />
			principalmente devido às análises do poder político da igreja católica contidas em \"O Príncipe\". Já na literatura e tetro ingleses do século 17, foi associado <br />
			diretamente ao Diabo por meio das referências caricaturais e do apelido \"Old Nick\". Surgiu, aí, na visão do pensamento enganoso e da trapaça, o adjetivo <br />
			maquiavélico nas línguas ocidentais. <br />
			<br />
			Maquiavel viveu a juventude sob o esplendor político da República Florentina durante o governo de Lourenço de Médici. Entrou para a política aos 29 anos de idade no <br />
			cargo de Secretário da Segunda Chancelaria. Nesse cargo, Maquiavel observou o comportamento de grandes nomes da época e a partir dessa experiência retirou alguns <br />
			postulados para sua obra. Depois de servir em Florença durante catorze anos foi afastado e escreveu suas principais obras. Conseguiu também algumas missões <br />
			de pequena importância, mas jamais voltou ao seu antigo posto como desejava. <br />
			<br />
			Como renascentista, Maquiavel utilizou-se de autores e conceitos da Antiguidade Clássica de maneira nova. Um dos principais autores foi Tito Lívio, além de <br />
			outros lidos através de traduções latinas, e entre os conceitos apropriados por ele encontram-se o de virtù e o de fortuna. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Nicolau_Maquiavel' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Nicolau Maquiavel (em italiano: Niccolò di Bernardo dei Machiavelli; Florença, 3 de maio de 1469 — Florença, 21 de junho de 1527) foi um filósofo, historiador, <br />
			poeta, diplomata e músico de origem florentina do Renascimento. É reconhecido como fundador do pensamento e da ciência política moderna, pelo fato de ter <br />
			escrito sobre o Estado e o governo como realmente são, e não como deveriam ser. <br />
			<br />
			Desde as primeiras críticas, feitas postumamente pelo cardeal inglês Reginald Pole, cunhou-se um entendimento equivocado da obra completa de Maquiavel. <br />
			Com o choque de realidade causado pelas suas ideias sobre a dinâmica do poder, seus textos geraram uma ameaça aos valores cristãos vigentes, <br />
			principalmente devido às análises do poder político da igreja católica contidas em \"O Príncipe\". Já na literatura e tetro ingleses do século 17, foi associado <br />
			diretamente ao Diabo por meio das referências caricaturais e do apelido \"Old Nick\". Surgiu, aí, na visão do pensamento enganoso e da trapaça, o adjetivo <br />
			maquiavélico nas línguas ocidentais. <br />
			<br />
			Maquiavel viveu a juventude sob o esplendor político da República Florentina durante o governo de Lourenço de Médici. Entrou para a política aos 29 anos de idade no <br />
			cargo de Secretário da Segunda Chancelaria. Nesse cargo, Maquiavel observou o comportamento de grandes nomes da época e a partir dessa experiência retirou alguns <br />
			postulados para sua obra. Depois de servir em Florença durante catorze anos foi afastado e escreveu suas principais obras. Conseguiu também algumas missões <br />
			de pequena importância, mas jamais voltou ao seu antigo posto como desejava. <br />
			<br />
			Como renascentista, Maquiavel utilizou-se de autores e conceitos da Antiguidade Clássica de maneira nova. Um dos principais autores foi Tito Lívio, além de <br />
			outros lidos através de traduções latinas, e entre os conceitos apropriados por ele encontram-se o de virtù e o de fortuna. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Nicolau_Maquiavel' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Nicolau Maquiavel (em italiano: Niccolò di Bernardo dei Machiavelli; Florença, 3 de maio de 1469 — Florença, 21 de junho de 1527) foi um filósofo, historiador, <br />
			poeta, diplomata e músico de origem florentina do Renascimento. É reconhecido como fundador do pensamento e da ciência política moderna, pelo fato de ter <br />
			escrito sobre o Estado e o governo como realmente são, e não como deveriam ser. <br />
			<br />
			Desde as primeiras críticas, feitas postumamente pelo cardeal inglês Reginald Pole, cunhou-se um entendimento equivocado da obra completa de Maquiavel. <br />
			Com o choque de realidade causado pelas suas ideias sobre a dinâmica do poder, seus textos geraram uma ameaça aos valores cristãos vigentes, <br />
			principalmente devido às análises do poder político da igreja católica contidas em \"O Príncipe\". Já na literatura e tetro ingleses do século 17, foi associado <br />
			diretamente ao Diabo por meio das referências caricaturais e do apelido \"Old Nick\". Surgiu, aí, na visão do pensamento enganoso e da trapaça, o adjetivo <br />
			maquiavélico nas línguas ocidentais. <br />
			<br />
			Maquiavel viveu a juventude sob o esplendor político da República Florentina durante o governo de Lourenço de Médici. Entrou para a política aos 29 anos de idade no <br />
			cargo de Secretário da Segunda Chancelaria. Nesse cargo, Maquiavel observou o comportamento de grandes nomes da época e a partir dessa experiência retirou alguns <br />
			postulados para sua obra. Depois de servir em Florença durante catorze anos foi afastado e escreveu suas principais obras. Conseguiu também algumas missões <br />
			de pequena importância, mas jamais voltou ao seu antigo posto como desejava. <br />
			<br />
			Como renascentista, Maquiavel utilizou-se de autores e conceitos da Antiguidade Clássica de maneira nova. Um dos principais autores foi Tito Lívio, além de <br />
			outros lidos através de traduções latinas, e entre os conceitos apropriados por ele encontram-se o de virtù e o de fortuna. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Nicolau_Maquiavel' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='MACHIAVELLIniccolo'; include '../design/poemfind.php'; ?>
		<?php $user = 'MACHIAVELLIniccolo'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>