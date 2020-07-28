<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002I'");
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
			<?php $book = '00002I'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Montanha Mágica (no original em alemão Der Zauberberg) é um livro escrito por Thomas Mann em 1924. Um dos romances mais influentes da literatura mundial do século XX, foi importante para a conquista do Prêmio Nobel de Literatura em 1929 por Mann. É um exemplo clássico da literatura que os alemães classificam como Bildungsroman.

					Sobre a obra, Malcolm Bradbury escreve:

					\"Seria, segundo ele [Mann], uma viagem à decadência; contudo, ele também a qualificou como a busca da ‘ideia do homem, o conceito de uma humanidade futura que vivenciou o mais profundo conhecimento da doença e da morte’... 
					Thomas Mann iniciou a escrita de \"A montanha mágica\" em 1912, o mesmo ano em que sua mulher Katharina Mann (Katia) foi internada num sanatório de Davos na Suíça, para se curar de uma tuberculose. O livro teria sido inspirado nesse episódio.

					Em 1915, Thomas Mann interrompeu o seu trabalho no manuscrito, indeciso sobre o fim a dar ao romance. Nesta altura, Mann encontra-se em conflito com o irmão Heinrich Mann, um apoiante da França e dos aliados, que desprezava o espírito filisteu, provinciano, totalitário, acrítico dos alemães e de seu Kaiser Wilhelm II, como tinha ficado bem patente no seu romance \"Der Untertan\" (O Súdito), publicado pouco antes do início da Guerra. Thomas Mann era, por contraponto ao irmão, nesta altura, (ainda) um espírito mais arreigado às suas raízes culturais e à sua pátria. Apenas mais tarde, na Segunda Guerra Mundial, Thomas Mann viria a adquirir um espírito mais crítico sobre a sua própria sociedade e cultura. Em \"Reflexões de um homem não-político\", de 1918, Thomas Mann defende a cultura alemã contra aquilo que ele afirma ser uma ideologia dogmática do ocidente. Como se disse, Thomas Mann iria mudar muito na Segunda Guerra Mundial, onde estará abertamente ao lado dessa suposta ideologia. Thomas Mann continuou a escrever \"A Montanha Mágica\" em 1919, já depois da guerra. Terminaria o romance apenas em 1924, ano da publicação. Entretanto, muitas observações dele sobre a experiência da Alemanha na República de Weimar tinham influenciado o livro.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Montanha Mágica (no original em alemão Der Zauberberg) é um livro escrito por Thomas Mann em 1924. Um dos romances mais influentes da literatura mundial do século XX, foi importante para a conquista do Prêmio Nobel de Literatura em 1929 por Mann. É um exemplo clássico da literatura que os alemães classificam como Bildungsroman.

					Sobre a obra, Malcolm Bradbury escreve:

					\"Seria, segundo ele [Mann], uma viagem à decadência; contudo, ele também a qualificou como a busca da ‘ideia do homem, o conceito de uma humanidade futura que vivenciou o mais profundo conhecimento da doença e da morte’... 
					Thomas Mann iniciou a escrita de \"A montanha mágica\" em 1912, o mesmo ano em que sua mulher Katharina Mann (Katia) foi internada num sanatório de Davos na Suíça, para se curar de uma tuberculose. O livro teria sido inspirado nesse episódio.

					Em 1915, Thomas Mann interrompeu o seu trabalho no manuscrito, indeciso sobre o fim a dar ao romance. Nesta altura, Mann encontra-se em conflito com o irmão Heinrich Mann, um apoiante da França e dos aliados, que desprezava o espírito filisteu, provinciano, totalitário, acrítico dos alemães e de seu Kaiser Wilhelm II, como tinha ficado bem patente no seu romance \"Der Untertan\" (O Súdito), publicado pouco antes do início da Guerra. Thomas Mann era, por contraponto ao irmão, nesta altura, (ainda) um espírito mais arreigado às suas raízes culturais e à sua pátria. Apenas mais tarde, na Segunda Guerra Mundial, Thomas Mann viria a adquirir um espírito mais crítico sobre a sua própria sociedade e cultura. Em \"Reflexões de um homem não-político\", de 1918, Thomas Mann defende a cultura alemã contra aquilo que ele afirma ser uma ideologia dogmática do ocidente. Como se disse, Thomas Mann iria mudar muito na Segunda Guerra Mundial, onde estará abertamente ao lado dessa suposta ideologia. Thomas Mann continuou a escrever \"A Montanha Mágica\" em 1919, já depois da guerra. Terminaria o romance apenas em 1924, ano da publicação. Entretanto, muitas observações dele sobre a experiência da Alemanha na República de Weimar tinham influenciado o livro.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Montanha Mágica (no original em alemão Der Zauberberg) é um livro escrito por Thomas Mann em 1924. Um dos romances mais influentes da literatura mundial do século XX, foi importante para a conquista do Prêmio Nobel de Literatura em 1929 por Mann. É um exemplo clássico da literatura que os alemães classificam como Bildungsroman.

					Sobre a obra, Malcolm Bradbury escreve:

					\"Seria, segundo ele [Mann], uma viagem à decadência; contudo, ele também a qualificou como a busca da ‘ideia do homem, o conceito de uma humanidade futura que vivenciou o mais profundo conhecimento da doença e da morte’... 
					Thomas Mann iniciou a escrita de \"A montanha mágica\" em 1912, o mesmo ano em que sua mulher Katharina Mann (Katia) foi internada num sanatório de Davos na Suíça, para se curar de uma tuberculose. O livro teria sido inspirado nesse episódio.

					Em 1915, Thomas Mann interrompeu o seu trabalho no manuscrito, indeciso sobre o fim a dar ao romance. Nesta altura, Mann encontra-se em conflito com o irmão Heinrich Mann, um apoiante da França e dos aliados, que desprezava o espírito filisteu, provinciano, totalitário, acrítico dos alemães e de seu Kaiser Wilhelm II, como tinha ficado bem patente no seu romance \"Der Untertan\" (O Súdito), publicado pouco antes do início da Guerra. Thomas Mann era, por contraponto ao irmão, nesta altura, (ainda) um espírito mais arreigado às suas raízes culturais e à sua pátria. Apenas mais tarde, na Segunda Guerra Mundial, Thomas Mann viria a adquirir um espírito mais crítico sobre a sua própria sociedade e cultura. Em \"Reflexões de um homem não-político\", de 1918, Thomas Mann defende a cultura alemã contra aquilo que ele afirma ser uma ideologia dogmática do ocidente. Como se disse, Thomas Mann iria mudar muito na Segunda Guerra Mundial, onde estará abertamente ao lado dessa suposta ideologia. Thomas Mann continuou a escrever \"A Montanha Mágica\" em 1919, já depois da guerra. Terminaria o romance apenas em 1924, ano da publicação. Entretanto, muitas observações dele sobre a experiência da Alemanha na República de Weimar tinham influenciado o livro.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00002I'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'MANNthomas'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>