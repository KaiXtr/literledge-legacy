<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ALLANpoe'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'];}
				else {$v = $i[$_COOKIE['lang']];}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'ALLANpoe'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Edgar Allan Poe (nascido Edgar Poe; Boston, Massachusetts, Estados Unidos, 19 de Janeiro de 1809 — Baltimore, Maryland, Estados Unidos, 7 de Outubro de 1849) <br />
			foi um autor, poeta, editor e crítico literário estadunidense, integrante do movimento romântico em seu país. Conhecido por suas histórias que envolvem <br />
			o mistério e o macabro, Poe foi um dos primeiros escritores norte-americanos de contos e é geralmente considerado o inventor do gênero ficção policial, <br />
			também recebendo crédito por sua contribuição ao emergente gênero de ficção científica. Ele foi o primeiro escritor americano conhecido por tentar <br />
			ganhar a vida através da escrita por si só, resultando em uma vida e carreira financeiramente difíceis. <br />
			<br />
			Ele nasceu como Edgar Poe, em Boston, Massachusetts; quando jovem, ficou órfão de mãe, que morreu pouco depois de seu pai abandonar a família. <br />
			Poe foi acolhido por Francis Allan e o seu marido John Allan, de Richmond, Virginia, mas nunca foi formalmente adotado. Ele frequentou a <br />
			Universidade da Virgínia por um semestre, passando a maior parte do tempo entre bebidas e mulheres. Nesse período, teve uma séria discussão com seu <br />
			pai adotivo e fugiu de casa para se alistar nas forças armadas, onde serviu durante dois anos antes de ser dispensado. Depois de falhar como cadete <br />
			em West Point, deixou a sua família adotiva. Sua carreira começou humildemente com a publicação de uma coleção anônima de poemas, Tamerlane and Other Poems (1827). <br />
			<br />
			Poe mudou seu foco para a prosa e passou os próximos anos trabalhando para revistas e jornais, tornando-se conhecido por seu próprio estilo de crítica literária. <br />
			Seu trabalho o obrigou a se mudar para diversas cidades, incluindo Baltimore, Filadélfia e Nova Iorque. Em Baltimore, casou-se com Virginia Clemm, <br />
			sua prima de 13 anos de idade. Em 1845, Poe publicou seu poema The Raven, foi um sucesso instantâneo. Sua esposa morreu de tuberculose dois anos após a <br />
			publicação. Ele começou a planejar a criação de seu próprio jornal, The Penn (posteriormente renomeado para The Stylus), porém, em 7 de outubro de 1849, <br />
			aos 40 anos, morreu antes que pudesse ser produzido. A causa de sua morte é desconhecida e foi por diversas vezes atribuída ao álcool, congestão cerebral, <br />
			cólera, drogas, doenças cardiovasculares, raiva, suicídio, tuberculose entre outros agentes. <br />
			<br />
			Poe e suas obras influenciaram a literatura nos Estados Unidos e ao redor do mundo, bem como em campos especializados, tais como a cosmologia e a criptografia. <br />
			Poe e seu trabalho aparecem ao longo da cultura popular na literatura, música, filmes e televisão. Várias de suas casas são dedicadas como museus atualmente. <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Edgar_Allan_Poe' > Wikipedia </a>
						";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Edgar Allan Poe (nascido Edgar Poe; Boston, Massachusetts, Estados Unidos, 19 de Janeiro de 1809 — Baltimore, Maryland, Estados Unidos, 7 de Outubro de 1849) <br />
			foi um autor, poeta, editor e crítico literário estadunidense, integrante do movimento romântico em seu país. Conhecido por suas histórias que envolvem <br />
			o mistério e o macabro, Poe foi um dos primeiros escritores norte-americanos de contos e é geralmente considerado o inventor do gênero ficção policial, <br />
			também recebendo crédito por sua contribuição ao emergente gênero de ficção científica. Ele foi o primeiro escritor americano conhecido por tentar <br />
			ganhar a vida através da escrita por si só, resultando em uma vida e carreira financeiramente difíceis. <br />
			<br />
			Ele nasceu como Edgar Poe, em Boston, Massachusetts; quando jovem, ficou órfão de mãe, que morreu pouco depois de seu pai abandonar a família. <br />
			Poe foi acolhido por Francis Allan e o seu marido John Allan, de Richmond, Virginia, mas nunca foi formalmente adotado. Ele frequentou a <br />
			Universidade da Virgínia por um semestre, passando a maior parte do tempo entre bebidas e mulheres. Nesse período, teve uma séria discussão com seu <br />
			pai adotivo e fugiu de casa para se alistar nas forças armadas, onde serviu durante dois anos antes de ser dispensado. Depois de falhar como cadete <br />
			em West Point, deixou a sua família adotiva. Sua carreira começou humildemente com a publicação de uma coleção anônima de poemas, Tamerlane and Other Poems (1827). <br />
			<br />
			Poe mudou seu foco para a prosa e passou os próximos anos trabalhando para revistas e jornais, tornando-se conhecido por seu próprio estilo de crítica literária. <br />
			Seu trabalho o obrigou a se mudar para diversas cidades, incluindo Baltimore, Filadélfia e Nova Iorque. Em Baltimore, casou-se com Virginia Clemm, <br />
			sua prima de 13 anos de idade. Em 1845, Poe publicou seu poema The Raven, foi um sucesso instantâneo. Sua esposa morreu de tuberculose dois anos após a <br />
			publicação. Ele começou a planejar a criação de seu próprio jornal, The Penn (posteriormente renomeado para The Stylus), porém, em 7 de outubro de 1849, <br />
			aos 40 anos, morreu antes que pudesse ser produzido. A causa de sua morte é desconhecida e foi por diversas vezes atribuída ao álcool, congestão cerebral, <br />
			cólera, drogas, doenças cardiovasculares, raiva, suicídio, tuberculose entre outros agentes. <br />
			<br />
			Poe e suas obras influenciaram a literatura nos Estados Unidos e ao redor do mundo, bem como em campos especializados, tais como a cosmologia e a criptografia. <br />
			Poe e seu trabalho aparecem ao longo da cultura popular na literatura, música, filmes e televisão. Várias de suas casas são dedicadas como museus atualmente. <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Edgar_Allan_Poe' > Wikipedia </a>
						";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Edgar Allan Poe (nascido Edgar Poe; Boston, Massachusetts, Estados Unidos, 19 de Janeiro de 1809 — Baltimore, Maryland, Estados Unidos, 7 de Outubro de 1849) <br />
			foi um autor, poeta, editor e crítico literário estadunidense, integrante do movimento romântico em seu país. Conhecido por suas histórias que envolvem <br />
			o mistério e o macabro, Poe foi um dos primeiros escritores norte-americanos de contos e é geralmente considerado o inventor do gênero ficção policial, <br />
			também recebendo crédito por sua contribuição ao emergente gênero de ficção científica. Ele foi o primeiro escritor americano conhecido por tentar <br />
			ganhar a vida através da escrita por si só, resultando em uma vida e carreira financeiramente difíceis. <br />
			<br />
			Ele nasceu como Edgar Poe, em Boston, Massachusetts; quando jovem, ficou órfão de mãe, que morreu pouco depois de seu pai abandonar a família. <br />
			Poe foi acolhido por Francis Allan e o seu marido John Allan, de Richmond, Virginia, mas nunca foi formalmente adotado. Ele frequentou a <br />
			Universidade da Virgínia por um semestre, passando a maior parte do tempo entre bebidas e mulheres. Nesse período, teve uma séria discussão com seu <br />
			pai adotivo e fugiu de casa para se alistar nas forças armadas, onde serviu durante dois anos antes de ser dispensado. Depois de falhar como cadete <br />
			em West Point, deixou a sua família adotiva. Sua carreira começou humildemente com a publicação de uma coleção anônima de poemas, Tamerlane and Other Poems (1827). <br />
			<br />
			Poe mudou seu foco para a prosa e passou os próximos anos trabalhando para revistas e jornais, tornando-se conhecido por seu próprio estilo de crítica literária. <br />
			Seu trabalho o obrigou a se mudar para diversas cidades, incluindo Baltimore, Filadélfia e Nova Iorque. Em Baltimore, casou-se com Virginia Clemm, <br />
			sua prima de 13 anos de idade. Em 1845, Poe publicou seu poema The Raven, foi um sucesso instantâneo. Sua esposa morreu de tuberculose dois anos após a <br />
			publicação. Ele começou a planejar a criação de seu próprio jornal, The Penn (posteriormente renomeado para The Stylus), porém, em 7 de outubro de 1849, <br />
			aos 40 anos, morreu antes que pudesse ser produzido. A causa de sua morte é desconhecida e foi por diversas vezes atribuída ao álcool, congestão cerebral, <br />
			cólera, drogas, doenças cardiovasculares, raiva, suicídio, tuberculose entre outros agentes. <br />
			<br />
			Poe e suas obras influenciaram a literatura nos Estados Unidos e ao redor do mundo, bem como em campos especializados, tais como a cosmologia e a criptografia. <br />
			Poe e seu trabalho aparecem ao longo da cultura popular na literatura, música, filmes e televisão. Várias de suas casas são dedicadas como museus atualmente. <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Edgar_Allan_Poe' > Wikipedia </a>
						";
				}
			?>
		</div>
		<?php $auctor='ALLANpoe'; include '../design/poemfind.php'; ?>
		<?php $user = 'ALLANpoe'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>