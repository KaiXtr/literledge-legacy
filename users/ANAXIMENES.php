<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ANAXIMENES'");
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
		<?php $user = 'ANAXIMENES'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Anaxímenes de Mileto (Grego: Άναξιμένης), 588-524 a.C., foi um filósofo pré-socrático do Período Arcaico, ativo na segunda metade do século VI a.C.. Anaxímenes, tal como outros na sua escola de pensamento, praticou o materialismo monista. Esta tendência para identificar uma específica realidade composta de um elemento material constitui o âmago das contribuições que deu fama a Anaxímenes.

Escreveu a obra “Sobre a natureza”, em prosa. Dedicou-se especialmente à meteorologia. Foi o primeiro a afirmar que a luz da Lua é proveniente do Sol.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Anaximenes of Miletus (/ˌænækˈsɪməˌniːz/; Greek: Ἀναξιμένης ὁ Μιλήσιος; c. 586 – c. 526 BC) was an Ancient Greek Pre-Socratic philosopher active in the latter half of the 6th century BC. The details of his life are obscure because none of his work has been preserved. Anaximenes' ideas and philosophies are only known today because of comments made by Aristotle and other writers on the history of Greek philosophy.

As one of the three philosophers of the Milesian School, considered the first revolutionary thinkers of the Western world, Anaximenes is best known and identified as a younger friend or student of Anaximander, who was himself taught by Thales. Each philosopher developed a distinct cosmology without completely rejecting their teacher's view of the universe or creating major disagreement between them. Some of Anaximenes' writings apparently survived the Hellenistic Age, but no record of these documents currently exist. Much of his astronomical thought was based on Anaximander's, though he altered Anaximander's astrological ideas to better fit his own philosophical views on physics and the natural world. Like others in his school of thought, Anaximenes practiced material monism; this tendency to identify one specific underlying reality made up of a material thing is what he is principally remembered for today.

Apollodorus of Damascus noted the dates Anaximander was alive in relation to well-known historical events, and estimated Anaximenes' lifespan as having occurred during the same time period in which Cyrus the Great defeated Croesus at the Battle of Thymbra in 546 BC. Anaximenes was the last known Milesian philosopher, as Miletus was captured by the Persian army in 494 BC.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Anaxímenes de Mileto (en griego: Ἀναξιμένης; Mileto, ca.. 590 a. C. – entre 528 y 525 a. C.)1​2​ fue un filósofo griego, discípulo de Tales y de Anaximandro.

Coincidió con Anaximandro en que el principio de todas las cosas (y también el substrato que permanece invariable ante todos los cambios y el fin, o telos al que todo vuelve) es infinito; aunque, a diferencia del ápeiron de su mentor, habla de un elemento concreto: el aire. Esta sustancia, afirmaba, se transforma en las demás cosas a través de la rarefacción y la condensación. La rarefacción genera el fuego, mientras que la condensación, el viento, las nubes, el agua, la tierra y las piedras; a partir de estas sustancias, se crean el resto de las cosas.

Podría explicarse el cambio de estado del aire mediante el flujo entre dos polos, lo frío y lo caliente; pero Plutarco dice que Anaxímenes pensaba de forma inversa, y creía que lo caliente y lo frío eran consecuencia y no causa de la rarefacción y la condensación respectivamente3​.";
				}
			?>
		</div>
		<?php $auctor='ANAXIMENES'; include '../design/poemfind.php'; ?>
		<?php $user = 'ANAXIMENES'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>