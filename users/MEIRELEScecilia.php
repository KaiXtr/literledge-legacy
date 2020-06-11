<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='MEIRELEScecilia'");
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

		<?php $user = 'MEIRELEScecilia'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Cecília Benevides de Carvalho Meireles (Rio de Janeiro, 7 de novembro de 1901 – Rio de Janeiro, 9 de novembro de 1964) foi uma jornalista, pintora, poeta, escritora <br />
			e professora brasileira. É um nome canônico do modernismo brasileiro, uma das grandes poetas da língua portuguesa e é amplamente considerada a melhor poeta do Brasil, <br />
			embora tenha combatido a palavra poetisa por causa da discriminação de gênero. <br />
			<br />
			Ela viajou pelas Américas na década de 1940, visitando os Estados Unidos, México, Argentina, Uruguai e Chile. No verão de 1940, ela deu palestras na Universidade do <br />
			Texas em Austin. Ela escreveu dois poemas sobre seu tempo na capital do Texas e um longo (800 linhas) poema socialmente consciente "EUA 1940", publicado postumamente. <br />
			Como jornalista, suas colunas (crônicas) concentravam-se mais na educação, mas também em suas viagens ao exterior no hemisfério ocidental, Portugal, outras partes da <br />
			Europa, Israel e Índia (onde recebeu um doutorado honorário). <br />
			<br />
			Como poeta, seu estilo era principalmente neossimbolista e seus temas incluíam tempo efêmero e vida contemplativa. Embora não se preocupasse com a cor local, <br />
			o vernáculo nativo ou os experimentos em sintaxe (popular), ela é considerada um dos poetas mais importantes da segunda fase do modernismo brasileiro, <br />
			conhecida pelo vanguardismo nacionalista. Como professora, ela fez muito para promover reformas educacionais e defendeu a construção de bibliotecas infantis. <br />
			Entre 1935 e 1938, lecionou na universidade de curta duração do distrito federal do Rio de Janeiro. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Cecíia_Meireles' > Wikipedia </a>
		</div>
		<?php $auctor='MEIRELEScecilia'; include '../design/poemfind.php'; ?>
		<?php $user = 'MEIRELEScecilia'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>