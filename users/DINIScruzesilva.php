<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='DINIScruzesilva'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'];}
				else {$v = $i[$_COOKIE['lang']];}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'DINIScruzesilva'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			António Dinis da Cruz e Silva (Lisboa, 4 de Julho de 1731 – † Rio de Janeiro, 5 Outubro de 1799) é um poeta português do século XVIII, foi magistrado de profissão e fundador da Arcádia Lusitana em 1756.
			António Dinis da Cruz e Silva nasceu em Lisboa, em 1731, filho de uma modesta família lisboeta, cujo pai imigrou para o Brasil pouco antes do seu nascimento, deixando a educação dos filhos a cuidado de sua esposa.

			António Dinis estudou Latim e Filosofia no Colégio dos Oratorianos e, em 1747, entrou na Universidade de Coimbra onde estudou Direito, altura em que terá escrito os seus primeiros poemas.

			Poeta do Neoclassicismo, fundou em Lisboa, em 1756, juntamente com dois outros bacharéis em Direito, Esteves Negrão e Teotónio Gomes de Carvalho, aos quais se juntou mais tarde Correia Garção, a Arcádia Lusitana ou Olissiponense, adoptando o pseudónimo arcádico de gosto clássico Elpino Nonacriense.

			Seguiu a magistratura, sendo nomeado juiz em Castelo de Vide, em 1759, e em Elvas, em 1764. Mais tarde, foi promovido a Desembargador da Relação do Rio de Janeiro. Nomeado posteriormente Desembargador da Relação do Porto, regressou a Portugal, em 1774.

			Em Julho de 1790 foi nomeado Desembargador da Casa da Suplicação. Nesta qualidade foi de novo ao Brasil como parte da comitiva enviada a este território para julgar os réus da revolta que ficou conhecida por Inconfidência Mineira (o célebre caso Tiradentes), na qual estavam implicados amigos seus poetas, tais como Tomás António Gonzaga, Cláudio Manuel da Costa e Inácio José de Alvarenga Peixoto.

			Em Dezembro de 1792, foi nomeado para exercer as funções de Chanceler da Relação do Rio de Janeiro e seis anos depois conselheiro do Conselho Ultramarino, funções que o obrigavam regressar a Lisboa, mas onde não teve tempo de regressar, pois faleceu no Rio de Janeiro a 5 de Outubro de 1799.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Ant%C3%B3nio_Dinis_da_Cruz_e_Silva'> Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			António Dinis da Cruz e Silva (Lisboa, 4 de Julho de 1731 – † Rio de Janeiro, 5 Outubro de 1799) é um poeta português do século XVIII, foi magistrado de profissão e fundador da Arcádia Lusitana em 1756.
			António Dinis da Cruz e Silva nasceu em Lisboa, em 1731, filho de uma modesta família lisboeta, cujo pai imigrou para o Brasil pouco antes do seu nascimento, deixando a educação dos filhos a cuidado de sua esposa.

			António Dinis estudou Latim e Filosofia no Colégio dos Oratorianos e, em 1747, entrou na Universidade de Coimbra onde estudou Direito, altura em que terá escrito os seus primeiros poemas.

			Poeta do Neoclassicismo, fundou em Lisboa, em 1756, juntamente com dois outros bacharéis em Direito, Esteves Negrão e Teotónio Gomes de Carvalho, aos quais se juntou mais tarde Correia Garção, a Arcádia Lusitana ou Olissiponense, adoptando o pseudónimo arcádico de gosto clássico Elpino Nonacriense.

			Seguiu a magistratura, sendo nomeado juiz em Castelo de Vide, em 1759, e em Elvas, em 1764. Mais tarde, foi promovido a Desembargador da Relação do Rio de Janeiro. Nomeado posteriormente Desembargador da Relação do Porto, regressou a Portugal, em 1774.

			Em Julho de 1790 foi nomeado Desembargador da Casa da Suplicação. Nesta qualidade foi de novo ao Brasil como parte da comitiva enviada a este território para julgar os réus da revolta que ficou conhecida por Inconfidência Mineira (o célebre caso Tiradentes), na qual estavam implicados amigos seus poetas, tais como Tomás António Gonzaga, Cláudio Manuel da Costa e Inácio José de Alvarenga Peixoto.

			Em Dezembro de 1792, foi nomeado para exercer as funções de Chanceler da Relação do Rio de Janeiro e seis anos depois conselheiro do Conselho Ultramarino, funções que o obrigavam regressar a Lisboa, mas onde não teve tempo de regressar, pois faleceu no Rio de Janeiro a 5 de Outubro de 1799.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Ant%C3%B3nio_Dinis_da_Cruz_e_Silva'> Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			António Dinis da Cruz e Silva (Lisboa, 4 de Julho de 1731 – † Rio de Janeiro, 5 Outubro de 1799) é um poeta português do século XVIII, foi magistrado de profissão e fundador da Arcádia Lusitana em 1756.
			António Dinis da Cruz e Silva nasceu em Lisboa, em 1731, filho de uma modesta família lisboeta, cujo pai imigrou para o Brasil pouco antes do seu nascimento, deixando a educação dos filhos a cuidado de sua esposa.

			António Dinis estudou Latim e Filosofia no Colégio dos Oratorianos e, em 1747, entrou na Universidade de Coimbra onde estudou Direito, altura em que terá escrito os seus primeiros poemas.

			Poeta do Neoclassicismo, fundou em Lisboa, em 1756, juntamente com dois outros bacharéis em Direito, Esteves Negrão e Teotónio Gomes de Carvalho, aos quais se juntou mais tarde Correia Garção, a Arcádia Lusitana ou Olissiponense, adoptando o pseudónimo arcádico de gosto clássico Elpino Nonacriense.

			Seguiu a magistratura, sendo nomeado juiz em Castelo de Vide, em 1759, e em Elvas, em 1764. Mais tarde, foi promovido a Desembargador da Relação do Rio de Janeiro. Nomeado posteriormente Desembargador da Relação do Porto, regressou a Portugal, em 1774.

			Em Julho de 1790 foi nomeado Desembargador da Casa da Suplicação. Nesta qualidade foi de novo ao Brasil como parte da comitiva enviada a este território para julgar os réus da revolta que ficou conhecida por Inconfidência Mineira (o célebre caso Tiradentes), na qual estavam implicados amigos seus poetas, tais como Tomás António Gonzaga, Cláudio Manuel da Costa e Inácio José de Alvarenga Peixoto.

			Em Dezembro de 1792, foi nomeado para exercer as funções de Chanceler da Relação do Rio de Janeiro e seis anos depois conselheiro do Conselho Ultramarino, funções que o obrigavam regressar a Lisboa, mas onde não teve tempo de regressar, pois faleceu no Rio de Janeiro a 5 de Outubro de 1799.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Ant%C3%B3nio_Dinis_da_Cruz_e_Silva'> Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='DINIScruzesilva'; include '../design/poemfind.php'; ?>
		<?php $user = 'DINIScruzesilva'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>