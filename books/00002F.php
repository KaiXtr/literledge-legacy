<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00002F'");
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
			<?php $book = '00002F'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Book Thief (Brasil: A menina que roubava livros /Portugal: A rapariga que roubava livros) é um drama do escritor australiano Markus Zusak, publicado em 2005 pela editora Picador. No Brasil e em Portugal, foi lançado pela Intrínseca e a Presença, respectivamente. O livro é sobre Liesel Meminger, uma garota que encontra a Morte três vezes durante 1939–43 na Alemanha nazista.

					The Book Thief tem, como narradora, a Morte, cuja função é recolher a alma de todos aqueles que morrem. Durante a sua passagem pela Alemanha, na Segunda Guerra Mundial, ela encontra a protagonista, Liesel Meminger, numa estação de comboio enquanto o seu irmão mais novo é enterrado próximo ao local. A menina, ao perceber que o coveiro deixou um livro, O manual do coveiro, cair na neve, rouba-o e é levada, então, até a cidade fictícia de Molching, onde a sua mãe pretende entregá-la a uma família para que a adotem. Na Rua Himmel, reside o casal de classe trabalhadora formado por Hans e Rosa Hubermann.

					Lá, ela convive com os novos responsáveis e vai à escola, assim como faz amizade com o vizinho Rudy Steiner. Como ajudante de sua mãe, começa uma amizade com a mulher do prefeito, Ilsa Hermann, embora ela só perceba o tamanho dessa amizade no fim da história. Como o título sugere, ela realmente rouba livros. Com a amizade com Ilsa Hermann (também chamada de Frau Hermann), ela entrava em sua casa por uma janela, e roubava livros.

					Ao longo dos quatro anos em que viveu com os Hubermann, roubou diversos livros e aprendeu lições com eles. Rudy e Liesel também roubavam comida (frutas e batatas, entre outros alimentos). Na Juventude Hitlerista, Rudy, como sempre, agiu como um idiota e, por pouco, não foi expulso. Hans, Rosa e Liesel esconderam um judeu, Max, para poder ajudá-lo, devido à uma antiga promessa feita por Hans Hubermann à sua mãe. Hans Hubermann tenta ajudar outro judeu durante uma caminhada e é advertido por um soldado alemão, que o agride. Max resolve ir embora para proteger a família que o acolheu. Tempo depois Hans é colocado na wehrmacht devido a tentativa de ajudar o outro judeu. Durante as invasões ao território alemão, a população protegia-se em caves, onde Hans tocava acordeon para distrair as pessoas, mas depois de Hans ser colocado no exército Liesel passa a contar histórias para distrair as pessoas tal como Hans fazia. Depois de voltar tudo ao normal e de Hans Hurbermann voltar a casa, a Rua Himmel é atingida durante os bombardeamentos. Dois anos depois Liesel Meminger volta a reencontrar o seu amigo Max. A história termina novamente com a morte a narrar e a contar como Liesel viveu muitos anos e construiu a sua própria família e como a amizade entre Liesel e Max tinha sido quase tão longa como a vida de Liesel.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Book Thief (Brasil: A menina que roubava livros /Portugal: A rapariga que roubava livros) é um drama do escritor australiano Markus Zusak, publicado em 2005 pela editora Picador. No Brasil e em Portugal, foi lançado pela Intrínseca e a Presença, respectivamente. O livro é sobre Liesel Meminger, uma garota que encontra a Morte três vezes durante 1939–43 na Alemanha nazista.

					The Book Thief tem, como narradora, a Morte, cuja função é recolher a alma de todos aqueles que morrem. Durante a sua passagem pela Alemanha, na Segunda Guerra Mundial, ela encontra a protagonista, Liesel Meminger, numa estação de comboio enquanto o seu irmão mais novo é enterrado próximo ao local. A menina, ao perceber que o coveiro deixou um livro, O manual do coveiro, cair na neve, rouba-o e é levada, então, até a cidade fictícia de Molching, onde a sua mãe pretende entregá-la a uma família para que a adotem. Na Rua Himmel, reside o casal de classe trabalhadora formado por Hans e Rosa Hubermann.

					Lá, ela convive com os novos responsáveis e vai à escola, assim como faz amizade com o vizinho Rudy Steiner. Como ajudante de sua mãe, começa uma amizade com a mulher do prefeito, Ilsa Hermann, embora ela só perceba o tamanho dessa amizade no fim da história. Como o título sugere, ela realmente rouba livros. Com a amizade com Ilsa Hermann (também chamada de Frau Hermann), ela entrava em sua casa por uma janela, e roubava livros.

					Ao longo dos quatro anos em que viveu com os Hubermann, roubou diversos livros e aprendeu lições com eles. Rudy e Liesel também roubavam comida (frutas e batatas, entre outros alimentos). Na Juventude Hitlerista, Rudy, como sempre, agiu como um idiota e, por pouco, não foi expulso. Hans, Rosa e Liesel esconderam um judeu, Max, para poder ajudá-lo, devido à uma antiga promessa feita por Hans Hubermann à sua mãe. Hans Hubermann tenta ajudar outro judeu durante uma caminhada e é advertido por um soldado alemão, que o agride. Max resolve ir embora para proteger a família que o acolheu. Tempo depois Hans é colocado na wehrmacht devido a tentativa de ajudar o outro judeu. Durante as invasões ao território alemão, a população protegia-se em caves, onde Hans tocava acordeon para distrair as pessoas, mas depois de Hans ser colocado no exército Liesel passa a contar histórias para distrair as pessoas tal como Hans fazia. Depois de voltar tudo ao normal e de Hans Hurbermann voltar a casa, a Rua Himmel é atingida durante os bombardeamentos. Dois anos depois Liesel Meminger volta a reencontrar o seu amigo Max. A história termina novamente com a morte a narrar e a contar como Liesel viveu muitos anos e construiu a sua própria família e como a amizade entre Liesel e Max tinha sido quase tão longa como a vida de Liesel.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Book Thief (Brasil: A menina que roubava livros /Portugal: A rapariga que roubava livros) é um drama do escritor australiano Markus Zusak, publicado em 2005 pela editora Picador. No Brasil e em Portugal, foi lançado pela Intrínseca e a Presença, respectivamente. O livro é sobre Liesel Meminger, uma garota que encontra a Morte três vezes durante 1939–43 na Alemanha nazista.

					The Book Thief tem, como narradora, a Morte, cuja função é recolher a alma de todos aqueles que morrem. Durante a sua passagem pela Alemanha, na Segunda Guerra Mundial, ela encontra a protagonista, Liesel Meminger, numa estação de comboio enquanto o seu irmão mais novo é enterrado próximo ao local. A menina, ao perceber que o coveiro deixou um livro, O manual do coveiro, cair na neve, rouba-o e é levada, então, até a cidade fictícia de Molching, onde a sua mãe pretende entregá-la a uma família para que a adotem. Na Rua Himmel, reside o casal de classe trabalhadora formado por Hans e Rosa Hubermann.

					Lá, ela convive com os novos responsáveis e vai à escola, assim como faz amizade com o vizinho Rudy Steiner. Como ajudante de sua mãe, começa uma amizade com a mulher do prefeito, Ilsa Hermann, embora ela só perceba o tamanho dessa amizade no fim da história. Como o título sugere, ela realmente rouba livros. Com a amizade com Ilsa Hermann (também chamada de Frau Hermann), ela entrava em sua casa por uma janela, e roubava livros.

					Ao longo dos quatro anos em que viveu com os Hubermann, roubou diversos livros e aprendeu lições com eles. Rudy e Liesel também roubavam comida (frutas e batatas, entre outros alimentos). Na Juventude Hitlerista, Rudy, como sempre, agiu como um idiota e, por pouco, não foi expulso. Hans, Rosa e Liesel esconderam um judeu, Max, para poder ajudá-lo, devido à uma antiga promessa feita por Hans Hubermann à sua mãe. Hans Hubermann tenta ajudar outro judeu durante uma caminhada e é advertido por um soldado alemão, que o agride. Max resolve ir embora para proteger a família que o acolheu. Tempo depois Hans é colocado na wehrmacht devido a tentativa de ajudar o outro judeu. Durante as invasões ao território alemão, a população protegia-se em caves, onde Hans tocava acordeon para distrair as pessoas, mas depois de Hans ser colocado no exército Liesel passa a contar histórias para distrair as pessoas tal como Hans fazia. Depois de voltar tudo ao normal e de Hans Hurbermann voltar a casa, a Rua Himmel é atingida durante os bombardeamentos. Dois anos depois Liesel Meminger volta a reencontrar o seu amigo Max. A história termina novamente com a morte a narrar e a contar como Liesel viveu muitos anos e construiu a sua própria família e como a amizade entre Liesel e Max tinha sido quase tão longa como a vida de Liesel.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00002F'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'ZUSAKmarkus'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>