<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='CAMUSalbert'");
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
		<?php $user = 'CAMUSalbert'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Albert Camus (francês: [albɛʁ kamy] (Sobre este somescutar (ajuda·info)) (Mondovi, 7 de novembro de 1913 — Villeblevin, 4 de janeiro de 1960) foi um escritor, filósofo, romancista, dramaturgo, jornalista e ensaísta franco-argelino. Ele também atuou como jornalista militante envolvido na Resistência Francesa, situando-se próximo das correntes libertárias[1][2][3] durante as batalhas morais no período pós-guerra. O seu trabalho profícuo inclui peças de teatro, novelas, notícias, filmes, poemas e ensaios, onde ele desenvolveu um humanismo baseado na consciência do absurdo da condição humana e na revolta como uma resposta a esse absurdo. Para Camus, essa revolta leva à ação e fornece sentido ao mundo e à existência. Daqui \"Nasce então a estranha alegria que nos ajuda a viver e a morrer\".[4] Recebeu o Prémio Nobel de Literatura em 1957.[5]

A curta carreira de Camus como jornalista do Combat foi ousada. Atuando como periodista, ele tomou posições incisivas em relação à Guerra de Independência Argelina e ao Partido Comunista Francês.[6] Ao longo de sua carreira, Camus envolveu-se em diversas causas sociais, protestando veementemente contra as desigualdades que atingiam os muçulmanos no Norte de África, defendendo os exilados espanhóis antifascistas e as vítimas do stalinismo. Ele ainda foi um entusiasmado defensor da objeção de consciência.[7]

À margem de outras correntes filosóficas, Camus foi sobretudo uma testemunha de seu tempo. Intransigente, recusou qualquer filiação ideológica. Lutou energicamente contra todas as ideologias e abstrações que deturpavam a natureza humana. Dessa maneira, ele foi levado a opor-se ao existencialismo e ao marxismo, discordando de Jean-Paul Sartre e de seus antigos amigos. Camus incorporou uma das mais elevadas consciências morais do século XX. O humanismo de seus escritos foi fundamentado na experiência de alguns dos piores momentos da história. A sua crítica ao totalitarismo soviético rendeu-lhe diversas retaliações e culminou na desavença intelectual com seu antigo colega Sartre.[8]";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Albert Camus (/kæˈmuː/ also US: /kəˈmuː/; French: [albɛʁ kamy] (About this soundlisten); 7 November 1913 – 4 January 1960) was a French philosopher, author, and journalist. He won the Nobel Prize in Literature at the age of 44 in 1957, the second-youngest recipient in history.

Camus was born in Algeria (a French colony at the time) to French Pieds Noirs parents. His citizenship was French. He spent his childhood in a poor neighborhood and later studied philosophy at the University of Algiers. He was in Paris when the Germans invaded France during World War II in 1940. Camus tried to flee but finally joined the French Resistance where he served as editor-in-chief at Combat, an outlawed newspaper. After the war, he was a celebrity figure and gave many lectures around the world. He married twice but had many extramarital affairs. Camus was politically active; he was part of the Left that opposed the Soviet Union because of its totalitarianism. Camus was a moralist and leaned towards anarcho-syndicalism. He was part of many organizations seeking European integration. During the Algerian War (1954 –1962), he kept a neutral stance, advocating for a multicultural and pluralistic Algeria, a position that caused controversy and was rejected by most parties.

Philosophically, Camus's views contributed to the rise of the philosophy known as absurdism. He is also considered to be an existentialist, even though he firmly rejected the term throughout his lifetime.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Albert Camus (Acerca de este sonido /alˈbɛʁ kaˈmy/ (?·i) Mondovi, 7 de noviembre de 1913-Villeblevin, 4 de enero de 1960) fue un novelista, ensayista, dramaturgo, filósofo y periodista francés nacido en Argelia. Sus concepciones se formaron bajo el influjo de Schopenhauer, de Nietzsche y del existencialismo alemán.

Se le ha atribuido la conformación del pensamiento filosófico conocido como absurdismo, si bien en su texto «El enigma» el propio Camus reniega de la etiqueta de «profeta del absurdo». Se le ha asociado frecuentemente con el existencialismo, aunque Camus siempre se consideró ajeno a él.2​ Pese a su alejamiento consciente con respecto al nihilismo, rescata de él la idea de libertad individual.

Formó parte de la Resistencia francesa durante la ocupación alemana, y se relacionó con los movimientos libertarios de la posguerra. En 1957 se le concedió el Premio Nobel de Literatura por «el conjunto de una obra que pone de relieve los problemas que se plantean en la conciencia de los hombres de la actualidad».";
				}
			?>
		</div>
		<?php $auctor='CAMUSalbert'; include '../design/poemfind.php'; ?>
		<?php $user = 'CAMUSalbert'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>