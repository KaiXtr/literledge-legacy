<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
		if ((!isset($_COOKIE['lang']))||($_COOKIE['lang'] == 'pt'))
			{$v = 'Sobre - ';}
		else if ($_COOKIE['lang'] == 'en')
			{$v = 'About - ';}
		include 'design/metadata.php'; ?>
	</head>

	<body>
		<?php include 'design/header.php' ?>
		<?php include 'design/lateralbar.php' ?>s

		<div class='infocontent'>
			<a name='goto1'></a>
			<h1>Quem sou eu?</h1>
			Olá mundo! Sou conhecido na internet como Matt Kai, e sou o criador do site Literledge. De início não era para ser nada demais, apenas um hobby ou um treino de webdesign na quarentena, porém, começei a criar gosto pela literatura e pela arte no geral, e as idéias começaram a borbulhar mais e mais, e então decidi criar um site para publicar livros gratuitos para todos. As metas deste site são muito ambiciosas, mas espero que se concretizem lentamente com o passar do tempo.<br />
			<hr>

			<h1>Objetivos do site</h1>
			O principal propósito do site é dar livre acesso ao conhecimento e á obras em domínio público. Acredito numa visão em que todos devem ter o mesmo direito de ler obras que são de acesso democrático, mas ás vezes, isso não parece acontecer. Livros que não são propriedade de pessoas vivas ainda são vendidos como mercadorias, restringindo o acesso para aqueles que não podem ou não conseguem comprar. <br />
			<hr>
			<button class='btpress' onClick='top_scroll()'> Voltar ao topo </button>
		</div>

		<?php include 'design/footer.php' ?>
	</body>
</html>