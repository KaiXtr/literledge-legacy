<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT name,".$_COOKIE['lang']." FROM users WHERE nick='HOBBESthomas'");
				$i = $find->fetch_assoc();
				if ($i[$_COOKIE['lang']] == null) {$v = $i['name'].' - ';}
				else {$v = $i[$_COOKIE['lang']].' - ';}
			}
			require '../design/metadata.php';
		?>
	</head>

	<body>
		<?php include '../design/header.php' ?>
		<?php include '../design/lateralbar.php' ?>

		<?php $user = 'HOBBESthomas'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Thomas Hobbes (5 de abril de 1588 – 4 de dezembro de 1679) foi um matemático, teórico político e filósofo inglês, autor de Leviatã (1651) e Do cidadão (1651). <br />
			Na obra Leviatã, explanou os seus pontos de vista sobre a natureza humana e sobre a necessidade de um governo e de uma sociedade fortes. <br />
			No estado natural, embora alguns homens possam ser mais fortes ou mais inteligentes do que outros, nenhum se ergue tão acima dos demais de forma a estar isento <br />
			do medo de que outro homem lhe possa fazer mal. Por isso, cada um de nós tem direito a tudo e, uma vez que todas as coisas são escassas, existe uma constante guerra <br />
			de todos contra todos (Bellum omnia omnes). No entanto, os homens têm um desejo, que é também em interesse próprio, de acabar com a guerra e, por isso, <br />
			formam sociedades através de um contrato social.[1] <br />
			<br />
			De acordo com Hobbes, tal sociedade necessita de uma autoridade à qual todos os membros devem render o suficiente da sua liberdade natural, de forma que a <br />
			autoridade possa assegurar a paz interna e a defesa comum. Este soberano, quer seja um monarca ou uma assembleia (que pode, até mesmo, ser composta de todos, <br />
			caso em que seria uma democracia), deveria ser o Leviatã, uma autoridade inquestionável. A teoria política do Leviatã mantém, no essencial, as ideias de <br />
			suas duas obras anteriores, Os elementos da lei e Do cidadão (em que tratou a questão das relações entre Igreja e Estado). <br />
			<br />
			Thomas Hobbes defendia a ideia segundo a qual os homens só podem viver em paz se concordarem em submeter-se a um poder absoluto e centralizado. <br />
			O Estado não pode estar sujeito às leis por ele criadas pois isso seria infringir sua soberania. Para ele, a Igreja cristã e o Estado cristão formavam <br />
			um mesmo corpo, encabeçado pelo monarca, que teria o direito de interpretar as Escrituras, decidir questões religiosas[2] e presidir o culto. <br />
			Neste sentido, critica a livre interpretação da Bíblia na Reforma Protestante por, de certa forma, enfraquecer o monarca. Sua filosofia política foi analisada <br />
			pelo cientista político Richard Tuck como uma resposta para os problemas que o método cartesiano introduziu para a filosofia moral. Hobbes argumenta que só <br />
			podemos conhecer algo do mundo exterior a partir das impressões sensoriais que temos dele ("Só existe o que meus sentidos percebem"). <br />
			Esta filosofia é vista como uma tentativa de embasar uma teoria coerente de uma formação social puramente no fato das impressões em si, a partir da tese de <br />
			que as impressões sensoriais são suficientes para o homem agir no sentido de preservar sua própria vida. A partir desse imperativo, Hobbes constrói toda <br />
			sua filosofia política. <br />
			<br />
			Segundo Hobbes, o ser humano não nasce livre, pois somente podemos nos considerar realmente livres quando somos capazes de avaliar as consequências, boas ou más, <br />
			das nossas ações. <br />
			<br />
			Hobbes ainda escreveu muitos outros livros falando sobre filosofia política e outros assuntos, oferecendo uma descrição da natureza humana como cooperação <br />
			em interesse próprio. Foi contemporâneo de Descartes e escreveu uma das respostas para a obra Meditações sobre filosofia primeira, deste último. <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Thomas_Hobbes' > Wikipedia </a>
		</div>
		<?php $auctor='HOBBESthomas'; include '../design/poemfind.php'; ?>
		<?php $user = 'HOBBESthomas'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>