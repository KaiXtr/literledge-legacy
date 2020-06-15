<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Indianism';
			$v = $ltslst[$lts].' - ';
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo strtolower($lts); ?>.jpg")'></div>
		<?php echo "<div id='profile'> <h1 id='litername'> ".$ltslst[$lts]." </h1> </div>"; ?>"
		<div id='bio'>
			Na literatura brasileira, o Indianismo corresponde a uma das tendências literárias mais marcantes do período romântico.

			Essa tendência foi explorada anteriormente pelo movimento do barroco, com obras de José de Anchieta: Arte de Gramática da Língua mais usada na costa do Brasil, Poema à Virgem e A Cartilha dos Nativos.

			E também no arcadismo, por Basílio da Gama, com sua obra “O Uraguai” (1769).

			Entretanto, foi na primeira geração romântica (1836 a 1852), que o Indianismo trará a tona o tema do índio idealizado, baseada no binômio “nacionalismo-indianismo”.

			O nome dessa tendência remete a figura escolhida para exaltar aspectos nacionais: o índio, considerado o “bom selvagem”, símbolo da inocência e pureza.

			No continente europeu os cavaleiros medievais eram as figuras românticas que representavam o bom herói, idealizado, corajoso e forte. Já no Brasil, a figura romântica do novo herói era a do índio.

			Isso foi essencial para resgatar uma identidade nacional, que ficasse mais próxima do contexto nacional.

			José de Alencar foi um dos mais representativos escritores brasileiros que explorou a mitificação do índio como herói nacional.

			Saiba mais sobre o movimento romântico no país: Romantismo no Brasil

			Contexto Histórico: Resumo
			Após a independência do Brasil (1822), o país passava por diversas transformações sociais, políticas e econômicas.

			Após a separação da Metrópole, os brasileiros, imbuídos pelo espírito anticolonialista e nacionalista, buscavam uma identidade nacional. Ou seja, genuinamente brasileira e afastada dos moldes europeus.

			Destarte, os artistas passam a buscar temas nacionais com o intuito de criar uma cultura do próprio país, e a partir disso, o índio foi eleito o nosso “herói nacional”.

			Note que essa personalidade idealizada não poderia ser figurada pelo “português” ou o “africano”. O português estava relacionado com a figura do colonizador e explorador das terras, e o africano, com a força escrava utilizada durante muito tempo no Brasil Colonial.

			Para saber mais: Independência do Brasil
			Principais Características
			Nacionalismo e ufanismo
			Sentimentalismo e religiosidade
			Figura idealizada do índio
			Índio-herói como o símbolo nacional
			Língua e costumes indígenas
			Retorno ao passado histórico
			Exaltação da natureza e do folclore
			Influências do medievalismo romântico
			Principais Autores e Obras
			Os principais escritores brasileiros da geração indianista foram:

			Gonçalves de Magalhães (1811-1882), obras: A Confederação de Tamoios (1857) e Os Indígenas do Brasil perante a História (1860).
			Gonçalves Dias (1823-1864), obras: I-Juca- Pirama (1851), Os Timbiras (1857), Canção do Tamoio.
			José de Alencar (1829-1877), obras: O Guarani (1857), Iracema (1865) e Ubirajara (1874).
			Curiosidades
			No romance moderno podemos destacar a tendência indianista no trabalho do escritor brasileiro Mario de Andrade com sua obra notável “Macunaíma” (1928).
			O indianismo denominado “Gonçalvino”, faz referência ao indianismo presente na poesia de Gonçalves Dias.
			No século XIX, o indianismo foi uma tendência presente nas artes plásticas, dos quais se destacam os pintores brasileiros: Victor Meirelles (1832-1903) e sua famosa obra “Moema” (1866); e Rodolfo Amoedo (1857-1941) e sua obra mais representativa “O Último Tamoio” (1883).
			<br />
			Fonte: <a href='https://www.todamateria.com.br/indianismo/' > Wikipedia </a>
		</div>
		<?php $schl = $lts; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>