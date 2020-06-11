<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='FRANKanne'");
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

		<?php $user = 'FRANKanne'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Annelies Marie Frank (12 de junho de 1929 – fevereiro de 1945) foi uma adolescente alemã de origem judaica, vítima do Holocausto. Ela se tornou uma das figuras mais discutidas do século XX após a publicação do Diário de Anne Frank (1947), que tem sido a base para várias peças de teatro e filmes ao longo dos anos. Nascida na cidade de Frankfurt am Main, na República de Weimar, viveu grande parte de sua vida em Amsterdã, capital dos Países Baixos, onde perdeu sua cidadania alemã. Sua fama póstuma deu-se graças aos documentos em que relata suas experiências enquanto vivia escondida num quarto oculto, ao longo da ocupação alemã nos Países Baixos, durante a Segunda Guerra Mundial.

				Em 1933, com a ascensão dos nazistas ao poder alemão, começaram a ocorrer manifestações antissemitas, o que fez com que a família de Frank, dentre muitas outras, temessem o que aconteceria com eles desde então. No ano seguinte, mudaram-se para Amsterdã, onde viveram uma vida normal por seis anos, sobrevivendo com as empresas do pai de Anne. Em 1940, quando os nazistas invadiram os Países Baixos, a população judaica foi perseguida e proibida de frequentar diversos locais. Dois anos depois, a família decidiu se esconder em compartimentos secretos de um edifício comercial; dividindo-o com mais quatro pessoas. Próximo do fim da guerra, o grupo foi traído misteriosamente e transportado para campos de concentração. Anne e sua irmã, Margot Frank, foram levadas até o de Bergen-Belsen, onde morreram, provavelmente, de tifo epidêmico, num dia desconhecido de fevereiro de 1945.

				Com o fim da guerra, o único sobrevivente foi o pai de Anne, Otto Frank, que retornou a Amsterdã e descobriu que o diário da filha havia sido salvo por Miep Gies, a mesma que o ajudou escondendo a família em um edifício. Após muito esforço, seu pai conseguiu publicar o diário, e, desde então, é um dos livros mais traduzidos do mundo. Foi lançado também um filme biográfico da adolescente, sob o título The Diary of Anne Frank (1959). Aclamado pela crítica, foi vencedor de três Oscars. O museu, Casa de Anne Frank, foi inaugurado em 3 de maio de 1960, e em 2013 e 2014 atraiu mais de 1,2 milhão de visitantes. Anne também foi imortalizada com uma estátua de cera no Museu Madame Tussauds, além de ter sido considerada pela revista Time um ícone do último século.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Anne_Frank' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='FRANKanne'; include '../design/poemfind.php'; ?>
		<?php $user = 'FRANKanne'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>