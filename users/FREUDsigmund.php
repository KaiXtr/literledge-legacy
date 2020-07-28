<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='FREUDsigmund'");
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

		<?php $user = 'FREUDsigmund'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Sigmund Schlomo Freud (Freiberg in Mähren, 6 de maio de 1856 – Londres, 23 de setembro de 1939; nascido Sigismund, mas mudou o primeiro nome em 1878) foi um médico neurologista e psiquiatra criador da psicanálise. Freud nasceu em uma família judaica, em Freiberg in Mähren, na época pertencente ao Império Austríaco (atualmente, a localidade é denominada Příbor, e pertence à República Checa).

			Freud iniciou seus estudos pela utilização da técnica da hipnose no tratamento de pacientes com histeria, como forma de acesso aos seus conteúdos mentais. Ao observar a melhora dos pacientes tratados pelo médico francês Charcot, elaborou a hipótese de que a causa da histeria era psicológica, e não orgânica. Essa hipótese serviu de base para outros conceitos desenvolvidos por Freud, como o do inconsciente.

			Freud também é conhecido por suas teorias do complexo de édipo e da repressão psicológica e por criar a utilização clínica da psicanálise como tratamento das psicopatologias, através da escuta do paciente. Freud acreditava que o desejo sexual era a energia motivacional primária da vida humana. Sua obra fez surgir uma nova compreensão do ser humano, como um animal dotado de razão imperfeita e influenciado por seus desejos e sentimentos. Segundo Freud, a contradição entre esses impulsos e a vida em sociedade gera, no ser humano, um tormento psíquico.

			Freud tinha uma visão biopsicossocial do ser humano. Fatos como a descrição de pacientes curados através do diálogo por Josef Breuer e a morte do colega Ernst von Fleischl-Marxow por dose excessiva do antidepressivo da época, a cocaína, levaram-no ao abandono das técnicas de hipnose e de drogas para criar um novo método: a cura pela fala, ou seja, a psicanálise, que utilizava a interpretação de sonhos e a livre associação como vias de acesso ao inconsciente.

			Suas teorias e seus tratamentos foram controversos na Viena do século XIX, e continuam a ser muito debatidos hoje. Sua teoria é de grande influência na psicologia atual e segue se desenvolvendo através de estudos e prática clínica na área, com psicanalistas que vieram depois dele. Estes criaram suas próprias teorias, mas sempre com base nos pressupostos intrínsecos colocados por Freud, como a noção de inconsciente e transferência.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Sigmund_Freud' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Sigmund Schlomo Freud (Freiberg in Mähren, 6 de maio de 1856 – Londres, 23 de setembro de 1939; nascido Sigismund, mas mudou o primeiro nome em 1878) foi um médico neurologista e psiquiatra criador da psicanálise. Freud nasceu em uma família judaica, em Freiberg in Mähren, na época pertencente ao Império Austríaco (atualmente, a localidade é denominada Příbor, e pertence à República Checa).

			Freud iniciou seus estudos pela utilização da técnica da hipnose no tratamento de pacientes com histeria, como forma de acesso aos seus conteúdos mentais. Ao observar a melhora dos pacientes tratados pelo médico francês Charcot, elaborou a hipótese de que a causa da histeria era psicológica, e não orgânica. Essa hipótese serviu de base para outros conceitos desenvolvidos por Freud, como o do inconsciente.

			Freud também é conhecido por suas teorias do complexo de édipo e da repressão psicológica e por criar a utilização clínica da psicanálise como tratamento das psicopatologias, através da escuta do paciente. Freud acreditava que o desejo sexual era a energia motivacional primária da vida humana. Sua obra fez surgir uma nova compreensão do ser humano, como um animal dotado de razão imperfeita e influenciado por seus desejos e sentimentos. Segundo Freud, a contradição entre esses impulsos e a vida em sociedade gera, no ser humano, um tormento psíquico.

			Freud tinha uma visão biopsicossocial do ser humano. Fatos como a descrição de pacientes curados através do diálogo por Josef Breuer e a morte do colega Ernst von Fleischl-Marxow por dose excessiva do antidepressivo da época, a cocaína, levaram-no ao abandono das técnicas de hipnose e de drogas para criar um novo método: a cura pela fala, ou seja, a psicanálise, que utilizava a interpretação de sonhos e a livre associação como vias de acesso ao inconsciente.

			Suas teorias e seus tratamentos foram controversos na Viena do século XIX, e continuam a ser muito debatidos hoje. Sua teoria é de grande influência na psicologia atual e segue se desenvolvendo através de estudos e prática clínica na área, com psicanalistas que vieram depois dele. Estes criaram suas próprias teorias, mas sempre com base nos pressupostos intrínsecos colocados por Freud, como a noção de inconsciente e transferência.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Sigmund_Freud' > Wikipedia </a>
			<br />
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Sigmund Schlomo Freud (Freiberg in Mähren, 6 de maio de 1856 – Londres, 23 de setembro de 1939; nascido Sigismund, mas mudou o primeiro nome em 1878) foi um médico neurologista e psiquiatra criador da psicanálise. Freud nasceu em uma família judaica, em Freiberg in Mähren, na época pertencente ao Império Austríaco (atualmente, a localidade é denominada Příbor, e pertence à República Checa).

			Freud iniciou seus estudos pela utilização da técnica da hipnose no tratamento de pacientes com histeria, como forma de acesso aos seus conteúdos mentais. Ao observar a melhora dos pacientes tratados pelo médico francês Charcot, elaborou a hipótese de que a causa da histeria era psicológica, e não orgânica. Essa hipótese serviu de base para outros conceitos desenvolvidos por Freud, como o do inconsciente.

			Freud também é conhecido por suas teorias do complexo de édipo e da repressão psicológica e por criar a utilização clínica da psicanálise como tratamento das psicopatologias, através da escuta do paciente. Freud acreditava que o desejo sexual era a energia motivacional primária da vida humana. Sua obra fez surgir uma nova compreensão do ser humano, como um animal dotado de razão imperfeita e influenciado por seus desejos e sentimentos. Segundo Freud, a contradição entre esses impulsos e a vida em sociedade gera, no ser humano, um tormento psíquico.

			Freud tinha uma visão biopsicossocial do ser humano. Fatos como a descrição de pacientes curados através do diálogo por Josef Breuer e a morte do colega Ernst von Fleischl-Marxow por dose excessiva do antidepressivo da época, a cocaína, levaram-no ao abandono das técnicas de hipnose e de drogas para criar um novo método: a cura pela fala, ou seja, a psicanálise, que utilizava a interpretação de sonhos e a livre associação como vias de acesso ao inconsciente.

			Suas teorias e seus tratamentos foram controversos na Viena do século XIX, e continuam a ser muito debatidos hoje. Sua teoria é de grande influência na psicologia atual e segue se desenvolvendo através de estudos e prática clínica na área, com psicanalistas que vieram depois dele. Estes criaram suas próprias teorias, mas sempre com base nos pressupostos intrínsecos colocados por Freud, como a noção de inconsciente e transferência.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Sigmund_Freud' > Wikipedia </a>
			<br />
					";
				}
			?>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/wyZWEtBQzJ0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='FREUDsigmund'; include '../design/poemfind.php'; ?>
		<?php $user = 'FREUDsigmund'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>