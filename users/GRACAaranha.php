<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='GRACAaranha'");
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

		<?php $user = 'GRACAaranha'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			José Pereira da Graça Aranha (São Luís, 21 de junho de 1868 — Rio de Janeiro, 26 de janeiro de 1931) foi um escritor e diplomata brasileiro, e um imortal da Academia Brasileira de Letras, considerado um autor pré-modernista no Brasil, sendo um dos organizadores da Semana de Arte Moderna de 1922. A publicação do romance Canaã, foi um dos grandes marcos para o nacionalismo e o pré-modernismo em especial, nos anos 1902 e 1922.

			Devido aos cargos que ocupou na diplomacia brasileira em países europeus, ele esteve a par dos movimentos vanguardistas que surgiam na Europa, tendo tentado introduzi-los, à sua maneira, na literatura brasileira, rompendo com a Academia Brasileira de Letras por isso em 1924. Um aspecto importante que vale mencionar é que Graça Aranha é visto como o único fundador e escritor, que teve uma relação com a academia brasileira de letras, sem ao menos ter publicado uma obra.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Gra%C3%A7a_Aranha' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			José Pereira da Graça Aranha (São Luís, 21 de junho de 1868 — Rio de Janeiro, 26 de janeiro de 1931) foi um escritor e diplomata brasileiro, e um imortal da Academia Brasileira de Letras, considerado um autor pré-modernista no Brasil, sendo um dos organizadores da Semana de Arte Moderna de 1922. A publicação do romance Canaã, foi um dos grandes marcos para o nacionalismo e o pré-modernismo em especial, nos anos 1902 e 1922.

			Devido aos cargos que ocupou na diplomacia brasileira em países europeus, ele esteve a par dos movimentos vanguardistas que surgiam na Europa, tendo tentado introduzi-los, à sua maneira, na literatura brasileira, rompendo com a Academia Brasileira de Letras por isso em 1924. Um aspecto importante que vale mencionar é que Graça Aranha é visto como o único fundador e escritor, que teve uma relação com a academia brasileira de letras, sem ao menos ter publicado uma obra.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Gra%C3%A7a_Aranha' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			José Pereira da Graça Aranha (São Luís, 21 de junho de 1868 — Rio de Janeiro, 26 de janeiro de 1931) foi um escritor e diplomata brasileiro, e um imortal da Academia Brasileira de Letras, considerado um autor pré-modernista no Brasil, sendo um dos organizadores da Semana de Arte Moderna de 1922. A publicação do romance Canaã, foi um dos grandes marcos para o nacionalismo e o pré-modernismo em especial, nos anos 1902 e 1922.

			Devido aos cargos que ocupou na diplomacia brasileira em países europeus, ele esteve a par dos movimentos vanguardistas que surgiam na Europa, tendo tentado introduzi-los, à sua maneira, na literatura brasileira, rompendo com a Academia Brasileira de Letras por isso em 1924. Um aspecto importante que vale mencionar é que Graça Aranha é visto como o único fundador e escritor, que teve uma relação com a academia brasileira de letras, sem ao menos ter publicado uma obra.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Gra%C3%A7a_Aranha' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='GRACAaranha'; include '../design/poemfind.php'; ?>
		<?php $user = 'GRACAaranha'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>