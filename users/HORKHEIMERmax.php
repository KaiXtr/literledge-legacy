<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='HORKHEIMERmax'");
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

		<?php $user = 'HORKHEIMERmax'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Max Horkheimer (Estugarda, 14 de fevereiro de 1895 — Nuremberga, 7 de julho de 1973) foi um filósofo e sociólogo alemão, famoso por seu trabalho em teoria crítica como membro da "Escola de Frankfurt" de pesquisa social. Em suas obras, Horkheimer abordou o autoritarismo, o militarismo, a ruptura econômica, a crise ambiental e a pobreza da cultura de massa, usando a filosofia da história como estrutura. Isso se tornou o fundamento da teoria crítica. Seus trabalhos mais importantes incluem Eclipse da razão (1947), Entre filosofia e ciências sociais (1930-1938) e, em colaboração com Theodor Adorno, Dialética do Esclarecimento (1947). Por meio da Escola de Frankfurt, a Horkheimer planejou, apoiou e possibilitou outros trabalhos significativos.[1]

				A cidade de Frankfurt homenageou Max Horkheimer em 1953 com o distintivo Goethe e o nomeou, em 1960, cidadão honorário.[2] Em 2014, a Universidade de Frankfurt nomeou uma rua em sua homenagem. O gabinete de Max Horkheimer, no Ebene Leben, no terceiro andar do Stadtbibliothek Stuttgart na Praça de Milão, também recebeu seu nome.[3]
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Max_Horkheimer' > Wikipedia </a>
				<br />
				<iframe width="560" height="315" src="https://www.youtube.com/embed/nV5EBHePKRc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<?php $auctor='HORKHEIMERmax'; include '../design/poemfind.php'; ?>
		<?php $user = 'HORKHEIMERmax'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>