<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Mannerism';
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
			O que foi - definição

			O maneirismo foi um movimento artístico, que se desenvolveu no continente europeu no século XVI. Teve início na Itália, por volta de 1515, desenvolvendo-se, principalmente, as áreas da pintura, escultura e arquitetura.

			Durante muito tempo, historiadores da arte entenderam que este movimento nada mais era do que a fase decadente do Renascimento (período final). Porém, atualmente o maneirismo é identificado como um estilo artístico original e autônomo, embora apresente muitas características semelhantes ao Renascimento. Vale destacar também que o maneirismo é considerado, por muitos especialistas de artes plásticas, a fase germinal do Barroco.

			Principais características

			- Rompimento com o estilo clássico de beleza idealizada.
			- Retratação de figuras em formato alongado e serpenteado.
			- Uso de cores que não representam fielmente a natureza. As cores usadas em grande parte das obras maneiristas são frias, estranhas e artificiais.
			- Presença da multiplicidade de pontos de vista, recurso muito utilizado nas esculturas.
			- Valorização dos conhecimentos intelectuais na elaboração das obras de arte.
			- Presença de beleza, elegância, graça e características ornamentais.
			- Desconsideração da proporcionalidade e perspectiva.
			- Destaque para os efeitos subjetivos e presença de expressões emocionais fortes.

			Principais artistas e suas obras principais:

			- Giambologna: escultor flamengo, autor de A fonte de Netuno e O rapto das sabinas.
			- Giorgio Vasari: pintor maneirista italiano, autor de Perseu liberta Andrômeda.
			- Parmigianino: pintor italiano, autor de Madona com longo pescoço.
			- Paolo Veronese: pintor italiano, autor de Sabedoria e força e Lucrécia.
			- El Greco: pintor e escultor grego, autor de A morte da Virgem, O Enterro do Conde de Orgaz e Adoração dos magos.
			- Jacopo Sansovino: arquiteto italiano, cujo trabalho mais importante foi a Biblioteca Marciana (localizada na cidade de Veneza).
			- Andrea Palladio: arquiteto italiano responsável pela Igreja de San Giorgio Maggiori (em Veneza) e pelo Teatro Olímpico (em Vicenza).
			- Agnolo Bronzino: pintor maneirista italiano, autor de Alegoria do triunfo de Vênus e Alegoria da Felicidade.
			- Frederico Barocci: pintor italiano, autor de A Madonna do povo.
			- Jacopino del Conte: pintor italiano, autor de A pregação de João Batista, Sagrada Família e Retrato de Michelangelo.
			- Leon Battista Alberti: arquiteto italiano, responsável pela Igreja de São Sebastião (em Mantova) e Basílica de Sant’Andrea (em Mantova).

			Curiosidade (origem do nome):
			- A palavra maneirismo deriva do termo “maniera”, que foi muito usado pelo artista maneirista italiano Giorgio Vasari, para fazer referência às seguintes qualidades artísticas: leveza, graça e sofisticação.

			MANEIRISMO
			Temas Relacionados
			• Artes Plásticas
			• Barroco
			• El Greco
			• Obras de arte do Maneirismo
			• Parmigianino
			• Veronese
			<br />
			Fonte: <a href='https://www.suapesquisa.com/artesliteratura/maneirismo.htm' > Wikipedia </a>
		</div>
		<?php $schl = $lts; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>