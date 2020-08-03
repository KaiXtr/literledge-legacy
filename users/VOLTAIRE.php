<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='VOLTAIRE'");
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
		<?php $user = 'VOLTAIRE'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "François-Marie Arouet, mais conhecido pelo pseudônimo Voltaire (Paris, 21 de novembro de 1694 — Paris, 30 de maio de 1778), foi um escritor, ensaísta, deísta e filósofo iluminista francês.[1]

Conhecido pela sua perspicácia e espirituosidade na defesa das liberdades civis, inclusive liberdade religiosa e livre comércio, é uma dentre muitas figuras do Iluminismo cujas obras e ideias influenciaram pensadores importantes tanto da Revolução Francesa quanto da Americana. Escritor prolífico, Voltaire produziu cerca de 70 obras[2] em quase todas as formas literárias, assinando peças de teatro, poemas, romances, ensaios, obras científicas e históricas, mais de 20 mil cartas e mais de 2 mil livros e panfletos.

Foi um defensor aberto da reforma social apesar das rígidas leis de censura e severas punições para quem as quebrasse. Um polemista satírico, ele frequentemente usou suas obras para criticar a Igreja Católica e as instituições francesas do seu tempo. Voltaire é o patriarca de Ferney. Ficou conhecido por dirigir duras críticas aos reis absolutistas e aos privilégios do clero e da nobreza. Por dizer o que pensava, foi preso duas vezes e, para escapar a uma nova prisão, refugiou-se na Inglaterra. Durante os três anos em que permaneceu naquele país, conheceu e passou a admirar as ideias políticas de John Locke.[2]";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "François-Marie Arouet (French: [fʁɑ̃swa maʁi aʁwɛ]; 21 November 1694 – 30 May 1778), known by his nom de plume Voltaire (/vɒlˈtɛər, voʊl-/;[5][6][7] also US: /vɔːl-/,[8][9] French: [vɔltɛːʁ]), was a French Enlightenment writer, historian, and philosopher famous for his wit, his criticism of Christianity—especially the Roman Catholic Church—as well as his advocacy of freedom of speech, freedom of religion, and separation of church and state.

Voltaire was a versatile and prolific writer, producing works in almost every literary form, including plays, poems, novels, essays, histories, and scientific expositions. He wrote more than 20,000 letters and 2,000 books and pamphlets.[10] He was an outspoken advocate of civil liberties, and was at constant risk from the strict censorship laws of the Catholic French monarchy. His polemics witheringly satirized intolerance, religious dogma, and the French institutions of his day.";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "François-Marie Arouet (pronunciado /fʁɑ̃swa maʁi aʁwɛ/), más conocido como Voltaire (pronunciado /vɔltɛːʁ/) (París, 21 de noviembre de 1694-ibid., 30 de mayo de 1778), fue un escritor, historiador, filósofo y abogado francés, que perteneció a la francmasonería y figura como uno de los principales representantes de la Ilustración, un período que enfatizó el poder de la razón humana y de la ciencia en detrimento de la religión. En 1746 Voltaire fue elegido miembro de la Academia francesa, en la que ocupó el asiento número 33.";
				}
			?>
		</div>
		<?php $auctor='VOLTAIRE'; include '../design/poemfind.php'; ?>
		<?php $user = 'VOLTAIRE'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>