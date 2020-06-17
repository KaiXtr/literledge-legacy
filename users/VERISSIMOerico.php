<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='VERISSIMOerico'");
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

		<?php $user = 'VERISSIMOerico'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div class='manlan' lang='pt'>
				Erico Lopes Verissimo[nota 1] (Cruz Alta, 17 de dezembro de 1905 — Porto Alegre, 28 de novembro de 1975) foi um dos escritores brasileiros mais populares do século XX.[1]
				De família abastada que se arruinou, Érico Verissimo era filho do farmacêutico Sebastião Verissimo da Fonseca (1880-1935) e da dona de casa Abegahy Lopes (dita "dona Bega"). Tinha um irmão mais novo, Ênio (1907), e uma irmã adotiva, Maria.[1] Quando tinha quatro anos de idade, Érico ficou gravemente doente e, após ser levado a vários médicos, foi finalmente diagnosticado com meningite complicada com broncopneumonia pelo médico Olinto de Oliveira, cujo tratamento salvou sua vida. Durante sua infância, estudou no Colégio Venâncio Aires, em Cruz Alta, onde foi um aluno comportado e quieto, frequentava o cinema e observava o pai trabalhando. Por volta de 1914, com quase dez anos, Érico criou uma "revista", Caricatura, na qual fazia desenhos e escrevia pequenas notas.[2]

				Aos treze anos, Érico já lia autores nacionais, como Aluísio Azevedo e Joaquim Manuel de Macedo, e estrangeiros, como Walter Scott, Émile Zola e Fiódor Dostoiévski. Em 1920, foi matriculado no extinto Colégio Cruzeiro do Sul (hoje Colégio IPA), um internato de orientação protestante de Porto Alegre, deixando sua namorada Vânia em Cruz Alta. No novo colégio, Verissimo foi por muito tempo o primeiro aluno de sua turma, embora tivesse aversão à matemática.[1] Em seu último ano letivo, o jovem Érico chegou a sofrer de claustrofobia e de pesadelos. Em dezembro de 1922, terminados os estudos do filho, seus pais se separaram; as diferenças do casal eram notáveis: Sebastião era um homem gastador e mulherengo e dona Bega, uma mulher econômica e reclusa. Érico, sua mãe e seus irmãos passaram então a morar na casa dos avós maternos. Endividado, o pai perdeu a propriedade da farmácia. No ano seguinte, Érico empregou-se como balconista no armazém do tio Américo Lopes e, depois, no Banco Nacional do Comércio. Durante esse tempo, transcrevia obras de Euclides da Cunha e de Machado de Assis, dentre outros escritores, e tomou gosto pela música lírica. Também aprofundou mais ainda a leitura de escritores nacionais e estrangeiros. Em 1924, para que o irmão Ênio pudesse frequentar o ginásio, a família mudou-se para a capital gaúcha, mas, após um ano de extremas dificuldades financeiras,[2] retornou a Cruz Alta. Em 1926, Érico se tornou sócio da Farmácia Central, junto com um amigo de seu pai, mas o novo empreendimento faliu em 1930, deixando uma dívida que só conseguiria liquidar dezessete anos depois. Além de farmacêutico, Érico também trabalhou como professor de literatura e língua inglesa à época.

				Em 1927, Verissimo conheceu sua futura esposa, Mafalda Halfen Volpe, então com quinze anos, e os dois ficaram noivos em 1929. Nesse mesmo ano, Érico publicou seu primeiro texto: Chico: um Conto de Natal, na revista mensal "Cruz Alta em Revista". Em seguida, seu amigo Manuelito de Ornelas enviou os contos Ladrão de Gado e A Tragédia dum Homem Gordo à Revista do Globo. E o jornal Correio do Povo publicou o conto A Lâmpada Mágica.[3]
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/%C3%89rico_Ver%C3%ADssimo' > Wikipedia </a>
			</div>
			<div class='manlan' lang='en'>
				Hot dog yea trup united states uhuuuu rockn roll <br />
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Esopo' > Wikipedia </a>
			</div>
		</div>
		<?php $auctor='VERISSIMOerico'; include '../design/poemfind.php'; ?>
		<?php $user = 'VERISSIMOerico'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>