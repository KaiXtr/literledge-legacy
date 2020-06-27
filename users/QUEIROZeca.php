<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='QUEIROZeca'");
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

		<?php $user = 'QUEIROZeca'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			José Maria de Eça de Queiroz[1] (Póvoa de Varzim, 25 de novembro de 1845 — Neuilly-sur-Seine, 16 de agosto de 1900), contemporaneamente escrito Eça de Queirós, foi um escritor e diplomata português. É considerado um dos mais importantes escritores portugueses da história. Foi autor de romances de reconhecida importância, de Os Maias e O Crime do Padre Amaro. Os Maias é considerado por muitos o melhor romance realista português do século XIX.[2][3]

			Eça de Queiroz e Machado de Assis são considerados os dois maiores escritores em língua portuguesa do século XIX.[4][5][6] Eça notabilizou-se pela originalidade e riqueza do seu estilo e linguagem, o realismo descritivo; e pela crítica social constantes nos seus romances.[7] O termo "acaciano" para definir alguém com um discurso vazio, enfeitado, pomposo, mas sem conteúdo, presente na Língua portuguesa; é uma alusão ao personagem Conselheiro Acácio, do romance O Primo Basílio.[8][9]
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/E%C3%A7a_de_Queiroz'> Wikipedia </a>
		</div>
		<?php $auctor='QUEIROZeca'; include '../design/poemfind.php'; ?>
		<?php $user = 'QUEIROZeca'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>