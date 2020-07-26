<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000012'");
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
			<?php $book = '000012'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Volta ao Mundo em 80 Dias (Le tour du monde en quatre-vingts jours, em francês) é um romance de aventura escrito pelo francês Júlio Verne e lançado em 1873.[1] A obra retrata a tentativa do cavalheiro inglês Phileas Fogg e seu valete, Passepartout, de circum-navegar o mundo em 80 dias. É considerada uma das maiores obras da literatura mundial, tendo inspirado várias adaptações ao cinema e ao teatro.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>Mr. Phileas Fogg: cavalheiro inglês, rico e enigmático, que morava em Londres. Ele tinha uma rotina inalterável: acordava às 8h da manhã, fazia a barba às 9h37 e partia para o clube reformador para ler o jornal</li>
					<li>Jean Passepartout: criado francês recém-contratado por Phileas Fogg, que o acompanha em sua volta ao mundo. Nas versões brasileiras, também é chamado de \"Fura-Vidas\" ou \"Faz-Tudo\".</li>
					<li>Detetive Fix: inspetor de polícia britânico que, após ver que a descrição do autor de um assalto ao Banco da Inglaterra se enquadra com a de Phileas Fogg, vai persegui-lo por todos os países tentando capturá-lo.</li>
					<li>Sra. Aouda: é uma jovem indiana Parse de uma beleza europeia e muito agradável que foi salva por Phileas Fogg e Passepartout da morte durante a passagem dos dois pela Índia. Ela segue com eles pelo restante da jornada.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Volta ao Mundo em 80 Dias (Le tour du monde en quatre-vingts jours, em francês) é um romance de aventura escrito pelo francês Júlio Verne e lançado em 1873.[1] A obra retrata a tentativa do cavalheiro inglês Phileas Fogg e seu valete, Passepartout, de circum-navegar o mundo em 80 dias. É considerada uma das maiores obras da literatura mundial, tendo inspirado várias adaptações ao cinema e ao teatro.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>Mr. Phileas Fogg: cavalheiro inglês, rico e enigmático, que morava em Londres. Ele tinha uma rotina inalterável: acordava às 8h da manhã, fazia a barba às 9h37 e partia para o clube reformador para ler o jornal</li>
					<li>Jean Passepartout: criado francês recém-contratado por Phileas Fogg, que o acompanha em sua volta ao mundo. Nas versões brasileiras, também é chamado de \"Fura-Vidas\" ou \"Faz-Tudo\".</li>
					<li>Detetive Fix: inspetor de polícia britânico que, após ver que a descrição do autor de um assalto ao Banco da Inglaterra se enquadra com a de Phileas Fogg, vai persegui-lo por todos os países tentando capturá-lo.</li>
					<li>Sra. Aouda: é uma jovem indiana Parse de uma beleza europeia e muito agradável que foi salva por Phileas Fogg e Passepartout da morte durante a passagem dos dois pela Índia. Ela segue com eles pelo restante da jornada.</li>
					</ul>
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					A Volta ao Mundo em 80 Dias (Le tour du monde en quatre-vingts jours, em francês) é um romance de aventura escrito pelo francês Júlio Verne e lançado em 1873.[1] A obra retrata a tentativa do cavalheiro inglês Phileas Fogg e seu valete, Passepartout, de circum-navegar o mundo em 80 dias. É considerada uma das maiores obras da literatura mundial, tendo inspirado várias adaptações ao cinema e ao teatro.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li>Mr. Phileas Fogg: cavalheiro inglês, rico e enigmático, que morava em Londres. Ele tinha uma rotina inalterável: acordava às 8h da manhã, fazia a barba às 9h37 e partia para o clube reformador para ler o jornal</li>
					<li>Jean Passepartout: criado francês recém-contratado por Phileas Fogg, que o acompanha em sua volta ao mundo. Nas versões brasileiras, também é chamado de \"Fura-Vidas\" ou \"Faz-Tudo\".</li>
					<li>Detetive Fix: inspetor de polícia britânico que, após ver que a descrição do autor de um assalto ao Banco da Inglaterra se enquadra com a de Phileas Fogg, vai persegui-lo por todos os países tentando capturá-lo.</li>
					<li>Sra. Aouda: é uma jovem indiana Parse de uma beleza europeia e muito agradável que foi salva por Phileas Fogg e Passepartout da morte durante a passagem dos dois pela Índia. Ela segue com eles pelo restante da jornada.</li>
					</ul>
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '000012'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'VERNEjules'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>