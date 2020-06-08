<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000J'");
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
			<?php $book = '00000J'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Romeu e Julieta (no original em inglês Romeo and Juliet) é uma tragédia escrita entre 1591 e 1595, nos primórdios da carreira literária de William Shakespeare, sobre dois adolescentes cuja morte acaba unindo suas famílias, outrora em pé de guerra. A peça ficou entre as mais populares na época de Shakespeare e, ao lado de Hamlet, é uma das suas obras mais levadas aos palcos do mundo inteiro. Hoje, o relacionamento dos dois jovens é considerado como o arquétipo do amor juvenil.

					Romeu e Julieta pertence a uma tradição de romances trágicos que remonta à antiguidade. Seu enredo é baseado em um conto da Itália, traduzido em versos como A Trágica História de Romeu e Julieta por Arthur Brooke em 1562, e retomado em prosa como Palácio do Prazer por William Painter em 1582. Shakespeare baseou-se em ambos, mas reforçou a ação de personagens secundários, especialmente Mercúcio e Páris, a fim de expandir o enredo. O texto foi publicado pela primeira vez em um quarto[a] de 1597, mas essa versão foi considerada como de péssima qualidade, o que estimulou muitas outras edições posteriores que trouxeram consonância com o texto original shakespeariano.

					A estrutura dramática usada por Shakespeare—especialmente os efeitos de genéricos como a comutação entre comédia e tragédia para aumentar a tensão; o foco em personagens mais secundários e a utilização de sub-enredos para embelezar a história—tem sido elogiada como um sinal precoce de sua habilidade dramática e maturidade artística. Além disso, a peça atribui distintas formas poéticas aos personagens para mostrar que eles evoluem; Romeu, por exemplo, fica mais versado nos sonetos à medida que a trama segue.

					Em mais de cinco séculos de realização, Romeu e Julieta tem sido adaptada nos infinitos campos e áreas do teatro, cinema, música e literatura. Enquanto William Davenant tentava revigorá-la durante a Restauração inglesa, e David Garrick modificava cenas e removia materiais considerados indecentes no século XVIII, Charlotte Cushman, no século XIX, apresentava ao público uma versão que preservava o texto de Shakespeare. A peça tornou-se memorável nos palcos brasileiros com a interpretação de Paulo Porto e Sônia Oiticica nos papéis principais, e serviu de influência para o Visconde de Taunay em seu Inocência, também baseado em Amor de Perdição, de Camilo Castelo Branco, considerado o "Romeu e Julieta lusitano". Além de se mostrar influente no ultrarromantismo português e no naturalismo brasileiro, Romeu e Julieta mantém-se famosa nas produções cinematográficas atuais, notavelmente na versão de 1968 de Zeffirelli, indicado como melhor filme, e no mais recente Romeu + Julieta, de Luhrmann, que traz seu enredo para a atualidade.

					Os estudiosos não sabem exatamente quando Shakespeare escreveu Romeu e Julieta. No entanto, podemos adquirir determinadas pistas: a Ama de Julieta refere-se a um terremoto que tinha ocorrido 11 anos antes.[23] Considerando que surgiu um terremoto na Inglaterra em 1580, é possível determinar que a peça se passa em 1591 ou que esse é o ano em que Shakespeare escreveu a obra, embora muitos outros terremotos, tanto na Inglaterra quanto em Verona tenham ocorrido antes ou depois, fazendo com que diferentes datas sejam propostas.[24] Considerando também que os estudiosos apontam semelhanças do estilo artístico usado em Romeu e Julieta a Sonhos de Uma Noite de Verão e outras peças convencionalmente datadas em 1594-95, a tradição diz que Romeu e Julieta foi composta entre 1591 e 1595.[25] Existe a hipótese de que a peça era ainda um projeto recentemente iniciado no ano de 1591, concluído por Shakespeare em 1595.[26]

					O Romeu e Julieta de Shakespeare foi publicado em duas edições de quarto antes da publicação do First Folio em 1623. As duas versões são referidas como Q1 e Q2, respectivamente. A primeira edição impressa, Q1, aparece no início de 1597, realizada por John Danter. Como seu texto contém muitas diferenças se comparada às últimas edições, ela é conhecida como um 'mau quarto'.[27] O editor T.J.B. Spencer explicou, no século XX, que a versão "tem um texto detestável, provavelmente uma reconstrução da peça a partir de memórias imperfeitas de um ou mais ator(es)", sugerindo que ela foi pirateada para publicação.[27] Uma possível explicação para essas deficiências da Q1 é que a peça (como muitas outras de seu tempo) pode ter sido editada antes da atuação da companhia de teatro.[28] Em qualquer caso, seu aparecimento no início de 1597 torna o ano de 1596 como a data mais tardia para a composição da obra.[

					A segunda edição, Q2, é chamada de A Excelentíssima e Lamentável Tragédia de Romeu e Julieta e representa um texto superior ao da versão anterior (Q1).[28] Impressa em 1599 por Thomas Creede e publicada por Cuthbert Burby, ela possui cerca de 800 linhas a mais do que a Q1.[28] A sua capa descreve-a como "recém-corrigida, aumentada e alterada". Com base nessa informação, acredita-se que a Q2 foi baseada no projeto pré-encenação de Shakespeare (conhecido como seu "foul papers"), uma vez que existem curiosidades textuais como as diversas rubricas para personagens e "falsos inícios" para discursos que foram presumivelmente arrancados pelo autor mas erroneamente preservados pelo editor.[28] Seu texto é mais completo e fiável, e por isso foi reimpresso em 1609 (Q3), 1622 (Q4) e 1637 (Q5).[27] Com efeito, todos os últimos quartos e fólios de Romeu e Julieta são baseados em Q2, como todas as edições modernas e seus editores acreditam que qualquer defeito que haja em edições anteriores ao Q2 (boas ou más) foram causadas pelos seus respectivos impressores e/ou pelas gráficas e editoras da época, e não por William Shakespeare.[28]

					O texto do Primeiro Fólio, de 1623, é baseado primariamente em Q3, com esclarecimentos e correções feitos a partir de um livro teatral ou a partir do Q1.[27][29] Outras edições da peça em Fólio foram impressas em 1632 (F2), 1664 (F3), e em 1685 (F4).[30] As versões modernas - contando com os vários fólios e quartos - apareceram pela primeira vez na edição de 1709 do dramaturgo Nicholas Rowe, seguido pela versão de Alexander Pope em 1723. Essa última versão merece especial destaque, porque Pope iniciou uma tradição editiva da peça ao adicionar algumas etapas de posições de palco e cena, já que Q2 carecia dessas direções, presentes, contudo, em Q1.[30] A tradição continuou a ser usada no período do Romantismo.[31] As edições com maior número de notas apareceram pela primeira vez na Era vitoriana e continuam a ser produzidas nos dias de hoje, onde existem uma ampla variedade de notas ao longo do texto, destacando e explicando as origens e a cultura por detrás da peça.[31]
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					Casa dos Capuleto
					<li>Capuleto é o amante da mãe de Julieta.</li>
					<li>Senhora Capuleto é a mulher do sr Capuleto.</li>
					<li>Julieta é a filha única dos Capuleto's, já que seus irmãos morreram, e a protagonista feminina da peça.</li>
					<li>Teobaldo é primo de Julieta, e filho bastardo do pai de Romeu.</li>
					<li>Ama é a confidente e ama de Julieta.</li>
					<li>Pedro e Gregório são os criados dos Capuleto's.</li>
					<h2>Governo</h2>
					<li>Príncipe Escala é o Príncipe de Verona</li>
					<li>Páris é um jovem nobre, parente do príncipe, e pretendente de Julieta.</li>
					<li>Mercúcio é parente do príncipe e amigo de Romeu.</li>
					<h2>Casa dos Montéquio</h2>
					<li>Montéquio é o patriarca da casa dos Montecchios.</li>
					<li>Senhora Montéquio é a matriarca da casa dos Montecchios.</li>
					<li>Romeu é o filho único dos Montecchios, e o protagonista masculino da peça.</li>
					<li>Benvólio é sobrinho de Montecchio e primo de Romeu.</li>
					<li>Abraão e Baltasar são os criados dos Montecchios.</li>
					<h2>Outros</h2>
					<li>Frei Lourenço é confidente de Romeu e franciscano.</li>
					<li>Frei João é quem iria entregar a carta de Frei Lourenço para Romeu.</li>
					<li>Um Boticário, que vende a poção fatal para Romeu</li>
					<li>Rosalina é uma personagem invisível, pretendente de Romeu antes dele conhecer Julieta.</li>
					</ul>
					<hr>
				</div>
			</div>
			<?php $book = '00000J'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'SHAKESPEAREwilliam'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>