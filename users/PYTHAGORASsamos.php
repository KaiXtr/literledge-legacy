<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='PYTHAGORASsamos'");
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
		<?php $user = 'PYTHAGORASsamos'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Pitágoras de Samos em grego: Πυθαγόρας ὁ Σάμιος, ou apenas Πυθαγόρας; Πυθαγόρης em grego jônico; c. 570 – c. 495 a.C.) foi um filósofo e matemático grego jônico creditado como o fundador do movimento chamado Pitagorismo.[1] A maioria das informações sobre Pitágoras foram escritas séculos depois que ele viveu, de modo que há pouca informação confiável sobre ele. Nasceu na ilha de Samos e viajou o Egito e Grécia, em 520 a.C. voltou a Samos. Cerca de 530 a.C., mudou-se para Crotona, na Magna Grécia.[2]";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Pythagoras of Samos[a] (c. 570 – c. 495 BC)[b] was an ancient Ionian Greek philosopher and the eponymous founder of Pythagoreanism. His political and religious teachings were well known in Magna Graecia and influenced the philosophies of Plato, Aristotle, and, through them, Western philosophy. Knowledge of his life is clouded by legend, but he appears to have been the son of Mnesarchus, a gem-engraver on the island of Samos. Modern scholars disagree regarding Pythagoras's education and influences, but they do agree that, around 530 BC, he travelled to Croton in southern Italy, where he founded a school in which initiates were sworn to secrecy and lived a communal, ascetic lifestyle. This lifestyle entailed a number of dietary prohibitions, traditionally said to have included vegetarianism, although modern scholars doubt that he ever advocated for complete vegetarianism.

The teaching most securely identified with Pythagoras is metempsychosis, or the \"transmigration of souls\", which holds that every soul is immortal and, upon death, enters into a new body. He may have also devised the doctrine of musica universalis, which holds that the planets move according to mathematical equations and thus resonate to produce an inaudible symphony of music. Scholars debate whether Pythagoras developed the numerological and musical teachings attributed to him, or if those teachings were developed by his later followers, particularly Philolaus of Croton. Following Croton's decisive victory over Sybaris in around 510 BC, Pythagoras's followers came into conflict with supporters of democracy and Pythagorean meeting houses were burned. Pythagoras may have been killed during this persecution, or escaped to Metapontum, where he eventually died.

In antiquity, Pythagoras was credited with many mathematical and scientific discoveries, including the Pythagorean theorem, Pythagorean tuning, the five regular solids, the Theory of Proportions, the sphericity of the Earth, and the identity of the morning and evening stars as the planet Venus. It was said that he was the first man to call himself a philosopher (\"lover of wisdom\")[c] and that he was the first to divide the globe into five climatic zones. Classical historians debate whether Pythagoras made these discoveries, and many of the accomplishments credited to him likely originated earlier or were made by his colleagues or successors. Some accounts mention that the philosophy associated with Pythagoras was related to mathematics and that numbers were important, but it is debated to what extent, if at all, he actually contributed to mathematics or natural philosophy.

Pythagoras influenced Plato, whose dialogues, especially his Timaeus, exhibit Pythagorean teachings. Pythagorean ideas on mathematical perfection also impacted ancient Greek art. His teachings underwent a major revival in the first century BC among Middle Platonists, coinciding with the rise of Neopythagoreanism. Pythagoras continued to be regarded as a great philosopher throughout the Middle Ages and his philosophy had a major impact on scientists such as Nicolaus Copernicus, Johannes Kepler, and Isaac Newton. Pythagorean symbolism was used throughout early modern European esotericism, and his teachings as portrayed in Ovid's Metamorphoses influenced the modern vegetarian movement.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Pitágoras (en griego antiguo Πυθαγόρας; Samos,1​ c. 569-Metaponto, c. 475 a. C.)2​ fue un filósofo y matemático griego considerado el primer matemático puro. Contribuyó de manera significativa en el avance de la matemática helénica, la geometría, la aritmética, derivadas particularmente de las relaciones numéricas, y aplicadas por ejemplo a la teoría de pesos y medidas, a la teoría de la música o a la astronomía. Respecto a la música, sus conceptos de I, IV y V, fueron los pilares fundamentales en la armonización griega, y son los utilizados hoy en día. Es el fundador de la Escuela pitagórica, una sociedad que, si bien era de naturaleza predominantemente religiosa, se interesaba también en medicina, cosmología, filosofía, ética y política, entre otras disciplinas. El pitagorismo formuló principios que influyeron tanto en Platón como en Aristóteles y, de manera más general, en el posterior desarrollo de la matemática y en la filosofía racional en Occidente.

No se ha conservado escrito original alguno de Pitágoras. Sus discípulos —los pitagóricos— invariablemente justificaban sus doctrinas citando la autoridad del maestro de forma indiscriminada, por lo que resulta difícil distinguir entre los hallazgos de Pitágoras y los de sus seguidores. Se le atribuye a Pitágoras la teoría de la significación funcional de los números en el mundo objetivo y en la música; otros descubrimientos, como la inconmensurabilidad de la diagonal de un cuadrado de lado mensurable o el teorema de Pitágoras para los triángulos rectángulos, fueron probablemente desarrollados por la Escuela pitagórica.3​4​";
				}
			?>
		</div>
		<?php $auctor='PYTHAGORASsamos'; include '../design/poemfind.php'; ?>
		<?php $user = 'PYTHAGORASsamos'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>