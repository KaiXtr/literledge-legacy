<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='PLATO'");
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

		<?php $user = 'PLATO'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Platão (em grego antigo: Πλάτων, transl. Plátōn, \"amplo\", Atenas,[nota 1] 428/427[nota 2] – Atenas, 348/347 a.C.) foi um filósofo e matemático do período clássico da Grécia Antiga, autor de diversos diálogos filosóficos e fundador da Academia em Atenas, a primeira instituição de educação superior do mundo ocidental. Ele é amplamente considerado a figura central na história do grego antigo e da filosofia ocidental, juntamente com seu mentor, Sócrates, e seu pupilo, Aristóteles.[11] Platão ajudou a construir os alicerces da filosofia natural, da ciência e da filosofia ocidental, e também tem sido frequentemente citado como um dos fundadores da religião ocidental, da ciência[12] e da espiritualidade.[13] O assim chamado neoplatonismo de filósofos como Plotino e Porfírio influenciou Santo Agostinho e, portanto, o cristianismo, bem como a filosofia árabe[14][15] e judaica.[16][17] Alfred North Whitehead observou certa vez: \"a caracterização geral mais segura da tradição filosófica europeia é de que ela consiste em uma série de notas de rodapé sobre Platão\".[18]

			Platão era um racionalista, realista, idealista e dualista e a ele tem sido associadas muitas das ideias que inspiraram essas filosofias mais tarde.[19] Foi o inovador do diálogo escrito e das formas dialéticas da filosofia. Platão também parece ter sido o fundador da filosofia política ocidental. Sua mais famosa contribuição leva seu nome, platonismo (também ambiguamente chamado de realismo platônico ou idealismo platônico), a doutrina das Formas conhecidas pela razão pura para fornecer uma solução realista para o problema dos universais. Ele também é o epônimo do amor platônico e dos sólidos platônicos. Alguns já alegaram que seu nome verdadeiro tenha sido Arístocles.[20]

			Acredita-se que suas influências filosóficas mais decisivas tenham sido da mesma linha de Sócrates, do pré-socrático Pitágoras, Heráclito e Parmênides, embora poucas das obras de seus antecessores permaneçam íntegras e muito do que sabemos sobre essas figuras hoje deriva do próprio Platão.[21] O filósofo lituano Algis Uždavinys chega a propôr e evidenciar de forma acadêmica que sua filosofia deriva de uma continuidade de um pensamento filosófico que pode ser visto desde as inscrições do Egito Antigo, relatada por diversas fontes gregas antigas.[22] Pesquisadores da chamada Escola Tübingen e de Milão alegam que seu corpo textual contém fragmentos de doutrinas não escritas que eram lecionadas oralmente na sua Academia.[23][24] Ao contrário do trabalho de quase todos os seus contemporâneos, acredita-se que o corpo inteiro de trabalho de Platão tenha sobrevivido intacto por mais de 2 400 anos.[25] Embora sua popularidade tenha oscilado ao longo dos anos, os trabalhos de Platão nunca ficaram sem leitores desde a época em que foram escritos.[26]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Plat%C3%A3o' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Platão (em grego antigo: Πλάτων, transl. Plátōn, \"amplo\", Atenas,[nota 1] 428/427[nota 2] – Atenas, 348/347 a.C.) foi um filósofo e matemático do período clássico da Grécia Antiga, autor de diversos diálogos filosóficos e fundador da Academia em Atenas, a primeira instituição de educação superior do mundo ocidental. Ele é amplamente considerado a figura central na história do grego antigo e da filosofia ocidental, juntamente com seu mentor, Sócrates, e seu pupilo, Aristóteles.[11] Platão ajudou a construir os alicerces da filosofia natural, da ciência e da filosofia ocidental, e também tem sido frequentemente citado como um dos fundadores da religião ocidental, da ciência[12] e da espiritualidade.[13] O assim chamado neoplatonismo de filósofos como Plotino e Porfírio influenciou Santo Agostinho e, portanto, o cristianismo, bem como a filosofia árabe[14][15] e judaica.[16][17] Alfred North Whitehead observou certa vez: \"a caracterização geral mais segura da tradição filosófica europeia é de que ela consiste em uma série de notas de rodapé sobre Platão\".[18]

			Platão era um racionalista, realista, idealista e dualista e a ele tem sido associadas muitas das ideias que inspiraram essas filosofias mais tarde.[19] Foi o inovador do diálogo escrito e das formas dialéticas da filosofia. Platão também parece ter sido o fundador da filosofia política ocidental. Sua mais famosa contribuição leva seu nome, platonismo (também ambiguamente chamado de realismo platônico ou idealismo platônico), a doutrina das Formas conhecidas pela razão pura para fornecer uma solução realista para o problema dos universais. Ele também é o epônimo do amor platônico e dos sólidos platônicos. Alguns já alegaram que seu nome verdadeiro tenha sido Arístocles.[20]

			Acredita-se que suas influências filosóficas mais decisivas tenham sido da mesma linha de Sócrates, do pré-socrático Pitágoras, Heráclito e Parmênides, embora poucas das obras de seus antecessores permaneçam íntegras e muito do que sabemos sobre essas figuras hoje deriva do próprio Platão.[21] O filósofo lituano Algis Uždavinys chega a propôr e evidenciar de forma acadêmica que sua filosofia deriva de uma continuidade de um pensamento filosófico que pode ser visto desde as inscrições do Egito Antigo, relatada por diversas fontes gregas antigas.[22] Pesquisadores da chamada Escola Tübingen e de Milão alegam que seu corpo textual contém fragmentos de doutrinas não escritas que eram lecionadas oralmente na sua Academia.[23][24] Ao contrário do trabalho de quase todos os seus contemporâneos, acredita-se que o corpo inteiro de trabalho de Platão tenha sobrevivido intacto por mais de 2 400 anos.[25] Embora sua popularidade tenha oscilado ao longo dos anos, os trabalhos de Platão nunca ficaram sem leitores desde a época em que foram escritos.[26]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Plat%C3%A3o' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Platão (em grego antigo: Πλάτων, transl. Plátōn, \"amplo\", Atenas,[nota 1] 428/427[nota 2] – Atenas, 348/347 a.C.) foi um filósofo e matemático do período clássico da Grécia Antiga, autor de diversos diálogos filosóficos e fundador da Academia em Atenas, a primeira instituição de educação superior do mundo ocidental. Ele é amplamente considerado a figura central na história do grego antigo e da filosofia ocidental, juntamente com seu mentor, Sócrates, e seu pupilo, Aristóteles.[11] Platão ajudou a construir os alicerces da filosofia natural, da ciência e da filosofia ocidental, e também tem sido frequentemente citado como um dos fundadores da religião ocidental, da ciência[12] e da espiritualidade.[13] O assim chamado neoplatonismo de filósofos como Plotino e Porfírio influenciou Santo Agostinho e, portanto, o cristianismo, bem como a filosofia árabe[14][15] e judaica.[16][17] Alfred North Whitehead observou certa vez: \"a caracterização geral mais segura da tradição filosófica europeia é de que ela consiste em uma série de notas de rodapé sobre Platão\".[18]

			Platão era um racionalista, realista, idealista e dualista e a ele tem sido associadas muitas das ideias que inspiraram essas filosofias mais tarde.[19] Foi o inovador do diálogo escrito e das formas dialéticas da filosofia. Platão também parece ter sido o fundador da filosofia política ocidental. Sua mais famosa contribuição leva seu nome, platonismo (também ambiguamente chamado de realismo platônico ou idealismo platônico), a doutrina das Formas conhecidas pela razão pura para fornecer uma solução realista para o problema dos universais. Ele também é o epônimo do amor platônico e dos sólidos platônicos. Alguns já alegaram que seu nome verdadeiro tenha sido Arístocles.[20]

			Acredita-se que suas influências filosóficas mais decisivas tenham sido da mesma linha de Sócrates, do pré-socrático Pitágoras, Heráclito e Parmênides, embora poucas das obras de seus antecessores permaneçam íntegras e muito do que sabemos sobre essas figuras hoje deriva do próprio Platão.[21] O filósofo lituano Algis Uždavinys chega a propôr e evidenciar de forma acadêmica que sua filosofia deriva de uma continuidade de um pensamento filosófico que pode ser visto desde as inscrições do Egito Antigo, relatada por diversas fontes gregas antigas.[22] Pesquisadores da chamada Escola Tübingen e de Milão alegam que seu corpo textual contém fragmentos de doutrinas não escritas que eram lecionadas oralmente na sua Academia.[23][24] Ao contrário do trabalho de quase todos os seus contemporâneos, acredita-se que o corpo inteiro de trabalho de Platão tenha sobrevivido intacto por mais de 2 400 anos.[25] Embora sua popularidade tenha oscilado ao longo dos anos, os trabalhos de Platão nunca ficaram sem leitores desde a época em que foram escritos.[26]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Plat%C3%A3o' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='PLATO'; include '../design/poemfind.php'; ?>
		<?php $user = 'PLATO'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>