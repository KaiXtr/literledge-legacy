<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='ARISTOTLE'");
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

		<?php $user = 'ARISTOTLE'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "
				Aristóteles (em grego clássico: Ἀριστοτέλης; transl.: Aristotélēs; Estagira, 384 a.C. — Atenas, 322 a.C.) foi um filósofo grego durante o período clássico na Grécia antiga, fundador da escola peripatética e do Liceu, além de ter sido aluno de Platão e professor de Alexandre, o Grande.[2] Seus escritos abrangem diversos assuntos como: a física, a metafísica, as leis da poesia e do drama, a música, a lógica, a retórica, o governo, a ética, a biologia, a linguística, a economia e a zoologia. Juntamente com Platão e Sócrates (professor de Platão), Aristóteles é visto como um dos fundadores da filosofia ocidental. Em 343 a.C. torna-se tutor de Alexandre da Macedónia, na época com treze anos de idade, que será o mais célebre conquistador do mundo antigo. Em 335 a.C. Alexandre assume o trono e Aristóteles volta para Atenas onde funda o Liceu.

				Todos os aspectos da filosofia de Aristóteles continuam sendo objeto de estudos acadêmicos. Embora Aristóteles tenha escrito muitos tratados e diálogos formatados para publicação, apenas cerca de um terço de sua produção original sobreviveu, nenhuma delas destinada à publicação.[3] Aristóteles foi retratado por grandes artistas, como Rafael Sanzio e Rembrandt. As primeiras teorias científicas modernas, incluindo a circulação do sangue de William Harvey e a cinemática de Galileu Galilei, foram desenvolvidas em reação às de Aristóteles. No século XIX, George Boole deu à lógica de Aristóteles uma base matemática com um sistema de lógica algébrica. No século XX, Martin Heidegger criou uma nova interpretação da filosofia política de Aristóteles, entretanto em outros lugares Aristóteles foi amplamente criticado, até mesmo ridicularizado por pensadores como o filósofo Bertrand Russell e o biólogo Peter Medawar. Mais recentemente, Aristóteles foi novamente levado a sério, como no pensamento ético de autores como Ayn Rand, Alasdair MacIntyre, John McDowell e Philippa Foot,[4] enquanto Armand Marie Leroi reconstruiu a biologia aristotélica. A imagem de Aristóteles orientando o jovem Alexandre permanece atual, como foi retratada no filme de 2004, Alexandre. Sua obra Poética continua a exercer influência no cinema norte-americano.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Arist%C3%B3teles' > Wikipedia </a>";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "
				Aristóteles (em grego clássico: Ἀριστοτέλης; transl.: Aristotélēs; Estagira, 384 a.C. — Atenas, 322 a.C.) foi um filósofo grego durante o período clássico na Grécia antiga, fundador da escola peripatética e do Liceu, além de ter sido aluno de Platão e professor de Alexandre, o Grande.[2] Seus escritos abrangem diversos assuntos como: a física, a metafísica, as leis da poesia e do drama, a música, a lógica, a retórica, o governo, a ética, a biologia, a linguística, a economia e a zoologia. Juntamente com Platão e Sócrates (professor de Platão), Aristóteles é visto como um dos fundadores da filosofia ocidental. Em 343 a.C. torna-se tutor de Alexandre da Macedónia, na época com treze anos de idade, que será o mais célebre conquistador do mundo antigo. Em 335 a.C. Alexandre assume o trono e Aristóteles volta para Atenas onde funda o Liceu.

				Todos os aspectos da filosofia de Aristóteles continuam sendo objeto de estudos acadêmicos. Embora Aristóteles tenha escrito muitos tratados e diálogos formatados para publicação, apenas cerca de um terço de sua produção original sobreviveu, nenhuma delas destinada à publicação.[3] Aristóteles foi retratado por grandes artistas, como Rafael Sanzio e Rembrandt. As primeiras teorias científicas modernas, incluindo a circulação do sangue de William Harvey e a cinemática de Galileu Galilei, foram desenvolvidas em reação às de Aristóteles. No século XIX, George Boole deu à lógica de Aristóteles uma base matemática com um sistema de lógica algébrica. No século XX, Martin Heidegger criou uma nova interpretação da filosofia política de Aristóteles, entretanto em outros lugares Aristóteles foi amplamente criticado, até mesmo ridicularizado por pensadores como o filósofo Bertrand Russell e o biólogo Peter Medawar. Mais recentemente, Aristóteles foi novamente levado a sério, como no pensamento ético de autores como Ayn Rand, Alasdair MacIntyre, John McDowell e Philippa Foot,[4] enquanto Armand Marie Leroi reconstruiu a biologia aristotélica. A imagem de Aristóteles orientando o jovem Alexandre permanece atual, como foi retratada no filme de 2004, Alexandre. Sua obra Poética continua a exercer influência no cinema norte-americano.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Arist%C3%B3teles' > Wikipedia </a>";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "
				Aristóteles (em grego clássico: Ἀριστοτέλης; transl.: Aristotélēs; Estagira, 384 a.C. — Atenas, 322 a.C.) foi um filósofo grego durante o período clássico na Grécia antiga, fundador da escola peripatética e do Liceu, além de ter sido aluno de Platão e professor de Alexandre, o Grande.[2] Seus escritos abrangem diversos assuntos como: a física, a metafísica, as leis da poesia e do drama, a música, a lógica, a retórica, o governo, a ética, a biologia, a linguística, a economia e a zoologia. Juntamente com Platão e Sócrates (professor de Platão), Aristóteles é visto como um dos fundadores da filosofia ocidental. Em 343 a.C. torna-se tutor de Alexandre da Macedónia, na época com treze anos de idade, que será o mais célebre conquistador do mundo antigo. Em 335 a.C. Alexandre assume o trono e Aristóteles volta para Atenas onde funda o Liceu.

				Todos os aspectos da filosofia de Aristóteles continuam sendo objeto de estudos acadêmicos. Embora Aristóteles tenha escrito muitos tratados e diálogos formatados para publicação, apenas cerca de um terço de sua produção original sobreviveu, nenhuma delas destinada à publicação.[3] Aristóteles foi retratado por grandes artistas, como Rafael Sanzio e Rembrandt. As primeiras teorias científicas modernas, incluindo a circulação do sangue de William Harvey e a cinemática de Galileu Galilei, foram desenvolvidas em reação às de Aristóteles. No século XIX, George Boole deu à lógica de Aristóteles uma base matemática com um sistema de lógica algébrica. No século XX, Martin Heidegger criou uma nova interpretação da filosofia política de Aristóteles, entretanto em outros lugares Aristóteles foi amplamente criticado, até mesmo ridicularizado por pensadores como o filósofo Bertrand Russell e o biólogo Peter Medawar. Mais recentemente, Aristóteles foi novamente levado a sério, como no pensamento ético de autores como Ayn Rand, Alasdair MacIntyre, John McDowell e Philippa Foot,[4] enquanto Armand Marie Leroi reconstruiu a biologia aristotélica. A imagem de Aristóteles orientando o jovem Alexandre permanece atual, como foi retratada no filme de 2004, Alexandre. Sua obra Poética continua a exercer influência no cinema norte-americano.
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Arist%C3%B3teles' > Wikipedia </a>";
				}
			?>
		</div>
		<?php $auctor='ARISTOTLE'; include '../design/poemfind.php'; ?>
		<?php $user = 'ARISTOTLE'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>