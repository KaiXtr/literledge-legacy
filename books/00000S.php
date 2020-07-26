<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000S'");
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
			<?php $book = '00000S'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Os Lusíadas é uma obra de poesia épica do escritor português Luís Vaz de Camões, considerada \"epopeia portuguesa por excelência\"Provavelmente concluída em 1556, foi publicada pela primeira vez em 1572 no período literário do Humanismo, três anos após o regresso do autor do Oriente.

					A obra é composta de dez cantos, 1.102 estrofes e 8.816 versos que são oitavas decassílabas, sujeitas ao esquema rímico fixo AB AB AB CC – oitava rima camoniana. A ação central é a descoberta do caminho marítimo para a Índia por Vasco da Gama, à volta da qual se vão descrevendo outros episódios da história de Portugal, glorificando o povo português.

					A estrutura externa refere-se à análise formal do poema: número de estrofes, número de versos por estrofe, número de sílabas métricas, tipos de rimas, ritmo, figuras de estilo, etc. Assim:

					Os Lusíadas é constituído por dez partes, chamadas de cantos na lírica;
					cada canto tem um número variável de estrofes (em média, 110);
					as estâncias são oitavas, tendo portanto oito versos; a rima é cruzada nos seis primeiros versos e emparelhada nos dois últimos (AB AB AB CC, ver na citação ao lado);
					cada verso é constituído por dez sílabas métricas (decassilábico), na sua maioria heróicas (acentuadas nas sextas e décimas sílabas).
					Sendo Os Lusíadas um texto renascentista, não poderia deixar de seguir a estética grega que dava particular importância ao número de ouro. Assim, o clímax da narrativa, a chegada à Índia, foi colocada no ponto que divide a obra na proporção áurea (início do Canto VII).

					A estrutura interna relaciona-se com o conteúdo do texto. Esta obra mostra ser uma epopeia clássica ao dividir-se em quatro partes:

					Proposição - introdução, apresentação do assunto e dos heróis (estrofes 1 a 3 do Canto I);
					Invocação - o poeta invoca as ninfas do Tejo e pede-lhes a inspiração para escrever (estrofes 4 e 5 do Canto I);
					Dedicatória - o poeta dedica a obra ao rei D. Sebastião (estrofes 6 a 18 do Canto I);
					Narração - a narrativa da viagem, in medias res, partindo do meio da ação para voltar atrás no tempo e explicar o que aconteceu até ao momento na viagem de Vasco de Gama e na história de Portugal, e depois prosseguir na linha temporal.
					Por fim, há um epílogo a concluir a obra (estrofes 145 a 156 do Canto X).

					Plano da Viagem - onde se trata da viagem da descoberta do caminho marítimo para a Índia de Vasco da Gama e dos seus marinheiros;
					Plano da História de Portugal - são relatados episódios da história dos portugueses;
					Plano da Mitologia - são descritas as influências e as intervenções dos deuses da mitologia greco-romana na ação dos heróis.
					Plano das considerações do Poeta - Camões refere-se a si mesmo enquanto poeta admirador do povo e dos heróis portugueses;
					Ao longo da narração deparam-se-nos vários tipos de episódios: bélicos, mitológicos, históricos, simbólicos, líricos e naturalistas.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
					<a name='goto3'></a>
					<h1> Curiosidades </h1>
					<ul>
					A origem deste texto não é clara, mas consta que, em 1589, quatro estudantes da Universidade de Évora escreveram uma paródia ao primeiro canto d'Os Lusíadas. É possível encontrar este poema no site Project Gutenberg.
					Em 1968 foi publicada, em edição de autor, uma obra intituada Os Lusos, da autoria de José da Costa, um autodidata de Vila Nova de Famalicão. A obra pretende ser a continuação d’Os Lusíadas e está estruturada do mesmo modo, contendo quatro cantos que se iniciam por uma breve análise feita pelo autor.
					Em 1984, foi publicada em Portugal pela Editorial Notícias uma reedição d’Os Lusíadas em banda desenhada, criada por José Ruy. (ISBN 972-46-1144-2)
					Em 2000 foi publicada uma versão deste épico em banda desenhada (história em quadradinhos), do cartonista Fido Nesti (ISBN 85-7596-073-3);
					Em 2006 foi publicada outra BD (HQ) com o nome de Lusíadas 2500, uma nova leitura da obra de Camões, desta vez num ambiente futurístico de ficção científica, por Lailson de Holanda Cavalcanti (ISBN 85-04-01037-6)
					Álvares Cardoso Gomes lançou uma obra intitulad\"Por Mares há muito navegados\"					Em 2018, João Morgado edit\"O Livro do Império\"0], que narra a escrita e impressão d'Os Lusíadas, e os meandros da corte e do Santo Ofício que autorizaram uma publicação tão polémica.(ISBN 978-989-724-451-3)
					</ul>
					<hr>
							";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Os Lusíadas é uma obra de poesia épica do escritor português Luís Vaz de Camões, considerada \"epopeia portuguesa por excelência\"Provavelmente concluída em 1556, foi publicada pela primeira vez em 1572 no período literário do Humanismo, três anos após o regresso do autor do Oriente.

					A obra é composta de dez cantos, 1.102 estrofes e 8.816 versos que são oitavas decassílabas, sujeitas ao esquema rímico fixo AB AB AB CC – oitava rima camoniana. A ação central é a descoberta do caminho marítimo para a Índia por Vasco da Gama, à volta da qual se vão descrevendo outros episódios da história de Portugal, glorificando o povo português.

					A estrutura externa refere-se à análise formal do poema: número de estrofes, número de versos por estrofe, número de sílabas métricas, tipos de rimas, ritmo, figuras de estilo, etc. Assim:

					Os Lusíadas é constituído por dez partes, chamadas de cantos na lírica;
					cada canto tem um número variável de estrofes (em média, 110);
					as estâncias são oitavas, tendo portanto oito versos; a rima é cruzada nos seis primeiros versos e emparelhada nos dois últimos (AB AB AB CC, ver na citação ao lado);
					cada verso é constituído por dez sílabas métricas (decassilábico), na sua maioria heróicas (acentuadas nas sextas e décimas sílabas).
					Sendo Os Lusíadas um texto renascentista, não poderia deixar de seguir a estética grega que dava particular importância ao número de ouro. Assim, o clímax da narrativa, a chegada à Índia, foi colocada no ponto que divide a obra na proporção áurea (início do Canto VII).

					A estrutura interna relaciona-se com o conteúdo do texto. Esta obra mostra ser uma epopeia clássica ao dividir-se em quatro partes:

					Proposição - introdução, apresentação do assunto e dos heróis (estrofes 1 a 3 do Canto I);
					Invocação - o poeta invoca as ninfas do Tejo e pede-lhes a inspiração para escrever (estrofes 4 e 5 do Canto I);
					Dedicatória - o poeta dedica a obra ao rei D. Sebastião (estrofes 6 a 18 do Canto I);
					Narração - a narrativa da viagem, in medias res, partindo do meio da ação para voltar atrás no tempo e explicar o que aconteceu até ao momento na viagem de Vasco de Gama e na história de Portugal, e depois prosseguir na linha temporal.
					Por fim, há um epílogo a concluir a obra (estrofes 145 a 156 do Canto X).

					Plano da Viagem - onde se trata da viagem da descoberta do caminho marítimo para a Índia de Vasco da Gama e dos seus marinheiros;
					Plano da História de Portugal - são relatados episódios da história dos portugueses;
					Plano da Mitologia - são descritas as influências e as intervenções dos deuses da mitologia greco-romana na ação dos heróis.
					Plano das considerações do Poeta - Camões refere-se a si mesmo enquanto poeta admirador do povo e dos heróis portugueses;
					Ao longo da narração deparam-se-nos vários tipos de episódios: bélicos, mitológicos, históricos, simbólicos, líricos e naturalistas.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
					<a name='goto3'></a>
					<h1> Curiosidades </h1>
					<ul>
					A origem deste texto não é clara, mas consta que, em 1589, quatro estudantes da Universidade de Évora escreveram uma paródia ao primeiro canto d'Os Lusíadas. É possível encontrar este poema no site Project Gutenberg.
					Em 1968 foi publicada, em edição de autor, uma obra intituada Os Lusos, da autoria de José da Costa, um autodidata de Vila Nova de Famalicão. A obra pretende ser a continuação d’Os Lusíadas e está estruturada do mesmo modo, contendo quatro cantos que se iniciam por uma breve análise feita pelo autor.
					Em 1984, foi publicada em Portugal pela Editorial Notícias uma reedição d’Os Lusíadas em banda desenhada, criada por José Ruy. (ISBN 972-46-1144-2)
					Em 2000 foi publicada uma versão deste épico em banda desenhada (história em quadradinhos), do cartonista Fido Nesti (ISBN 85-7596-073-3);
					Em 2006 foi publicada outra BD (HQ) com o nome de Lusíadas 2500, uma nova leitura da obra de Camões, desta vez num ambiente futurístico de ficção científica, por Lailson de Holanda Cavalcanti (ISBN 85-04-01037-6)
					Álvares Cardoso Gomes lançou uma obra intitulad\"Por Mares há muito navegados\"					Em 2018, João Morgado edit\"O Livro do Império\"0], que narra a escrita e impressão d'Os Lusíadas, e os meandros da corte e do Santo Ofício que autorizaram uma publicação tão polémica.(ISBN 978-989-724-451-3)
					</ul>
					<hr>
							";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Os Lusíadas é uma obra de poesia épica do escritor português Luís Vaz de Camões, considerada \"epopeia portuguesa por excelência\"Provavelmente concluída em 1556, foi publicada pela primeira vez em 1572 no período literário do Humanismo, três anos após o regresso do autor do Oriente.

					A obra é composta de dez cantos, 1.102 estrofes e 8.816 versos que são oitavas decassílabas, sujeitas ao esquema rímico fixo AB AB AB CC – oitava rima camoniana. A ação central é a descoberta do caminho marítimo para a Índia por Vasco da Gama, à volta da qual se vão descrevendo outros episódios da história de Portugal, glorificando o povo português.

					A estrutura externa refere-se à análise formal do poema: número de estrofes, número de versos por estrofe, número de sílabas métricas, tipos de rimas, ritmo, figuras de estilo, etc. Assim:

					Os Lusíadas é constituído por dez partes, chamadas de cantos na lírica;
					cada canto tem um número variável de estrofes (em média, 110);
					as estâncias são oitavas, tendo portanto oito versos; a rima é cruzada nos seis primeiros versos e emparelhada nos dois últimos (AB AB AB CC, ver na citação ao lado);
					cada verso é constituído por dez sílabas métricas (decassilábico), na sua maioria heróicas (acentuadas nas sextas e décimas sílabas).
					Sendo Os Lusíadas um texto renascentista, não poderia deixar de seguir a estética grega que dava particular importância ao número de ouro. Assim, o clímax da narrativa, a chegada à Índia, foi colocada no ponto que divide a obra na proporção áurea (início do Canto VII).

					A estrutura interna relaciona-se com o conteúdo do texto. Esta obra mostra ser uma epopeia clássica ao dividir-se em quatro partes:

					Proposição - introdução, apresentação do assunto e dos heróis (estrofes 1 a 3 do Canto I);
					Invocação - o poeta invoca as ninfas do Tejo e pede-lhes a inspiração para escrever (estrofes 4 e 5 do Canto I);
					Dedicatória - o poeta dedica a obra ao rei D. Sebastião (estrofes 6 a 18 do Canto I);
					Narração - a narrativa da viagem, in medias res, partindo do meio da ação para voltar atrás no tempo e explicar o que aconteceu até ao momento na viagem de Vasco de Gama e na história de Portugal, e depois prosseguir na linha temporal.
					Por fim, há um epílogo a concluir a obra (estrofes 145 a 156 do Canto X).

					Plano da Viagem - onde se trata da viagem da descoberta do caminho marítimo para a Índia de Vasco da Gama e dos seus marinheiros;
					Plano da História de Portugal - são relatados episódios da história dos portugueses;
					Plano da Mitologia - são descritas as influências e as intervenções dos deuses da mitologia greco-romana na ação dos heróis.
					Plano das considerações do Poeta - Camões refere-se a si mesmo enquanto poeta admirador do povo e dos heróis portugueses;
					Ao longo da narração deparam-se-nos vários tipos de episódios: bélicos, mitológicos, históricos, simbólicos, líricos e naturalistas.
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
					<a name='goto3'></a>
					<h1> Curiosidades </h1>
					<ul>
					A origem deste texto não é clara, mas consta que, em 1589, quatro estudantes da Universidade de Évora escreveram uma paródia ao primeiro canto d'Os Lusíadas. É possível encontrar este poema no site Project Gutenberg.
					Em 1968 foi publicada, em edição de autor, uma obra intituada Os Lusos, da autoria de José da Costa, um autodidata de Vila Nova de Famalicão. A obra pretende ser a continuação d’Os Lusíadas e está estruturada do mesmo modo, contendo quatro cantos que se iniciam por uma breve análise feita pelo autor.
					Em 1984, foi publicada em Portugal pela Editorial Notícias uma reedição d’Os Lusíadas em banda desenhada, criada por José Ruy. (ISBN 972-46-1144-2)
					Em 2000 foi publicada uma versão deste épico em banda desenhada (história em quadradinhos), do cartonista Fido Nesti (ISBN 85-7596-073-3);
					Em 2006 foi publicada outra BD (HQ) com o nome de Lusíadas 2500, uma nova leitura da obra de Camões, desta vez num ambiente futurístico de ficção científica, por Lailson de Holanda Cavalcanti (ISBN 85-04-01037-6)
					Álvares Cardoso Gomes lançou uma obra intitulad\"Por Mares há muito navegados\"					Em 2018, João Morgado edit\"O Livro do Império\"0], que narra a escrita e impressão d'Os Lusíadas, e os meandros da corte e do Santo Ofício que autorizaram uma publicação tão polémica.(ISBN 978-989-724-451-3)
					</ul>
					<hr>
							";
					}
				?>
			</div>
			<?php $book = '00000S'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'CAMOESluis'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>