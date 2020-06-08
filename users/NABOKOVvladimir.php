<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='NABOKOVvladimir'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['name'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'NABOKOVvladimir'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Vladimir Vladimirovich Nabokov (em russo: Влади́мир Влади́мирович Набо́ков,[1] também conhecido pelo pseudônimo Vladimir Sirin; São Petersburgo, <br />
			22 de abril (V.E. 10 de abril) de 1899c — Montreux, Suíça, 2 de julho de 1977) foi um romancista, poeta, tradutor e entomologista russo-americano. <br />
			Seus primeiros nove romances foram escritos em russo, mas ele conseguiu proeminência internacional após ele começar a escrever prosa em inglês.<br />
			<br />
			Lolita, de Nabokov (1955) seu mais notado romance em inglês, foi classificado quarto na lista dos 100 melhores romances da Modern Library;[2] <br />
			Fogo Pálido (1962) foi classificado 53.º na mesma lista, e sua memória, Fala, Memória (1951), foi listado oitavo na lista do editor das maiores <br />
			não-ficções do século XX.[3] Ele foi um finalista para o National Book Award for Fiction sete vezes. <br />
			<br />
			Nabokov foi um lepidopterista especialista e compositor de problemas de xadrez. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Vladimir_Nabokov' > Wikipedia </a>
		</div>
		<?php $auctor='NABOKOVvladimir'; include '../design/poemfind.php'; ?>
		<?php $user = 'NABOKOVvladimir'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>