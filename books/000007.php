<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000007'");
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
			<?php $book = '000007'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Apesar de escrito por Lima Barreto, o livro não foi publicado em vida em decorrência de seu falecimento em 1822, o livro pôde ser publicado depois que os
					direitos autorais da obra foram vendidas para Jacintho Ribeiro dos Santos em 1917. Os Bruzundangas ironiza o próprio Brasil, representado num país fictício chamado de República de Bruzundanga, o significado de Bruzundaga é "confusão", e o motivo dessa escolha é o que o país de Bruzundanga representa no livro: o pior país de todos. A obra é uma coleção de crônicas descritas por um personagem que viveu no país fictício de Bruzundanga, sendo cada crônica focada num aspecto específico, sejam políticos, culturais ou sociais.
					<hr>
				</div>
				<div class='manlan' lang='en'>
					<a name='goto1'></a>
					<h1> Review </h1>
					Although written by Lima Barreto, the book was not published in life due to his death in 1822, the book could be published after the
					copyright of the work was sold to Jacintho Ribeiro dos Santos in 1917. The Bruzundangas mock Brazil itself, represented in a fictional country called the 
					Republic of Bruzundanga, the meaning of Bruzundaga is "confusion", and the reason for this choice is that the country of Bruzundanga represents in the book: 
					the worst country of all. The work is a collection of chronicles described by a character who lived in the fictional country of Bruzundanga, with each 
					chronicle focused on a specific aspect, whether political, cultural or social.
					<hr>
				</div>
				<div class='manlan' lang='es'>
					<a name='goto1'></a>
					<h1> Revisión </h1>
					Aunque escrito por Lima Barreto, el libro no se publicó en la vida debido a su muerte en 1822, el libro podría publicarse después del
					los derechos de autor de la obra se vendieron a Jacintho Ribeiro dos Santos en 1917. Los Bruzundangas se burlan del propio Brasil, representado en un país 
					ficticio llamado República de Bruzundanga, el significado de Bruzundaga es "confusión", y la razón de esta elección es que el país de Bruzundanga representa 
					en el libro: el peor país de todos. La obra es una colección de crónicas descritas por un personaje que vivió en el país ficticio de Bruzundanga, con cada 
					crónica centrada en un aspecto específico, ya sea político, cultural o social.
					<hr>
				</div>
			</div>
			<?php $book = '000007'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'BARRETOlima'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>