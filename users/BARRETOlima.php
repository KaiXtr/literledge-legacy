<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BARRETOlima'");
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

		<?php $user = 'BARRETOlima'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Afonso Henriques de Lima Barreto, mais conhecido como Lima Barreto (Rio de Janeiro, 13 de maio de 1881 — Rio de Janeiro, 1 de novembro de 1922) foi um jornalista e <br />
			escritor brasileiro, que publicou romances, sátiras, contos, crônicas e uma vasta obra em periódicos, principalmente em revistas populares ilustradas e periódicos <br />
			anarquistas do início do século XX. A maior parte de sua obra foi redescoberta e publicada em livro após sua morte por meio do esforço de Francisco de Assis Barbosa e <br />
			outros pesquisadores, levando-o a ser considerado um dos mais importantes escritores brasileiros. <br />
			 <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Lima_Barreto_(escritor)' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Afonso Henriques de Lima Barreto, mais conhecido como Lima Barreto (Rio de Janeiro, 13 de maio de 1881 — Rio de Janeiro, 1 de novembro de 1922) foi um jornalista e <br />
			escritor brasileiro, que publicou romances, sátiras, contos, crônicas e uma vasta obra em periódicos, principalmente em revistas populares ilustradas e periódicos <br />
			anarquistas do início do século XX. A maior parte de sua obra foi redescoberta e publicada em livro após sua morte por meio do esforço de Francisco de Assis Barbosa e <br />
			outros pesquisadores, levando-o a ser considerado um dos mais importantes escritores brasileiros. <br />
			 <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Lima_Barreto_(escritor)' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Afonso Henriques de Lima Barreto, mais conhecido como Lima Barreto (Rio de Janeiro, 13 de maio de 1881 — Rio de Janeiro, 1 de novembro de 1922) foi um jornalista e <br />
			escritor brasileiro, que publicou romances, sátiras, contos, crônicas e uma vasta obra em periódicos, principalmente em revistas populares ilustradas e periódicos <br />
			anarquistas do início do século XX. A maior parte de sua obra foi redescoberta e publicada em livro após sua morte por meio do esforço de Francisco de Assis Barbosa e <br />
			outros pesquisadores, levando-o a ser considerado um dos mais importantes escritores brasileiros. <br />
			 <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Lima_Barreto_(escritor)' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='BARRETOlima'; include '../design/poemfind.php'; ?>
		<?php $user = 'BARRETOlima'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>