<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='SHELLEYmary'");
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

		<?php $user = 'SHELLEYmary'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Mary Wollstonecraft Shelley, nascida Mary Wollstonecraft Godwin (Somers Town, Londres, 30 de agosto de 1797 — Chester Square, Londres, 1 de fevereiro de 1851), mais conhecida por Mary Shelley, foi uma escritora britânica, filha do filósofo William Godwin e da feminista e escritora Mary Wollstonecraft.

				Mary Shelley foi autora, dramaturga, ensaísta, biógrafa e escritora de literatura de viagens, mais conhecida por seu romance gótico, Frankenstein: ou O Moderno Prometeu (1818). Ela também editou e promoveu os trabalhos de seu marido, o poeta romântico e filósofo Percy Bysshe Shelley, com quem se casou em 1816, após o suicídio de sua primeira esposa.

				A mãe de Mary morreu após 10 dias do seu nascimento; ela e sua meia-irmã, Fanny Imlay, foram criadas por seu pai. Quando Mary tinha quatro anos, Godwin casou-se com uma vizinha, Mary Jane Clairmont. Godwin deu à sua filha uma rica e informal educação, encorajando-a a aderir às suas teorias políticas liberais. Em 1814, Mary Godwin iniciou um relacionamento amoroso com um dos seguidores políticos de seu pai, o casado Percy Bysshe Shelley. Junto com a irmã adotiva de Mary, Claire Clairmont, eles partem para a França e viajam pela Europa; uma vez retornando a Inglaterra, Mary fica grávida de Percy. Durante os próximos dois anos, ela e Percy enfrentam o ostracismo, dívidas e a morte da filha prematura. Eles se casaram em 1816 após o suicídio da primeira mulher de Percy Shelley, Harriet. Em 1816, o famoso casal passou o verão com Lord Byron, John William Polidori, e Claire Clairmont próximos de Genebra, Suíça, onde Mary concebe a ideia de seu romance Frankenstein. Os Shelleys deixam a Grã-Bretanha em 1818 e vão para a Itália, onde o segundo e o terceiro filhos morrem antes do nascimento de seu último e único sobrevivente filho, Percy Florence. Em 1822, seu marido afogou-se quando seu barco afundou durante uma tempestade na Baía de La Spezia. Um ano depois, Mary Shelley retornou a Inglaterra, devotando-se, desde então à educação de seu filho e à carreira como autora profissional. A última década de sua vida foi marcada pela doença, provavelmente causada pelo tumor cerebral que a iria matar aos 53 anos de idade.

				Até os anos 70, Mary Shelley era conhecida principalmente por seus esforços em publicar os trabalhos de Percy Shelley e pelo romance Frankenstein, que permanece sendo lido mundialmente e tendo inspirado muitas peças de teatro e adaptações para o cinema. Os estudos atuais renderam uma visão mais abrangente das realizações de Mary Shelley. Estudiosos demonstraram mais interesse em sua carreira literária, particularmente seus romances, que incluem romances históricas Valperga (1823) e The Fortunes of Perkin Warbeck (1830), o romance apocalíptico The Last Man (1826), e seus últimos dois romances, Lodore (1835) e Falkner (1837). Estudos de seus últimos trabalhos conhecidos como o livro de viagens Rambles in Germany and Italy (1844) e os artigos biográficos de Dionysius Lardner's, Cabinet Cyclopaedia (1829–46), serviram de base e visualização de que Mary Shelley permaneceu uma política radical por toda a vida. O trabalho de Mary Shelley frequentemente discute que essa cooperação e simpatia, particularmente praticada pelas mulheres na família, eram maneiras de se reformar a sociedade civil. Esta visão foi um desafio direto ao caráter romântico individualista promovido por Percy Shelley e as teorias políticas iluministas articuladas por seu pai, William Godwin.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Mary_Shelley' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='SHELLEYmary'; include '../design/poemfind.php'; ?>
		<?php $user = 'SHELLEYmary'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>