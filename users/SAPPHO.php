<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='SAPPHO'");
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
		<?php $user = 'SAPPHO'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Safo (em grego antigo: Σαπφώ, transl. Safo)[1] foi uma celebre poetisa grega da ilha de Lesbos, contemporânea de Pítaco e Alceus.[2] É conhecida por sua poesia escrita para ser cantada ao som da lira.[3] A maioria dos poemas de Safo se perdeu ao longo do tempo, assim como ocorreu com praticamente todos os escritores da antiguidade, e o que sobreviveu chegou até nós em forma de fragmentos, sendo seu único poema completo a chegar aos dias atuais intitulado ´´Ode a Afrodite´´, pois foi preservado por Dionísio de Halicarnasso, em sua obra sobre a composição dos nomes.[4] Além da poesia lírica, os antigos comentaristas afirmam que ela escrevia poesia elegíaca e iâmbica. Pouco se sabe sobre a vida de Safo, sabe-se que ela era filha de uma família rica da aristocracia de Mitilene, porém não é possível ter certeza sobre o real nome de seus pais, sendo atribuídos geralmente o nome de Cleis para a sua mãe e de Escamandronimo para seu pai.[5] Fontes antigas dizem que ela possuía três irmãos, os nomes de dois deles são mencionados no poema ´´Os Irmãos´´, descoberto em 2014.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Sappho (/ˈsæfoʊ/; Greek: Σαπφώ Sapphō [sap.pʰɔ̌ː]; Aeolic Greek Ψάπφω Psápphō; c. 630 – c. 570 BC) was an Archaic Greek poet from the island of Lesbos.[a] Sappho is known for her lyric poetry, written to be sung while accompanied by a lyre.[2] In ancient times, Sappho was widely regarded as one of the greatest lyric poets and was given names such as the \"Tenth Muse\" and \"The Poetess\". Most of Sappho's poetry is now lost, and what is extant has mostly survived in fragmentary form; two notable exceptions are the \"Ode to Aphrodite\" and the Tithonus poem.[3] As well as lyric poetry, ancient commentators claimed that Sappho wrote elegiac and iambic poetry. Three epigrams attributed to Sappho are extant, but these are actually Hellenistic imitations of Sappho's style.

Little is known of Sappho's life. She was from a wealthy family from Lesbos, though her parents' names are uncertain. Ancient sources say that she had three brothers; the names of two of them, Charaxos and Larichos, are mentioned in the Brothers Poem discovered in 2014. She was exiled to Sicily around 600 BC, and may have continued to work until around 570. Later legends surrounding Sappho's love for the ferryman Phaon and her death are unreliable.

Sappho was a prolific poet, probably composing around 10,000 lines. Her poetry was well-known and greatly admired through much of antiquity, and she was among the canon of nine lyric poets most highly esteemed by scholars of Hellenistic Alexandria. Sappho's poetry is still considered extraordinary and her works continue to influence other writers. Beyond her poetry, she is well known as a symbol of love and desire between women,[4] with the English words sapphic and lesbian being derived from her own name and the name of her home island respectively. Whilst her importance as a poet is confirmed from the earliest times, all interpretations of her work have been coloured and influenced by discussions of her sexuality.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Safo de Mitilene, también conocida como Safo de Lesbos o simplemente Safo, (en griego, Σαπφώ; en eolio, Ψάπφω) (Mitilene, Lesbos, ca. 650/610-Léucade, 580 a. C.) fue una poetisa griega de la época arcaica. Más tarde los comentaristas griegos la incluyeron en la lista de los «nueve poetas líricos». Platón la catalogó como \"la décima Musa\".1​";
				}
			?>
		</div>
		<?php $auctor='SAPPHO'; include '../design/poemfind.php'; ?>
		<?php $user = 'SAPPHO'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>