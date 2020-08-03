<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002G'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']];
			}
			include '../design/metadata.php'; 
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='bookinfo'>
			<?php $book = '00002G'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Boy in the Striped Pyjamas (Brasil: O Menino do Pijama Listrado /Portugal: O Rapaz do Pijama às Riscas) foi escrito por John Boyne em 2006. O autor diz que escreveu a primeira versão da obra em dois dias e meio. Em 2008 foi o livro mais vendido do ano na Espanha. Também chegou a número dois na lista de best sellers do New York Times, nos Estados Unidos, assim como no Reino Unido, Irlanda e Austrália.

					A história tem como pano de fundo os acontecimentos em Auschwitz, durante a Segunda Guerra Mundial e o Holocausto.
					A história se passa durante o período do Holocausto, tendo como personagem principal, Bruno, filho de um militar alemão, que tem 8 anos e não sabe nada sobre o Holocausto está envolvida no conflito. Na verdade, Bruno sabe apenas que foi obrigado a abandonar a espaçosa casa em que vivia em Berlim, perto de seus avós e a mudar-se para uma região isolada, onde ele não tem ninguém para brincar e nem nada para fazer. Da janela do quarto, Bruno pode ver uma cerca, e além dela centenas de pessoas vestidas de \"pijama\", que sempre o deixavam com frio na barriga. Em um de seus passeios Bruno conhece Shmuel, um garoto do outro lado da cerca, que curiosamente tem a mesma idade que ele. Conforme a amizade dos dois se intensifica, Bruno fica intrigado e, vai aos poucos tentando entender o mistério que ronda as atividades de seu pai. Bruno e seu amigo Shmuel, vivem diversas aventuras juntos, com um final que surpreende até para os mais preparados. 
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Boy in the Striped Pyjamas (Brasil: O Menino do Pijama Listrado /Portugal: O Rapaz do Pijama às Riscas) foi escrito por John Boyne em 2006. O autor diz que escreveu a primeira versão da obra em dois dias e meio. Em 2008 foi o livro mais vendido do ano na Espanha. Também chegou a número dois na lista de best sellers do New York Times, nos Estados Unidos, assim como no Reino Unido, Irlanda e Austrália.

					A história tem como pano de fundo os acontecimentos em Auschwitz, durante a Segunda Guerra Mundial e o Holocausto.
					A história se passa durante o período do Holocausto, tendo como personagem principal, Bruno, filho de um militar alemão, que tem 8 anos e não sabe nada sobre o Holocausto está envolvida no conflito. Na verdade, Bruno sabe apenas que foi obrigado a abandonar a espaçosa casa em que vivia em Berlim, perto de seus avós e a mudar-se para uma região isolada, onde ele não tem ninguém para brincar e nem nada para fazer. Da janela do quarto, Bruno pode ver uma cerca, e além dela centenas de pessoas vestidas de \"pijama\", que sempre o deixavam com frio na barriga. Em um de seus passeios Bruno conhece Shmuel, um garoto do outro lado da cerca, que curiosamente tem a mesma idade que ele. Conforme a amizade dos dois se intensifica, Bruno fica intrigado e, vai aos poucos tentando entender o mistério que ronda as atividades de seu pai. Bruno e seu amigo Shmuel, vivem diversas aventuras juntos, com um final que surpreende até para os mais preparados. 
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Boy in the Striped Pyjamas (Brasil: O Menino do Pijama Listrado /Portugal: O Rapaz do Pijama às Riscas) foi escrito por John Boyne em 2006. O autor diz que escreveu a primeira versão da obra em dois dias e meio. Em 2008 foi o livro mais vendido do ano na Espanha. Também chegou a número dois na lista de best sellers do New York Times, nos Estados Unidos, assim como no Reino Unido, Irlanda e Austrália.

					A história tem como pano de fundo os acontecimentos em Auschwitz, durante a Segunda Guerra Mundial e o Holocausto.
					A história se passa durante o período do Holocausto, tendo como personagem principal, Bruno, filho de um militar alemão, que tem 8 anos e não sabe nada sobre o Holocausto está envolvida no conflito. Na verdade, Bruno sabe apenas que foi obrigado a abandonar a espaçosa casa em que vivia em Berlim, perto de seus avós e a mudar-se para uma região isolada, onde ele não tem ninguém para brincar e nem nada para fazer. Da janela do quarto, Bruno pode ver uma cerca, e além dela centenas de pessoas vestidas de \"pijama\", que sempre o deixavam com frio na barriga. Em um de seus passeios Bruno conhece Shmuel, um garoto do outro lado da cerca, que curiosamente tem a mesma idade que ele. Conforme a amizade dos dois se intensifica, Bruno fica intrigado e, vai aos poucos tentando entender o mistério que ronda as atividades de seu pai. Bruno e seu amigo Shmuel, vivem diversas aventuras juntos, com um final que surpreende até para os mais preparados. 
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00002G'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'BOYNEjohn'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>