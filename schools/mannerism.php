<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Mannerism';
			$v = $ltslst[$lts];
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<div id='banner' style='background-image: url("media/images/banners/<?php echo strtolower($lts); ?>.jpg")'></div>
		<?php echo "<div id='profile'> <h1 id='litername'> ".$ltslst[$lts]." </h1> </div>"; ?>
		<div id='bio'>
		<?php
			if ($_COOKIE['lang'] == 'pt') {
				echo "O Maneirismo foi um movimento artístico que englobou a pintura, arquitetura e literatura, surgiu na Itália do século XVI por volta de 1515. Foi considerada por muito tempo nada além da fase final do Renascimento, e também é considerada a fase que originou o <a href='schools/baroque.php'>Barroco</a>. Atualmente o Maneirismo é considerado uma estética autêntica e com suas próprias características, embora compartilhe várias semelhanças com ambas as estéticas mencionadas anteriormente. A Etimologia de Maneirismo surgiu do artista italiano Giorgio Vasari, que se utilizou da palavra <b>maniera</b>(maneira) para expressar graça, leveza e sofisticação ás obras Maneiristas. <br />
				<br />
				Muitas características das pinturas maneiristas influenciariam fortemente o Barroco, a emoção é um destaque nas obras, que através de cores frias, multiplicidade dos pontos de fuga e presença de ornamentos, as pinturas refletem uma ambientação estranhamente elegante e escura. Perspectiva e regras no geral não são prioridade no Maneirismo, pois este movimento artístico rompeu com o Classicismo e os ideais de beleza vigentes, preferindo retratar formas distorcidas e deformadas.
				<br />";
			}
			if ($_COOKIE['lang'] == 'en') {
				echo "Mannerism was an artistic movement that encompassed painting, architecture and literature, it emerged in 16th century Italy around 1515. It was considered for a long time nothing more than the final phase of the Renaissance, and it is also considered the phase that originated the <a href='schools/baroque.php'>Baroque</a>. Currently, Mannerism is considered an authentic aesthetic and with its own characteristics, although it shares several similarities with both aesthetics mentioned above. The Etymology of Mannerism emerged from the Italian artist Giorgio Vasari, who used the word <b>maniera</b>(way) to express grace, lightness and sophistication to Mannerist works. <br />
				<br />
				Many characteristics of Mannerist paintings would strongly influence the Baroque, emotion is a highlight in the works, which through cold colors, multiplicity of vanishing points and the presence of ornaments, the paintings reflect a strangely elegant and dark environment. Perspective and rules in general are not a priority in Mannerism, as this artistic movement broke with Classicism and the prevailing beauty ideals, preferring to portray distorted and deformed forms.
				<br />";
			}
			if ($_COOKIE['lang'] == 'es') {
				echo "El manierismo fue un movimiento artístico que abarcó la pintura, la arquitectura y la literatura, surgió en la Italia del siglo XVI alrededor de 1515. Se consideró durante mucho tiempo nada más que la fase final del Renacimiento, y también se considera la fase que originó la <a href='schools/baroque.php'>Barroco</a>. Actualmente, el manierismo se considera una estética auténtica y con sus propias características, aunque comparte varias similitudes con ambas estéticas mencionadas anteriormente. La Etimología del Manierismo surgió del artista italiano Giorgio Vasari, quien usó la palabra <b>maniera</b>(manera) para expresar gracia, ligereza y sofisticación a las obras manieristas. <br />
				<br />
				Muchas características de las pinturas manieristas influirían fuertemente en el barroco, la emoción es un elemento destacado en las obras, que a través de colores fríos, multiplicidad de puntos de fuga y la presencia de adornos, las pinturas reflejan un ambiente extrañamente elegante y oscuro. La perspectiva y las reglas en general no son una prioridad en el manierismo, ya que este movimiento artístico rompió con el clasicismo y los ideales de belleza prevalecientes, prefiriendo retratar formas distorsionadas y deformadas.
				<br />";
			}
		?>
		</div>
		<?php $schl = $lts; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>