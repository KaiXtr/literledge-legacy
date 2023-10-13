<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='BAUDELAIREcharles'");
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

		<?php $user = 'BAUDELAIREcharles'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Charles-Pierre Baudelaire (Paris, 9 de abril de 1821 — Paris, 31 de agosto de 1867) foi um poeta boémio, dandy, flâneur e teórico da arte francesa. É considerado um dos precursores do simbolismo e reconhecido internacionalmente como o fundador da tradição moderna em poesia, juntamente com Walt Whitman, embora tenha se relacionado com diversas escolas artísticas. Sua obra teórica também influenciou profundamente as artes plásticas do século XIX.
			<br />
			Nasceu em 9 de abril de 1821 em Paris. Estudou no Colégio Real de Lyon e Lycée Louis-le-Grand (de onde foi expulso por não querer mostrar um bilhete que lhe fora passado por um colega).

			Em 1840, foi enviado pelo padrasto, preocupado com sua vida desregrada, à Índia, mas nunca chegou ao destino. Para na ilha da Reunião e retorna a Paris. Atingindo a maioridade, ganha posse da herança do pai. Por dois anos, vive entre drogas e álcool na companhia de Jeanne Duval. Em 1844, sua mãe entra na justiça, acusando-o de pródigo, e então sua fortuna torna-se controlada por um notário.

			Em 1857, é lançado As flores do mal, contendo 100 poemas. O autor do livro é acusado, no mesmo ano, pela justiça, de ultrajar a moral pública. Os exemplares são apreendidos, pagando, de multa, o escritor, 300 francos, e a editora, 100 francos.

			Essa censura se deveu a apenas seis poemas do livro. Baudelaire aceita a sentença e escreve seis novos poemas, \"mais belos que os suprimidos\", segundo ele.

			Mesmo depois disso, Baudelaire tenta ingressar na Academia Francesa. Há divergência, entre os estudiosos, sobre a principal razão pela qual Baudelaire tentou isso. Uns dizem que foi para se reabilitar aos olhos da mãe (que, dessa forma, lhe daria mais dinheiro), e outros dizem que ele queria se reabilitar com o público em geral, que via suas obras com maus olhos em função das duras críticas que ele recebia da burguesia.

			Morte
			Foi na Bélgica que Baudelaire encontrou Félicien Rops, que ilustra \"As flores do mal\". Durante uma visita à Igreja de St. Loup, de Namur, Baudelaire perde a consciência. Este colapso é acompanhado por alterações cerebrais, particularmente afasia. Desde março de 1866, ele sofre de hemiplegia. Ele morreu de sífilis em Paris, em 31 de agosto de 1867, sem a realização do projecto de uma edição final de \"As flores do mal\", como ele desejava. Ele está enterrado no Cemitério de Montparnasse (sexta divisão), no mesmo túmulo de seu padrasto, o general Jacques Aupick, e sua mãe. Morreu prematuramente sem sequer conhecer a fama.
			Fonte: <a href='https://pt.wikipedia.org/wiki/Charles_Baudelaire' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Charles-Pierre Baudelaire (Paris, 9 de abril de 1821 — Paris, 31 de agosto de 1867) foi um poeta boémio, dandy, flâneur e teórico da arte francesa. É considerado um dos precursores do simbolismo e reconhecido internacionalmente como o fundador da tradição moderna em poesia, juntamente com Walt Whitman, embora tenha se relacionado com diversas escolas artísticas. Sua obra teórica também influenciou profundamente as artes plásticas do século XIX.
			<br />
			Nasceu em 9 de abril de 1821 em Paris. Estudou no Colégio Real de Lyon e Lycée Louis-le-Grand (de onde foi expulso por não querer mostrar um bilhete que lhe fora passado por um colega).

			Em 1840, foi enviado pelo padrasto, preocupado com sua vida desregrada, à Índia, mas nunca chegou ao destino. Para na ilha da Reunião e retorna a Paris. Atingindo a maioridade, ganha posse da herança do pai. Por dois anos, vive entre drogas e álcool na companhia de Jeanne Duval. Em 1844, sua mãe entra na justiça, acusando-o de pródigo, e então sua fortuna torna-se controlada por um notário.

			Em 1857, é lançado As flores do mal, contendo 100 poemas. O autor do livro é acusado, no mesmo ano, pela justiça, de ultrajar a moral pública. Os exemplares são apreendidos, pagando, de multa, o escritor, 300 francos, e a editora, 100 francos.

			Essa censura se deveu a apenas seis poemas do livro. Baudelaire aceita a sentença e escreve seis novos poemas, \"mais belos que os suprimidos\", segundo ele.

			Mesmo depois disso, Baudelaire tenta ingressar na Academia Francesa. Há divergência, entre os estudiosos, sobre a principal razão pela qual Baudelaire tentou isso. Uns dizem que foi para se reabilitar aos olhos da mãe (que, dessa forma, lhe daria mais dinheiro), e outros dizem que ele queria se reabilitar com o público em geral, que via suas obras com maus olhos em função das duras críticas que ele recebia da burguesia.

			Morte
			Foi na Bélgica que Baudelaire encontrou Félicien Rops, que ilustra \"As flores do mal\". Durante uma visita à Igreja de St. Loup, de Namur, Baudelaire perde a consciência. Este colapso é acompanhado por alterações cerebrais, particularmente afasia. Desde março de 1866, ele sofre de hemiplegia. Ele morreu de sífilis em Paris, em 31 de agosto de 1867, sem a realização do projecto de uma edição final de \"As flores do mal\", como ele desejava. Ele está enterrado no Cemitério de Montparnasse (sexta divisão), no mesmo túmulo de seu padrasto, o general Jacques Aupick, e sua mãe. Morreu prematuramente sem sequer conhecer a fama.
			Fonte: <a href='https://pt.wikipedia.org/wiki/Charles_Baudelaire' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Charles-Pierre Baudelaire (Paris, 9 de abril de 1821 — Paris, 31 de agosto de 1867) foi um poeta boémio, dandy, flâneur e teórico da arte francesa. É considerado um dos precursores do simbolismo e reconhecido internacionalmente como o fundador da tradição moderna em poesia, juntamente com Walt Whitman, embora tenha se relacionado com diversas escolas artísticas. Sua obra teórica também influenciou profundamente as artes plásticas do século XIX.
			<br />
			Nasceu em 9 de abril de 1821 em Paris. Estudou no Colégio Real de Lyon e Lycée Louis-le-Grand (de onde foi expulso por não querer mostrar um bilhete que lhe fora passado por um colega).

			Em 1840, foi enviado pelo padrasto, preocupado com sua vida desregrada, à Índia, mas nunca chegou ao destino. Para na ilha da Reunião e retorna a Paris. Atingindo a maioridade, ganha posse da herança do pai. Por dois anos, vive entre drogas e álcool na companhia de Jeanne Duval. Em 1844, sua mãe entra na justiça, acusando-o de pródigo, e então sua fortuna torna-se controlada por um notário.

			Em 1857, é lançado As flores do mal, contendo 100 poemas. O autor do livro é acusado, no mesmo ano, pela justiça, de ultrajar a moral pública. Os exemplares são apreendidos, pagando, de multa, o escritor, 300 francos, e a editora, 100 francos.

			Essa censura se deveu a apenas seis poemas do livro. Baudelaire aceita a sentença e escreve seis novos poemas, \"mais belos que os suprimidos\", segundo ele.

			Mesmo depois disso, Baudelaire tenta ingressar na Academia Francesa. Há divergência, entre os estudiosos, sobre a principal razão pela qual Baudelaire tentou isso. Uns dizem que foi para se reabilitar aos olhos da mãe (que, dessa forma, lhe daria mais dinheiro), e outros dizem que ele queria se reabilitar com o público em geral, que via suas obras com maus olhos em função das duras críticas que ele recebia da burguesia.

			Morte
			Foi na Bélgica que Baudelaire encontrou Félicien Rops, que ilustra \"As flores do mal\". Durante uma visita à Igreja de St. Loup, de Namur, Baudelaire perde a consciência. Este colapso é acompanhado por alterações cerebrais, particularmente afasia. Desde março de 1866, ele sofre de hemiplegia. Ele morreu de sífilis em Paris, em 31 de agosto de 1867, sem a realização do projecto de uma edição final de \"As flores do mal\", como ele desejava. Ele está enterrado no Cemitério de Montparnasse (sexta divisão), no mesmo túmulo de seu padrasto, o general Jacques Aupick, e sua mãe. Morreu prematuramente sem sequer conhecer a fama.
			Fonte: <a href='https://pt.wikipedia.org/wiki/Charles_Baudelaire' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='BAUDELAIREcharles'; include '../design/poemfind.php'; ?>
		<?php $user = 'BAUDELAIREcharles'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>