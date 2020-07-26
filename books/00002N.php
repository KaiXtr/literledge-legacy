<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002N'");
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
			<?php $book = '00002N'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Ivanhoe (pt) ou Ivanhoé (pt-BR) é um romance histórico do escritor escocês Walter Scott, publicado em 1820. Narra a luta entre saxões e normandos e as intrigas de João sem Terra para destronar Ricardo Coração de Leão. É considerado o primeiro romance histórico do romantismo.

					A obra surgiu num momento em que se procurava exaltar o nacionalismo, e obteve tamanho sucesso que seu autor foi agraciado com título nobiliárquico. Nele os valores da cavalaria medieval são enaltecidos, assim como o heroísmo inglês.

					Embora fosse protagonizado pelo cavaleiro Wilfred de Ivanhoé, são os personagens quase anônimos que encontram maior destaque do que este, a exemplo de Brian de Bois Guilbert, um templário, vilão que engendra várias maldades.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Ivanhoe (pt) ou Ivanhoé (pt-BR) é um romance histórico do escritor escocês Walter Scott, publicado em 1820. Narra a luta entre saxões e normandos e as intrigas de João sem Terra para destronar Ricardo Coração de Leão. É considerado o primeiro romance histórico do romantismo.

					A obra surgiu num momento em que se procurava exaltar o nacionalismo, e obteve tamanho sucesso que seu autor foi agraciado com título nobiliárquico. Nele os valores da cavalaria medieval são enaltecidos, assim como o heroísmo inglês.

					Embora fosse protagonizado pelo cavaleiro Wilfred de Ivanhoé, são os personagens quase anônimos que encontram maior destaque do que este, a exemplo de Brian de Bois Guilbert, um templário, vilão que engendra várias maldades.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Ivanhoe (pt) ou Ivanhoé (pt-BR) é um romance histórico do escritor escocês Walter Scott, publicado em 1820. Narra a luta entre saxões e normandos e as intrigas de João sem Terra para destronar Ricardo Coração de Leão. É considerado o primeiro romance histórico do romantismo.

					A obra surgiu num momento em que se procurava exaltar o nacionalismo, e obteve tamanho sucesso que seu autor foi agraciado com título nobiliárquico. Nele os valores da cavalaria medieval são enaltecidos, assim como o heroísmo inglês.

					Embora fosse protagonizado pelo cavaleiro Wilfred de Ivanhoé, são os personagens quase anônimos que encontram maior destaque do que este, a exemplo de Brian de Bois Guilbert, um templário, vilão que engendra várias maldades.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00002N'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'SCOTTwalter'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>