<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='LISPECTORclarice");
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

		<?php $user = 'LISPECTORclarice'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Clarice Lispector, nascida Chaya Pinkhasovna Lispector (em russo: Хая Пинхасовна Лиспектор; Chechelnyk, 10 de dezembro de 1920 — Rio de Janeiro, 9 de dezembro de 1977), <br />
			foi uma escritora e jornalista ucraniana naturalizada brasileira. Autora de romances, contos e ensaios, é considerada uma das escritoras brasileiras mais <br />
			importantes do século XX e a maior escritora judia desde Franz Kafka. Sua obra está repleta de cenas cotidianas simples e tramas psicológicas, reputando-se <br />
			como uma de suas principais características a epifania de personagens comuns em momentos do cotidiano. Quanto às suas identidades nacional e regional, <br />
			declarava-se brasileira e pernambucana. <br />
			<br />
			Nasceu em uma família judaica russa que perdeu suas rendas com a Guerra Civil Russa e se viu obrigada a emigrar em decorrência da perseguição a judeus, à época, <br />
			a qual resultou em diversos extermínios em massa. Especula-se que a mãe de Clarice teria sido violada por soldados russos durante a Primeira Guerra Mundial [nota 1]. <br />
			A futura escritora chegou ao Brasil, ainda pequena, em 1922, com seus pais e duas irmãs.[nota 2] Clarice dizia não ter nenhuma ligação com a Ucrânia - <br />
			"Naquela terra eu literalmente nunca pisei: fui carregada de colo" - e que sua verdadeira pátria era o Brasil. Inicialmente, a família passou um breve <br />
			período em Maceió, até se mudar para o Recife, onde Clarice cresceu e onde, aos oito anos, perdeu a mãe. Aos quatorze anos de idade transferiu-se com o <br />
			pai e as irmãs para o Rio de Janeiro, local em que a família se estabilizou e onde o seu pai viria a falecer, em 1940[1]. <br />
			<br />
			Estudou Direito na Universidade Federal do Rio de Janeiro, conhecida como Universidade do Brasil, apesar de, na época, ter demonstrado mais interesse pelo meio <br />
			literário, no qual ingressou precocemente como tradutora, logo se consagrando como escritora, jornalista, contista e ensaísta, tornando-se uma das figuras mais <br />
			influentes da Literatura brasileira e do Modernismo, sendo considerada uma das principais influências da nova geração de escritores brasileiros. <br />
			É incluída pela crítica especializada entre os principais autores brasileiros do século XX. <br />
			<br />
			Suas principais obras marcam cada período de sua carreira. Perto do Coração Selvagem foi seu livro de estreia, publicado quando Clarice tinha 24 anos de idade; <br />
			Laços de Família, A Paixão segundo G.H., A Hora da Estrela e Um Sopro de Vida são seus últimos livros publicados. Faleceu em 1977, um dia antes de completar 57 anos, <br />
			em decorrência de um câncer de ovário. Deixou dois filhos e uma vasta obra literária composta de romances, novelas, contos, crônicas, literatura infantil e entrevistas. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Clarice_Lispector' > Wikipedia </a>
			<br />
			<iframe width="560" height="315" src="https://www.youtube.com/embed/ohHP1l2EVnU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='LISPECTORclarice'; include '../design/poemfind.php'; ?>
		<?php $user = 'LISPECTORclarice'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>