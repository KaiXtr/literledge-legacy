<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='AESOP'");
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

		<?php $user = 'AESOP'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
				Esopo (Nessebar, 620 a.C. – Delfos, 564 a.C.) foi um escritor da Grécia Antiga a quem são atribuídas várias fábulas populares.  <br />
				A ele se atribui a paternidade das fábulas como gênero literário. <br />
				<br />
				Malgrado sua existência permaneça em dada medida incerta e pouco se saiba quanto à origem de várias de suas obras, seus contos se disseminaram em muitas <br />
				línguas pela tradição oral. Em muitos de seus escritos, os animais falam e têm características humanas. <br />
				<br />
				As fábulas de Esopo serviram como inspiração para outros escritores ao longo dos séculos, como Fedro e La Fontaine. <br />
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Esopo' > Wikipedia </a>";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
				Esopo (Nessebar, 620 a.C. – Delfos, 564 a.C.) foi um escritor da Grécia Antiga a quem são atribuídas várias fábulas populares.  <br />
				A ele se atribui a paternidade das fábulas como gênero literário. <br />
				<br />
				Malgrado sua existência permaneça em dada medida incerta e pouco se saiba quanto à origem de várias de suas obras, seus contos se disseminaram em muitas <br />
				línguas pela tradição oral. Em muitos de seus escritos, os animais falam e têm características humanas. <br />
				<br />
				As fábulas de Esopo serviram como inspiração para outros escritores ao longo dos séculos, como Fedro e La Fontaine. <br />
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Esopo' > Wikipedia </a>";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
				Esopo (Nessebar, 620 a.C. – Delfos, 564 a.C.) foi um escritor da Grécia Antiga a quem são atribuídas várias fábulas populares.  <br />
				A ele se atribui a paternidade das fábulas como gênero literário. <br />
				<br />
				Malgrado sua existência permaneça em dada medida incerta e pouco se saiba quanto à origem de várias de suas obras, seus contos se disseminaram em muitas <br />
				línguas pela tradição oral. Em muitos de seus escritos, os animais falam e têm características humanas. <br />
				<br />
				As fábulas de Esopo serviram como inspiração para outros escritores ao longo dos séculos, como Fedro e La Fontaine. <br />
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Esopo' > Wikipedia </a>";
				}
			?>
		</div>
		<?php $auctor='AESOP'; include '../design/poemfind.php'; ?>
		<?php $user = 'AESOP'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>