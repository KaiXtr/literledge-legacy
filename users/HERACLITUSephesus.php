<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='HERACLITUSephesus'");
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
		<?php $user = 'HERACLITUSephesus'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Heraclito (pt) ou Heráclito (pt-BR) de Éfeso (Ἡράκλειτος ὁ Ἐφέσιος, Éfeso, aproximadamente 500 a.C. - 450 a.C.) foi um filósofo pré-socrático considerado o \"Pai da dialética\". Recebeu a alcunha de \"Obscuro\" principalmente em razão da obra a ele atribuída por Diógenes Laércio, Sobre a Natureza, em estilo obscuro, próximo ao das sentenças oraculares.

Na vulgata filosófica, Heráclito é o pensador do \"tudo flui\" (em grego, πάντα ῥεῖ; transl.: panta rei, sintetizando a ideia de um mundo em movimento perpétuo, em oposição ao paradigma de Parmênides) e do fogo, que seria o elemento do qual deriva tudo o que nos circunda.

De seus escritos restaram poucos fragmentos (encontrados em obras posteriores), os quais geraram grande número de obras explicativas.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Heraclitus of Ephesus (/ˌhɛrəˈklaɪtəs/; Greek: Ἡράκλειτος ὁ Ἐφέσιος, translit. Hērákleitos ho Ephésios; c. 535 – c. 475 BC, fl. 504/3 BC – 501/0 BC) son of Bloson, was a pre-Socratic Ionian Greek philosopher, and a native of the city of Ephesus, in modern-day Turkey and then part of the Persian Empire.

Due to the oracular and paradoxical nature of his philosophy, and his fondness for word play, he was called \"The Obscure\" even in antiquity. He wrote a single work, On Nature, but the obscurity is made worse by its remaining only in fragments. His cryptic utterances have been the subject of numerous interpretations. He has been seen variously as a \"material monist or a process philosopher; a scientific cosmologist, a metaphysician, or mainly a religious thinker; an empiricist, a rationalist, or a mystic; a conventional thinker or a revolutionary; a developer of logic or one who denied the law of non-contradiction; the first genuine philosopher or an anti-intellectual obscurantist.\"

He was of distinguished parentage but eschewed his privileged life for a lonely one as a philosopher. Little else is known about his early life and education. He regarded himself as self-taught and a pioneer of wisdom. He was considered a misanthrope given to depression; he was also called \"the weeping philosopher\", in contrast to Democritus, \"the laughing philosopher\".

Heraclitus believed the world was in accordance with Logos (literally, \"word\", \"reason\", or \"account\"). He also believed the world was ultimately made of fire. He was committed to a unity of opposites and harmony in the world. He was most famous for his insistence on ever-present change, or flux or becoming, as the characteristic feature of the world, as stated in the famous saying, \"No man ever steps in the same river twice\" as well as \"Panta rhei\", everything flows. This aspect of his philosophy is contrasted with that of Parmenides, who believed in being, and that nothing changes. Both had an influence on Plato and thus, some speculate, on all of Western philosophy.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Heráclito de Éfeso (en griego antiguo: Ἡράκλειτος ὁ Ἐφέσιος Herákleitos ho Ephésios; Éfeso, 540  a. C.-ibidem, 480 a. C.),1​2​3​ fue un filósofo griego presocrático nativo de Éfeso, ciudad de Jonia, en la costa occidental del Asia Menor (en la actual Turquía y luego parte del Imperio persa).

La principal fuente de su vida nos llega a través de Diogenes Laercio. Nació en el seno de una familia aristócrata, pero evitó su vida privilegiada convirtiéndose en un filósofo ermitaño autodidacta. La obra de Heráclito es completamente aforística y se le atribuye un libro titulado Sobre la naturaleza (περὶ φύσεως). Como de los demás filósofos griegos anteriores a Platón, no quedan más que fragmentos de sus obras, y en gran parte se conocen sus aportes gracias a testimonios posteriores. Estos fueron recopilados en la obra Die Fragmente der Vorsokratiker bajo la numeración Diels-Kranz.

Fue conocido también como El Oscuro de Éfeso debido a la naturaleza oracular y paradójica de su filosofía, y El filósofo llorón4​ (en contraste con Demócrito, \"el filósofo risueño\") al ser considerado un misántropo ante el mundo. Diógenes Laercio atribuye a Teofrasto la teoría de que Heráclito no completó algunas de sus obras debido a la melancolía.5​6​ Sus expresiones crípticas han sido objeto de numerosas interpretaciones. Ha sido visto de diversas maneras como un \"monista material o un filósofo de procesos; un científico cosmólogo, un metafísico, o principalmente un pensador religio";
				}
			?>
		</div>
		<?php $auctor='HERACLITUSephesus'; include '../design/poemfind.php'; ?>
		<?php $user = 'HERACLITUSephesus'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>