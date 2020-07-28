<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BEAUVOIRsimone'");
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

		<?php $user = 'BEAUVOIRsimone'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			<div lang='pt-br'>
				Simone Lucie-Ernestine-Marie Bertrand de Beauvoir, mais conhecida como Simone de Beauvoir (francês: [simɔn də bovwaʁ]; Paris, 9 de janeiro de 1908 – Paris, 14 de abril de 1986), foi uma escritora, intelectual, filósofa existencialista, ativista política, feminista e teórica social francesa. Embora não se considerasse uma filósofa, De Beauvoir teve uma influência significativa tanto no existencialismo feminista quanto na teoria feminista.

				Nascida em Paris, era a primogênita de duas irmãs, filha de um casal descendente de famílias tradicionais, porém decadente. Seu pai era o advogado Georges Bertrand de Beauvoir, ex-membro da aristocracia francesa, enquanto a mãe era Françoise Brasseur, membro da alta burguesia francesa. Ela estudou em uma escola católica privada até os 17 anos. Depois de passar no vestibular de matemática e filosofia, acabou por estudar matemática no Instituto Católico de Paris e literatura e línguas no colégio Sainte-Marie de Neuilly, e em seguida, filosofia na Universidade de Paris (Sorbonne), onde conheceu outros jovens intelectuais, como Maurice Merleau-Ponty, René Maheu e Jean-Paul Sartre, com quem manteve um relacionamento aberto por toda a vida.

				De Beauvoir escreveu romances, ensaios, biografias, autobiografia e monografias sobre filosofia, política e questões sociais. Ela é conhecida por seu tratado O Segundo Sexo, de 1949, uma análise detalhada da opressão das mulheres e um tratado fundamental do feminismo contemporâneo, além de seus romances A Convidada e Os Mandarins. Ela lecionou em várias instituições escolares no período entre 1931 a 1943. Nos anos 1940 ela integrava um círculo de filósofos literatos que conferiam ao existencialismo um aspecto literário, sendo que seus livros enfocavam os elementos mais importantes da filosofia existencialista. Além disso, a autora esteve envolvida, juntamente com Sartre e Foucault, no polêmico manifesto que tinha por objetivo alterar a idade de consentimento para relações sexuais na França.

				A autora revela certa inquietação diante do envelhecimento e da morte em livros como Uma morte suave, de 1964. Em A Cerimônia do Adeus, de 1981, ela narra o fim da existência de seu companheiro Sartre, que havia morrido em 15 de abril do ano anterior. Ela faleceu em 14 de abril de 1986, aos 78 anos de idade, por conta do agravamento de uma pneumonia. Seu corpo foi enterrado no Cemitério de Montparnasse, no mesmo túmulo de Sartre.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Simone_de_Beauvoir' > Wikipedia </a>
			</div>
			<div lang='en'>
				Hot dog yea trup united states uhuuuu rockn roll <br />
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Esopo' > Wikipedia </a>
			</div>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			<div lang='pt-br'>
				Simone Lucie-Ernestine-Marie Bertrand de Beauvoir, mais conhecida como Simone de Beauvoir (francês: [simɔn də bovwaʁ]; Paris, 9 de janeiro de 1908 – Paris, 14 de abril de 1986), foi uma escritora, intelectual, filósofa existencialista, ativista política, feminista e teórica social francesa. Embora não se considerasse uma filósofa, De Beauvoir teve uma influência significativa tanto no existencialismo feminista quanto na teoria feminista.

				Nascida em Paris, era a primogênita de duas irmãs, filha de um casal descendente de famílias tradicionais, porém decadente. Seu pai era o advogado Georges Bertrand de Beauvoir, ex-membro da aristocracia francesa, enquanto a mãe era Françoise Brasseur, membro da alta burguesia francesa. Ela estudou em uma escola católica privada até os 17 anos. Depois de passar no vestibular de matemática e filosofia, acabou por estudar matemática no Instituto Católico de Paris e literatura e línguas no colégio Sainte-Marie de Neuilly, e em seguida, filosofia na Universidade de Paris (Sorbonne), onde conheceu outros jovens intelectuais, como Maurice Merleau-Ponty, René Maheu e Jean-Paul Sartre, com quem manteve um relacionamento aberto por toda a vida.

				De Beauvoir escreveu romances, ensaios, biografias, autobiografia e monografias sobre filosofia, política e questões sociais. Ela é conhecida por seu tratado O Segundo Sexo, de 1949, uma análise detalhada da opressão das mulheres e um tratado fundamental do feminismo contemporâneo, além de seus romances A Convidada e Os Mandarins. Ela lecionou em várias instituições escolares no período entre 1931 a 1943. Nos anos 1940 ela integrava um círculo de filósofos literatos que conferiam ao existencialismo um aspecto literário, sendo que seus livros enfocavam os elementos mais importantes da filosofia existencialista. Além disso, a autora esteve envolvida, juntamente com Sartre e Foucault, no polêmico manifesto que tinha por objetivo alterar a idade de consentimento para relações sexuais na França.

				A autora revela certa inquietação diante do envelhecimento e da morte em livros como Uma morte suave, de 1964. Em A Cerimônia do Adeus, de 1981, ela narra o fim da existência de seu companheiro Sartre, que havia morrido em 15 de abril do ano anterior. Ela faleceu em 14 de abril de 1986, aos 78 anos de idade, por conta do agravamento de uma pneumonia. Seu corpo foi enterrado no Cemitério de Montparnasse, no mesmo túmulo de Sartre.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Simone_de_Beauvoir' > Wikipedia </a>
			</div>
			<div lang='en'>
				Hot dog yea trup united states uhuuuu rockn roll <br />
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Esopo' > Wikipedia </a>
			</div>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			<div lang='pt-br'>
				Simone Lucie-Ernestine-Marie Bertrand de Beauvoir, mais conhecida como Simone de Beauvoir (francês: [simɔn də bovwaʁ]; Paris, 9 de janeiro de 1908 – Paris, 14 de abril de 1986), foi uma escritora, intelectual, filósofa existencialista, ativista política, feminista e teórica social francesa. Embora não se considerasse uma filósofa, De Beauvoir teve uma influência significativa tanto no existencialismo feminista quanto na teoria feminista.

				Nascida em Paris, era a primogênita de duas irmãs, filha de um casal descendente de famílias tradicionais, porém decadente. Seu pai era o advogado Georges Bertrand de Beauvoir, ex-membro da aristocracia francesa, enquanto a mãe era Françoise Brasseur, membro da alta burguesia francesa. Ela estudou em uma escola católica privada até os 17 anos. Depois de passar no vestibular de matemática e filosofia, acabou por estudar matemática no Instituto Católico de Paris e literatura e línguas no colégio Sainte-Marie de Neuilly, e em seguida, filosofia na Universidade de Paris (Sorbonne), onde conheceu outros jovens intelectuais, como Maurice Merleau-Ponty, René Maheu e Jean-Paul Sartre, com quem manteve um relacionamento aberto por toda a vida.

				De Beauvoir escreveu romances, ensaios, biografias, autobiografia e monografias sobre filosofia, política e questões sociais. Ela é conhecida por seu tratado O Segundo Sexo, de 1949, uma análise detalhada da opressão das mulheres e um tratado fundamental do feminismo contemporâneo, além de seus romances A Convidada e Os Mandarins. Ela lecionou em várias instituições escolares no período entre 1931 a 1943. Nos anos 1940 ela integrava um círculo de filósofos literatos que conferiam ao existencialismo um aspecto literário, sendo que seus livros enfocavam os elementos mais importantes da filosofia existencialista. Além disso, a autora esteve envolvida, juntamente com Sartre e Foucault, no polêmico manifesto que tinha por objetivo alterar a idade de consentimento para relações sexuais na França.

				A autora revela certa inquietação diante do envelhecimento e da morte em livros como Uma morte suave, de 1964. Em A Cerimônia do Adeus, de 1981, ela narra o fim da existência de seu companheiro Sartre, que havia morrido em 15 de abril do ano anterior. Ela faleceu em 14 de abril de 1986, aos 78 anos de idade, por conta do agravamento de uma pneumonia. Seu corpo foi enterrado no Cemitério de Montparnasse, no mesmo túmulo de Sartre.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Simone_de_Beauvoir' > Wikipedia </a>
			</div>
			<div lang='en'>
				Hot dog yea trup united states uhuuuu rockn roll <br />
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Esopo' > Wikipedia </a>
			</div>
			<br />
					";
				}
			?>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/tuZ-7exXoow?start=141" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='BEAUVOIRsimone'; include '../design/poemfind.php'; ?>
		<?php $user = 'BEAUVOIRsimone'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>