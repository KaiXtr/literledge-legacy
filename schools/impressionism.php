<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../design/array_lists.php';
			$lts = 'Impressionism';
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
			O Impressionismo foi um movimento que se manifestou, especialmente nas artes plásticas no fim do século XIX na França. Os impressionistas rejeitavam as convenções da arte acadêmica vigente na época. As pinturas do Impressionismo captavam as impressões perceptivas de luminosidade, cor e sombra das paisagens, por isso pintavam o mesmo quadro em diferentes horários do dia.

			O termo “impressionista” deriva de uma das obras mais significativas obras desse movimento - Impressão: Nascer do Sol, de Monet. Outra explicação diz que o termo foi usado pela primeira vez pelos caluniadores do movimento, que consideravam as obras inacabadas e o nome foi aceito e adotado pelos artistas desse estilo.
			Paul Cézanne (1839-1906), Edgar Degas (1834-1917), Claude Monet (1840-1926), Camille Pissarro (1830-1903), Pierre-Auguste Renoir (1841-1919) estão entre os principais expoentes do Impressionismo.

			Esses artistas estavam interessados em confinar com a tinta as impressões sensoriais de cor, luz, som e de movimento, por meio de cores claras e brilhantes bem como pinceladas mais livres e distintas. Assim como é do conhecimento de todos, as cores da natureza mudam conforme a luz incidente em determinado horário do dia, e eram essas impressões que os impressionistas queriam capturar. Os impressionistas estudavam muito sobre os efeitos ópticos, para isso usavam com frequência recursos fotográficos. Em função disso preferiam trabalhar ao ar livre, bem como, não se prenderam ao uso da perspectiva e ao uso de modelos. As figuras representadas não possuíam contornos nítidos, as sombras deveriam ser coloridas e as cores deveriam ser usadas puras, evitando a mistura de tonalidades.

			Claude Monet, principal expoente do Impressionismo, costumava afirmar que só é possível conhecer um objeto plenamente se for possível experenciar toda gama de possibilidades e impressões que ele provoca. Ao pintar a tela Catedral de Rouen, Harmonia em azul, de 1893, o artista pintou a catedral trinta vezes, tentando capturar os as variações de cores em sua fachada.

			No Brasil, alguns pintores se destacaram nesse estilo como  Eliseu Visconti, Almeida Júnior, Timótheo da Costa, Henrique Cavaleiro, Vicente do Rego Monteiro e Alfredo Andersen.

			O Impressionismo também teve suas manifestações na música e na literatura. Na música seus nomes mais marcantes foram Debussy e Ravel. Na literatura destacam-se os escritores Marcel Proust, Graça Aranha e Raul Pompeia.
			<br />
			Fonte: <a href='https://www.infoescola.com/movimentos-artisticos/impressionismo/' > Wikipedia </a>
		</div>
		<?php $schl = $lts; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>