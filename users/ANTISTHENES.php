<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ANTISTHENES'");
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
		<?php $user = 'ANTISTHENES'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Antístenes (em grego: Ἀντισθένης; Atenas, ca. 445 a.C. — Atenas, 365 a.C.) foi um filósofo grego considerado o fundador da filosofia cínica,[1] aprendeu retórica com Górgias antes de se tornar um discípulo de Sócrates.[2][3]

Era filho de um ateniense com uma escrava trácia,[4] por isso, não tinha nem o título nem o direito de cidadão ateniense. Nenhuma de suas obras sobreviveu, e de sua produção restaram apenas fragmentos.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Antisthenes (/ænˈtɪsθɪniːz/;[2] Greek: Ἀντισθένης; c. 446 – c. 366 BC)[1] was a Greek philosopher and a pupil of Socrates. Antisthenes first learned rhetoric under Gorgias before becoming an ardent disciple of Socrates. He adopted and developed the ethical side of Socrates' teachings, advocating an ascetic life lived in accordance with virtue. Later writers regarded him as the founder of Cynic philosophy.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Antístenes (griego antiguo Ἀντισθένης , Antisthénēs) (444 a. C. - 365 a. C.) fue un filósofo griego, fundador de la escuela cínica. Nació en Atenas de padres tracios, y así su condición de meteco (extranjero) lo marcó durante toda su vida. Estudió retórica bajo Gorgias, Hipias de Élide y Pródico de Ceos y más tarde se convirtió en discípulo de Sócrates, de quien adoptó y desarrolló sus enseñanzas sobre ética.

Desencantado de la filosofía existente, perdió la fe en ella. Su entusiasmo por la disciplina socrática lo llevó a fundar una escuela en el santuario y gimnasio de Cinosargo; el nombre del lugar (probablemente de κύων ἀργός, kýōn argós, \"perro ágil\") es uno de los probables orígenes para el mote de cínicos (en griego κυνικός, kynikós, \"similar al perro\"). Sus discípulos se contaban sobre todo entre las clases populares, debido a la simplicidad que predicaba. Su vestimenta —capa y báculo— se convirtió en el uniforme de la escuela.";
				}
			?>
		</div>
		<?php $auctor='ANTISTHENES'; include '../design/poemfind.php'; ?>
		<?php $user = 'ANTISTHENES'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>