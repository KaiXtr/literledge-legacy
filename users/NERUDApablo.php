<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='NERUDApablo'");
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
		<?php $user = 'NERUDApablo'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Pablo Neruda, nascido Ricardo Eliécer Neftalí Reyes Basoalto[1] (Parral, 12 de julho de 1904 — Santiago, 23 de setembro de 1973), foi um poeta chileno, considerado um dos mais importantes poetas da língua castelhana do século XX e cônsul do Chile na Espanha (1934 — 1938) e no México. Recebeu o Nobel de Literatura em 1971, enquanto ocupava o cargo de embaixador na França, nomeado pelo então presidente chileno Salvador Allende.

Originalmente um pseudônimo, a escolha do nome \"Pablo Neruda\" ocorreu aos 17 anos de idade, e foi uma declaração de afinidade com o escritor checo Jan Neruda. Esse pseudônimo seria utilizado durante toda a vida e tornou seu nome legal, após ação de modificação do nome civil.[2]";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Ricardo Eliécer Neftalí Reyes Basoalto (12 July 1904 – 23 September 1973), better known by his pen name and, later, legal name Pablo Neruda (/nəˈruːdə/;[1] Spanish: [ˈpaβlo neˈɾuða]), was a Chilean poet-diplomat and politician who won the Nobel Prize for Literature in 1971. Neruda became known as a poet when he was 13 years old, and wrote in a variety of styles, including surrealist poems, historical epics, overtly political manifestos, a prose autobiography, and passionate love poems such as the ones in his collection Twenty Love Poems and a Song of Despair (1924).

Neruda occupied many diplomatic positions in various countries during his lifetime and served a term as a Senator for the Chilean Communist Party. When President Gabriel González Videla outlawed communism in Chile in 1948, a warrant was issued for Neruda's arrest. Friends hid him for months in the basement of a house in the port city of Valparaíso; Neruda escaped through a mountain pass near Maihue Lake into Argentina. Years later, Neruda was a close advisor to Chile's socialist President Salvador Allende. When Neruda returned to Chile after his Nobel Prize acceptance speech, Allende invited him to read at the Estadio Nacional before 70,000 people.[2]

Neruda was hospitalised with cancer in September 1973, at the time of the coup d'état led by Augusto Pinochet that overthrew Allende's government, but returned home after a few days when he suspected a doctor of injecting him with an unknown substance for the purpose of murdering him on Pinochet's orders.[3] Neruda died in his house in Isla Negra on 23 September 1973, just hours after leaving the hospital. Although it was long reported that he died of heart failure, the Interior Ministry of the Chilean government issued a statement in 2015 acknowledging a Ministry document indicating the government's official position that \"it was clearly possible and highly likely\" that Neruda was killed as a result of \"the intervention of third parties\".[4] However, an international forensic test conducted in 2013 rejected allegations that he was poisoned and concluded that he was suffering from prostate cancer.[5][6] Pinochet, backed by elements of the armed forces, denied permission for Neruda's funeral to be made a public event, but thousands of grieving Chileans disobeyed the curfew and crowded the streets.

Neruda is often considered the national poet of Chile, and his works have been popular and influential worldwide. The Colombian novelist Gabriel García Márquez once called him \"the greatest poet of the 20th century in any language\",[7] and the critic Harold Bloom included Neruda as one of the writers central to the Western tradition in his book The Western Canon.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Pablo Neruda, seudónimo y posterior nombre legal1​ de Ricardo Eliécer Neftalí Reyes Basoalto (Parral, 12 de julio de 1904-Santiago de Chile, 23 de septiembre de 1973), fue un poeta y político chileno.

Neruda es considerado entre los más destacados e influyentes artistas de su siglo; además de haber sido senador de la república chilena, miembro del Comité Central del Partido Comunista (PC), precandidato a la presidencia de su país y embajador en Francia. Entre sus múltiples reconocimientos, destacan el Premio Nobel de Literatura en 1971 y un doctorado honoris causa por la Universidad de Oxford.

El escritor Gabriel García Márquez se refirió a él como «el más grande poeta del siglo XX en cualquier idioma»2​ y el crítico literario Harold Bloom señaló: «ningún poeta del hemisferio occidental de nuestro siglo admite comparación con él», 3​ quien lo considera uno de los veintiséis autores centrales del canon de la literatura occidental de todos los tiempos.4​";
				}
			?>
		</div>
		<?php $auctor='NERUDApablo'; include '../design/poemfind.php'; ?>
		<?php $user = 'NERUDApablo'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>