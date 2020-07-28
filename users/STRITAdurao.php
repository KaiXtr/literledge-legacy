<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='STRITAdurao'");
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

		<?php $user = 'STRITAdurao'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Frei José de Santa Rita Durão (Cata Preta, 1722 — Lisboa, 1784) foi um religioso agostiniano luso-brasileiro, orador e poeta que fez a sua carreira e escreveu a sua obra em Portugal e no Brasil colonial. É considerado um dos precursores do indianismo no Brasil. Seu poema épico Caramuru é a primeira obra narrativa escrita a ter, como tema, o habitante nativo do Brasil; foi escrita ao estilo de Luís de Camões, imitando um poeta clássico assim como faziam os outros neoclássicos (árcades).
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Santa_Rita_Dur%C3%A3o' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Frei José de Santa Rita Durão (Cata Preta, 1722 — Lisboa, 1784) foi um religioso agostiniano luso-brasileiro, orador e poeta que fez a sua carreira e escreveu a sua obra em Portugal e no Brasil colonial. É considerado um dos precursores do indianismo no Brasil. Seu poema épico Caramuru é a primeira obra narrativa escrita a ter, como tema, o habitante nativo do Brasil; foi escrita ao estilo de Luís de Camões, imitando um poeta clássico assim como faziam os outros neoclássicos (árcades).
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Santa_Rita_Dur%C3%A3o' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Frei José de Santa Rita Durão (Cata Preta, 1722 — Lisboa, 1784) foi um religioso agostiniano luso-brasileiro, orador e poeta que fez a sua carreira e escreveu a sua obra em Portugal e no Brasil colonial. É considerado um dos precursores do indianismo no Brasil. Seu poema épico Caramuru é a primeira obra narrativa escrita a ter, como tema, o habitante nativo do Brasil; foi escrita ao estilo de Luís de Camões, imitando um poeta clássico assim como faziam os outros neoclássicos (árcades).
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Santa_Rita_Dur%C3%A3o' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='STRITAdurao'; include '../design/poemfind.php'; ?>
		<?php $user = 'STRITAdurao'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>