<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000O'");
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
			<?php $book = '00000O'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Dom Quixote de la Mancha (Don Quijote de la Mancha em castelhano) é um livro escrito pelo espanhol Miguel de Cervantes (1547-1616). O título e ortografia originais eram El ingenioso hidalgo Don Quixote de La Mancha, com sua primeira edição publicada em Madrid no ano de 1605. É composto por 126 capítulos, divididos em duas partes: a primeira surgida em 1605 e a outra em 1615. A coroa espanhola patrocinou uma edição revisada em quatro volumes a cargo de Joaquín Ibarra. Iniciada em 1777 concluiu-se em 1780 com tiragem inicial de 1600 exemplares.[4]

					O livro surgiu em um período de grande inovação e diversidade por parte dos escritores ficcionistas espanhóis. Parodiou os romances de cavalaria que gozaram de imensa popularidade no período e, na altura, já se encontravam em declínio. Nesta obra, a paródia apresenta uma forma invulgar. O protagonista, já de certa idade, entrega-se à leitura desses romances, perde o juízo, acredita que tenham sido historicamente verdadeiros e decide tornar-se um cavaleiro andante. Por isso, parte pelo mundo e vive o seu próprio romance de cavalaria. Enquanto narra os feitos do Cavaleiro da Triste Figura, Cervantes satiriza os preceitos que regiam as histórias fantasiosas daqueles heróis. A história é apresentada sob a forma de novela realista.

					É considerada a grande criação de Cervantes. O livro é um dos primeiros das línguas europeias modernas e é considerado por muitos o expoente máximo da literatura espanhola. Em princípios de maio de 2002, o livro foi escolhido como a melhor obra de ficção de todos os tempos. A votação foi organizada pelo Clubes do Livro Noruegueses e participaram escritores de reconhecimento internacional.[5]

					O livro é estruturado em duas partes, a primeira maneirista, enquanto a segunda é mais barroca. Enquanto a primeira parte da obra deixa a impressão de liberdade máxima, a segunda parte produz a sensação constante de nos encontrarmos encerrados em limites estreitos. Essa sensação é sentida mais intensamente quando confrontada com a primeira parte. Se anteriormente, a ironia era, sobretudo, uma expressão amarga da impossibilidade de dar realidade a um ideal, com a segunda parte nasce muito mais da confrontação das formas da imaginação com as da realidade. Cervantes dá a sua própria definição da obra: "orden desordenada (...) de manera que el arte, imitando à la Naturaleza, parece que allí la vence". O processo adotado por Cervantes - a paródia - permite dar relevo aos contrastes, através da deformação grotesca, pela deslocação do patético para o burlesco, fazendo com que o burlesco apague momentaneamente a emoção, estabelecendo um entrelaçado espontâneo de picaresco, de burlesco e de emoção. O conflito surge do confronto entre o passado e o presente, o ideal e o real e o ideal e o social.

					Dom Quixote e Sancho Pança representam valores distintos, embora sejam participantes do mesmo mundo. É importante compreender a visão irônica que o romancista tem do mundo moderno, o fundo de alegria que está por detrás da visão melancólica e a busca do absoluto. São mundos completamente diferentes. Sancho Pança o fiel escudeiro de Dom Quixote é definido por Cervantes como "Homem de bem, mas de pouco sal na moleirinha". É o representante do bom senso e é para o mundo real aquilo que Dom Quixote é para o mundo ideal. Por fim, a história também é apresentada sob a forma de novela realista: ao regressar a seu povoado, Dom Quixote percebe que não é um herói, mas que não há heróis.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>Dom Quixote</li>
					<li>Sancho Pança</li>
					</ul>
					<hr>
				</div>
			</div>
			<?php $book = '00000O'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'CERVANTESmiguel'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>