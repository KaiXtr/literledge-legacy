<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001Q'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']].' - ';
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00001Q'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Murders in the Rue Morgue (Os Assassinatos da Rua Morgue, no Brasil; Os Crimes da Rua Morgue em Portugal) é um conto escrito por Edgar Allan Poe e que foi publicado pela primeira vez na Graham's Magazine, em abril de 1841.

					Conta a história de dois brutais assassinatos de mulheres na Rua Morgue, em Paris, casos que parecem insolúveis até que o detetive C. Auguste Dupin assume o caso e, usando sua estupenda inteligência, desvenda esse grande mistério.

					O detetive Dupin é considerado o precursor de Sherlock Holmes. Os métodos de investigação são semelhantes ao do detetive inglês e, as histórias policiais em que aparece, encontram-se no período da gênese da literatura policial internacional.

					Apesar dessas qualidades, Dupin é pouco conhecido pois seu criador escreveu apenas três contos com ele (a obra completa de Poe é pequena em razão da sua morte precoce, aos 40 anos, além de mais identificada com contos de terror e suspense, outra criação literária do genial autor estadunidense).

					Além de Os Assassinatos da Rua Morgue, Dupin aparece nos seguintes contos:

					The Mystery of Marie Roget (1842)
					The Purloined Letter (1844)
					<hr>
				</div>
			</div>
			<?php $book = '00001Q'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ALLANpoe'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>