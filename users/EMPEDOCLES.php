<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='EMPEDOCLES'");
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
		<?php $user = 'EMPEDOCLES'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Empédocles (em grego antigo: Ἐμπεδοκλῆς; Agrigento, 495 a.C. - 430 a.C.), foi um filósofo e pensador pré-socrático grego e cidadão de Agrigento, na Sicília. É conhecido por ser o criador da teoria cosmogênica dos quatro elementos clássicos que influenciou o pensamento ocidental de uma forma ou de outra, até quase meados do século XVIII.

Ele também propôs poderes chamados por ele de \"Amor\" e \"Ódio\" que atuariam como forças que tanto podem formar elementos quanto separá-los. Essas especulações físicas faziam parte de uma história do universo que também trata da origem e do desenvolvimento da vida.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Empedocles (/ɛmˈpɛdəkliːz/; Greek: Ἐμπεδοκλῆς [empedoklɛ̂ːs], Empedoklēs; c. 494 – c. 434 BC, fl. 444–443 BC)[7] was a Greek pre-Socratic philosopher and a native citizen of Akragas,[8][9] a Greek city in Sicily. Empedocles' philosophy is best known for originating the cosmogonic theory of the four classical elements. He also proposed forces he called Love and Strife which would mix and separate the elements, respectively.

Influenced by Pythagoras (died c. 495 BC) and the Pythagoreans, Empedocles challenged the practice of animal sacrifice and killing animals for food. He developed a distinctive doctrine of reincarnation. He is generally considered the last Greek philosopher to have recorded his ideas in verse. Some of his work survives, more than is the case for any other pre-Socratic philosopher. Empedocles' death was mythologized by ancient writers, and has been the subject of a number of literary treatments.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Empédocles de Agrigento (griego Ἐμπεδοκλής, (Agrigento, siglo V a. C.)1​ fue un filósofo y político griego.

Se interesó por el pensamiento de Parménides. Tomó de él muchos atributos asignados al Ser parmenídeo y los aplicó a su propia Sphairos, la divinidad en la cual todo estaba mezclado en armonía. Cree como Parménides que nada puede originarse de la nada y que lo que existe no puede desaparecer, pero mientras que aquel deducía de esto que la realidad era una e inmóvil, Empédocles postuló que eran cuatro los principios materiales de la realidad y que se hallaban en constante movimiento, mezclándose y  repulsándose por las fuerzas espirituales del Amor y el Odio. Estos eran los elementos propuestos por Tales de Mileto, Anaxímenes, Heraclito y Jenófanes: agua, aire, fuego y tierra respectivamente.";
				}
			?>
		</div>
		<?php $auctor='EMPEDOCLES'; include '../design/poemfind.php'; ?>
		<?php $user = 'EMPEDOCLES'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>