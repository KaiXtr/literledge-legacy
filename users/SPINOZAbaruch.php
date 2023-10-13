<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='SPINOZAbaruch'");
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
		<?php $user = 'SPINOZAbaruch'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Baruch de Espinosa,[1] nascido de Benedito de Espinosa (Amsterdão, 24 de novembro de 1632 — Haia, 21 de fevereiro de 1677), foi um dos grandes racionalistas e filósofos do século XVII dentro da chamada Filosofia Moderna, ao lado de René Descartes e Gottfried Leibniz. Nasceu nos Países Baixos, no seio de uma família judaica portuguesa que havia fugido da inquisição lusitana, e é considerado o fundador da crítica bíblica moderna.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Baruch (de) Spinoza[13] (/bəˈruːk spɪˈnoʊzə/;[14][15] Dutch: [baːˈrux spɪˈnoːzaː]; Portuguese: [ðɨ ʃpiˈnɔzɐ]; born Baruch Espinosa;[16] later as an author and a correspondent Benedictus de Spinoza, anglicized to Benedict de Spinoza; 24 November 1632 – 21 February 1677)[17][18][19][20] was a Dutch philosopher of Portuguese Sephardi origin.[12] One of the early thinkers of the Enlightenment[21] and modern biblical criticism,[22] including modern conceptions of the self and the universe,[23] he came to be considered one of the great rationalists of 17th-century philosophy.[24] Inspired by the groundbreaking ideas of René Descartes, Spinoza became a leading philosophical figure of the Dutch Golden Age. Spinoza's given name, which means \"Blessed\", varies among different languages. In Hebrew, it is written ברוך שפינוזה. In the Netherlands he used the name Bento.[25] In his Latin and Dutch works, he used Latin: Benedictus de Spinoza.

Spinoza was raised in the Portuguese-Jewish community in Amsterdam. He developed highly controversial ideas regarding the authenticity of the Hebrew Bible and the nature of the Divine. Jewish religious authorities issued a herem (חרם) against him, causing him to be effectively expelled and shunned by Jewish society at age 23, including by his own family. His books were later added to the Catholic Church's Index of Forbidden Books. He was frequently called an \"atheist\" by contemporaries, although nowhere in his work does Spinoza argue against the existence of God.[26]

Spinoza lived an outwardly simple life as an optical lens grinder, collaborating on microscope and telescope lens designs with Constantijn and Christiaan Huygens. He turned down rewards and honours throughout his life, including prestigious teaching positions. He died at the age of 44 in 1677 from a lung illness, perhaps tuberculosis or silicosis exacerbated by the inhalation of fine glass dust while grinding lenses. He is buried in the Christian churchyard of Nieuwe Kerk in The Hague.[27]

Spinoza's magnum opus, the Ethics, was published posthumously in the year of his death. The work opposed Descartes' philosophy of mind–body dualism and earned Spinoza recognition as one of Western philosophy's most important thinkers. In it, \"Spinoza wrote the last indisputable Latin masterpiece, and one in which the refined conceptions of medieval philosophy are finally turned against themselves and destroyed entirely\".[28] Georg Wilhelm Friedrich Hegel said, \"The fact is that Spinoza is made a testing-point in modern philosophy, so that it may really be said: You are either a Spinozist or not a philosopher at all.\"[29] His philosophical accomplishments and moral character prompted Gilles Deleuze to name him \"the 'prince' of philosophers.\"[30]";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Baruch Spinoza —también conocido como Baruj, Bento, Benito, Benedicto o Benedictus (de) Spinoza o Espinosa, según las distintas traducciones de su nombre, basadas en las hipótesis sobre su origenn. 1​n. 2​— (Ámsterdam, 24 de noviembre de 1632 - La Haya, 21 de febrero de 1677) fue un filósofo neerlandés de origen sefardí hispano-portugués, heredero crítico del cartesianismo, considerado uno de los tres grandes racionalistas de la filosofía del siglo XVII, junto con el francés René Descartes y el alemán Gottfried Leibniz.

Spinoza fue criado en la comunidad judío-portuguesa de Ámsterdam. Desarrolló ideas muy controvertidas con respecto a la autenticidad de la Biblia hebrea y la naturaleza de la única divinidad. Las autoridades religiosas judías emitieron un cherem en su contra, lo que provocó que fuera expulsado y rechazado por la sociedad judía a los veinticuatro años (1656). Luego se residenció en La Haya, donde se dedicó a trabajar como pulidor de lentes.

En filosofía, es de los principales representantes del racionalismo. Su magnum opus, la Ética, se publicó póstumamente en el mismo año de su muerte (1677). El trabajo se caracteriza por un racionalismo absoluto que se opone al dualismo de mente y cuerpo cartesiano e identifica de Dios con la naturaleza (panteísmo). Con frecuencia, ha sido criticado como «ateo», aunque en ninguna parte de sus trabajos argumenta en contra de la existencia de Dios.

Hostigado por su crítica de la ortodoxia religiosa, sus libros fueron incluidos en el Index librorum prohibitorum de la Iglesia católica (1679).3​4​ Su obra circuló clandestinamente hasta que fue reivindicada por grandes filósofos alemanes de principios del siglo XIX: «Schleiermacher […] Hegel, Schelling proclaman todos a una voz que Spinoza es el padre del pensamiento moderno».5​6​ Sus logros filosóficos y morales llevaron a Gilles Deleuze a nombrarlo \"el príncipe de los filósofos\".7​";
				}
			?>
		</div>
		<?php $auctor='SPINOZAbaruch'; include '../design/poemfind.php'; ?>
		<?php $user = 'SPINOZAbaruch'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>