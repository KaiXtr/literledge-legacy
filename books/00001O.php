<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001O'");
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
			<?php $book = '00001O'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Assim falou Zaratustra: um livro para todos e para ninguém (em alemão: Also sprach Zarathustra: Ein Buch für Alle und Keinen) é um livro escrito entre 1883 e 1885 pelo filósofo alemão Friedrich Nietzsche, que influenciou significativamente o mundo moderno. O livro foi escrito originalmente como três volumes separados em um período de vários anos. Depois, Nietzsche decidiu escrever outros três volumes mas apenas conseguiu terminar um, elevando o número total de volumes para quatro. Após a morte de Nietzsche, ele foi impresso em um único volume.

					O livro narra as andanças e ensinamentos de um filósofo, que se autonomeou Zaratustra após a fundação do Zoroastrismo na antiga Pérsia. Para explorar muitas das ideias de Nietzsche, o livro usa uma forma poética e fictícia, frequentemente satirizando o Velho e Novo Testamento

					O centro de Zaratustra é a noção de que os seres humanos são uma forma transicional entre macacos e o que Nietzsche chamou de Übermensch, literalmente \"além-do-homem\", normalmente traduzido como \"super-homem\". O nome é um dos muitos trocadilhos no livro e se refere mais claramente à imagem do Sol vindo além do horizonte ao amanhecer como a simples noção de vitória.[carece de fontes]

					Amplamente baseado em episódios, as histórias em Zaratustra podem ser lidas em qualquer ordem. Zaratustra contém a famosa frase Gott ist tot (\"Deus está morto\"), embora essa também tenha aparecido anteriormente no livro Die fröhliche Wissenschaft (A Gaia Ciência) de Nietszche, e antes ainda em diversas obras de Georg Hegel.

					Os dois volumes finais não terminados do livro foram planejados para retratar o trabalho missionário de Zaratustra e sua morte.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Assim falou Zaratustra: um livro para todos e para ninguém (em alemão: Also sprach Zarathustra: Ein Buch für Alle und Keinen) é um livro escrito entre 1883 e 1885 pelo filósofo alemão Friedrich Nietzsche, que influenciou significativamente o mundo moderno. O livro foi escrito originalmente como três volumes separados em um período de vários anos. Depois, Nietzsche decidiu escrever outros três volumes mas apenas conseguiu terminar um, elevando o número total de volumes para quatro. Após a morte de Nietzsche, ele foi impresso em um único volume.

					O livro narra as andanças e ensinamentos de um filósofo, que se autonomeou Zaratustra após a fundação do Zoroastrismo na antiga Pérsia. Para explorar muitas das ideias de Nietzsche, o livro usa uma forma poética e fictícia, frequentemente satirizando o Velho e Novo Testamento

					O centro de Zaratustra é a noção de que os seres humanos são uma forma transicional entre macacos e o que Nietzsche chamou de Übermensch, literalmente \"além-do-homem\", normalmente traduzido como \"super-homem\". O nome é um dos muitos trocadilhos no livro e se refere mais claramente à imagem do Sol vindo além do horizonte ao amanhecer como a simples noção de vitória.[carece de fontes]

					Amplamente baseado em episódios, as histórias em Zaratustra podem ser lidas em qualquer ordem. Zaratustra contém a famosa frase Gott ist tot (\"Deus está morto\"), embora essa também tenha aparecido anteriormente no livro Die fröhliche Wissenschaft (A Gaia Ciência) de Nietszche, e antes ainda em diversas obras de Georg Hegel.

					Os dois volumes finais não terminados do livro foram planejados para retratar o trabalho missionário de Zaratustra e sua morte.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Assim falou Zaratustra: um livro para todos e para ninguém (em alemão: Also sprach Zarathustra: Ein Buch für Alle und Keinen) é um livro escrito entre 1883 e 1885 pelo filósofo alemão Friedrich Nietzsche, que influenciou significativamente o mundo moderno. O livro foi escrito originalmente como três volumes separados em um período de vários anos. Depois, Nietzsche decidiu escrever outros três volumes mas apenas conseguiu terminar um, elevando o número total de volumes para quatro. Após a morte de Nietzsche, ele foi impresso em um único volume.

					O livro narra as andanças e ensinamentos de um filósofo, que se autonomeou Zaratustra após a fundação do Zoroastrismo na antiga Pérsia. Para explorar muitas das ideias de Nietzsche, o livro usa uma forma poética e fictícia, frequentemente satirizando o Velho e Novo Testamento

					O centro de Zaratustra é a noção de que os seres humanos são uma forma transicional entre macacos e o que Nietzsche chamou de Übermensch, literalmente \"além-do-homem\", normalmente traduzido como \"super-homem\". O nome é um dos muitos trocadilhos no livro e se refere mais claramente à imagem do Sol vindo além do horizonte ao amanhecer como a simples noção de vitória.[carece de fontes]

					Amplamente baseado em episódios, as histórias em Zaratustra podem ser lidas em qualquer ordem. Zaratustra contém a famosa frase Gott ist tot (\"Deus está morto\"), embora essa também tenha aparecido anteriormente no livro Die fröhliche Wissenschaft (A Gaia Ciência) de Nietszche, e antes ainda em diversas obras de Georg Hegel.

					Os dois volumes finais não terminados do livro foram planejados para retratar o trabalho missionário de Zaratustra e sua morte.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001O'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'NIETZSCHEfriedrich'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>