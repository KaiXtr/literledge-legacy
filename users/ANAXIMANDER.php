<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ANAXIMANDER'");
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
		<?php $user = 'ANAXIMANDER'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Anaximandro (em grego: Ἀναξίμανδρος; a.C. 610 — 546 a.C.) foi um geógrafo, matemático, astrônomo, político e filósofo pré-Socrático; discípulo de Tales, seguiu a escola jônica. Os relatos doxográficos nos dão conta de que escreveu um livro intitulado \"Sobre a Natureza\"; contudo, essa obra se perdeu.

Ele estudou muito, e a Anaximandro se atribui a confecção de um mapa do mundo habitado, a introdução na Grécia do uso do Gnômon (relógio solar) e a medição das distâncias entre as estrelas e o cálculo de sua magnitude (é o iniciador da astronomia grega).

Anaximandro acreditava que o princípio de tudo (o arkhé das coisas) era o ápeiron, isto é, uma matéria infinita da qual todas as outras se cindem. Esse á-peiron é algo insurgido (não surgiu nunca, embora exista) e imortal.

Além de definir o princípio, Anaximandro se preocupa com os \"comos e porquês\" das coisas todas que saem do princípio.

Ele diz que o mundo é constituído de contrários, que se auto-excluem o tempo todo. O tempo é o \"juiz\" que permite que ora exista um, ora outro.

Por isso, o mundo surge de duas grandes injustiças: primeiro, da cisão dos opostos que \"fere\" a unidade do princípio; segundo, da luta entre os princípios onde sempre um deles quer tomar o lugar do outro para poder existir.";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Anaximander (/æˌnæksɪˈmændər/; Greek: Ἀναξίμανδρος Anaximandros; c. 610 – c. 546 BC), was a pre-Socratic Greek philosopher who lived in Miletus, a city of Ionia (in modern-day Turkey). He belonged to the Milesian school and learned the teachings of his master Thales. He succeeded Thales and became the second master of that school where he counted Anaximenes and, arguably, Pythagoras amongst his pupils.

Little of his life and work is known today. According to available historical documents, he is the first philosopher known to have written down his studies, although only one fragment of his work remains. Fragmentary testimonies found in documents after his death provide a portrait of the man.

Anaximander was an early proponent of science and tried to observe and explain different aspects of the universe, with a particular interest in its origins, claiming that nature is ruled by laws, just like human societies, and anything that disturbs the balance of nature does not last long. Like many thinkers of his time, Anaximander's philosophy included contributions to many disciplines. In astronomy, he attempted to describe the mechanics of celestial bodies in relation to the Earth. In physics, his postulation that the indefinite (or apeiron) was the source of all things led Greek philosophy to a new level of conceptual abstraction. His knowledge of geometry allowed him to introduce the gnomon in Greece. He created a map of the world that contributed greatly to the advancement of geography. He was also involved in the politics of Miletus and was sent as a leader to one of its colonies.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Anaximandro (en griego antiguo Ἀναξίμανδρος; Mileto, Jonia; c. 610 a. C.-c. 545 a. C.)2​ fue un filósofo y geógrafo de la Antigua Grecia. Discípulo y continuador de Tales,3​4​ además compañero y maestro de Anaxímenes, consideró que el principio de todas las cosas era lo ápeiron.5​

Se le atribuye solo un libro, conocido con el título Sobre la Naturaleza.6​ El libro se ha perdido y su palabra ha llegado a la actualidad mediante comentarios doxográficos de otros autores.7​ Se le atribuye también una carta terrestre, la medición de los solsticios y equinoccios por medio de un gnomon, trabajos para determinar la distancia y tamaño de las estrellas y la afirmación de que la Tierra es cilíndrica y ocupa el centro del universo.5​8​";
				}
			?>
		</div>
		<?php $auctor='ANAXIMANDER'; include '../design/poemfind.php'; ?>
		<?php $user = 'ANAXIMANDER'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>