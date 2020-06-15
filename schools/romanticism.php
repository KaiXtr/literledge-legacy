<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Romanticism';
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
			O Romantismo é uma escola literária do século XIX. Surge na Alemanha, num movimento chamado Sturm und Drang (tempestade e ímpeto). Esse movimento se baseia na emoção exacerbada e se opõe ao equilíbrio artificial do arcadismo. Da Alemanha, o movimento se espalha pela Inglaterra e França, alcançando toda a Europa.

			A estética romântica é burguesa por excelência. Seu contexto histórico nos remete à Revolução Francesa que levou a burguesia ao poder. Era preciso uma arte que fomentasse o espírito burguês. Assim, o homem romântico defendia uma estética totalmente oposta à árcade (considerada estética da nobreza) valorizando a expressão do sentimento em oposição à valorização da razão; a inspiração poética em detrimento ao convencionalismo amoroso árcade. Os românticos não viam mais a natureza como objeto de imitação, como os árcades, mas sim como objeto de inspiração. Dar vazão ao sentimento era fundamental.

			Os burgueses defendiam que a partir do esforço individual era possível se obter sucesso; o mesmo pensamento ocorria com o romântico que defendia a subjetividade e a individualidade como algo a ser defendido nas artes. Apenas os temas que expressassem o sentimento individual eram valorizados. Contraditoriamente, como esses sentimentos eram universais (amor, traição, por exemplo), o romantismo torna-se uma estética que prega o sentimento individual de forma universalizada. Assim, o romantismo valorizou muito os romances epistolares – que tinham feições de cartas, como se a ficção fosse real e que traziam a os segredos da intimidade, relacionamentos amoroso íntimos, mas sentimentos universais. Vale ressaltar que o romance é um gênero burguês por excelência e apenas no romantismo se torna amplamente difundido. Era o romance o gênero textual capaz de dar vazão ao ideal burguês.

			Outra consequência pós-Revolução francesa foi o escapismo e a utopia. Os revolucionários se desencantaram com as consequências da revolução francesa e suas promessas de sucesso não cumpridas – não houve muitas mudanças sociais com a Revolução. Essa frustração levou o homem romântico a ansiar pela fuga de sua realidade (escapismo), por um mundo melhor e perfeito – utópico – que só era possível no passado histórico (medievalismo e historicismo).

			Em Portugal, assim como toda a Europa, o romantismo ganha espaço por conta de uma necessidade de renovação. O principal nome do Romantismo lusitano foi Almeida Garret que traz o novo pensamento artístico para Portugal por meio de seu contato com Lord Byron.

			Características do Romantismo
			Oposição ao clássico, dando vazão ao sentimento;
			Oposição ao clássico, sem exigência de poemas de forma fixa ou métrica regular;
			Valorização do indivíduo que passa a ser o centro das atenções;
			Sentimentalismo, Subjetivismo, Egocentrismo;
			Exaltação da nação e da natureza;
			Valorização do passado histórico (medievalismo e historicismo);
			Criação de símbolos nacionais;
			Saudosismo, valorização da infância como ideal (valorização do passado);
			Idealização da mulher e das relações amorosas;
			Fuga da realidade (escapismo).
			Leia também:

			Romantismo no Brasil
			Escritores do Romantismo
			Romantismo alemão
			Escritores do Romantismo alemão
			Ultrarromantismo
			Ultrarromantismo no Brasil
			<br />
			Fonte: <a href='https://www.infoescola.com/literatura/romantismo/' > Wikipedia </a>
		</div>
		<?php $schl = $lts; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>