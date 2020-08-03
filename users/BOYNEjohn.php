<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BOYNEjohn'");
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

		<?php $user = 'BOYNEjohn'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			John Boyne (Dublin, 30 de abril de 1971) é um escritor irlandês, famoso pelo best-seller The Boy in The Stripped Pyjamas: A Fable.

			Estudou língua inglesa no Trinity College, e Literatura Criativa na Universidade de East Anglia, onde foi galardoado com o prêmio Curtis Brown. Começou a escrever histórias aos 19 anos e teve o primeiro romance publicado dez anos depois. Trabalhou numa livraria dos 25 aos 32 anos.

			Boyne lançou recentemente o seu sétimo romance - The House of Special Purpose, ou O Palácio de Inverno na edição brasileira -, assim como uma quantidade de contos que foram publicados em várias antologias e transmitidos por rádio e televisão. Os seus romances foram publicados em 30 idiomas. The Boy in the Striped Pyjamas (Brasil: O menino do pijama listrado /Portugal: O Rapaz do Pijama às Riscas)é um Best Seller em Nova York e uma adaptação para o cinema começou a ser filmada em abril de 2007. Boyne reside em Dublin.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/John_Boyne' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			John Boyne (Dublin, 30 de abril de 1971) é um escritor irlandês, famoso pelo best-seller The Boy in The Stripped Pyjamas: A Fable.

			Estudou língua inglesa no Trinity College, e Literatura Criativa na Universidade de East Anglia, onde foi galardoado com o prêmio Curtis Brown. Começou a escrever histórias aos 19 anos e teve o primeiro romance publicado dez anos depois. Trabalhou numa livraria dos 25 aos 32 anos.

			Boyne lançou recentemente o seu sétimo romance - The House of Special Purpose, ou O Palácio de Inverno na edição brasileira -, assim como uma quantidade de contos que foram publicados em várias antologias e transmitidos por rádio e televisão. Os seus romances foram publicados em 30 idiomas. The Boy in the Striped Pyjamas (Brasil: O menino do pijama listrado /Portugal: O Rapaz do Pijama às Riscas)é um Best Seller em Nova York e uma adaptação para o cinema começou a ser filmada em abril de 2007. Boyne reside em Dublin.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/John_Boyne' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			John Boyne (Dublin, 30 de abril de 1971) é um escritor irlandês, famoso pelo best-seller The Boy in The Stripped Pyjamas: A Fable.

			Estudou língua inglesa no Trinity College, e Literatura Criativa na Universidade de East Anglia, onde foi galardoado com o prêmio Curtis Brown. Começou a escrever histórias aos 19 anos e teve o primeiro romance publicado dez anos depois. Trabalhou numa livraria dos 25 aos 32 anos.

			Boyne lançou recentemente o seu sétimo romance - The House of Special Purpose, ou O Palácio de Inverno na edição brasileira -, assim como uma quantidade de contos que foram publicados em várias antologias e transmitidos por rádio e televisão. Os seus romances foram publicados em 30 idiomas. The Boy in the Striped Pyjamas (Brasil: O menino do pijama listrado /Portugal: O Rapaz do Pijama às Riscas)é um Best Seller em Nova York e uma adaptação para o cinema começou a ser filmada em abril de 2007. Boyne reside em Dublin.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/John_Boyne' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='BOYNEjohn'; include '../design/poemfind.php'; ?>
		<?php $user = 'BOYNEjohn'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>