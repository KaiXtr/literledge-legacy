<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Futurism';
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
			Em 20 de Fevereiro de 1909 foi lançado pelo poeta italiano Felippo Tommaso Marinetti, no jornal francês Le Figaro, o Manifesto Futurista. Este foi o ponta pé inicial para dar início a criação de um movimento de cunho artístico e literário denominado Futurismo. O Futurismo caracterizou-se principalmente pelo rompimento com a arte e a cultura do passado, celebrando o progresso e a tecnologia moderna, a vida urbana, a velocidade e a energia ao ponto de, os mais extremos, exaltarem as armas e a violência. Os integrantes desse estilo foram os grandes divulgadores do movimento, recorrendo a palestras e a publicidade para dar visibilidade a este estilo.

			O Manifesto Futurista deixou clara a rejeição dos futuristas ao passado e a destruição de tudo o que era velho e venerado, ascendendo espaço para o novo e o vital. Giacomo Balla (1871 – 1958), Carlo Carrà (1881 – 1966) e Umberto Boccioni (1882 – 916) estão entre os principais expoentes desse movimento, além de Gino Severini (1883 – 1966) e Luigi Russolo (1885 -1647).

			Com frequência nas pinturas Futuristas aparecem cores vibrantes e contrastantes, formas geométricas, sobreposição de imagens além do uso do que os futuristas chamavam de linhas de força. O uso desses recursos pretendia dar ideia de uma cena dinâmica, ou seja, o objeto em ação. A ideia de movimento vigoroso e velocidade eram centrais na poética do Futurismo. Os futuristas não estavam interessados em representar um automóvel em suas pinturas, porém representar o movimento do automóvel e a experiência de sua aceleração. Isso era mais importante que detalhar sua forma ou o veículo parado.

			Obra futurista do artista Giacomo Balla.

			Uma das mais impressionantes obras desse movimento artístico é Dinamismo de um cão na coleira de autoria (1912) de Giacomo Balla. Nela, Balla representa uma senhora passeando com seu cachorro onde é possível perceber uma espécie de close-up dos movimentos dos personagens. No quadro de formas simples e precisas, podem-se apreender as diversas pinceladas que dão a sensação de movimento das figuras. O cão assim como à senhora tem inúmeros traços, uns transparente e outros opacos, que compõem as patas, o rabo, a coleira e os pés criando uma magnífica expressão dinâmica do movimento.

			O Futurismo influenciou diversos artistas que mais tarde vieram a fundar outros estilos artísticos como o Cubismo, o Surrealismo e o Dadaísmo. O movimento Futurista durou até aproximadamente a década de 1930, quando foi se esvaziando com a Segunda Guerra Mundial.

			No Brasil influenciou artistas como Anita Malfatti e Oswald de Andrade ainda no começa do século XX, que viram nos ideais nesse movimento a possibilidade de deixar de copiar modelos europeus e construir uma identidade renovando a arte brasileira.
			<br />
			Fonte: <a href='https://brasilescola.uol.com.br/literatura/simbolismo.htm' > Wikipedia </a>
		</div>
		<?php $schl = $lts; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>