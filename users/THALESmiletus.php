<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='THALESmiletus'");
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
		<?php $user = 'THALESmiletus'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Tales de Mileto, (em grego: Θαλῆς ὁ Μιλήσιος; c.624 — 546 a.C.) foi um filósofo, matemático, engenheiro, homem de negócios e astrônomo da Grécia Antiga, considerado, por alguns, o primeiro filósofo ocidental. De ascendência fenícia, nasceu em Mileto, antiga colônia grega, na Ásia Menor, atual Turquia.

Tales é apontado como um dos sete sábios da Grécia Antiga. Além disso, foi o fundador da Escola Jônica. Considerava a água como sendo a origem de todas as coisas, e seus seguidores, embora discordassem quanto à “substância primordial”, que constituía a essência do universo, concordavam com ele no que dizia respeito à existência de um “princípio único\" para essa natureza primordial. Entre os principais discípulos de Tales de Mileto merecem destaque: Anaximandro de Mileto, para quem os mundos eram infinitos em sua perpétua inter-relação; e Anaxímenes de Mileto que afirmava que o \"ar\" era a substância primária.

No naturalismo esboçou o que podemos citar como os primeiros passos do pensamento Teórico evolucionista: \"O mundo evoluiu da água por processos naturais\", disse ele, aproximadamente 2460 anos antes de Charles Darwin. Sendo seguido por Empédocles de Agrigento na mesma linha de pensamento evolutivo: \"Sobrevive aquele que está melhor capacitado\". [carece de fontes]

Tales foi o primeiro a explicar o eclipse solar, ao verificar que a Lua é iluminada por esse astro.[carece de fontes] Segundo Heródoto, ele teria previsto um eclipse solar em 585 a.C.. Para Aristóteles, esse evento marca o início da filosofia.[carece de fontes] Os astrônomos modernos calculam que esse eclipse se apresentou em 28 de maio do ano mencionado por Heródoto.

Se Tales aparece como o iniciador da filosofia, é porque seu esforço em buscar o princípio único da explicação do mundo não só constituiu o ideal da filosofia como também forneceu impulso para o próprio desenvolvimento dela.

A tendência do filósofo em buscar a verdade da vida na natureza o levou também a algumas experiências com magnetismo que naquele tempo só existiam como curiosa atração por objetos de ferro por um tipo de rocha meteórica achado na cidade de Magnésia, de onde o nome deriva.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Thales of Miletus (/ˈθeɪliːz/ THAY-leez; Greek: Θαλῆς (ὁ Μιλήσιος), Thalēs; c. 624/623 – c. 548/545 BC) was a Greek mathematician, astronomer and pre-Socratic philosopher from Miletus in Ionia, Asia Minor. He was one of the Seven Sages of Greece. Many, most notably Aristotle, regarded him as the first philosopher in the Greek tradition, and he is otherwise historically recognized as the first individual in Western civilization known to have entertained and engaged in scientific philosophy.

Thales is recognized for breaking from the use of mythology to explain the world and the universe, and instead explaining natural objects and phenomena by naturalistic theories and hypotheses, in a precursor to modern science. Almost all the other pre-Socratic philosophers followed him in explaining nature as deriving from a unity of everything based on the existence of a single ultimate substance, instead of using mythological explanations. Aristotle regarded him as the founder of the Ionian School and reported Thales' hypothesis that the originating principle of nature and the nature of matter was a single material substance: water.

In mathematics, Thales used geometry to calculate the heights of pyramids and the distance of ships from the shore. He is the first known individual to use deductive reasoning applied to geometry, by deriving four corollaries to Thales' theorem. He is the first known individual to whom a mathematical discovery has been attributed.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Tales de Mileto (en griego antiguo: Θαλῆς ὁ Μιλήσιος Thalḗs o Milḗsios; Mileto, c. 624 a. C.-ibid., c. 546 a. C.)1​ fue un filósofo, matemático, geómetra, físico y legislador griego.

Vivió y murió en Mileto, polis griega de la costa jonia (hoy en Turquía). Aristóteles lo consideró como el iniciador de la escuela de Mileto2​, a la que pertenecieron también Anaximandro (su discípulo) y Anaxímenes (discípulo del anterior). En la antigüedad se le consideraba uno de los Siete Sabios de Grecia. No se conserva ningún texto suyo y es probable que no dejara ningún escrito a su muerte. Desde el siglo v a. C., se le atribuyen importantes aportaciones en el terreno de la filosofía, la matemática, la astronomía, la física, etc; así como un activo papel como legislador en su ciudad natal.3​4​5​

A menudo, Tales es reconocido por romper con el uso de la mitología para explicar el mundo y el universo, cambiándolo en su lugar por explicaciones naturales mediante teorías e hipótesis naturalista (logos), es considerado el iniciador de la especulación científica y filosófica griega y occidental,2​6​7​ aunque su figura y aportaciones están rodeadas de grandes incertidumbres. Como la mayoría de filósofos presocráticos, Tales explicó que el principio originario de la naturaleza y de la materia era una única sustancia última (arché): el agua.2​

Aunque la tradición insistentemente le atribuyó a Tales el haber comenzado a usar el pensamiento deductivo aplicado a la geometría, no hay absolutamente ningún documento que respalde tal cosa, y tampoco se le puede adjudicar el desarrollo de los dos teoremas geométricos que llevan su nombre. 5​";
				}
			?>
		</div>
		<?php $auctor='THALESmiletus'; include '../design/poemfind.php'; ?>
		<?php $user = 'THALESmiletus'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>