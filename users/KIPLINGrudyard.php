<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='KIPLINGrudyard'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['pt'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'KIPLINGrudyard'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
			Joseph Rudyard Kipling (Bombaim, 30 de dezembro de 1865 — Londres, 18 de janeiro de 1936) foi um autor e poeta britânico, conhecido por seus livros \"The Jungle Book\" (1894), \"The Second Jungle Book\" (1895), \"Just So Stories\" (1902), e \"Puck of Pook's Hill\" (1906); sua novela, \"Kim\" (1901); seus poemas, incluindo \"Mandalay\" (1890), \"Gunga Din\" (1890), \"If\"(1910) e \"Ulster 1912" (1912); e seus muitos contos curtos, incluindo \"The Man Who Would Be King\" (1888) e as compilações \"Life's Handicap\" (1891), \"The Day's Work\" (1898), e \"Plain Tales from the Hills\" (1888).

			É considerado o maior \"inovador na arte do conto curto\";[2] os seus livros para crianças são clássicos da literatura infantil; e o seu melhor trabalho dá mostras de um talento narrativo versátil e brilhante.[3][nota 1]

			Foi um dos escritores mais populares da Inglaterra, em prosa e poema, no final do século XIX e início do XX.[2] O autor Henry James referiu: \"Kipling me impressiona pessoalmente como o mais completo homem de gênio (o que difere de inteligência refinada) que eu jamais conheci.\".[2] Foi laureado com o Nobel de Literatura de 1907, tornando-se o primeiro autor de língua inglesa a receber esse prêmio e, até hoje, o mais jovem a recebê-lo.[4] Entre outras distinções, foi sondado em diversas ocasiões para receber a Láurea de Poeta Britânico e um título de Cavaleiro, as quais rejeitou.[5] Ainda assim, Kipling tornou-se conhecido (nas palavras de George Orwell) como um \"profeta do imperialismo britânico\".[6] Muitos viam preconceito e militarismo em suas obras,[7][8] e a controvérsia sobre esses temas em sua obra perdurou por muito tempo ainda no século XX.[9][10] De acordo com o crítico Douglas Kerr: \"Ele ainda é um autor que pode inspirar discordâncias apaixonadas e seu lugar na história da literatura e da cultura ainda está longe de ser definido. Mas à medida que a era dos impérios europeus retrocede, ele é reconhecido como um intérprete incomparável, ainda que controverso, de como o império era vivido. Isso, e um reconhecimento crescente de seus extraordinários talentos narrativos, faz dele uma força a ser respeitada\".[11] Seu poema \"If\" (Se) é símbolo dos Cadetes da Academia da Força Aérea.

			Uma de suas obras o \"Livro da Selva\" foi adotado por Robert Baden-Powell, fundador do Escotismo como fundo de cena para as atividades com jovens de 7 à 11 anos, denominando os jovens dessa faixa etária como lobinhos.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Rudyard_Kipling' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
			Joseph Rudyard Kipling (Bombaim, 30 de dezembro de 1865 — Londres, 18 de janeiro de 1936) foi um autor e poeta britânico, conhecido por seus livros \"The Jungle Book\" (1894), \"The Second Jungle Book\" (1895), \"Just So Stories\" (1902), e \"Puck of Pook's Hill\" (1906); sua novela, \"Kim\" (1901); seus poemas, incluindo \"Mandalay\" (1890), \"Gunga Din\" (1890), \"If\"(1910) e \"Ulster 1912" (1912); e seus muitos contos curtos, incluindo \"The Man Who Would Be King\" (1888) e as compilações \"Life's Handicap\" (1891), \"The Day's Work\" (1898), e \"Plain Tales from the Hills\" (1888).

			É considerado o maior \"inovador na arte do conto curto\";[2] os seus livros para crianças são clássicos da literatura infantil; e o seu melhor trabalho dá mostras de um talento narrativo versátil e brilhante.[3][nota 1]

			Foi um dos escritores mais populares da Inglaterra, em prosa e poema, no final do século XIX e início do XX.[2] O autor Henry James referiu: \"Kipling me impressiona pessoalmente como o mais completo homem de gênio (o que difere de inteligência refinada) que eu jamais conheci.\".[2] Foi laureado com o Nobel de Literatura de 1907, tornando-se o primeiro autor de língua inglesa a receber esse prêmio e, até hoje, o mais jovem a recebê-lo.[4] Entre outras distinções, foi sondado em diversas ocasiões para receber a Láurea de Poeta Britânico e um título de Cavaleiro, as quais rejeitou.[5] Ainda assim, Kipling tornou-se conhecido (nas palavras de George Orwell) como um \"profeta do imperialismo britânico\".[6] Muitos viam preconceito e militarismo em suas obras,[7][8] e a controvérsia sobre esses temas em sua obra perdurou por muito tempo ainda no século XX.[9][10] De acordo com o crítico Douglas Kerr: \"Ele ainda é um autor que pode inspirar discordâncias apaixonadas e seu lugar na história da literatura e da cultura ainda está longe de ser definido. Mas à medida que a era dos impérios europeus retrocede, ele é reconhecido como um intérprete incomparável, ainda que controverso, de como o império era vivido. Isso, e um reconhecimento crescente de seus extraordinários talentos narrativos, faz dele uma força a ser respeitada\".[11] Seu poema \"If\" (Se) é símbolo dos Cadetes da Academia da Força Aérea.

			Uma de suas obras o \"Livro da Selva\" foi adotado por Robert Baden-Powell, fundador do Escotismo como fundo de cena para as atividades com jovens de 7 à 11 anos, denominando os jovens dessa faixa etária como lobinhos.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Rudyard_Kipling' > Wikipedia </a>
					";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
			Joseph Rudyard Kipling (Bombaim, 30 de dezembro de 1865 — Londres, 18 de janeiro de 1936) foi um autor e poeta britânico, conhecido por seus livros \"The Jungle Book\" (1894), \"The Second Jungle Book\" (1895), \"Just So Stories\" (1902), e \"Puck of Pook's Hill\" (1906); sua novela, \"Kim\" (1901); seus poemas, incluindo \"Mandalay\" (1890), \"Gunga Din\" (1890), \"If\"(1910) e \"Ulster 1912" (1912); e seus muitos contos curtos, incluindo \"The Man Who Would Be King\" (1888) e as compilações \"Life's Handicap\" (1891), \"The Day's Work\" (1898), e \"Plain Tales from the Hills\" (1888).

			É considerado o maior \"inovador na arte do conto curto\";[2] os seus livros para crianças são clássicos da literatura infantil; e o seu melhor trabalho dá mostras de um talento narrativo versátil e brilhante.[3][nota 1]

			Foi um dos escritores mais populares da Inglaterra, em prosa e poema, no final do século XIX e início do XX.[2] O autor Henry James referiu: \"Kipling me impressiona pessoalmente como o mais completo homem de gênio (o que difere de inteligência refinada) que eu jamais conheci.\".[2] Foi laureado com o Nobel de Literatura de 1907, tornando-se o primeiro autor de língua inglesa a receber esse prêmio e, até hoje, o mais jovem a recebê-lo.[4] Entre outras distinções, foi sondado em diversas ocasiões para receber a Láurea de Poeta Britânico e um título de Cavaleiro, as quais rejeitou.[5] Ainda assim, Kipling tornou-se conhecido (nas palavras de George Orwell) como um \"profeta do imperialismo britânico\".[6] Muitos viam preconceito e militarismo em suas obras,[7][8] e a controvérsia sobre esses temas em sua obra perdurou por muito tempo ainda no século XX.[9][10] De acordo com o crítico Douglas Kerr: \"Ele ainda é um autor que pode inspirar discordâncias apaixonadas e seu lugar na história da literatura e da cultura ainda está longe de ser definido. Mas à medida que a era dos impérios europeus retrocede, ele é reconhecido como um intérprete incomparável, ainda que controverso, de como o império era vivido. Isso, e um reconhecimento crescente de seus extraordinários talentos narrativos, faz dele uma força a ser respeitada\".[11] Seu poema \"If\" (Se) é símbolo dos Cadetes da Academia da Força Aérea.

			Uma de suas obras o \"Livro da Selva\" foi adotado por Robert Baden-Powell, fundador do Escotismo como fundo de cena para as atividades com jovens de 7 à 11 anos, denominando os jovens dessa faixa etária como lobinhos.
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Rudyard_Kipling' > Wikipedia </a>
					";
				}
			?>
		</div>
		<?php $auctor='KIPLINGrudyard'; include '../design/poemfind.php'; ?>
		<?php $user = 'KIPLINGrudyard'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>