<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000I'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']].' - ';
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00000I'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Ilíada (em grego antigo: Ἰλιάς, IPA: [iːliás]) é um dos dois principais poemas épicos da Grécia Antiga, de autoria atribuída ao poeta Homero, que narra os acontecimentos decorridos no período de 51 dias durante o décimo e último ano da Guerra de Troia, conflito empreendido para a conquista de Ílio ou Troia, cuja gênese radica na ira (μῆνις, mênis) da Aquiles.[1][2]

					A Ilíada é atribuída a Homero, que se julga ter vivido por volta do século VIII a.C.,[2] na Jônia (atualmente região da Turquia), e constitui o mais antigo e extenso documento literário grego (e ocidental) existente. Ainda hoje, contudo, se discute a verdadeira autoria e a existência real de Homero (nascido ou em Quios, Grécia ou em Esmirna, Turquia).[3]

					A Ilíada é constituída por 15 693 versos em hexâmetro datílico, a forma tradicional da poesia épica grega. Foi composta por uma mistura de dialetos, resultando numa língua literária artificial, nunca de fato falada na Grécia.

					Com origem na tradição oral da época micênica ou seja, teria sido cantada pelos aedos (artistas que cantavam epopeias), e só muito mais tarde os versos foram compilados numa versão escrita,no século VI a.C. em Atenas. O poema foi então posteriormente dividido em 24 cantos, divisão que persiste até hoje. Onde cada canto corresponde a uma letra do alfabeto grego - divisão atribuída aos estudiosos da biblioteca de Alexandria.

					Considerada como a \"obra fundadora\" da literatura ocidental e uma das mais importantes da literatura mundial. Tornou-se, juntamente com a Odisseia (atribuída ao mesmo autor), modelo da poesia épica, seguido pelos autores clássicos, como Virgílio, no poema Eneida, dentre outros. Também influenciou fortemente a cultura clássica de maneira geral, abrangendo campos não só da literatura, como a poesia lírica e a tragédia (na linguagem e temas), mas também a historiografia (na temática bélica e estrutura das narrativas historiográficas), a filosofia, etc., sendo amplamente estudada na Grécia Antiga (como parte da educação básica) e, posteriormente, no Império Romano.

					A Ilíada passa-se durante o décimo ano da guerra de Troia e trata da ira de Aquiles. A ira é causada por uma disputa entre Aquiles e Agamemnon, comandante dos exércitos gregos em Troia, e consumada com a morte do herói troiano Heitor (ou Héctor), terminando com seu funeral.

					Embora Homero se refira a vários mitos e acontecimentos prévios, fortemente presentes na cultura grega, a história da guerra de Troia não é contada na íntegra. Dessa forma, o conhecimento prévio da mitologia grega acerca da guerra é relevante para a compreensão da obra.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					Aquiles: príncipe de Ftia, líder dos mirmidões (mirmídones), herói e melhor de todos os guerreiros, filho da deusa marinha Tétis e do mortal rei Peleu. Sua ira é o tema central da Ilíada. Vinga a morte de Pátroclo matando Heitor em um duelo um a um.
					Agamemnon: Rei de Micenas e comandante supremo dos aqueus, sua atitude de tomar a escrava Briseis de Aquiles é o estopim do desentendimento entre eles.
					Pátroclo: Amigo de Aquiles. Alguns argumentam que há envolvimento íntimo entre Aquiles e Pátroclo, o que foi, no entanto, refutado por Sócrates, no diálogo Fedro, citando passagens da Ilíada que dizem que Aquiles e Pátroclo dormiam em leitos separados, cada um com sua respectiva concubina. Foi morto por Heitor enquanto fingia ser Aquiles.
					Odisseu (Ulisses): Rei de Ítaca, considerado “astuto”, ou “ardiloso”. Frequentemente faz o papel de embaixador entre Aquiles e Agamemnon. Foi ele que teve a ideia de fazer uma armadilha aos troianos. É o personagem principal de Odisseia, também atribuído a Homero em que é narrada a volta de Odisseu a Ítaca.
					Calcas Testorídes: Poderoso vidente que guia os aqueus. Foi ele que predisse que a guerra duraria dez anos, que era preciso devolver Briseis (Briseida) ao pai e muitas outras coisas.
					Ájax: É o mais forte e habilidoso dos guerreiros gregos depois de Aquiles, era praticamente imbatível e graças a ele os gregos conseguiram muitas vitórias sobre os troianos.
					Ájax (filho de Ileu): Liderou um destacamento de lócridas durante a guerra na qual desempenhou um papel importante e foi um dos guerreiros que estava dentro do cavalo de madeira.
					Nestor: Um dos dos guerreiros da Grécia, embora Nestor fosse velho era famoso pela sua coragem.
					Idomeneu: rei de Creta e neto de Minos e é um dos guerreiros gregos.
					Diomedes: Príncipe de Argos, comandava a frota de navios de seu reino. Herói valente que participou ativamente do cerco, da pilhagem e do saque de Troia.
					Menelau: Rei de Esparta, marido de Helena e irmão mais novo de Agamemnon.
					Protesilau: Fez uma profecia que o primeiro que pisasse em solo troiano também seria o primeiro a morrer, e acabou sendo ele mesmo.

					Heitor, ou Héctor: Príncipe de Troia, filho de Príamo e irmão de Páris. É o melhor guerreiro troiano, herói valoroso que combate para defender sua cidade e sua família. Líder dos exércitos troianos. Mata Pátroclo em uma batalha achando que ele era Aquiles porque usava sua armadura, escudo e espada sem mencionar a semelhança física entre os dois. Morto por Aquiles em um duelo.
					Príamo: rei de Troia, já é idoso, portanto quem comanda de fato a luta é seu filho, Heitor.
					Páris: Príncipe de Troia, sua fuga com Helena é a causa da guerra. É sua a flecha que finalmente mata Aquiles, acertando-o no calcanhar.
					Eneias: Primo de Heitor e seu principal tenente. É o personagem principal da Eneida, obra máxima do poeta latino Virgílio.
					Helena: Esposa de Páris, antes casada com Menelau, e pivô da guerra. Com a queda de Troia volta para Esparta e para Menelau.
					Andrómaca: Esposa de Heitor, de quem tinha um filho bebê, Astíanax.
					Briseis (Briseida): Prima de Heitor e Páris, capturada pelos aqueus, se torna escrava de Aquiles e acaba se apaixonando por ele e vice-versa.
					Sarpedão (Ilíada): Rei da Lícia que matou o grego Tlepólemo.

					Ficaram do lado dos gregos (aqueus):

					Hera
					Atena
					Posidão
					Hefesto
					Tétis (mãe de Aquiles)
					Ficaram do lado dos troianos:

					Apolo
					Afrodite
					Ares
					Ártemis
					Leto
					Zeus e Hades mantiveram-se neutros. Outras divindades menores, como Péon, Íris e Éris, também se envolveram nos eventos.
					</ul>
					<hr>
							";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'> </a>
					<h1> Review </h1>
					The Iliad (in ancient Greek: Ἰλιάς, IPA: [iːliás]) is one of the two main epic poems of Ancient Greece, authored by the poet Homer, who narrates the events that took place during the period of 51 days during the tenth and final year of the Trojan War, conflict undertaken to conquer Ilio or Troia, whose genesis lies in the anger (μῆνις, penis) of Aquiles. [1] [2]

					The Iliad is attributed to Homer, who is believed to have lived around the 8th century BC., [2] in Ionia (currently the region of Turkey), and is the oldest and most extensive Greek (and Western) literary document in existence. Even today, however, Homer's real authorship and real existence is discussed (born or in Chios, Greece or in Izmir, Turkey). [3]

					The Iliad consists of 15,693 verses in hexyl dyameter, the traditional form of Greek epic poetry. It was composed of a mixture of dialects, resulting in an artificial literary language, never actually spoken in Greece.

					Originating in the oral tradition of the Mycenaean era, that is, it would have been sung by the aedos (artists who sang epics), and it was only much later that the verses were compiled in a written version, in the 6th century BC in Athens. The poem was subsequently divided into 24 songs, a division that persists today. Where each corner corresponds to a letter of the Greek alphabet - a division attributed to scholars in the library of Alexandria.

					Considered as the \"founding work\" of Western literature and one of the most important in world literature. Together with the Odyssey (attributed to the same author), he became a model of epic poetry, followed by classic authors, such as Virgílio, in the poem Eneida, among others. It also strongly influenced classical culture in general, encompassing fields not only of literature, such as lyric poetry and tragedy (in language and themes), but also historiography (in the war themes and structure of historiographic narratives), philosophy, etc. ., being widely studied in Ancient Greece (as part of basic education) and, later, in the Roman Empire.

					The Iliad takes place during the tenth year of the Trojan War and deals with Achilles' wrath. The anger is caused by a dispute between Achilles and Agamemnon, commander of the Greek armies in Troy, and consummated with the death of the Trojan hero Hector (or Héctor), ending with his funeral.

					Although Homer refers to several previous myths and events, strongly present in Greek culture, the story of the Trojan War is not told in full. Thus, previous knowledge of Greek mythology about war is relevant to the understanding of the work.
					<hr>
					<a name='goto2'> </a>
					<h1> Characters </h1>
					<ul>
					Achilles: prince of Ftia, leader of the mirmidões (mirmídones), hero and best of all the warriors, son of the marine goddess Tetis and the mortal king Peleus. His wrath is the central theme of the Iliad. Avenge the death of Patroklos by killing Hector in a one-on-one duel.
					Agamemnon: King of Mycenae and supreme commander of the Achaeans, his attitude of taking the slave Briseis de Achilles is the trigger of the disagreement between them.
					Patroclus: Friend of Achilles. Some argue that there is an intimate involvement between Achilles and Patroklos, which was, however, refuted by Socrates, in the dialogue Phaedrus, citing passages from the Iliad that say that Achilles and Patroklos slept in separate beds, each with their respective concubine. He was killed by Hector while pretending to be Achilles.
					Odysseus (Ulysses): King of Ithaca, considered “astute”, or “artful”. He often plays the role of ambassador between Achilles and Agamemnon. He was the one who had the idea of ​​setting a trap for the Trojans. It is the main character of Odyssey, also attributed to Homer in which Odysseus' return to Ithaca is narrated.
					Testorid Pants: Powerful seer who guides the Achaeans. He predicted that the war would last ten years, that Briseis (Briseida) had to be returned to his father and many other things.
					Ájax: He is the strongest and most skilled of the Greek warriors after Achilles, he was practically unbeatable and thanks to him the Greeks achieved many victories over the Trojans.
					Ájax (son of Ileu): He led a detachment of locusts during the war in which he played an important role and was one of the warriors who was inside the wooden horse.
					Nestor: One of the warriors in Greece, although Nestor was old, he was famous for his courage.
					Idomeneu: king of Crete and grandson of Minos and is one of the Greek warriors.
					Diomedes: Prince of Argos, commanded the fleet of ships in his kingdom. Brave hero who actively participated in the siege, looting and looting of Troy.
					Menelaus: King of Sparta, husband of Helena and younger brother of Agamemnon.
					Protesilau: He made a prophecy that the first one to set foot on Trojan soil would also be the first to die, and ended up being himself.

					Hector, or Héctor: Prince of Troy, son of Priam and brother of
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "<a name='goto1'> </a>
					<h1> Revisión </h1>
					La Ilíada (en griego antiguo: Ἰλιάς, IPA: [iːliás]) es uno de los dos poemas épicos principales de la Antigua Grecia, escrito por el poeta Homero, quien narra los eventos que tuvieron lugar durante el período de 51 días durante el décimo y último año del año. Guerra de Troya, conflicto emprendido para conquistar Ilio o Troia, cuya génesis reside en la ira de Aquiles (μῆνις, pene). [1] [2]

					La Ilíada se atribuye a Homero, quien se cree que vivió alrededor del siglo VIII a. C. [2] en Jonia (actualmente la región de Turquía), y es el documento literario griego (y occidental) más antiguo y extenso que existe. Incluso hoy, sin embargo, se discute la verdadera autoría y existencia real de Homero (nacido o en Chios, Grecia o en Izmir, Turquía). [3]

					La Ilíada consta de 15,693 versos en la heximetría, la forma tradicional de la poesía épica griega. Estaba compuesto por una mezcla de dialectos, lo que resulta en un lenguaje literario artificial, que en realidad nunca se habla en Grecia.

					Originado en la tradición oral de la era micénica, es decir, habría sido cantado por los aedos (artistas que cantaban epopeyas), y fue solo mucho más tarde que los versos se compilaron en una versión escrita, en el siglo VI a. C. en Atenas. El poema se dividió posteriormente en 24 canciones, una división que persiste hoy. Donde cada esquina corresponde a una letra del alfabeto griego, una división atribuida a los eruditos en la biblioteca de Alejandría.

					Considerado como el \"trabajo fundador\" de la literatura occidental y uno de los más importantes de la literatura mundial. Junto con la Odisea (atribuida al mismo autor), se convirtió en un modelo de poesía épica, seguido de autores clásicos, como Virgílio, en el poema Eneida, entre otros. También influyó fuertemente en la cultura clásica en general, abarcando campos no solo de literatura, como la poesía lírica y la tragedia (en el lenguaje y los temas), sino también la historiografía (en los temas de guerra y la estructura de las narrativas historiográficas), la filosofía, etc. ., siendo ampliamente estudiado en la Antigua Grecia (como parte de la educación básica) y, más tarde, en el Imperio Romano.

					La Ilíada tiene lugar durante el décimo año de la Guerra de Troya y se ocupa de la ira de Aquiles. La ira es causada por una disputa entre Aquiles y Agamenón, comandante de los ejércitos griegos en Troya, y consumada con la muerte del héroe troyano Héctor (o Héctor), que termina con su funeral.

					Aunque Homero se refiere a varios mitos y eventos anteriores, fuertemente presentes en la cultura griega, la historia de la Guerra de Troya no se cuenta por completo. Por lo tanto, el conocimiento previo de la mitología griega sobre la guerra es relevante para la comprensión de la obra.
					<hr>
					<a name='goto2'> </a>
					<h1> Personajes </h1>
					<ul>
					Aquiles: príncipe de Ftia, líder de los mirmidões (mirmídones), héroe y el mejor de todos los guerreros, hijo de la diosa marina Tetis y el mortal rey Peleo. Su ira es el tema central de la Ilíada. Vengar la muerte de Patroklos matando a Héctor en un duelo uno a uno.
					Agamenón: Rey de Micenas y comandante supremo de los aqueos, su actitud de tomar al esclavo Briseida de Aquiles es el desencadenante del desacuerdo entre ellos.
					Patroclus: amigo de Aquiles. Algunos argumentan que existe una relación íntima entre Aquiles y Patroklos, que, sin embargo, fue refutada por Sócrates en el diálogo Fedro, citando pasajes de la Ilíada que dicen que Aquiles y Patroklos dormían en camas separadas, cada uno con su respectiva concubina. Fue asesinado por Héctor mientras fingía ser Aquiles.
					Ulises (Ulises): Rey de Ítaca, considerado \"astuto\" o \"ingenioso\". A menudo juega el papel de embajador entre Aquiles y Agamenón. Él fue quien tuvo la idea de poner una trampa para los troyanos. Es el personaje principal de Odyssey, también atribuido a Homero en el que se narra el regreso de Odysseus a Ithaca.
					Pantalones Testorid: Vidente poderoso que guía a los aqueos. Fue él quien predijo que la guerra duraría diez años, que Briseida (Briseida) tuvo que ser devuelta a su padre y muchas otras cosas.
					Ájax: Es el guerrero griego más fuerte y más hábil después de Aquiles, era prácticamente invencible y gracias a él los griegos lograron muchas victorias sobre los troyanos.
					Ájax (hijo de Ileu): dirigió un destacamento de langostas durante la guerra en el que jugó un papel importante y fue uno de los guerreros que estaba dentro del caballo de madera.
					Néstor: uno de los guerreros en Grecia, aunque Néstor era viejo, era famoso por su coraje.
					Idomeneu: rey de Creta y nieto de Minos y es uno de los guerreros griegos.
					Diomedes: Príncipe de Argos, comandó la flota de barcos en su reino. Valiente héroe que participó activamente en el asedio, el saqueo y el saqueo de Troya.
					Menelao: Rey de Esparta, esposo de Helena y hermano menor de Agamenón.
					Protesilau: Hizo una profecía de que el primero en pisar suelo troyano también sería el primero en morir, y terminó siendo él mismo.

					Héctor o Héctor: Príncipe de Troya, hijo de Príamo y hermano de
						";
					}
				?>
			</div>
			<?php $book = '00000I'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'HOMERUS'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>