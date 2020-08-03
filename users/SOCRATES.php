<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='SOCRATES'");
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
		<?php $user = 'SOCRATES'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Sócrates (em grego: Σωκράτης, IPA: [sɔːkrátɛːs], transl. Sōkrátēs; Alópece, c. 469 a.C. - Atenas, 399 a.C.) foi um filósofo ateniense do período clássico da Grécia Antiga. Creditado como um dos fundadores da filosofia ocidental, é até hoje uma figura enigmática, conhecida principalmente através dos relatos em obras de escritores que viveram mais tarde, especialmente dois de seus alunos, Platão e Xenofonte, bem como pelas peças teatrais de seu contemporâneo Aristófanes. Muitos defendem que os diálogos de Platão seriam o relato mais abrangente de Sócrates a ter perdurado da Antiguidade aos dias de hoje.

Através de sua representação nos diálogos de seus estudantes, Sócrates tornou-se renomado por sua contribuição no campo da ética, e é este Sócrates platônico que legou seu nome a conceitos como a ironia socrática e o método socrático (elenchus). Este permanece até hoje a ser uma ferramenta comumente utilizada numa ampla gama de discussões, e consiste de um tipo peculiar de pedagogia no qual uma série de questões são feitas, não apenas para obter respostas específicas, mas para encorajar também uma compreensão clara e fundamental do assunto sendo discutido. Foi o Sócrates de Platão que fez contribuições importantes e duradouras aos campos da epistemologia e da lógica, e a influência de suas ideias e de seu método continuam a ser importantes alicerces para boa parte dos filósofos ocidentais que se seguiram a ele.

Nas palavras do filósofo britânico Martin Cohen, Platão, o idealista, oferece \"um ídolo, a figura de um mestre, para a filosofia. Um santo, um profeta do 'Deus-Sol', um professor condenado por seus ensinamentos como herege.\".";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Socrates (/ˈsɒkrətiːz/; Ancient Greek: Σωκρᾰ́της Sōkrátēs [sɔːkrátɛːs]; c. 470 – 399 BC) was a Greek philosopher from Athens who is credited as one of the founders of Western philosophy, and as being the first moral philosopher of the Western ethical tradition of thought. An enigmatic figure, he made no writings, and is known chiefly through the accounts of classical writers writing after his lifetime, particularly his students Plato and Xenophon. Other sources include the contemporaneous Antisthenes, Aristippus, and Aeschines of Sphettos. Aristophanes, a playwright, is the main contemporary author to have written plays mentioning Socrates during Socrates' lifetime, though a fragment of Ion of Chios' Travel Journal provides important information about Socrates' youth.[10][11]

Plato's dialogues are among the most c";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Sócrates (en griego antiguo, Σωκράτης, Sōkrátēs; Alopece, Atenas, Antigua Grecia, 470 a. C. - ib., 399 a. C.)1​2​3​4​ fue un filósofo clásico griego considerado como uno de los más grandes, tanto de la filosofía occidental como de la universal. Fue maestro de Platón, quien tuvo a Aristóteles como discípulo, siendo estos tres los representantes fundamentales de la filosofía de la Antigua Grecia.

Sócrates fue figura principal de la transformación de la filosofía griega en un proyecto continuo y unificado. Luego, sabemos que pasó gran parte de su vida generando discusiones con todo el mundo en Atenas, tratando de determinar si alguien tenía alguna idea de lo que estaba hablando, especialmente cuando el tema tratado era importante, como la justicia, la belleza o la verdad. No dejó ningún escrito, pero inspiró a muchos discípulos. En su vejez, se convirtió en el foco de la hostilidad de muchos de la ciudad quienes veían a los sofistas y a la filosofía, intercambiablemente, como los destructores de la piedad y moral de la ciudad; y fue ejecutado en 399 a. C. Detalles de la vida de Sócrates son conocidos gracias a tres fuentes contemporáneas: los diálogos de Platón, las obras de Aristófanes y los diálogos de Jenofonte. No hay ninguna evidencia de que Sócrates haya publicado algún escrito de su autoría.

Sócrates fue el padre de la filosofía política y de la ética y es la principal fuente de todos los temas importantes de la filosofía occidental en general; quizás su contribución más importante al pensamiento occidental es su modo dialéctico de indagar, conocido como el método socrático o método de «elencos», el cual aplicaba para el examen de conceptos morales clave, tales como el bien y la justicia.

La historiografía tradicional divide al conjunto de los pensadores anteriores a Sócrates (a excepción de Demócrito) como «presocráticos», y a los influenciados por Sócrates en «socráticos mayores» (Platón y Aristóteles) y «socráticos menores» (megáricos, cínicos y cirenaicos).5";
				}
			?>
		</div>
		<?php $auctor='SOCRATES'; include '../design/poemfind.php'; ?>
		<?php $user = 'SOCRATES'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>