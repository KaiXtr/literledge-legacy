<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001I'");
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
			<?php $book = '00001I'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Animal Farm (Brasil: A Revolução dos Bichos /Portugal: O Porco Triunfante/O Triunfo dos Porcos/A Quinta dos Animais) é um romance satírico do escritor inglês George Orwell, publicado no Reino Unido em 17 de agosto de 1945 e apontado pela revista americana Time entre os cem melhores da língua inglesa. A sátira feita pelo livro à União Soviética comunista obteve o 31º lugar na lista dos melhores romances do século XX organizada pela Modern Library List.

					O livro narra uma história de corrupção e traição e recorre a figuras de animais para retratar as fraquezas humanas e demolir o \"paraíso comunista\" proposto pela União Soviética na época de Stalin. A revolta dos animais da quinta contra os humanos é liderada pelos porcos Bola-de-Neve (Snowball) e Napoleão (Napoleon). Os animais tentam criar uma sociedade utópica, porém Napoleão, seduzido pelo poder, afasta Bola-de-Neve e estabelece uma ditadura tão corrupta quanto a sociedade de humanos.

					Para o autor, um socialista democrático e membro do Partido Trabalhista Independente por muitos anos, a obra é uma sátira à política stalinista que, segundo sua ótica, teria traído os princípios da Revolução Russa de 1917.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Animal Farm (Brasil: A Revolução dos Bichos /Portugal: O Porco Triunfante/O Triunfo dos Porcos/A Quinta dos Animais) é um romance satírico do escritor inglês George Orwell, publicado no Reino Unido em 17 de agosto de 1945 e apontado pela revista americana Time entre os cem melhores da língua inglesa. A sátira feita pelo livro à União Soviética comunista obteve o 31º lugar na lista dos melhores romances do século XX organizada pela Modern Library List.

					O livro narra uma história de corrupção e traição e recorre a figuras de animais para retratar as fraquezas humanas e demolir o \"paraíso comunista\" proposto pela União Soviética na época de Stalin. A revolta dos animais da quinta contra os humanos é liderada pelos porcos Bola-de-Neve (Snowball) e Napoleão (Napoleon). Os animais tentam criar uma sociedade utópica, porém Napoleão, seduzido pelo poder, afasta Bola-de-Neve e estabelece uma ditadura tão corrupta quanto a sociedade de humanos.

					Para o autor, um socialista democrático e membro do Partido Trabalhista Independente por muitos anos, a obra é uma sátira à política stalinista que, segundo sua ótica, teria traído os princípios da Revolução Russa de 1917.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Animal Farm (Brasil: A Revolução dos Bichos /Portugal: O Porco Triunfante/O Triunfo dos Porcos/A Quinta dos Animais) é um romance satírico do escritor inglês George Orwell, publicado no Reino Unido em 17 de agosto de 1945 e apontado pela revista americana Time entre os cem melhores da língua inglesa. A sátira feita pelo livro à União Soviética comunista obteve o 31º lugar na lista dos melhores romances do século XX organizada pela Modern Library List.

					O livro narra uma história de corrupção e traição e recorre a figuras de animais para retratar as fraquezas humanas e demolir o \"paraíso comunista\" proposto pela União Soviética na época de Stalin. A revolta dos animais da quinta contra os humanos é liderada pelos porcos Bola-de-Neve (Snowball) e Napoleão (Napoleon). Os animais tentam criar uma sociedade utópica, porém Napoleão, seduzido pelo poder, afasta Bola-de-Neve e estabelece uma ditadura tão corrupta quanto a sociedade de humanos.

					Para o autor, um socialista democrático e membro do Partido Trabalhista Independente por muitos anos, a obra é uma sátira à política stalinista que, segundo sua ótica, teria traído os princípios da Revolução Russa de 1917.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001I'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ORWELLgeorge'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>