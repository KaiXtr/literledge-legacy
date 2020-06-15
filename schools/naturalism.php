<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Naturalism';
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
			O Naturalismo ou Realismo iniciou-se na segunda metade do século XIX e se estendeu até o início do século XX, na França.

			Manifestou-se na literatura, no teatro e nas artes plásticas com uma visão contrária à do Romantismo.

			A visão era materialista, uma vez que a burguesia estava em ascensão. Também tinha uma visão objetiva, os temas eram tratados sem rodeios.

			Esse período é chamado de “Ciclo Antirromântico”. Os artistas tratam os temas de forma mais clara, como realmente acontece.
			A ideia deles era de derrubar o que o Romantismo pregava; tratar os assuntos de forma real e falar sobre o que realmente as pessoas viviam.

			Em suas obras, os escritores naturalistas faziam críticas sociais contra a injustiça e a opressão, com o objetivo de que houvesse uma transformação do que eles acreditavam que estava incorreto.

			Essas obras também ganharam influência das teorias científicas da segunda metade do século XIX.

			Na literatura francesa, o seu marco inicial deu-se com a obra “Madame Bovary”, de Gustave Flaubet. A obra retrata assuntos cotidianos, como o amor. Esse tema é tratado de uma forma totalmente diferente do Romantismo. O autor fala ainda sobre o adultério e suas possíveis consequências a quem o cometesse. Esses assuntos são escritos de forma direta e objetiva.

			Já em Portugal, o Naturalismo tem início com a obra “O Crime do Padre Amaro”, de Eça de Queirós. O autor é considerado o precursor do Realismo português. Também escreveu “O Primo Basílio” e “Os Maias”. As suas obras retratavam a sociedade portuguesa do século XIX: cidade provinciana, influência do clero, pequena e média burguesia de Lisboa, intelectuais, aristocracia e alta burguesia.

			No Brasil, o Naturalismo iniciou no fim do século XIX, com a publicação do romance “O Mulato” (1881) de Aluísio de Azevedo. A obra tem como tema central o preconceito racial. Também merece destaque a sua obra “O Cortiço” (1890), que trata sobre a realidade brasileira do século XIX: as relações e o comportamento dos personagens.

			Assim como os escritores portugueses e franceses, os escritores naturalistas brasileiros também se preocupam em demonstrar os problemas da realidade social, política e econômica.

			Nessa época, era comum eles tratar sobre temas relacionados com a abolição da escravatura.

			Principais temas abordados no Naturalismo:

			Miséria das cidades;
			Crise da produção no campo;
			Péssimas condições de vida;
			Crítica ao tradicionalismo da sociedade;
			Crítica ao conservadorismo da Igreja;
			Violência;
			Crimes;
			Sexualidade;
			Adultério;
			Política.
			<br />
			Fonte: <a href='https://www.infoescola.com/literatura/naturalismo/' > Wikipedia </a>
		</div>
		<?php $schl = $lts; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>