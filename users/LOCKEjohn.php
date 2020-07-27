<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='LOCKEjohn'");
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

		<?php $user = 'LOCKEjohn'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			John Locke (Wrington, 29 de agosto de 1632 — Harlow, 28 de outubro de 1704) foi um filósofo inglês conhecido como o \"pai do liberalismo\",[1] sendo considerado o principal representante do empirismo britânico e um dos principais teóricos do contrato social.[2]

			Locke ficou conhecido como o fundador do empirismo, além de defender a liberdade e a tolerância religiosa. Como filósofo, pregou a teoria da tábua rasa, segundo a qual a mente humana era como uma folha em branco, que se preenchia apenas com a experiência. Essa teoria é uma crítica à doutrina das ideias inatas de Platão, segundo a qual princípios e noções são inerentes ao conhecimento humano e existem independentemente da experiência.[3]

			Locke escreveu o Ensaio acerca do Entendimento Humano, onde desenvolve sua teoria sobre a origem e a natureza do conhecimento.

			Um dos objetivos de Locke é a reafirmação da necessidade do Estado e do contrato social e outras bases. Opondo-se a Hobbes, Locke acreditava que se tratando de Estado-natureza, os homens não vivem de forma bárbara ou primitiva. Para ele, há uma vida pacífica explicada pelo reconhecimento dos homens por serem livres e iguais.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/John_Locke' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			John Locke (Wrington, 29 de agosto de 1632 — Harlow, 28 de outubro de 1704) foi um filósofo inglês conhecido como o \"pai do liberalismo\",[1] sendo considerado o principal representante do empirismo britânico e um dos principais teóricos do contrato social.[2]

			Locke ficou conhecido como o fundador do empirismo, além de defender a liberdade e a tolerância religiosa. Como filósofo, pregou a teoria da tábua rasa, segundo a qual a mente humana era como uma folha em branco, que se preenchia apenas com a experiência. Essa teoria é uma crítica à doutrina das ideias inatas de Platão, segundo a qual princípios e noções são inerentes ao conhecimento humano e existem independentemente da experiência.[3]

			Locke escreveu o Ensaio acerca do Entendimento Humano, onde desenvolve sua teoria sobre a origem e a natureza do conhecimento.

			Um dos objetivos de Locke é a reafirmação da necessidade do Estado e do contrato social e outras bases. Opondo-se a Hobbes, Locke acreditava que se tratando de Estado-natureza, os homens não vivem de forma bárbara ou primitiva. Para ele, há uma vida pacífica explicada pelo reconhecimento dos homens por serem livres e iguais.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/John_Locke' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			John Locke (Wrington, 29 de agosto de 1632 — Harlow, 28 de outubro de 1704) foi um filósofo inglês conhecido como o \"pai do liberalismo\",[1] sendo considerado o principal representante do empirismo britânico e um dos principais teóricos do contrato social.[2]

			Locke ficou conhecido como o fundador do empirismo, além de defender a liberdade e a tolerância religiosa. Como filósofo, pregou a teoria da tábua rasa, segundo a qual a mente humana era como uma folha em branco, que se preenchia apenas com a experiência. Essa teoria é uma crítica à doutrina das ideias inatas de Platão, segundo a qual princípios e noções são inerentes ao conhecimento humano e existem independentemente da experiência.[3]

			Locke escreveu o Ensaio acerca do Entendimento Humano, onde desenvolve sua teoria sobre a origem e a natureza do conhecimento.

			Um dos objetivos de Locke é a reafirmação da necessidade do Estado e do contrato social e outras bases. Opondo-se a Hobbes, Locke acreditava que se tratando de Estado-natureza, os homens não vivem de forma bárbara ou primitiva. Para ele, há uma vida pacífica explicada pelo reconhecimento dos homens por serem livres e iguais.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/John_Locke' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='LOCKEjohn'; include '../design/poemfind.php'; ?>
		<?php $user = 'LOCKEjohn'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>