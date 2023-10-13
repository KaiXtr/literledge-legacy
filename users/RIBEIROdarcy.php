<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='RIBEIROdarcy'");
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

		<?php $user = 'RIBEIROdarcy'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Darcy Ribeiro[nota 1] (Montes Claros, 26 de outubro de 1922 — Brasília, 17 de fevereiro de 1997) foi um antropólogo, escritor e político brasileiro, conhecido por seu foco em relação aos indígenas e à educação no país.

			Suas ideias de identidade latino-americana influenciaram vários estudiosos latino-americanos posteriores. Como Ministro da Educação do Brasil realizou profundas reformas, o que o levou a ser convidado a participar de reformas universitárias no Chile, Peru, Venezuela, México e Uruguai, depois de deixar o Brasil devido à ditadura militar de 1964.

			Foi casado com a etnóloga e antropóloga Berta Gleizer Ribeiro, até 1974.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Darcy_Ribeiro' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Darcy Ribeiro[nota 1] (Montes Claros, 26 de outubro de 1922 — Brasília, 17 de fevereiro de 1997) foi um antropólogo, escritor e político brasileiro, conhecido por seu foco em relação aos indígenas e à educação no país.

			Suas ideias de identidade latino-americana influenciaram vários estudiosos latino-americanos posteriores. Como Ministro da Educação do Brasil realizou profundas reformas, o que o levou a ser convidado a participar de reformas universitárias no Chile, Peru, Venezuela, México e Uruguai, depois de deixar o Brasil devido à ditadura militar de 1964.

			Foi casado com a etnóloga e antropóloga Berta Gleizer Ribeiro, até 1974.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Darcy_Ribeiro' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Darcy Ribeiro[nota 1] (Montes Claros, 26 de outubro de 1922 — Brasília, 17 de fevereiro de 1997) foi um antropólogo, escritor e político brasileiro, conhecido por seu foco em relação aos indígenas e à educação no país.

			Suas ideias de identidade latino-americana influenciaram vários estudiosos latino-americanos posteriores. Como Ministro da Educação do Brasil realizou profundas reformas, o que o levou a ser convidado a participar de reformas universitárias no Chile, Peru, Venezuela, México e Uruguai, depois de deixar o Brasil devido à ditadura militar de 1964.

			Foi casado com a etnóloga e antropóloga Berta Gleizer Ribeiro, até 1974.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Darcy_Ribeiro' > Wikipedia </a>
					";
				}
			?>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/6r7QDo9yHJk?start=141" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='RIBEIROdarcy'; include '../design/poemfind.php'; ?>
		<?php $user = 'RIBEIROdarcy'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>