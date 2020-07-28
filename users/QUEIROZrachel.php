<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='QUEIROZrachel'");
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

		<?php $user = 'QUEIROZrachel'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Rachel de Queiroz GOIH (Fortaleza, 17 de novembro de 1910 — Rio de Janeiro, 4 de novembro de 2003) foi uma tradutora, romancista, escritora, jornalista, cronista prolífica e importante dramaturga brasileira.

			Autora de destaque na ficção social nordestina. Foi a primeira mulher a ingressar na Academia Brasileira de Letras. Em 1993, foi a primeira mulher galardoada com o Prêmio Camões. Ingressou na Academia Cearense de Letras no dia 15 de agosto de 1994, na ocasião do centenário da instituição.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Rachel_de_Queiroz' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Rachel de Queiroz GOIH (Fortaleza, 17 de novembro de 1910 — Rio de Janeiro, 4 de novembro de 2003) foi uma tradutora, romancista, escritora, jornalista, cronista prolífica e importante dramaturga brasileira.

			Autora de destaque na ficção social nordestina. Foi a primeira mulher a ingressar na Academia Brasileira de Letras. Em 1993, foi a primeira mulher galardoada com o Prêmio Camões. Ingressou na Academia Cearense de Letras no dia 15 de agosto de 1994, na ocasião do centenário da instituição.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Rachel_de_Queiroz' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Rachel de Queiroz GOIH (Fortaleza, 17 de novembro de 1910 — Rio de Janeiro, 4 de novembro de 2003) foi uma tradutora, romancista, escritora, jornalista, cronista prolífica e importante dramaturga brasileira.

			Autora de destaque na ficção social nordestina. Foi a primeira mulher a ingressar na Academia Brasileira de Letras. Em 1993, foi a primeira mulher galardoada com o Prêmio Camões. Ingressou na Academia Cearense de Letras no dia 15 de agosto de 1994, na ocasião do centenário da instituição.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Rachel_de_Queiroz' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='QUEIROZrachel'; include '../design/poemfind.php'; ?>
		<?php $user = 'QUEIROZrachel'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>