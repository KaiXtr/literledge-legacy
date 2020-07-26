<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00001L'");
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
			<?php $book = '00001L'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Presidente Negro (originalmente denominado O Choque das Raças ou O Presidente Negro, e posteriormente, O Presidente Negro ou O Choque das Raças: romance americano do ano 2228), é um romance adulto (e de ficção científica) escrito por Monteiro Lobato.
					
					\"Gestado\" (segundo a própria expressão de Lobato) em apenas três semanas em meados de 1926 (apesar de ter começado a ganhar forma em 1905 [2]), \"O Choque das Raças\" foi escrito e pensado por seu autor como um cartão de visitas ao mercado editorial estadunidense, um cartão que lhe daria em troca \"um saco de dólares\"[3]. Lobato havia sido nomeado adido comercial no consulado brasileiro em Nova York, e antes de assumir o posto, conforme explicou em carta ao amigo Godofredo Rangel, teve uma \"idéia-mãe. Um romance americano isto é, editável nos Estados Unidos(...). Meio à Wells, com visão do futuro. O clou será o choque da raça negra com a branca, quando a primeira, cujo índice de proliferação é maior, alcançar a raça branca e batê-la nas urnas, elegendo um presidente negro! Acontecem coisas tremendas, mas vence por fim a inteligência do branco\".[4]

					\"O Choque das Raças\" reunia, portanto, uma \"visão do futuro\" nos moldes das obras de crítica social do escritor britânico H. G. Wells e as idéias sobre superioridade racial, degeneração e eugenia defendidas pelo psicólogo e físico amador francês Gustave Le Bon, cujos livros L’Homme et les Sociètes, Evolução da Força e Evolução da Matéria Lobato conhecia de longa data.[5] A obra faz ainda uma rápida referência ao \"perigo amarelo\", prevendo que por volta de 3527 os \"mongóis\" teriam substituído a raça branca na Europa.

					Longe, contudo, de configurar uma estratégia de marketing isolada, pensada apenas para conquistar o público estadunidense e um \"saco de dólares\", as idéias racistas defendidas por Lobato em sua obra o acompanhavam desde pelo menos 1900, quando leu L’Homme et les Sociètes (1881) de Le Bon, alentada obra em dois volumes onde o autor afirma que os seres humanos foram criados desigualmente, que a miscigenação é um fator de degeneração racial e que as mulheres, brancas ou negras, são inferiores até mesmo quando comparadas aos homens de \"raças inferiores\".

					Após a leitura, Monteiro Lobato diz ter sentido-se \"transformado em um montão de ruínas\",[6] tamanho foi o abalo sofrido por sua \"catolicidade caseira\".[6] Embora tenha tentado descobrir uma alternativa à \"teoria científica\" da desigualdade das raças, através da leitura de Comte e Spencer, Lobato parece ter deixado convencer-se pelas idéias de Le Bon. Nos anos seguintes, livros dos poligenistas Hyppolite Taine e Ernest Renan, figuras influentes no racialismo do século XIX, tornaram-se importantes fontes de referência para o escritor, que inclusive recomendava sua leitura aos amigos.

					Numa carta de 1905 endereçada ao amigo Tito, Lobato declara ser impossível \"civilizar\" e \"corrigir\" o povo brasileiro, \"devido ao fatalismo das inclinações, dos pendores, herdados com o sangue e depurados pelo meio\". Ele conclui que apenas uma injeção de \"sangue da raça mais superior\" (ou seja, a emigração oriunda de países europeus) asseguraria o futuro do país. Nesta mesma carta, ele chama de \"patriota\" ao brasileiro que se casasse com \"italiana ou alemã\".[7]

					Em 1908, talvez ecoando uma célebre declaração do Conde de Gobineau (que certa feita havia chamado os cariocas de \"macacos\"), Lobato confidenciou ao amigo Godofredo Rangel que a miscigenação criara uma classe de \"corcundas de Notre Dame\" nos subúrbios do Rio de Janeiro, declaração que trazia implícita uma crítica aos intelectuais da época, segundo os quais haveria um \"padrão de beleza grega\" entre a população mulata da cidade. Lobato advoga ainda a adoção de um esquema de segregação racial para o Brasil, nos moldes do então vigente nos EUA e a imigração de europeus para consertar a \"anti-Grécia\" carioca.[8]

					A partir de 1914, Lobato começou a publicar suas idéias sobre as \"raças\" brasileiras em livros e na grande imprensa, basicamente opondo o caboclo, \"espécie de homem baldio, semi-nômade, inadaptável à civilização, mas que vive à beira dela\"[9](e que mais tarde seria simbolizado pelo personagem Jeca Tatu), ao mulato, que, embora também fosse mestiço, possuía certa \"superioridade racial\" graças ao \"sangue recente do europeu, rico de atavismos estéticos\"[10]

					Não deixa de ser irônico que, justamente depois de destruir publicamente a imagem do caboclo, Lobato tenha sido obrigado a passar a fazer apologia do mesmo, após a reação de importantes segmentos da elite brasileira quando da republicação de \"Velha Praga\" no livro de contos \"Urupês\", em 1918. Acusado de vilipendiar o povo brasileiro, Lobato embarcou nas idéias higienistas então em voga, chegando a afirmar em carta que estava convencido de que \"o Jeca Tatu é a única coisa que presta neste país\"[4].

					O problema do Jeca deixara de ser sua origem mestiça, e sim um problema sanitário que seria resolvido com o enfrentamento das endemias rurais. Foi Cornélio Pires, profundo conhecedor do caipira paulista que mostrou, na sua obra \"Conversas ao pé do Fogo\", que Lobato só conhecera o caipira caboclo e o generalizou como se todos os caipiras fossem como o caipira caboclo:

					“	Coitado do meu patrício! Apesar dos governos os outros caipiras se vão endireitando à custa do próprio esforço, ignorantes de noções de higiene... Só ele, o caboclo, ficou mumbava, sujo e ruim! Ele não tem culpa... Ele nada sabe. Foi um desses indivíduos que Monteiro Lobato estudou, criando o Jeca Tatu, erradamente dado como representante do caipira em geral!	”
					[11]

					Como diria Lobato em O Problema Vital (1919), \"O Jeca não é assim, está assim\".

					Todavia, como bem o prova \"O Presidente Negro\", Lobato não havia renunciado inteiramente às suas antigas influências racistas. Ou, o que pode dar uma idéia do seu oportunismo, reciclou-as imaginando que assim seria mais fácil angariar a simpatia (e os dólares) do mercado editorial estadunidense.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Presidente Negro (originalmente denominado O Choque das Raças ou O Presidente Negro, e posteriormente, O Presidente Negro ou O Choque das Raças: romance americano do ano 2228), é um romance adulto (e de ficção científica) escrito por Monteiro Lobato.
					
					\"Gestado\" (segundo a própria expressão de Lobato) em apenas três semanas em meados de 1926 (apesar de ter começado a ganhar forma em 1905 [2]), \"O Choque das Raças\" foi escrito e pensado por seu autor como um cartão de visitas ao mercado editorial estadunidense, um cartão que lhe daria em troca \"um saco de dólares\"[3]. Lobato havia sido nomeado adido comercial no consulado brasileiro em Nova York, e antes de assumir o posto, conforme explicou em carta ao amigo Godofredo Rangel, teve uma \"idéia-mãe. Um romance americano isto é, editável nos Estados Unidos(...). Meio à Wells, com visão do futuro. O clou será o choque da raça negra com a branca, quando a primeira, cujo índice de proliferação é maior, alcançar a raça branca e batê-la nas urnas, elegendo um presidente negro! Acontecem coisas tremendas, mas vence por fim a inteligência do branco\".[4]

					\"O Choque das Raças\" reunia, portanto, uma \"visão do futuro\" nos moldes das obras de crítica social do escritor britânico H. G. Wells e as idéias sobre superioridade racial, degeneração e eugenia defendidas pelo psicólogo e físico amador francês Gustave Le Bon, cujos livros L’Homme et les Sociètes, Evolução da Força e Evolução da Matéria Lobato conhecia de longa data.[5] A obra faz ainda uma rápida referência ao \"perigo amarelo\", prevendo que por volta de 3527 os \"mongóis\" teriam substituído a raça branca na Europa.

					Longe, contudo, de configurar uma estratégia de marketing isolada, pensada apenas para conquistar o público estadunidense e um \"saco de dólares\", as idéias racistas defendidas por Lobato em sua obra o acompanhavam desde pelo menos 1900, quando leu L’Homme et les Sociètes (1881) de Le Bon, alentada obra em dois volumes onde o autor afirma que os seres humanos foram criados desigualmente, que a miscigenação é um fator de degeneração racial e que as mulheres, brancas ou negras, são inferiores até mesmo quando comparadas aos homens de \"raças inferiores\".

					Após a leitura, Monteiro Lobato diz ter sentido-se \"transformado em um montão de ruínas\",[6] tamanho foi o abalo sofrido por sua \"catolicidade caseira\".[6] Embora tenha tentado descobrir uma alternativa à \"teoria científica\" da desigualdade das raças, através da leitura de Comte e Spencer, Lobato parece ter deixado convencer-se pelas idéias de Le Bon. Nos anos seguintes, livros dos poligenistas Hyppolite Taine e Ernest Renan, figuras influentes no racialismo do século XIX, tornaram-se importantes fontes de referência para o escritor, que inclusive recomendava sua leitura aos amigos.

					Numa carta de 1905 endereçada ao amigo Tito, Lobato declara ser impossível \"civilizar\" e \"corrigir\" o povo brasileiro, \"devido ao fatalismo das inclinações, dos pendores, herdados com o sangue e depurados pelo meio\". Ele conclui que apenas uma injeção de \"sangue da raça mais superior\" (ou seja, a emigração oriunda de países europeus) asseguraria o futuro do país. Nesta mesma carta, ele chama de \"patriota\" ao brasileiro que se casasse com \"italiana ou alemã\".[7]

					Em 1908, talvez ecoando uma célebre declaração do Conde de Gobineau (que certa feita havia chamado os cariocas de \"macacos\"), Lobato confidenciou ao amigo Godofredo Rangel que a miscigenação criara uma classe de \"corcundas de Notre Dame\" nos subúrbios do Rio de Janeiro, declaração que trazia implícita uma crítica aos intelectuais da época, segundo os quais haveria um \"padrão de beleza grega\" entre a população mulata da cidade. Lobato advoga ainda a adoção de um esquema de segregação racial para o Brasil, nos moldes do então vigente nos EUA e a imigração de europeus para consertar a \"anti-Grécia\" carioca.[8]

					A partir de 1914, Lobato começou a publicar suas idéias sobre as \"raças\" brasileiras em livros e na grande imprensa, basicamente opondo o caboclo, \"espécie de homem baldio, semi-nômade, inadaptável à civilização, mas que vive à beira dela\"[9](e que mais tarde seria simbolizado pelo personagem Jeca Tatu), ao mulato, que, embora também fosse mestiço, possuía certa \"superioridade racial\" graças ao \"sangue recente do europeu, rico de atavismos estéticos\"[10]

					Não deixa de ser irônico que, justamente depois de destruir publicamente a imagem do caboclo, Lobato tenha sido obrigado a passar a fazer apologia do mesmo, após a reação de importantes segmentos da elite brasileira quando da republicação de \"Velha Praga\" no livro de contos \"Urupês\", em 1918. Acusado de vilipendiar o povo brasileiro, Lobato embarcou nas idéias higienistas então em voga, chegando a afirmar em carta que estava convencido de que \"o Jeca Tatu é a única coisa que presta neste país\"[4].

					O problema do Jeca deixara de ser sua origem mestiça, e sim um problema sanitário que seria resolvido com o enfrentamento das endemias rurais. Foi Cornélio Pires, profundo conhecedor do caipira paulista que mostrou, na sua obra \"Conversas ao pé do Fogo\", que Lobato só conhecera o caipira caboclo e o generalizou como se todos os caipiras fossem como o caipira caboclo:

					“	Coitado do meu patrício! Apesar dos governos os outros caipiras se vão endireitando à custa do próprio esforço, ignorantes de noções de higiene... Só ele, o caboclo, ficou mumbava, sujo e ruim! Ele não tem culpa... Ele nada sabe. Foi um desses indivíduos que Monteiro Lobato estudou, criando o Jeca Tatu, erradamente dado como representante do caipira em geral!	”
					[11]

					Como diria Lobato em O Problema Vital (1919), \"O Jeca não é assim, está assim\".

					Todavia, como bem o prova \"O Presidente Negro\", Lobato não havia renunciado inteiramente às suas antigas influências racistas. Ou, o que pode dar uma idéia do seu oportunismo, reciclou-as imaginando que assim seria mais fácil angariar a simpatia (e os dólares) do mercado editorial estadunidense.
					<hr>
						";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					O Presidente Negro (originalmente denominado O Choque das Raças ou O Presidente Negro, e posteriormente, O Presidente Negro ou O Choque das Raças: romance americano do ano 2228), é um romance adulto (e de ficção científica) escrito por Monteiro Lobato.
					
					\"Gestado\" (segundo a própria expressão de Lobato) em apenas três semanas em meados de 1926 (apesar de ter começado a ganhar forma em 1905 [2]), \"O Choque das Raças\" foi escrito e pensado por seu autor como um cartão de visitas ao mercado editorial estadunidense, um cartão que lhe daria em troca \"um saco de dólares\"[3]. Lobato havia sido nomeado adido comercial no consulado brasileiro em Nova York, e antes de assumir o posto, conforme explicou em carta ao amigo Godofredo Rangel, teve uma \"idéia-mãe. Um romance americano isto é, editável nos Estados Unidos(...). Meio à Wells, com visão do futuro. O clou será o choque da raça negra com a branca, quando a primeira, cujo índice de proliferação é maior, alcançar a raça branca e batê-la nas urnas, elegendo um presidente negro! Acontecem coisas tremendas, mas vence por fim a inteligência do branco\".[4]

					\"O Choque das Raças\" reunia, portanto, uma \"visão do futuro\" nos moldes das obras de crítica social do escritor britânico H. G. Wells e as idéias sobre superioridade racial, degeneração e eugenia defendidas pelo psicólogo e físico amador francês Gustave Le Bon, cujos livros L’Homme et les Sociètes, Evolução da Força e Evolução da Matéria Lobato conhecia de longa data.[5] A obra faz ainda uma rápida referência ao \"perigo amarelo\", prevendo que por volta de 3527 os \"mongóis\" teriam substituído a raça branca na Europa.

					Longe, contudo, de configurar uma estratégia de marketing isolada, pensada apenas para conquistar o público estadunidense e um \"saco de dólares\", as idéias racistas defendidas por Lobato em sua obra o acompanhavam desde pelo menos 1900, quando leu L’Homme et les Sociètes (1881) de Le Bon, alentada obra em dois volumes onde o autor afirma que os seres humanos foram criados desigualmente, que a miscigenação é um fator de degeneração racial e que as mulheres, brancas ou negras, são inferiores até mesmo quando comparadas aos homens de \"raças inferiores\".

					Após a leitura, Monteiro Lobato diz ter sentido-se \"transformado em um montão de ruínas\",[6] tamanho foi o abalo sofrido por sua \"catolicidade caseira\".[6] Embora tenha tentado descobrir uma alternativa à \"teoria científica\" da desigualdade das raças, através da leitura de Comte e Spencer, Lobato parece ter deixado convencer-se pelas idéias de Le Bon. Nos anos seguintes, livros dos poligenistas Hyppolite Taine e Ernest Renan, figuras influentes no racialismo do século XIX, tornaram-se importantes fontes de referência para o escritor, que inclusive recomendava sua leitura aos amigos.

					Numa carta de 1905 endereçada ao amigo Tito, Lobato declara ser impossível \"civilizar\" e \"corrigir\" o povo brasileiro, \"devido ao fatalismo das inclinações, dos pendores, herdados com o sangue e depurados pelo meio\". Ele conclui que apenas uma injeção de \"sangue da raça mais superior\" (ou seja, a emigração oriunda de países europeus) asseguraria o futuro do país. Nesta mesma carta, ele chama de \"patriota\" ao brasileiro que se casasse com \"italiana ou alemã\".[7]

					Em 1908, talvez ecoando uma célebre declaração do Conde de Gobineau (que certa feita havia chamado os cariocas de \"macacos\"), Lobato confidenciou ao amigo Godofredo Rangel que a miscigenação criara uma classe de \"corcundas de Notre Dame\" nos subúrbios do Rio de Janeiro, declaração que trazia implícita uma crítica aos intelectuais da época, segundo os quais haveria um \"padrão de beleza grega\" entre a população mulata da cidade. Lobato advoga ainda a adoção de um esquema de segregação racial para o Brasil, nos moldes do então vigente nos EUA e a imigração de europeus para consertar a \"anti-Grécia\" carioca.[8]

					A partir de 1914, Lobato começou a publicar suas idéias sobre as \"raças\" brasileiras em livros e na grande imprensa, basicamente opondo o caboclo, \"espécie de homem baldio, semi-nômade, inadaptável à civilização, mas que vive à beira dela\"[9](e que mais tarde seria simbolizado pelo personagem Jeca Tatu), ao mulato, que, embora também fosse mestiço, possuía certa \"superioridade racial\" graças ao \"sangue recente do europeu, rico de atavismos estéticos\"[10]

					Não deixa de ser irônico que, justamente depois de destruir publicamente a imagem do caboclo, Lobato tenha sido obrigado a passar a fazer apologia do mesmo, após a reação de importantes segmentos da elite brasileira quando da republicação de \"Velha Praga\" no livro de contos \"Urupês\", em 1918. Acusado de vilipendiar o povo brasileiro, Lobato embarcou nas idéias higienistas então em voga, chegando a afirmar em carta que estava convencido de que \"o Jeca Tatu é a única coisa que presta neste país\"[4].

					O problema do Jeca deixara de ser sua origem mestiça, e sim um problema sanitário que seria resolvido com o enfrentamento das endemias rurais. Foi Cornélio Pires, profundo conhecedor do caipira paulista que mostrou, na sua obra \"Conversas ao pé do Fogo\", que Lobato só conhecera o caipira caboclo e o generalizou como se todos os caipiras fossem como o caipira caboclo:

					“	Coitado do meu patrício! Apesar dos governos os outros caipiras se vão endireitando à custa do próprio esforço, ignorantes de noções de higiene... Só ele, o caboclo, ficou mumbava, sujo e ruim! Ele não tem culpa... Ele nada sabe. Foi um desses indivíduos que Monteiro Lobato estudou, criando o Jeca Tatu, erradamente dado como representante do caipira em geral!	”
					[11]

					Como diria Lobato em O Problema Vital (1919), \"O Jeca não é assim, está assim\".

					Todavia, como bem o prova \"O Presidente Negro\", Lobato não havia renunciado inteiramente às suas antigas influências racistas. Ou, o que pode dar uma idéia do seu oportunismo, reciclou-as imaginando que assim seria mais fácil angariar a simpatia (e os dólares) do mercado editorial estadunidense.
					<hr>
						";
					}
				?>
			</div>
			<?php $book = '00001L'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'LOBATOmonteiro'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>