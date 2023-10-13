<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000J'");
				$i = $find->fetch_assoc();
				$v = $i[$_COOKIE['lang']];
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
				<?php
					if ($_COOKIE['lang'] == 'pt') {
						echo "
					<a name='goto1'></a>
					<h1> Resenha </h1>
					Romeu e Julieta (no original em inglês Romeo and Juliet) é uma tragédia escrita entre 1591 e 1595, nos primórdios da carreira literária de William Shakespeare, sobre dois adolescentes cuja morte acaba unindo suas famílias, outrora em pé de guerra. A peça ficou entre as mais populares na época de Shakespeare e, ao lado de Hamlet, é uma das suas obras mais levadas aos palcos do mundo inteiro. Hoje, o relacionamento dos dois jovens é considerado como o arquétipo do amor juvenil.

					Romeu e Julieta pertence a uma tradição de romances trágicos que remonta à antiguidade. Seu enredo é baseado em um conto da Itália, traduzido em versos como A Trágica História de Romeu e Julieta por Arthur Brooke em 1562, e retomado em prosa como Palácio do Prazer por William Painter em 1582. Shakespeare baseou-se em ambos, mas reforçou a ação de personagens secundários, especialmente Mercúcio e Páris, a fim de expandir o enredo. O texto foi publicado pela primeira vez em um quarto[a] de 1597, mas essa versão foi considerada como de péssima qualidade, o que estimulou muitas outras edições posteriores que trouxeram consonância com o texto original shakespeariano.

					A estrutura dramática usada por Shakespeare—especialmente os efeitos de genéricos como a comutação entre comédia e tragédia para aumentar a tensão; o foco em personagens mais secundários e a utilização de sub-enredos para embelezar a história—tem sido elogiada como um sinal precoce de sua habilidade dramática e maturidade artística. Além disso, a peça atribui distintas formas poéticas aos personagens para mostrar que eles evoluem; Romeu, por exemplo, fica mais versado nos sonetos à medida que a trama segue.

					Em mais de cinco séculos de realização, Romeu e Julieta tem sido adaptada nos infinitos campos e áreas do teatro, cinema, música e literatura. Enquanto William Davenant tentava revigorá-la durante a Restauração inglesa, e David Garrick modificava cenas e removia materiais considerados indecentes no século XVIII, Charlotte Cushman, no século XIX, apresentava ao público uma versão que preservava o texto de Shakespeare. A peça tornou-se memorável nos palcos brasileiros com a interpretação de Paulo Porto e Sônia Oiticica nos papéis principais, e serviu de influência para o Visconde de Taunay em seu Inocência, também baseado em Amor de Perdição, de Camilo Castelo Branco, considerado o \"Romeu e Julieta lusitano\". Além de se mostrar influente no ultrarromantismo português e no naturalismo brasileiro, Romeu e Julieta mantém-se famosa nas produções cinematográficas atuais, notavelmente na versão de 1968 de Zeffirelli, indicado como melhor filme, e no mais recente Romeu + Julieta, de Luhrmann, que traz seu enredo para a atualidade.

					Os estudiosos não sabem exatamente quando Shakespeare escreveu Romeu e Julieta. No entanto, podemos adquirir determinadas pistas: a Ama de Julieta refere-se a um terremoto que tinha ocorrido 11 anos antes.[23] Considerando que surgiu um terremoto na Inglaterra em 1580, é possível determinar que a peça se passa em 1591 ou que esse é o ano em que Shakespeare escreveu a obra, embora muitos outros terremotos, tanto na Inglaterra quanto em Verona tenham ocorrido antes ou depois, fazendo com que diferentes datas sejam propostas.[24] Considerando também que os estudiosos apontam semelhanças do estilo artístico usado em Romeu e Julieta a Sonhos de Uma Noite de Verão e outras peças convencionalmente datadas em 1594-95, a tradição diz que Romeu e Julieta foi composta entre 1591 e 1595.[25] Existe a hipótese de que a peça era ainda um projeto recentemente iniciado no ano de 1591, concluído por Shakespeare em 1595.[26]

					O Romeu e Julieta de Shakespeare foi publicado em duas edições de quarto antes da publicação do First Folio em 1623. As duas versões são referidas como Q1 e Q2, respectivamente. A primeira edição impressa, Q1, aparece no início de 1597, realizada por John Danter. Como seu texto contém muitas diferenças se comparada às últimas edições, ela é conhecida como um 'mau quarto'.[27] O editor T.J.B. Spencer explicou, no século XX, que a versão \"tem um texto detestável, provavelmente uma reconstrução da peça a partir de memórias imperfeitas de um ou mais ator(es)\", sugerindo que ela foi pirateada para publicação.[27] Uma possível explicação para essas deficiências da Q1 é que a peça (como muitas outras de seu tempo) pode ter sido editada antes da atuação da companhia de teatro.[28] Em qualquer caso, seu aparecimento no início de 1597 torna o ano de 1596 como a data mais tardia para a composição da obra.[

					A segunda edição, Q2, é chamada de A Excelentíssima e Lamentável Tragédia de Romeu e Julieta e representa um texto superior ao da versão anterior (Q1).[28] Impressa em 1599 por Thomas Creede e publicada por Cuthbert Burby, ela possui cerca de 800 linhas a mais do que a Q1.[28] A sua capa descreve-a como \"recém-corrigida, aumentada e alterada\". Com base nessa informação, acredita-se que a Q2 foi baseada no projeto pré-encenação de Shakespeare (conhecido como seu \"foul papers\"), uma vez que existem curiosidades textuais como as diversas rubricas para personagens e \"falsos inícios\" para discursos que foram presumivelmente arrancados pelo autor mas erroneamente preservados pelo editor.[28] Seu texto é mais completo e fiável, e por isso foi reimpresso em 1609 (Q3), 1622 (Q4) e 1637 (Q5).[27] Com efeito, todos os últimos quartos e fólios de Romeu e Julieta são baseados em Q2, como todas as edições modernas e seus editores acreditam que qualquer defeito que haja em edições anteriores ao Q2 (boas ou más) foram causadas pelos seus respectivos impressores e/ou pelas gráficas e editoras da época, e não por William Shakespeare.[28]

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
						";
					}
					if ($_COOKIE['lang'] == 'en') {
						echo "<a name='goto1'> </a>
					<h1> Review </h1>
					Romeo and Juliet (in the original in English Romeo and Juliet) is a tragedy written between 1591 and 1595, at the beginning of William Shakespeare's literary career, about two teenagers whose death ends up uniting their families, once on a war footing. The play was among the most popular in Shakespeare's time and, alongside Hamlet, is one of his works most taken to stages around the world. Today, the relationship of the two young people is considered to be the archetype of youthful love.

					Romeo and Juliet belongs to a tradition of tragic romances that dates back to antiquity. Its plot is based on a tale from Italy, translated into verses like The Tragic History of Romeo and Juliet by Arthur Brooke in 1562, and resumed in prose as Palace of Pleasure by William Painter in 1582. Shakespeare was based on both, but reinforced the action of secondary characters, especially Mercúcio and Páris, in order to expand the plot. The text was first published in a quarter [a] of 1597, but this version was considered to be of very poor quality, which stimulated many other later editions that brought it in line with the original Shakespearean text.

					The dramatic structure used by Shakespeare — especially the effects of generics such as switching between comedy and tragedy to increase tension; the focus on more secondary characters and the use of sub-plots to embellish the story — has been praised as an early sign of his dramatic ability and artistic maturity. In addition, the play attributes different poetic forms to the characters to show that they evolve; Romeo, for example, becomes more versed in sonnets as the plot progresses.

					In more than five centuries of achievement, Romeo and Juliet has been adapted in the infinite fields and areas of theater, cinema, music and literature. While William Davenant tried to reinvigorate it during the English Restoration, and David Garrick modified scenes and removed materials considered indecent in the 18th century, Charlotte Cushman, in the 19th century, presented the public with a version that preserved Shakespeare's text. The play became memorable on Brazilian stages with the interpretation of Paulo Porto and Sônia Oiticica in the main roles, and served as an influence for the Viscount of Taunay in his Innocence, also based on Amor de Perdição, by Camilo Castelo Branco, considered the \"Romeo and Juliet Portuguese\". In addition to being influential in Portuguese ultrarromantism and Brazilian naturalism, Romeo and Juliet remains famous in current film productions, notably in the 1968 version of Zeffirelli, nominated for best film, and in the most recent Romeo + Juliet, by Luhrmann, who brings its plot to the present.

					Scholars do not know exactly when Shakespeare wrote Romeo and Juliet. However, we can acquire certain clues: Ama de Julieta refers to an earthquake that had occurred 11 years before. [23] Considering that an earthquake arose in England in 1580, it is possible to determine that the play takes place in 1591 or that this is the year that Shakespeare wrote the work, although many other earthquakes, both in England and in Verona, occurred before or after, causing different dates to be proposed. [24] Also considering that scholars point out similarities in the artistic style used in Romeo and Juliet to Dreams of a Midsummer Night and other pieces conventionally dated in 1594-95, tradition says that Romeo and Juliet was composed between 1591 and 1595. [25] There is a hypothesis that the play was still a project recently started in the year 1591, completed by Shakespeare in 1595. [26]

					Shakespeare's Romeo and Juliet was published in two fourth editions before the publication of First Folio in 1623. Both versions are referred to as Q1 and Q2, respectively. The first print edition, Q1, appears in early 1597, by John Danter. As its text contains many differences compared to the last editions, it is known as a 'bad room'. [27] The editor T.J.B. Spencer explained, in the 20th century, that the version \"has a hateful text, probably a reconstruction of the play from imperfect memories by one or more actors (s)\" suggesting that it was pirated for publication. [27] A possible explanation for these deficiencies in Q1 is that the play (like many others of its time) may have been edited before the theater company performed. [28] In any case, its appearance at the beginning of 1597 makes the year 1596 the latest date for the composition of the work.

					The second edition, Q2, is called The Excellent and Regrettable Tragedy of Romeo and Juliet and represents a text superior to that of the previous version (Q1). [28] Printed in 1599 by Thomas Creede and published by Cuthbert Burby, it has about 800 more lines than Q1. [28] Its cover describes it as \"newly corrected, enlarged and changed \". Based on that information, ac";
					}
					if ($_COOKIE['lang'] == 'es') {
						echo "binfoes";
					}
				?>
			</div>
			<?php $book = '00000J'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'SHAKESPEAREwilliam'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>