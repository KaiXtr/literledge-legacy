<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='VICENTEgil'");
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

		<?php $user = 'VICENTEgil'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Gil Vicente (c. 1465 — c. 1536) é considerado o primeiro grande dramaturgo português, além de poeta de renome. Enquanto homem de teatro, parece ter também desempenhado as tarefas de músico, ator e encenador. É considerado o pai do teatro português, ou mesmo do teatro ibérico, já que também escreveu em castelhano - partilhando a paternidade da dramaturgia espanhola com Juan del Encina.

			Há quem o identifique com o ourives, autor da Custódia de Belém, mestre da balança, e com o mestre de Retórica do rei Dom Manuel.

			A obra vicentina é tida como reflexo da mudança dos tempos e da passagem da Idade Média para o Renascimento, fazendo-se o balanço de uma época onde as hierarquias e a ordem social eram regidas por regras inflexíveis, para uma nova sociedade onde se começa a subverter a ordem instituída, ao questioná-la. Foi o principal representante da literatura renascentista portuguesa, anterior a Camões, incorporando elementos populares na sua escrita que influenciou, por sua vez, a cultura popular portuguesa.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Gil_Vicente' > Wikipedia </a>
		</div>
		<div class='content'>
			<?php $auctor='VICENTEgil'; include '../design/poemfind.php'; ?>
		</div>
		<?php $user = 'VICENTEgil'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>