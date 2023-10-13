<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='COMTEauguste'");
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
		<?php $user = 'COMTEauguste'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<?php
				if ($_COOKIE['lang'] == 'pt') {
					echo "Isidore Auguste Marie François Xavier Comte (Montpellier, 19 de janeiro de 1798 — Paris, 5 de setembro de 1857) foi um filósofo francês que formulou a doutrina do Positivismo. Ele é considerado como o primeiro filósofo da ciência no sentido moderno do termo.[5] Comte também é visto como o fundador da disciplina acadêmica de Sociologia.

Influenciado pelo socialista utópico Henri de Saint-Simon, trabalhou intensamente na criação de uma filosofia positiva como tentativa de remediar o mal-estar social da Revolução Francesa, criando uma doutrina social baseada nas ciências. Comte foi uma grande influência no pensamento do século XIX, influenciando o trabalho de intelectuais sociais como Karl Marx, John Stuart Mill e George Eliot.[6] Seu conceito de sociologia e evolucionismo social deu o tom para os primeiros teóricos sociais e antropólogos, como Harriet Martineau e Herbert Spencer, evoluindo para a moderna sociologia acadêmica apresentada por Émile Durkheim como pesquisa social prática e objetiva.

As teorias sociais de Comte culminaram em sua \"Religião da Humanidade\", que pressagiava o desenvolvimento de organizações humanistas e humanistas religiosas não teístas no século XIX. Comte cunhou o significado da palavra altruísmo.[7] As ideias de Comte influenciaram as palavras Ordem e Progresso, lema da República Federativa do Brasil.[8]";
				}
				if ($_COOKIE['lang'] == 'en') {
					echo "Isidore Marie Auguste François Xavier Comte (pronounced [oɡyst kɔ̃t] (About this soundlisten); 19 January 1798 – 5 September 1857)[4] was a French philosopher and writer who formulated the doctrine of positivism. He is often regarded as the first philosopher of science in the modern sense of the term.[5] Comte's ideas are also seen as fundamental to thinking of sociology as an independent scientific discipline.[6]

Influenced by the utopian socialist Henri de Saint-Simon,[4] Comte developed positive philosophy in an attempt to remedy the social malaise of the French Revolution, calling for a new social doctrine based on science. He had a major impact on 19th-century thought, influencing the work of social thinkers such as John Stuart Mill and George Eliot.[7] His concept of sociologie and social evolutionism set the tone for early social theorists and anthropologists such as Harriet Martineau and Herbert Spencer, evolving into modern academic sociology presented by Émile Durkheim as practical and objective social research.

Comte's social theories culminated in his \"Religion of Humanity\",[4] which presaged the development of non-theistic religious humanist and secular humanist organisations in the 19th century. He may also have coined the word altruisme (altruism).[8]";
				}
				if ($_COOKIE['lang'] == 'es') {
					echo "Auguste Comte (nombre completo: Isidore Marie Auguste François Xavier Comte) (Montpellier, 19 de enero de 1798– París, 5 de septiembre de 1857) fue un filósofo francés, considerado el creador del positivismo y de la sociología.

Junto con Augustin Thierry, fue secretario del conde Henri de Saint-Simon durante siete años y ambos se separaron de él, debido a las muchas discrepancias que surgieron, entre ellas destaca el intento de Saint-Simon de atribuirse la obra Plan des travaux scientifiques nécessaires pour réorganiser la société, en la que Comte desarrolló su teoría general, diacrónica y heurística de la ley de los tres estados. Después de esta ruptura, Comte inició una etapa que calificó de «higiene cerebral» para alejarse de la influencia de las ideas de Saint-Simon.

Creó la palabra altruismo en función de lo cual vivió: dio clases gratis de astronomía y escribió una enciclopedia de varios tomos. Su filosofía tuvo gran influencia, incluso en la fundación de países, como es el caso de Brasil, en cuya bandera se lee orden y progreso, parte de la tríada filosófica de Comte (altruismo, orden, progreso).";
				}
			?>
		</div>
		<?php $auctor='COMTEauguste'; include '../design/poemfind.php'; ?>
		<?php $user = 'COMTEauguste'; include '../design/auctorbooks.php'; ?>
		<?php include '../design/footer.php' ?>
	</body>
</html>