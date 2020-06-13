<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000029'");
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
			<?php $book = '000029'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Hound of the Baskervilles (em português, O Cão dos Baskervilles) é um romance policial escrito por Sir Arthur Conan Doyle, tendo como protagonistas Sherlock Holmes e Dr. Watson. Publicado em 1902, a história era originalmente dividida em partes, impressas pela revista Strand Magazine de agosto de 1901 a Abril de 1902.

					Nesse caso, o detetive e seu fiel parceiro Watson investigam a morte do Sir Charles Baskerville, um milionário inglês achado morto em um pântano próximo de seu lar. Conta a lenda que Charles havia sido assassinado por um cão que assombrava a região, conhecido por matar gerações da família Baskerville. A causa mais provável pela morte de Charles, no entanto, seria um ataque cardíaco.

					Após a morte do milionário, seu sobrinho assumiria a mansão da família. Sherlock Holmes foi chamado para investigar o caso e descobrir se o futuro proprietário da mansão teria o mesmo destino de seus antepassados. Sua missão será desvendar o mistério da lenda que assombra as gerações dos Baskervilles.[1]
					<hr>
				</div>
			</div>
			<?php $book = '000029'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'CONANdoyle'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>