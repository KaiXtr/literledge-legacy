<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='AUSTENjane'");
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

		<?php $user = 'AUSTENjane'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Jane Austen (Steventon, Inglaterra, 16 de dezembro de 1775—Winchester, Inglaterra, 18 de julho de 1817) foi uma escritora inglesa. A ironia que utilizou para descrever as personagens de seus romances a coloca entre os clássicos, haja vista sua aceitação, inclusive na atualidade, sendo constantemente objeto de estudo acadêmico, e alcançando um público bastante amplo.[1]

				Nascida em Steventon, Hampshire, de uma família pertencente à nobreza agrária, sua situação e ambiente serviram de contexto para todas as suas obras, cujo tema gira em torno do casamento da protagonista. A inocência das obras de Austen é apenas aparente, e pode ser interpretada de várias maneiras.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Jane_Austen' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='AUSTENjane'; include '../design/poemfind.php'; ?>
		<?php $user = 'AUSTENjane'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>