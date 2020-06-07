<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php $v = 'O Nome da Rosa - '; include '../design/metadata.php'; ?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00001G'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Nome da Rosa (em italiano: Il nome della rosa) é um romance histórico do escritor italiano Umberto Eco, lançado em 1980 que o tornou conhecido mundialmente.[1]

					Em 1981, esta obra ganhou o Premio Strega.

					Em 1986, foi adaptado ao cinema dirigida por Jean-Jacques Annaud.
					<hr>
				</div>
			</div>
			<?php $book = '00001G'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ECOumberto'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>