<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='CABRALmelo'");
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

		<?php $user = 'CABRALmelo'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			João Cabral de Melo Neto GCC • GOSE • OMC (Recife, 9 de janeiro de 1920 — Rio de Janeiro, 9 de outubro de 1999) foi um poeta e diplomata brasileiro. <br />
			Sua obra poética, que vai de uma tendência surrealista até a poesia popular, porém caracterizada pelo rigor estético, com poemas avessos a confessionalismos <br />
			e marcados pelo uso de rimas toantes, inaugurou uma nova forma de fazer poesia no Brasil. É considerado o maior poeta de língua portuguesa por escritores <br />
			como Mia Couto.[1] <br />
			<br />
			Foi agraciado com vários prêmios literários, entre eles o Prêmio Neustadt, tido como o "Nobel Americano", sendo o único brasileiro galardoado com tal <br />
			distinção,[2] e o Prêmio Camões. Quando morreu, em 1999, especulava-se que era um forte candidato ao Prêmio Nobel de Literatura.[3] <br />
			<br />
			Irmão do historiador Evaldo Cabral de Mello e primo do poeta Manuel Bandeira e do sociólogo Gilberto Freyre, João Cabral foi amigo do pintor Joan Miró <br />
			e do poeta Joan Brossa. Foi casado com Stella Maria Barbosa de Oliveira, com quem teve os filhos Rodrigo, Inez, Luiz, Isabel e João. Casou-se em segundas <br />
			núpcias, em 1986, com a poetisa Marly de Oliveira. <br />
			<br />
			O escritor foi membro da Academia Pernambucana de Letras (embora não tenha comparecido a nenhuma reunião como acadêmico, nem mesmo a sua posse) e da <br />
			Academia Brasileira de Letras.[4] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Jo%C3%A3o_Cabral_de_Melo_Neto' > Wikipedia </a>
			<br />
			<iframe width="560" height="315" src="https://www.youtube.com/embed/EJRwt5-rllQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='CABRALmelo'; include '../design/poemfind.php'; ?>
		<?php $user = 'CABRALmelo'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>