<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ANTONIOgonzaga'");
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

		<?php $user = 'ANTONIOgonzaga'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Tomás António Gonzaga (Miragaia, Porto, 11 de agosto de 1744 — Ilha de Moçambique, 1810), cujo nome arcádico é Dirceu, foi um jurista, poeta e ativista político participante da Inconfidência Mineira, movimento pela independência de Minas Gerais, precursor do processo que conduziu à separação do Brasil de Portugal. Considerado o mais proeminente dos poetas árcades, é ainda hoje estudado em escolas e universidades por seu \"Marília de Dirceu\" .
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Tom%C3%A1s_Ant%C3%B3nio_Gonzaga' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Tomás António Gonzaga (Miragaia, Porto, 11 de agosto de 1744 — Ilha de Moçambique, 1810), cujo nome arcádico é Dirceu, foi um jurista, poeta e ativista político participante da Inconfidência Mineira, movimento pela independência de Minas Gerais, precursor do processo que conduziu à separação do Brasil de Portugal. Considerado o mais proeminente dos poetas árcades, é ainda hoje estudado em escolas e universidades por seu \"Marília de Dirceu\" .
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Tom%C3%A1s_Ant%C3%B3nio_Gonzaga' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Tomás António Gonzaga (Miragaia, Porto, 11 de agosto de 1744 — Ilha de Moçambique, 1810), cujo nome arcádico é Dirceu, foi um jurista, poeta e ativista político participante da Inconfidência Mineira, movimento pela independência de Minas Gerais, precursor do processo que conduziu à separação do Brasil de Portugal. Considerado o mais proeminente dos poetas árcades, é ainda hoje estudado em escolas e universidades por seu \"Marília de Dirceu\" .
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Tom%C3%A1s_Ant%C3%B3nio_Gonzaga' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='ANTONIOgonzaga'; include '../design/poemfind.php'; ?>
		<?php $user = 'ANTONIOgonzaga'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>