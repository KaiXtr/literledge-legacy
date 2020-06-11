<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='SHAKESPEAREwilliam'");
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

		<?php $user = 'SHAKESPEAREwilliam'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			William Shakespeare (Stratford-upon-Avon, 1564 (batizado a 26 de abril) — Stratford-upon-Avon, 23 de abril de 1616)[2] foi um poeta, dramaturgo e ator inglês, <br />
			tido como o maior escritor do idioma inglês e o mais influente dramaturgo do mundo.[3] É chamado frequentemente de poeta nacional da Inglaterra e de "Bardo do Avon" <br />
			(ou simplesmente The Bard, "O Bardo"). De suas obras, incluindo aquelas em colaboração, restaram até os dias de hoje 38 peças,[4] 154 sonetos, dois longos <br />
			poemas narrativos, e mais alguns versos esparsos, cujas autorias, no entanto, são ainda disputadas. Suas peças foram traduzidas para todas as principais <br />
			línguas modernas e são mais encenadas que as de qualquer outro dramaturgo.[5] Muitos de seus textos e temas permanecem vivos até os nossos dias, sendo <br />
			revisitados com frequência, especialmente no teatro, na televisão, no cinema e na literatura. <br />
			<br />
			Shakespeare[6] nasceu e foi criado em Stratford-upon-Avon. Aos 18 anos casou-se com Anne Hathaway, com quem teve três filhos: Susanna e os gêmeos Hamnet e Judith. <br />
			Entre 1585 e 1592 William começou uma carreira bem-sucedida em Londres como ator, escritor e um dos proprietários da companhia de teatro chamada <br />
			Lord Chamberlain's Men, mais tarde conhecida como King's Men. Acredita-se que ele tenha retornado a Stratford em torno de 1613, morrendo três anos depois. <br />
			Restaram poucos registros da vida privada de Shakespeare, e existem muitas especulações sobre assuntos como a sua aparência física, sexualidade, <br />
			crenças religiosas, e se algumas das obras que lhe são atribuídas teriam sido escritas por outros autores.[7] <br />
			<br />
			Shakespeare produziu a maior parte de sua obra entre 1590 e 1613. Suas primeiras peças eram principalmente comédias e obras baseadas em eventos e <br />
			personagens históricos, gêneros que ele levou ao ápice da sofisticação e do talento artístico ao fim do século XVI. A partir de então escreveu apenas tragédias <br />
			até por volta de 1608, incluindo Hamlet, Rei Lear e Macbeth, consideradas algumas das obras mais importantes na língua inglesa. Na sua última fase, <br />
			escreveu um conjuntos de peças classificadas como tragicomédias ou romances, e colaborou com outros dramaturgos. Diversas de suas peças foram publicadas, <br />
			em edições com variados graus de qualidade e precisão, durante sua vida. Em 1623, John Heminges and Henry Condell, dois atores e antigos amigos de Shakespeare, <br />
			publicaram o chamado First Folio, uma coletânea de suas obras dramáticas que incluía todas as peças (com a exceção de duas) reconhecidas atualmente como sendo de sua autoria. <br />
			<br />
			Shakespeare foi um poeta e dramaturgo respeitado em sua própria época, mas sua reputação só viria a atingir o nível em que se encontra hoje no século XIX. <br />
			Os românticos, especialmente, aclamaram a genialidade de Shakespeare, e os vitorianos idolatraram-no como um herói, com uma reverência que George Bernard Shaw <br />
			chamava de "bardolatria".[8] No século XX sua obra foi adotada e redescoberta repetidamente por novos movimentos, tanto na academia e quanto na performance. <br />
			Suas peças permanecem extremamente populares hoje em dia e são estudadas, encenadas e reinterpretadas constantemente, em diversos contextos culturais e políticos, <br />
			por todo o mundo. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/William_Shakespeare' > Wikipedia </a>
		</div>
		<?php $auctor='SHAKESPEAREwilliam'; include '../design/poemfind.php'; ?>
		<?php $user = 'SHAKESPEAREwilliam'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>