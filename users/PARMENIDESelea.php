<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='PARMENIDESelea'");
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
		<?php $user = 'PARMENIDESelea'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Parmênides (português brasileiro) ou Parménides (português europeu) de Eleia (em grego clássico: Παρμενίδης ὁ Ἐλεάτης) (530 a.C. — 460 a.C.) foi um filósofo grego natural de Eleia, uma cidade grega na costa sul da Magna Grécia. Supostamente de família rica, seus primeiros contatos filosóficos foram com a escola pitagórica, especialmente com Ameinias. O único trabalho conhecido de Parménides é um poema, Sobre a natureza, que sobreviveu apenas na forma de fragmentos.

Pelo que podemos deduzir a partir dos fragmentos conhecidos e de citações de outros autores, o poema de Parmênides representa uma revelação divina dividida em duas partes: No \"caminho da verdade\" (primeira parte do poema), ele trata da realidade (\"o que é\") e expõe vários argumentos que demonstram seus atributos. A existência é atemporal, uniforme, engendrada, necessária e indestrutível, enquanto a mudança é impossível. Desta forma, nega a existência do nada ou \"não ser\". Esta é considerada a primeira digressão filosófica sobre o fenômeno do \"ser\", que foi contraposta com a afirmação de Heráclito de que \"nenhum homem pisa duas vezes no mesmo rio\", a primeira digressão sobre o conceito do \"devir\". Desta forma, Parmênides e Heráclito, são considerados os fundadores da ontologia. No \"caminho da opinião dos mortais\" (segunda parte do poema) Parmênides elabora uma doutrina cosmológica completa, tratando de questões como a constituição e localização dos astros, diversos fenómenos meteorológicos e geográficos, e a origem do homem, além de explicar o mundo das aparências, em que as faculdades sensoriais levam a concepções falsas e enganosas.

Embora o conteúdo do \"caminho da opinião\" se assemelhe às especulações físicas de pensadores anteriores, como os jônios e os pitagóricos, o \"caminho da verdade\" contém uma reflexão completamente nova, que modifica radicalmente o curso da filosofia antiga. Considera-se que Zenão de Eléia e Melisso de Samos aceitaram suas premissas e continuaram seu pensamento. Os filósofos físicos subsequentes, como Empédocles, Anaxágoras e os atomistas, buscaram alternativas para superar a crise em que o conhecimento do sensível foi lançado. Até mesmo a sofística de Górgias revela uma enorme influência de Parmênides em sua forma argumentativa.

Tanto a doutrina platônica das formas como a metafísica aristotélica mantêm uma dívida incalculável com o \"caminho da verdade\" de Parmênides. É por isso que muitos filósofos e filólogos consideram que Parmênides é o fundador da metafísica.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Parmenides of Elea (/pɑːrˈmɛnɪdiːz ... ˈɛliə/; Greek: Παρμενίδης ὁ Ἐλεάτης; fl. late sixth or early fifth century BC) was a pre-Socratic Greek philosopher from Elea in Magna Graecia (meaning \"Great Greece,\" the term which Romans gave to Greek-populated coastal areas in Southern Italy). He is thought to have been in his prime (or \"floruit\") around 475 BC.[a]

Parmenides has been considered the founder of metaphysics or ontology and has influenced the whole history of Western philosophy.[b] He was the founder of the Eleatic school of philosophy, which also included Zeno of Elea and Melissus of Samos. Zeno's paradoxes of motion were to defend Parmenides' view.

The single known work by Parmenides is a poem, On Nature, only fragments of which survive, containing the first sustained argument in the history of Western philosophy. In it, Parmenides prescribes two views of reality. In \"the way of truth\" (a part of the poem), he explains how all reality is one, change is impossible, and existence is timeless, uniform, and necessary. In \"the way of opinion\", Parmenides explains the world of appearances, in which one's sensory faculties lead to conceptions which are false and deceitful, yet he does offer a cosmology.

Parmenides' philosophy has been explained with the slogan \"whatever is is, and what is not cannot be\". He is also credited with the phrase out of nothing nothing comes. He argues that \"A is not\" can never be thought or said truthfully, and thus despite appearances everything exists as one, giant, unchanging thing. This is generally considered one of the first digressions into the philosophical concept of being, and has been contrasted with Heraclitus's statement that \"No man ever steps into the same river twice\" as one of the first digressions into the philosophical concept of becoming. Scholars have generally believed that either Parmenides was responding to Heraclitus, or Heraclitus to Parmenides.

Parmenides' views have remained relevant in philosophy, even thousands of years after his death. Alexius Meinong, much like Parmenides, defended the view that even the \"golden mountain\" is real since it can be talked about. The rivalry between Heraclitus and Parmenides has been also been re-introduced in debates in the philosophy of time between A theory and B theory.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Parménides de Elea (en griego Παρμενίδης ὁ Ἐλεάτης) fue un filósofo griego. Nació entre el 530 a. C. y el 515 a. C.* 1​ en la ciudad de Elea, colonia griega de Magna Grecia (sur de Italia).

Parménides escribió una sola obra: un poema filosófico en verso épico del cual nos han llegado únicamente algunos fragmentos conservados en citas de otros autores. Los especialistas consideran que la integridad de lo que conservamos es notablemente mayor en comparación con lo que nos ha llegado de las obras de casi todos los restantes filósofos presocráticos, y por ello su doctrina puede ser reconstruida con mayor precisión.

Por lo que podemos deducir a partir de los testimonios conservados, el poema de Parménides representa una revelación divina dividida en dos partes:

La vía de la verdad, donde se ocupa de «lo que es» o «ente», y expone varios argumentos que demuestran sus atributos: es ajeno a la generación y la corrupción y por lo tanto es inengendrado e indestructible, es lo único que verdaderamente existe —con lo que niega la existencia de la nada— es homogéneo, inmóvil y perfecto.
La vía de las opiniones de los mortales, donde trata de asuntos como la constitución y ubicación de los astros, diversos fenómenos meteorológicos y geográficos, y el origen del hombre, construyendo una doctrina cosmológica completa.
Mientras que el contenido de la vía de la opinión se asemeja a las especulaciones físicas de los pensadores anteriores, como los jonios y los pitagóricos, la vía de la verdad contiene una reflexión completamente nueva que modifica radicalmente el curso de la filosofía antigua: se considera que Zenón de Elea y Meliso de Samos aceptaron sus premisas y continuaron su pensamiento. Su filosofía se compara con la doctrina de Heráclito del flujo universal (panta rei). Los físicos posteriores, como Empédocles, Anaxágoras y los atomistas, buscaron alternativas para superar la crisis en la que había sido arrojado el conocimiento de lo sensible. Incluso la sofística de Gorgias acusa una enorme influencia de Parménides en su forma argumentativa.

Tanto la doctrina platónica de las formas como la metafísica aristotélica guardan una deuda incalculable con vía de la verdad de Parménides. Por esto es por lo que muchos filósofos y filólogos consideran que Parménides es el fundador de la metafísica occidental. Compite con Aristóteles por el título del \"padre de la lógica\" por emplear argumentos deductivos1​ y formular el principio lógico de identidad y de no contradicción.2​3​";
				}
			?>
		</div>
		<?php $auctor='PARMENIDESelea'; include '../design/poemfind.php'; ?>
		<?php $user = 'PARMENIDESelea'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>