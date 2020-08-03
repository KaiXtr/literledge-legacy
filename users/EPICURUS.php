<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='EPICURUS'");
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
		<?php $user = 'EPICURUS'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Epicuro de Samos (em grego antigo: Ἐπίκουρος, Epikouros, \"aliado, camarada\"; 341 a.C., Samos — 271 ou 270 a.C., Atenas) foi um filósofo grego do período helenístico. Seu pensamento foi muito difundido em numerosos centros epicuristas que se desenvolveram na Jônia, no Egito e, a partir do século I, em Roma, onde Lucrécio foi seu maior divulgador.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Epicurus (Ancient Greek: Ἐπίκουρος, romanized: Epíkouros;[a] 341–270 BC) was an ancient Greek philosopher and sage who founded Epicureanism, a highly influential school of philosophy. He was born on the Greek island of Samos to Athenian parents. Influenced by Democritus, Aristippus, Pyrrho,[3] and possibly the Cynics, he turned against the Platonism of his day and established his own school, known as \"the Garden\", in Athens. Epicurus and his followers were known for eating simple meals and discussing a wide range of philosophical subjects. He openly allowed women to join the school as a matter of policy. Epicurus is said to have originally written over 300 works on various subjects, but the vast majority of these writings have been lost. Only three letters written by him—the letters to Menoeceus, Pythocles, and Herodotus—and two collections of quotes—the Principal Doctrines and the Vatican Sayings—have survived intact, along with a few fragments of his other writings. Most knowledge of his teachings comes from later authors, particularly the biographer Diogenes Laërtius, the Epicurean Roman poet Lucretius and the Epicurean philosopher Philodemus, and with hostile but largely accurate accounts by the Pyrrhonist philosopher Sextus Empiricus, and the Academic Skeptic and statesman Cicero.

For Epicurus, the purpose of philosophy was to help people attain a happy, tranquil life characterized by ataraxia (peace and freedom from fear) and aponia (the absence of pain). He advocated that people were best able to pursue philosophy by living a self-sufficient life surrounded by friends. He taught that the root of all human neurosis is death denial and the tendency for human beings to assume that death will be horrific and painful, which he claimed causes unnecessary anxiety, selfish self-protective behaviors, and hypocrisy. According to Epicurus, death is the end of both the body and the soul and therefore should not be feared. Epicurus taught that although the gods exist, they have no involvement in human affairs. He taught that people should behave ethically not because the gods punish or reward people for their actions, but because amoral behavior will burden them with guilt and prevent them from attaining ataraxia.

Like Aristotle, Epicurus was an empiricist, meaning he believed that the senses are the only reliable source of knowledge about the world. He derived much of his physics and cosmology from the earlier philosopher Democritus (c. 460–c. 370 BC). Like Democritus, Epicurus taught that the universe is infinite and eternal and that all matter is made up of extremely tiny, invisible particles known as atoms. All occurrences in the natural world are ultimately the result of atoms moving and interacting in empty space. Epicurus deviated from Democritus by proposing the idea of atomic \"swerve\", which holds that atoms may deviate from their expected course, thus permitting humans to possess free will in an otherwise deterministic universe.

Though popular, Epicurean teachings were controversial from the beginning. Epicureanism reached the height of its popularity during the late years of the Roman Republic. It died out in late antiquity, subject to hostility from early Christianity. Throughout the Middle Ages Epicurus was popularly, though inaccurately, remembered as a patron of drunkards, whoremongers, and gluttons. His teachings gradually became more widely known in the fifteenth century with the rediscovery of important texts, but his ideas did not become acceptable until the seventeenth century, when the French Catholic priest Pierre Gassendi revived a modified version of them, which was promoted by other writers, including Walter Charleton and Robert Boyle. His influence grew considerably during and after the Enlightenment, profoundly impacting the ideas of major thinkers, including John Locke, Thomas Jefferson, Jeremy Bentham, and Karl Marx.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Epicuro (en griego, Ἐπίκουρος Epikouros, «aliado» o «camarada»), también conocido como Epicuro de Samos, (1 de noviembre de 341 a. C.,1​ quizás en Atenas o en Samos, y falleció en Atenas en 271/270 a. C.)2​3​ fue un filósofo griego, fundador de la escuela que lleva su nombre (epicureísmo). Los aspectos más destacados de su doctrina son el hedonismo racional y el atomismo. Influido por Demócrito, Aristóteles y los cínicos, se volvió contra el platonismo y estableció su propia escuela, conocida como \"El Jardín\", en Atenas, donde permitió la entrada de mujeres, prostitutas y esclavos a la escuela.4​5​

Defendió una doctrina basada en la búsqueda del placer, la cual debería ser dirigida por la prudencia. Se manifestó en contra del destino, la necesidad y el recurrente sentido griego de fatalidad. La naturaleza, según Epicuro, está regida por el azar, entendiendo este como ausencia de causalidad. Solo así es posible la libertad, sin la cual el hedonismo no tiene motivo de ser. Manifestó que los mitos religiosos amargan la vida de los hombres. El fin de la vida humana es procurar el placer y evadir el dolor; siempre de una manera racional y evitando los excesos, pues estos provocan un sufrimiento posterior. Los placeres del espíritu son superiores a los del cuerpo, y ambos deben satisfacerse con inteligencia, procurando llegar a un estado de bienestar corporal y espiritual al que denominó ataraxia (ἀταραξία).

Criticaba tanto el desenfreno como la renuncia a los placeres de la carne, y argüía que debería buscarse un término medio y que los goces carnales deberían satisfacerse, siempre y cuando no conllevaran un dolor en el futuro. La filosofía epicúrea afirma que la filosofía debe ser un instrumento al servicio de la vida de los hombres, y que el conocimiento por sí mismo no tiene ninguna utilidad si no se emplea en la búsqueda de la felicidad.

Aunque la mayor parte de su obra se ha perdido, conocemos bien sus enseñanzas a través de la obra De rerum natura, del poeta latino Lucrecio (un homenaje a Epicuro y una exposición amplia de sus ideas), así como a través de algunas cartas recogidas por Diógenes Laercio y fragmentos rescatados.";
				}
			?>
		</div>
		<?php $auctor='EPICURUS'; include '../design/poemfind.php'; ?>
		<?php $user = 'EPICURUS'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>