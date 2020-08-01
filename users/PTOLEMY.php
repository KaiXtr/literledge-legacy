<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='PTOLEMY'");
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
		<?php $user = 'PTOLEMY'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Cláudio Ptolemeu, ou apenas Ptolemeu ou Ptolomeu (em latim: Claudius Ptolemaeus; em grego: Κλαύδιος Πτολεμαῖος; transl.: Klaúdios Ptolemaios; 90 – 168), foi um cientista grego que viveu em Alexandria, uma cidade do Egito. Ele é reconhecido pelos seus trabalhos em matemática, astrologia, astronomia, geografia e cartografia. Realizou também trabalhos importantes em óptica e teoria musical.

Na época de Ptolomeu os estudos tendiam a mesclar ciência e misticismo. A Astrologia ocupava-se dos estudos da localização e movimento dos corpos celestes, mas também da associação da localização dos mesmos com a adivinhação. Por essa razão, séculos mais tarde, houve a necessidade de separar o componente científico da mística e criou-se o termo \"Astronomia\" para referir o estudo apenas do componente científico. Foi exatamente o mesmo que aconteceu com a Química que se separou da Alquimia pelas mesmas razões. Na concepção atual, por outro lado, a astronomia, uma ciência, é estudada de forma completamente distinta da astrologia, uma crença.

O grande mérito de Ptolomeu foi, baseando-se no sistema de mundo de Aristóteles, fazer um sistema geométrico-numérico, de acordo com as tabelas de observações babilônicas, para descrever os movimentos do céu.[";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Claudius Ptolemy (/ˈtɒləmi/; Koinē Greek: Κλαύδιος Πτολεμαῖος, Klaúdios Ptolemaîos [kláwdios ptolɛmɛ́os]; Latin: Claudius Ptolemaeus; c. 100 – c. 170)[2] was a mathematician, astronomer, geographer and astrologer who wrote several scientific treatises, three of which were of importance to later Byzantine, Islamic and Western European science. The first is the astronomical treatise now known as the Almagest, although it was originally entitled the Mathematical Treatise (Μαθηματικὴ Σύνταξις) and then known as The Great Treatise (Ἡ Μεγάλη Σύνταξις). The second is the Geography, which is a thorough discussion of the geographic knowledge of the Greco-Roman world. The third is the astrological treatise in which he attempted to adapt horoscopic astrology to the Aristotelian natural philosophy of his day. This is sometimes known as the Apotelesmatiká (Ἀποτελεσματικά) but more commonly known as the Tetrábiblos from the Koine Greek (Τετράβιβλος) meaning \"Four Books\" or by the Latin Quadripartitum.

Ptolemy lived in the city of Alexandria in the Roman province of Egypt under the rule of the Roman Empire,[3] had a Latin name (which several historians have taken to imply he was also a Roman citizen),[4] cited Greek philosophers, and used Babylonian observations and Babylonian lunar theory. The 14th century astronomer Theodore Meliteniotes gave his birthplace as the prominent Greek city Ptolemais Hermiou (Πτολεμαΐς ‘Ερμείου) in the Thebaid (Θηβᾱΐς). This attestation is quite late, however, and there is no other evidence to confirm or contradict it.[5] He died in Alexandria around 168.[6]";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Claudio Ptolomeo (en latín, Claudius Ptolemaeus, y en griego, Κλαύδιος Πτολεμαῖος [Klaudios Ptolemaios]; Ptolemaida Hermia, c. 100 d. C.-Canopo, c. 170 d. C.) fue un astrónomo, astrólogo, químico, geógrafo y matemático griego.";
				}
			?>
		</div>
		<?php $auctor='PTOLEMY'; include '../design/poemfind.php'; ?>
		<?php $user = 'PTOLEMY'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>