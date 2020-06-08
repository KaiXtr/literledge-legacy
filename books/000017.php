<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='000017'");
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
			<?php $book = '000017'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Notre-Dame de Paris, também conhecido como O Corcunda de Notre-Dame, é um romance histórico de autoria do escritor francês Victor Hugo, publicado em 1831
					A obra veio a público originalmente com o título de "Notre-Dame de Paris", e nem sequer se centrava na personagem que a eternizou, uma vez que só quando foi traduzida para a língua inglesa, em 1833, este nome apareceu no título. Em sua origem, constituía-se em um romance histórico, voltado para o público adulto, com o intuito de conscientizá-lo para a necessidade de se conservar a Catedral de Notre-Dame.

					Na obra, Victor Hugo não se limita a descrever apenas a antiga Catedral, mas ilustra historicamente a sociedade da Paris medieval, e os contrastes dos seus personagens, desde os pedintes e ciganos ao rei e à nobreza.

					A história passa-se em 1482, em Paris, a capital de França. A ação desenrola-se dentro e em torno da Catedral de Notre-Dame, na Île de la Cité, no meio do rio Sena. Aqui estavam situadas os dois grandes monumentos da cidade à época: a Catedral e o Palácio da Justiça, o que centralizava, na ilha, a religião e o governo de Paris.

					A Catedral, construída em 1330, era a principal igreja de Paris. Além de importante local de oração, aceitava órfãos e pessoas que ali procuravam refúgio da lei.

					As personagens da história provêm de todas as camadas sociais existentes em Paris na Idade Média: membros do clero e fidalgos cruzavam-se com ciganos e mendigos nas ruas da Île de la Cité. Luís XI de França era o soberano à época, e costumava assistir diariamente à missa na Catedral.

					Paris não possuía uma força policial. Oficiais da guarda pessoal do rei e grupos de fidalgos patrulhavam as ruas para manterem a ordem.

					Havia então em Paris muitos pobres e sem-abrigo. Alguns destes proscritos eram pedintes, ciganos, pessoas com deficiências, doentes e ladrões. Estes elementos eram percebidos pela sociedade como uma ameaça. O povo cigano era nómada, e mudavam-se de cidade em cidade.

					A Obra gira em torno de um homem coxo e deformado que foi adotado pelo arcediago Claudio Frollo. Batizado de Quasímodo, enfrenta uma série de peripécias por conta de um amor não correspondido por uma bela cigana, Esmeralda.

					Esmeralda é uma personagem que representa uma espécie de beleza suprema, quase celestial, o que faz com que dois homens, Quasímodo e Dom Cláudio se apaixonem por ela.

					São duas formas de amar diferentes. Quasímodo ama-a de uma forma desinteressada, enquanto Frollo nutre por ela uma enorme paixão, repleta de desejo sexual, embora muitas vezes se note uma grande ternura e carinho pela cigana.

					No entanto, Esmeralda, não corresponde ao amor de nenhum dos dois, preferindo amar Febo, um oficial da guarda real, que apesar de dizer que a ama, tem uma noiva e não nutre nenhum tipo de sentimento por Esmeralda, a não ser desejo.

					A narrativa trata de cada personagem com profundidade, e há quem considere Claudio Frollo a personagem mais profunda do livro.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					<li><b>: </b></li>
					</ul>
					<hr>
				</div>
			</div>
			<?php $book = '000017'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'HUGOvictor'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>