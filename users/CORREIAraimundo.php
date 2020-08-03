<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='CORREIAraimundo'");
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

		<?php $user = 'CORREIAraimundo'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Raimundo da Mota de Azevedo Correia (São Luís, 13 de maio de 1859 — Paris, 13 de setembro de 1911) foi um juiz e poeta brasileiro.
			Nasceu a bordo do navio São Luís, ancorado em águas maranhenses, em 1859. Referindo-se a seu nascimento sobre as águas, costumava Raimundo dizer de si, pilhericamente, \"Sou um homem sem pátria; nasci no Oceano\". Filho de família de classe elevada, foram seus pais o desembargador José da Mota de Azevedo Correia e Maria Clara Vieira da Mota de Azevedo Corrêa, ambos naturais do Maranhão. Seu pai descendia dos duques de Caminha e era filho de pais portugueses.

			Realizou o curso secundário no Colégio Pedro II, no Rio de Janeiro. Em 1882 formou-se advogado pela Faculdade de Direito de São Paulo, localizada no Largo de São Francisco, conhecida como Faculdade do Largo São Francisco, desenvolvendo uma bem-sucedida carreira como Juiz de Direito no Rio de Janeiro e em Minas Gerais. Neste Estado, foi o primeiro Juiz de Direito da comarca de São Gonçalo do Sapucaí.

			Casou-se em 1884 com Mariana de Abreu Sodré (\"Zinha\"), tendo três filhas: Lavinia, Stella e Alexandrina. Sua filha, Stella Corrêa da Paixão, foi casada com Rodolpho Gustavo da Paixão Filho, filho do também poeta Rodolfo Gustavo da Paixão.

			Teve um tio homônimo (1838-1889), que foi juiz. Teve também um sobrinho que levou seu nome, Raimundo Correia Sobrinho, formado em direito e poeta como o tio, que escreveu um livro de poesias, Oração aos Aflitos, publicado em 1945 pela Livraria José Olympio Editora.

			Raimundo Correia iniciou a sua carreira poética com o livro Primeiros sonhos, revelando forte influência dos poetas românticos Fagundes Varela, Casimiro de Abreu e Castro Alves. Em 1883 com o livro Sinfonias, assume o parnasianismo e passa a integrar, ao lado de Alberto de Oliveira e Olavo Bilac, a chamada Tríade Parnasiana.

			Os temas adotados por Raimundo Correia giram em torno da perfeição formal dos objetos. Ele se diferencia um pouco dos demais parnasianos porque sua poesia é marcada por um forte pessimismo, chegando até a ser sombria. Ao analisar a obra de Raimundo Correia percebe-se que há nela uma evolução. Ele iniciou sua carreira como romântico, depois adotou o parnasianismo e, em alguns poemas aproximou-se da escola simbolista.

			Faleceu em 13 de setembro de 1911, em Paris, onde foi tratar da saúde.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Raimundo_Correia'> Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Raimundo da Mota de Azevedo Correia (São Luís, 13 de maio de 1859 — Paris, 13 de setembro de 1911) foi um juiz e poeta brasileiro.
			Nasceu a bordo do navio São Luís, ancorado em águas maranhenses, em 1859. Referindo-se a seu nascimento sobre as águas, costumava Raimundo dizer de si, pilhericamente, \"Sou um homem sem pátria; nasci no Oceano\". Filho de família de classe elevada, foram seus pais o desembargador José da Mota de Azevedo Correia e Maria Clara Vieira da Mota de Azevedo Corrêa, ambos naturais do Maranhão. Seu pai descendia dos duques de Caminha e era filho de pais portugueses.

			Realizou o curso secundário no Colégio Pedro II, no Rio de Janeiro. Em 1882 formou-se advogado pela Faculdade de Direito de São Paulo, localizada no Largo de São Francisco, conhecida como Faculdade do Largo São Francisco, desenvolvendo uma bem-sucedida carreira como Juiz de Direito no Rio de Janeiro e em Minas Gerais. Neste Estado, foi o primeiro Juiz de Direito da comarca de São Gonçalo do Sapucaí.

			Casou-se em 1884 com Mariana de Abreu Sodré (\"Zinha\"), tendo três filhas: Lavinia, Stella e Alexandrina. Sua filha, Stella Corrêa da Paixão, foi casada com Rodolpho Gustavo da Paixão Filho, filho do também poeta Rodolfo Gustavo da Paixão.

			Teve um tio homônimo (1838-1889), que foi juiz. Teve também um sobrinho que levou seu nome, Raimundo Correia Sobrinho, formado em direito e poeta como o tio, que escreveu um livro de poesias, Oração aos Aflitos, publicado em 1945 pela Livraria José Olympio Editora.

			Raimundo Correia iniciou a sua carreira poética com o livro Primeiros sonhos, revelando forte influência dos poetas românticos Fagundes Varela, Casimiro de Abreu e Castro Alves. Em 1883 com o livro Sinfonias, assume o parnasianismo e passa a integrar, ao lado de Alberto de Oliveira e Olavo Bilac, a chamada Tríade Parnasiana.

			Os temas adotados por Raimundo Correia giram em torno da perfeição formal dos objetos. Ele se diferencia um pouco dos demais parnasianos porque sua poesia é marcada por um forte pessimismo, chegando até a ser sombria. Ao analisar a obra de Raimundo Correia percebe-se que há nela uma evolução. Ele iniciou sua carreira como romântico, depois adotou o parnasianismo e, em alguns poemas aproximou-se da escola simbolista.

			Faleceu em 13 de setembro de 1911, em Paris, onde foi tratar da saúde.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Raimundo_Correia'> Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Raimundo da Mota de Azevedo Correia (São Luís, 13 de maio de 1859 — Paris, 13 de setembro de 1911) foi um juiz e poeta brasileiro.
			Nasceu a bordo do navio São Luís, ancorado em águas maranhenses, em 1859. Referindo-se a seu nascimento sobre as águas, costumava Raimundo dizer de si, pilhericamente, \"Sou um homem sem pátria; nasci no Oceano\". Filho de família de classe elevada, foram seus pais o desembargador José da Mota de Azevedo Correia e Maria Clara Vieira da Mota de Azevedo Corrêa, ambos naturais do Maranhão. Seu pai descendia dos duques de Caminha e era filho de pais portugueses.

			Realizou o curso secundário no Colégio Pedro II, no Rio de Janeiro. Em 1882 formou-se advogado pela Faculdade de Direito de São Paulo, localizada no Largo de São Francisco, conhecida como Faculdade do Largo São Francisco, desenvolvendo uma bem-sucedida carreira como Juiz de Direito no Rio de Janeiro e em Minas Gerais. Neste Estado, foi o primeiro Juiz de Direito da comarca de São Gonçalo do Sapucaí.

			Casou-se em 1884 com Mariana de Abreu Sodré (\"Zinha\"), tendo três filhas: Lavinia, Stella e Alexandrina. Sua filha, Stella Corrêa da Paixão, foi casada com Rodolpho Gustavo da Paixão Filho, filho do também poeta Rodolfo Gustavo da Paixão.

			Teve um tio homônimo (1838-1889), que foi juiz. Teve também um sobrinho que levou seu nome, Raimundo Correia Sobrinho, formado em direito e poeta como o tio, que escreveu um livro de poesias, Oração aos Aflitos, publicado em 1945 pela Livraria José Olympio Editora.

			Raimundo Correia iniciou a sua carreira poética com o livro Primeiros sonhos, revelando forte influência dos poetas românticos Fagundes Varela, Casimiro de Abreu e Castro Alves. Em 1883 com o livro Sinfonias, assume o parnasianismo e passa a integrar, ao lado de Alberto de Oliveira e Olavo Bilac, a chamada Tríade Parnasiana.

			Os temas adotados por Raimundo Correia giram em torno da perfeição formal dos objetos. Ele se diferencia um pouco dos demais parnasianos porque sua poesia é marcada por um forte pessimismo, chegando até a ser sombria. Ao analisar a obra de Raimundo Correia percebe-se que há nela uma evolução. Ele iniciou sua carreira como romântico, depois adotou o parnasianismo e, em alguns poemas aproximou-se da escola simbolista.

			Faleceu em 13 de setembro de 1911, em Paris, onde foi tratar da saúde.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Raimundo_Correia'> Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='CORREIAraimundo'; include '../design/poemfind.php'; ?>
		<?php $user = 'CORREIAraimundo'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>