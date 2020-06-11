<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BILAColavo'");
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

		<?php $user = 'BILAColavo'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Olavo Brás Martins dos Guimarães Bilac (Rio de Janeiro, 16 de dezembro de 1865 — 28 de dezembro de 1918) foi um jornalista, contista, cronista e poeta brasileiro,  <br />
			considerado o principal representante do parnasianismo no país. Foi membro fundador da Academia Brasileira de Letras, ocupando a cadeira 15 da instituição,  <br />
			cujo patrono é Gonçalves Dias. <br />
			 <br />
			Conhecido por sua atenção à literatura infantil e, principalmente, pela participação cívica, Bilac era um ativo republicano e nacionalista, também defensor do serviço  <br />
			militar obrigatório[1] em um período em que o exército usufruía de amplas faculdades políticas em virtude do golpe militar de 1889. <br />
			 <br />
			Foi o responsável pela criação da letra do Hino à Bandeira, inicialmente criado para circulação na capital federal (na época, o Rio de Janeiro),  <br />
			e mais tarde sendo adotado em todo o Brasil. Também ficou famoso pelas fortes convicções políticas, sobressaindo-se a ferrenha oposição ao governo militar do marechal  <br />
			Floriano Peixoto. <br />
			 <br />
			Em 1907, foi eleito "príncipe dos poetas brasileiros", pela revista Fon-Fon. É autor de alguns dos mais populares poemas brasileiros, como os o sonetos Ora  <br />
			(direis) ouvir estrelas e Língua portuguesa. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Olavo_Bilac' > Wikipedia </a>
		</div>
		<?php $auctor='BILAColavo'; include '../design/poemfind.php'; ?>
		<?php $user = 'BILAColavo'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>