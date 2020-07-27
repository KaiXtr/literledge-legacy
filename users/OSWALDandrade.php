<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='OSWALDandrade'");
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

		<?php $user = 'OSWALDandrade'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			José Oswald de Sousa de Andrade,[1] nome completo de Oswald de Andrade,[nota 1] (São Paulo, 11 de janeiro de 1890 — São Paulo, 22 de outubro de 1954) foi um poeta, <br />
			escritor, ensaísta e dramaturgo brasileiro.[1] Era filho único de José Oswald Nogueira de Andrade e de Inês Henriqueta Inglês de Sousa de Andrade <br />
			(irmã do escritor Inglês de Sousa).[2] Formou-se em Direito no Largo São Francisco em 1919[3]. Foi um dos promotores da Semana de Arte Moderna que ocorreu em <br />
			1922 em São Paulo, tornando-se um dos grandes nomes do modernismo literário brasileiro. Ficou conhecido pelo seu temperamento \"irreverente e combativo\",[4] <br />
			sendo o mais inovador entre estes. Colaborou na revista Contemporânea[5] (1915-1926). De 1926 a 1929 foi casado com Tarsila do Amaral e de 1930 a 1935 foi marido de Pagu. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Oswald_de_Andrade' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			José Oswald de Sousa de Andrade,[1] nome completo de Oswald de Andrade,[nota 1] (São Paulo, 11 de janeiro de 1890 — São Paulo, 22 de outubro de 1954) foi um poeta, <br />
			escritor, ensaísta e dramaturgo brasileiro.[1] Era filho único de José Oswald Nogueira de Andrade e de Inês Henriqueta Inglês de Sousa de Andrade <br />
			(irmã do escritor Inglês de Sousa).[2] Formou-se em Direito no Largo São Francisco em 1919[3]. Foi um dos promotores da Semana de Arte Moderna que ocorreu em <br />
			1922 em São Paulo, tornando-se um dos grandes nomes do modernismo literário brasileiro. Ficou conhecido pelo seu temperamento \"irreverente e combativo\",[4] <br />
			sendo o mais inovador entre estes. Colaborou na revista Contemporânea[5] (1915-1926). De 1926 a 1929 foi casado com Tarsila do Amaral e de 1930 a 1935 foi marido de Pagu. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Oswald_de_Andrade' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			José Oswald de Sousa de Andrade,[1] nome completo de Oswald de Andrade,[nota 1] (São Paulo, 11 de janeiro de 1890 — São Paulo, 22 de outubro de 1954) foi um poeta, <br />
			escritor, ensaísta e dramaturgo brasileiro.[1] Era filho único de José Oswald Nogueira de Andrade e de Inês Henriqueta Inglês de Sousa de Andrade <br />
			(irmã do escritor Inglês de Sousa).[2] Formou-se em Direito no Largo São Francisco em 1919[3]. Foi um dos promotores da Semana de Arte Moderna que ocorreu em <br />
			1922 em São Paulo, tornando-se um dos grandes nomes do modernismo literário brasileiro. Ficou conhecido pelo seu temperamento \"irreverente e combativo\",[4] <br />
			sendo o mais inovador entre estes. Colaborou na revista Contemporânea[5] (1915-1926). De 1926 a 1929 foi casado com Tarsila do Amaral e de 1930 a 1935 foi marido de Pagu. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Oswald_de_Andrade' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='OSWALDandrade'; include '../design/poemfind.php'; ?>
		<?php $user = 'OSWALDandrade'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>