<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='HYPATIA'");
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
		<?php $user = 'HYPATIA'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Hipátia ou Hipácia (em grego clássico: Ὑπατία; transl.: Hypatía; Alexandria, c. 351/370 – Alexandria, 8 de março de 415[1]) foi uma filósofa neoplatônica grega do Egito Romano. Foi a primeira mulher documentada como tendo sido matemática.[2] Como chefe da escola platônica em Alexandria, também lecionou filosofia e astronomia.[3][4][5][6]

Como neoplatonista, pertencia à tradição matemática da Academia de Atenas, representada por Eudoxo de Cnido e [7] era da escola intelectual do pensador Plotino, que a incentivou a estudar Lógica e Matemática, no lugar de se dedicar à investigação empírica, e a estudar Direito, em vez de ciências da natureza.[2]

De acordo com a única fonte contemporânea, Hipátia foi assassinada por uma multidão de cristãos depois de ser acusada de exacerbar um conflito entre duas figuras proeminentes em Alexandria: o governador Orestes e o bispo de Alexandria, Cirilo de Alexandria.[8]

Kathleen Wider propõe que o assassinato de Hipátia marcou o fim da Antiguidade Clássica,[9] e Stephen Greenblatt observa que o assassinato \"efetivamente marcou a queda da vida intelectual em Alexandria\".[10] Por outro lado, Maria Dzielska e Christian Wildberg notam que a filosofia helenística continuou a florescer nos séculos V e VI, e, talvez, até a era de Justiniano.[11]";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Hypatia[a] (born c. 350–370; died 415)[1][5] was a Hellenistic Neoplatonist philosopher, astronomer, and mathematician, who lived in Alexandria, Egypt, then part of the Eastern Roman Empire. She was a prominent thinker of the Neoplatonic school in Alexandria where she taught philosophy and astronomy.[6] She is the first female mathematician whose life is reasonably well recorded.[7] Hypatia was renowned in her own lifetime as a great teacher and a wise counselor. She is known to have written a commentary on Diophantus's thirteen-volume Arithmetica, which may survive in part, having been interpolated into Diophantus's original text, and another commentary on Apollonius of Perga's treatise on conic sections, which has not survived. Many modern scholars also believe that Hypatia may have edited the surviving text of Ptolemy's Almagest, based on the title of her father Theon's commentary on Book III of the Almagest.

Hypatia is known to have constructed astrolabes and hydrometers, but did not invent either of these, which were both in use long before she was born. Although she herself was a pagan, she was tolerant towards Christians and taught many Christian students, including Synesius, the future bishop of Ptolemais. Ancient sources record that Hypatia was widely beloved by pagans and Christians alike and that she established great influence with the political elite in Alexandria. Towards the end of her life, Hypatia advised Orestes, the Roman prefect of Alexandria, who was in the midst of a political feud with Cyril, the bishop of Alexandria. Rumors spread accusing her of preventing Orestes from reconciling with Cyril and, in March 415 AD, she was murdered by a mob of Christians led by a lector named Peter.[8][9]

Hypatia's murder shocked the empire and transformed her into a \"martyr for philosophy\", leading future Neoplatonists such as Damascius to become increasingly fervent in their opposition to Christianity. During the Middle Ages, Hypatia was co-opted as a symbol of Christian virtue and scholars believe she was part of the basis for the legend of Saint Catherine of Alexandria. During the Age of Enlightenment, she became a symbol of opposition to Catholicism. In the nineteenth century, European literature, especially Charles Kingsley's 1853 novel Hypatia, romanticized her as \"the last of the Hellenes\". In the twentieth century, Hypatia became seen as an icon for women's rights and a precursor to the feminist movement. Since the late twentieth century, some portrayals have associated Hypatia's death with the destruction of the Library of Alexandria, despite the historical fact that the library no longer existed during Hypatia's lifetime.[10]";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Hipatia a​ (Ὑπατία: Alejandría, 355 o 370-ibíd., marzo de 415 o 4161​) fue una filósofa y maestra neoplatónica griega, natural de Egipto,2​ que destacó en los campos de las matemáticas y la astronomía,3​ miembro y cabeza de la Escuela neoplatónica de Alejandría a comienzos del siglo V. Seguidora de Plotino, cultivó los estudios lógicos y las ciencias exactas, llevando una vida ascética. Educó a una selecta escuela de aristócratas cristianos y paganos que ocuparon altos cargos, entre los que sobresalen el obispo Sinesio de Cirene —que mantuvo una importante correspondencia con ella—, Hesiquio de Alejandría y Orestes, prefecto de Egipto en el momento de su muerte.

Hija y discípula del astrónomo Teón, Hipatia fue una de las primeras mujeres matemáticas de la historia.4​ Escribió sobre geometría, álgebra y astronomía, mejoró el diseño de los primitivos astrolabios —instrumentos para determinar las posiciones de las estrellas sobre la bóveda celeste— e inventó un densímetro, por ello está considerada como una pionera en la historia de las mujeres en la ciencia.5​

Hipatia fue asesinada a los 45 o 60 años (dependiendo de cuál sea su fecha correcta de nacimiento), linchada por una turba de cristianos. La motivación de los asesinos y su vinculación o no con la autoridad eclesiástica ha sido objeto de muchos debates. El asesinato se produjo en el marco de la hostilidad cristiana contra el declinante paganismo y las luchas políticas entre las distintas facciones de la Iglesia, el patriarcado alejandrino y el poder imperial, representado en Egipto por el prefecto Orestes, exalumno de la filósofa. Sócrates Escolástico, el historiador más cercano a los hechos, afirma que la muerte de Hipatia fue causa de «no poco oprobio» para el patriarca Cirilo y la iglesia de Alejandría,6​ y fuentes posteriores, tanto paganas como cristianas, le achacan directamente el crimen, por lo que muchos historiadores consideran probada o muy probable la implicación de Cirilo, si bien el debate al respecto sigue abierto.7​

Su carácter singular de mujer entregada al pensamiento y la enseñanza en plena tardoantigüedad, su fidelidad al paganismo en el momento de auge del catolicismo teodosiano como nueva religión del Estado romano, y su muerte a manos de cristianos le han conferido gran fama. La figura de Hipatia se ha convertido en un verdadero mito: desde la época de la Ilustración se la presenta como a una «mártir de la ciencia» y símbolo del fin del pensamiento clásico ante el avance del cristianismo.8​ No obstante, en la actualidad se destaca que su asesinato fue un caso excepcional y que, de hecho, la escuela neoplatónica alejandrina, progresivamente cristianizada, floreció hasta pleno siglo VII.9​

Por su parte, los movimientos feministas la han reivindicado como paradigma de mujer liberada, incluso sexualmente,10​ aunque, según la Suda, estuvo casada con otro filósofo —llamado Isidoro— y se mantuvo virgen.11​ También se la ha asociado con la Biblioteca de Alejandría, si bien no hay ninguna referencia que vincule a ambas: se cree que la Gran Biblioteca ptolemaica desapareció en un momento incierto del siglo III, o quizá del IV, y su sucesora, la Biblioteca-hija del Serapeo, fue expoliada en 391. Según las fuentes, Hipatia enseñaba a sus discípulos en su propio hogar.[cita requerida]";
				}
			?>
		</div>
		<?php $auctor='HYPATIA'; include '../design/poemfind.php'; ?>
		<?php $user = 'HYPATIA'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>