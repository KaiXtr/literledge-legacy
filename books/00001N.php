<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001N'");
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
			<?php $book = '00001N'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Úrsula é um romance da escritora maranhense Maria Firmina dos Reis publicado em 1859. É considerado o primeiro romance escrito por uma mulher no Brasil.[1] O romance foi publicado com o pseudônimo \"uma maranhense\".[2] O romance foi ter segunda edição, essa facsimilar, apenas 1975 graças a organização de Horácio de Almeida. Úrsula é considerado um romance precursor da temática abolicionista na literatura brasileira, pois é anterior à poesia de Castro Alves e ao As vítimas-algozes de Joaquim Manoel de Macedo.[3]

					Maria Firmina desconstrói uma história literária etnocêntrica e masculina até mesmo em suas ramificações afro-descendentes. Úrsula não seria apenas o primeiro romance abolicionista da literatura brasileira - fato que nem todos os historiadores admitem - mas é também o primeiro romance da literatura afro-brasileira, entendida esta como produção de autoria afro-descendente, que tematiza o negro a partir de uma perspectiva interna e comprometida politicamente em recuperar e narrar a condição do ser negro no Brasil. Acresça-se a isto o gesto (civilizatório) representado pela inscrição em língua portuguesa dos elementos da memória ancestral e das tradições africanas. Texto fundador, Úrsula polemiza com a tese segundo a qual nos falta um \"romance negro\", pois apesar de centrado nas vicissitudes da heroína branca, pela primeira vez em nossa literatura, tem-se uma narrativa da escravidão conduzida por um ponto de vista interno e por uma perspectiva afro-descendente.

					No prólogo da obra, a autora afirma saber que \"pouco vale este romance, porque escrito por uma mulher, e mulher brasileira, de educação acanhada e sem o trato e conversação dos homens ilustrados.\" Por trás dessa declaração de modéstia, a escritora revelou sua condição social: o fato de não ter estudado na Europa, nem dominar outros idiomas, como era comum entre os homens educados de sua época, por si só indicava o lugar que ocupava na sociedade em que nasceu. É desse lugar intermediário, mais próximo da pobreza que da riqueza, que Maria Firmina corajosamente levantou sua voz através do que chamou \"mesquinho e humilde livro\". E, mesmo sabendo do “indiferentismo glacial de uns” e do “riso mofador de outros”, desafiou: “ainda assim o dou a lume”.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Úrsula é um romance da escritora maranhense Maria Firmina dos Reis publicado em 1859. É considerado o primeiro romance escrito por uma mulher no Brasil.[1] O romance foi publicado com o pseudônimo \"uma maranhense\".[2] O romance foi ter segunda edição, essa facsimilar, apenas 1975 graças a organização de Horácio de Almeida. Úrsula é considerado um romance precursor da temática abolicionista na literatura brasileira, pois é anterior à poesia de Castro Alves e ao As vítimas-algozes de Joaquim Manoel de Macedo.[3]

					Maria Firmina desconstrói uma história literária etnocêntrica e masculina até mesmo em suas ramificações afro-descendentes. Úrsula não seria apenas o primeiro romance abolicionista da literatura brasileira - fato que nem todos os historiadores admitem - mas é também o primeiro romance da literatura afro-brasileira, entendida esta como produção de autoria afro-descendente, que tematiza o negro a partir de uma perspectiva interna e comprometida politicamente em recuperar e narrar a condição do ser negro no Brasil. Acresça-se a isto o gesto (civilizatório) representado pela inscrição em língua portuguesa dos elementos da memória ancestral e das tradições africanas. Texto fundador, Úrsula polemiza com a tese segundo a qual nos falta um \"romance negro\", pois apesar de centrado nas vicissitudes da heroína branca, pela primeira vez em nossa literatura, tem-se uma narrativa da escravidão conduzida por um ponto de vista interno e por uma perspectiva afro-descendente.

					No prólogo da obra, a autora afirma saber que \"pouco vale este romance, porque escrito por uma mulher, e mulher brasileira, de educação acanhada e sem o trato e conversação dos homens ilustrados.\" Por trás dessa declaração de modéstia, a escritora revelou sua condição social: o fato de não ter estudado na Europa, nem dominar outros idiomas, como era comum entre os homens educados de sua época, por si só indicava o lugar que ocupava na sociedade em que nasceu. É desse lugar intermediário, mais próximo da pobreza que da riqueza, que Maria Firmina corajosamente levantou sua voz através do que chamou \"mesquinho e humilde livro\". E, mesmo sabendo do “indiferentismo glacial de uns” e do “riso mofador de outros”, desafiou: “ainda assim o dou a lume”.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Úrsula é um romance da escritora maranhense Maria Firmina dos Reis publicado em 1859. É considerado o primeiro romance escrito por uma mulher no Brasil.[1] O romance foi publicado com o pseudônimo \"uma maranhense\".[2] O romance foi ter segunda edição, essa facsimilar, apenas 1975 graças a organização de Horácio de Almeida. Úrsula é considerado um romance precursor da temática abolicionista na literatura brasileira, pois é anterior à poesia de Castro Alves e ao As vítimas-algozes de Joaquim Manoel de Macedo.[3]

					Maria Firmina desconstrói uma história literária etnocêntrica e masculina até mesmo em suas ramificações afro-descendentes. Úrsula não seria apenas o primeiro romance abolicionista da literatura brasileira - fato que nem todos os historiadores admitem - mas é também o primeiro romance da literatura afro-brasileira, entendida esta como produção de autoria afro-descendente, que tematiza o negro a partir de uma perspectiva interna e comprometida politicamente em recuperar e narrar a condição do ser negro no Brasil. Acresça-se a isto o gesto (civilizatório) representado pela inscrição em língua portuguesa dos elementos da memória ancestral e das tradições africanas. Texto fundador, Úrsula polemiza com a tese segundo a qual nos falta um \"romance negro\", pois apesar de centrado nas vicissitudes da heroína branca, pela primeira vez em nossa literatura, tem-se uma narrativa da escravidão conduzida por um ponto de vista interno e por uma perspectiva afro-descendente.

					No prólogo da obra, a autora afirma saber que \"pouco vale este romance, porque escrito por uma mulher, e mulher brasileira, de educação acanhada e sem o trato e conversação dos homens ilustrados.\" Por trás dessa declaração de modéstia, a escritora revelou sua condição social: o fato de não ter estudado na Europa, nem dominar outros idiomas, como era comum entre os homens educados de sua época, por si só indicava o lugar que ocupava na sociedade em que nasceu. É desse lugar intermediário, mais próximo da pobreza que da riqueza, que Maria Firmina corajosamente levantou sua voz através do que chamou \"mesquinho e humilde livro\". E, mesmo sabendo do “indiferentismo glacial de uns” e do “riso mofador de outros”, desafiou: “ainda assim o dou a lume”.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001N'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'FIRMINAreis'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>