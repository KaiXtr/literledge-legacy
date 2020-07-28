<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000P'");
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
			<?php $book = '00000P'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Le Petit Prince (pronúncia em francês: ​[lə.pə.tiˈpʁɛ̃s]), também conhecido como O Principezinho (título em Portugal) ou O Pequeno Príncipe (título no Brasil) é uma obra do escritor, ilustrador e aviador francês Antoine de Saint-Exupéry, publicada em 1943 nos Estados Unidos.

					Durante a Segunda Guerra Mundial, Saint-Exupéry foi exilado para a América do Norte. Em meio a turbulências pessoais e sua saúde falhando, ele produziu quase metade das obras no qual ele seria lembrado, incluindo o conto de solidão, amizade, amor e perda, em forma de um jovem príncipe que caiu na Terra. Um livro de memórias feita pelo autor que recontava suas experiências de aviação no Deserto do Saara, e é pensado que ele usou estas experiências como base para o livro Le Petit Prince.

					Se trata de uma das obras literárias mais traduzidas no mundo, tendo sido publicado em mais de 220 idiomas e dialetos. O autor do livro foi também autor das ilustrações originais. Em Portugal, O Principezinho integra o conjunto de obras sugeridas para leitura integral, na disciplina de Língua Portuguesa, no 2º Ciclo do Ensino Básico e também foi traduzido para o Mirandês, com o título d\"L Princepico\"
					Em Le Petit Prince, seu narrador, o aviador, fala sobre ter ficado preso num deserto após seu avião ter caído. Essa situação foi baseada num incidente com o autor no Saara, descrito com detalhes em seu livro de memórias Terre des hommes em 1939.

					Em 30 de Dezembro de 1935, às 02:45 AM, depois de 19 horas e 44 minutos no ar, Saint-Exupéry e seu co-piloto André Prévot caíram no deserto do Saara.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>O Príncipe</li>
					<li>O Aviador</li>
					<li>A Rosa</li>
					<li>A Serpente</li>
					<li>A Raposa</li>
					</ul>
					<hr>
					<a name='goto3'></a>
					<h1> Adaptações </h1>
					<ul>
					<li>Um filme musical intitulado The Little Prince foi feito baseado no livro e lançado em 1974.</li>
					<li>Na década de 80 foi lançada uma série de desenhos animados chamada As Aventuras do Pequeno Príncipe. A série foi feita pelo estúdio de animaçã\"Vóvó Chantre\" foi ao ar pela primeira vez no Japão em 1978 sob o título Hoshi no Ōjisama Puchi Purinsu (星の王子さま　プチ・プリンス? Prince of the Stars: Petit Prince).[10]</li>
					<li>Em 2015, foi lançada uma animação cinematográfica como sequência do livro, utilizando técnicas de computação gráfica e stop-motion. O diretor da produção é Mark Osborne, o mesmo de Kung Fu Panda.</li>
					<li>No teatro entrou em cartaz em 2016 uma versão do livro adaptada e dirigida por Tony Giusti, (ator, dramaturgo e diretor do Nosso Grupo de Teatro), sua primeira temporada estreou no Top Teatro, no bairro da Bela Vista em São Paulo-SP.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Le Petit Prince (pronúncia em francês: ​[lə.pə.tiˈpʁɛ̃s]), também conhecido como O Principezinho (título em Portugal) ou O Pequeno Príncipe (título no Brasil) é uma obra do escritor, ilustrador e aviador francês Antoine de Saint-Exupéry, publicada em 1943 nos Estados Unidos.

					Durante a Segunda Guerra Mundial, Saint-Exupéry foi exilado para a América do Norte. Em meio a turbulências pessoais e sua saúde falhando, ele produziu quase metade das obras no qual ele seria lembrado, incluindo o conto de solidão, amizade, amor e perda, em forma de um jovem príncipe que caiu na Terra. Um livro de memórias feita pelo autor que recontava suas experiências de aviação no Deserto do Saara, e é pensado que ele usou estas experiências como base para o livro Le Petit Prince.

					Se trata de uma das obras literárias mais traduzidas no mundo, tendo sido publicado em mais de 220 idiomas e dialetos. O autor do livro foi também autor das ilustrações originais. Em Portugal, O Principezinho integra o conjunto de obras sugeridas para leitura integral, na disciplina de Língua Portuguesa, no 2º Ciclo do Ensino Básico e também foi traduzido para o Mirandês, com o título d\"L Princepico\"
					Em Le Petit Prince, seu narrador, o aviador, fala sobre ter ficado preso num deserto após seu avião ter caído. Essa situação foi baseada num incidente com o autor no Saara, descrito com detalhes em seu livro de memórias Terre des hommes em 1939.

					Em 30 de Dezembro de 1935, às 02:45 AM, depois de 19 horas e 44 minutos no ar, Saint-Exupéry e seu co-piloto André Prévot caíram no deserto do Saara.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>O Príncipe</li>
					<li>O Aviador</li>
					<li>A Rosa</li>
					<li>A Serpente</li>
					<li>A Raposa</li>
					</ul>
					<hr>
					<a name='goto3'></a>
					<h1> Adaptações </h1>
					<ul>
					<li>Um filme musical intitulado The Little Prince foi feito baseado no livro e lançado em 1974.</li>
					<li>Na década de 80 foi lançada uma série de desenhos animados chamada As Aventuras do Pequeno Príncipe. A série foi feita pelo estúdio de animaçã\"Vóvó Chantre\" foi ao ar pela primeira vez no Japão em 1978 sob o título Hoshi no Ōjisama Puchi Purinsu (星の王子さま　プチ・プリンス? Prince of the Stars: Petit Prince).[10]</li>
					<li>Em 2015, foi lançada uma animação cinematográfica como sequência do livro, utilizando técnicas de computação gráfica e stop-motion. O diretor da produção é Mark Osborne, o mesmo de Kung Fu Panda.</li>
					<li>No teatro entrou em cartaz em 2016 uma versão do livro adaptada e dirigida por Tony Giusti, (ator, dramaturgo e diretor do Nosso Grupo de Teatro), sua primeira temporada estreou no Top Teatro, no bairro da Bela Vista em São Paulo-SP.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Le Petit Prince (pronúncia em francês: ​[lə.pə.tiˈpʁɛ̃s]), também conhecido como O Principezinho (título em Portugal) ou O Pequeno Príncipe (título no Brasil) é uma obra do escritor, ilustrador e aviador francês Antoine de Saint-Exupéry, publicada em 1943 nos Estados Unidos.

					Durante a Segunda Guerra Mundial, Saint-Exupéry foi exilado para a América do Norte. Em meio a turbulências pessoais e sua saúde falhando, ele produziu quase metade das obras no qual ele seria lembrado, incluindo o conto de solidão, amizade, amor e perda, em forma de um jovem príncipe que caiu na Terra. Um livro de memórias feita pelo autor que recontava suas experiências de aviação no Deserto do Saara, e é pensado que ele usou estas experiências como base para o livro Le Petit Prince.

					Se trata de uma das obras literárias mais traduzidas no mundo, tendo sido publicado em mais de 220 idiomas e dialetos. O autor do livro foi também autor das ilustrações originais. Em Portugal, O Principezinho integra o conjunto de obras sugeridas para leitura integral, na disciplina de Língua Portuguesa, no 2º Ciclo do Ensino Básico e também foi traduzido para o Mirandês, com o título d\"L Princepico\"
					Em Le Petit Prince, seu narrador, o aviador, fala sobre ter ficado preso num deserto após seu avião ter caído. Essa situação foi baseada num incidente com o autor no Saara, descrito com detalhes em seu livro de memórias Terre des hommes em 1939.

					Em 30 de Dezembro de 1935, às 02:45 AM, depois de 19 horas e 44 minutos no ar, Saint-Exupéry e seu co-piloto André Prévot caíram no deserto do Saara.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>O Príncipe</li>
					<li>O Aviador</li>
					<li>A Rosa</li>
					<li>A Serpente</li>
					<li>A Raposa</li>
					</ul>
					<hr>
					<a name='goto3'></a>
					<h1> Adaptações </h1>
					<ul>
					<li>Um filme musical intitulado The Little Prince foi feito baseado no livro e lançado em 1974.</li>
					<li>Na década de 80 foi lançada uma série de desenhos animados chamada As Aventuras do Pequeno Príncipe. A série foi feita pelo estúdio de animaçã\"Vóvó Chantre\" foi ao ar pela primeira vez no Japão em 1978 sob o título Hoshi no Ōjisama Puchi Purinsu (星の王子さま　プチ・プリンス? Prince of the Stars: Petit Prince).[10]</li>
					<li>Em 2015, foi lançada uma animação cinematográfica como sequência do livro, utilizando técnicas de computação gráfica e stop-motion. O diretor da produção é Mark Osborne, o mesmo de Kung Fu Panda.</li>
					<li>No teatro entrou em cartaz em 2016 uma versão do livro adaptada e dirigida por Tony Giusti, (ator, dramaturgo e diretor do Nosso Grupo de Teatro), sua primeira temporada estreou no Top Teatro, no bairro da Bela Vista em São Paulo-SP.</li>
					</ul>
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00000P'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'SAINTexupery'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>