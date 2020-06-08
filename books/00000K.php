<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT ".$_COOKIE['lang']." FROM translations WHERE fkey='00000K'");
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
			<?php $book = '00000K'; $ech = '1'; include '../design/bookinfo.php'; ?>
			<div id='review'>
				<div class='manlan' lang='pt'>
					<a name='goto1'></a>
					<h1> Resenha </h1>
					The Tragedie of Hamlet, Prince of Denmarke[1] (A tragédia de Hamlet, príncipe da Dinamarca), geralmente abreviada apenas como Hamlet, é uma tragédia de William Shakespeare, escrita entre 1599 e 1601.[2][3] A peça, situada na Dinamarca, reconta a história de como o Príncipe Hamlet tenta vingar a morte de seu pai, Hamlet, o rei, executado por Cláudio, seu irmão, que o envenenou e em seguida tomou o trono casando-se com a rainha. A peça traça um mapa do curso de vida na loucura real e na loucura fingida — do sofrimento opressivo à raiva fervorosa — e explora temas como a traição, vingança, incesto, corrupção e moralidade.

					Apesar da enorme investigação que se faz acerca do texto, o ano exato em que Shakespeare o escreveu permanece em debate. Três primeiras versões da peça sobreviveram aos nossos dias: essas são conhecidas como o Primeiro Quarto (Q1), o Segundo Quarto (Q2) e o First Folio (F1).[nota 1] Cada uma dessas possui linhas ou mesmo cenas que estão ausentes nas outras.[nota 2] Acredita-se que Shakespeare escreveu Hamlet baseado na lenda de Amleto, preservada no século XIII pelo cronista Saxão Gramático em seu Feitos dos Danos e, mais tarde, retomada por François de Belleforest no século XVI, e numa suposta peça do teatro isabelino conhecida hoje como Ur-Hamlet.

					Dada a estrutura dramática e a profundidade de caracterização, Hamlet pode ser analisada, interpretada e debatida por diversas perspectivas. Por exemplo, os estudiosos têm-se intrigado ao longo dos séculos sobre a hesitação de Hamlet em matar seu tio. Alguns encaram o ato como uma técnica de prolongar a ação do enredo, mas outros o vêem como o resultado da pressão exercida pelas complexas questões éticas e filosóficas que cercam o assassinato a sangue-frio, resultado de uma vingança calculada e de um desejo frustrado. Mais recentemente, críticos psicanalíticos têm examinado o elemento da mente inconsciente de Hamlet, enquanto críticos feministas reavaliam e reabilitam o caráter de personagens como Ofélia e Gertrudes.

					Hamlet é a peça mais longa de Shakespeare, e provavelmente a que mais trabalho lhe deu,[4] mas encontrou nos tempos um espaço que a consagrou como uma das mais poderosas e influentes tragédias em língua inglesa: durante o tempo de vida de Shakespeare, a peça estava entre uma das mais populares da Inglaterra e ainda figura entre os textos mais realizados do mundo, no topo, inclusive, da lista da Royal Shakespeare Company desde 1879.[5] Escrita para o Lord Chamberlain's Men, calcula-se que sobre Hamlet já se escreveram cerca de 80.000 volumes,[6] muitos deles certamente são obras de grandes nomes que foram influenciados pela tragédia shakespeariana, como Machado, Goethe, Dickens e Joyce, além de ser considerada por muitos críticos e artistas de todo o planeta como uma obra rica, aberta, universal e muitas vezes perfeita.[7]
					São identificadas muitas fontes antigas para o texto de Hamlet. A primeira trata-se de Hrólfs saga kraka, uma saga legendária da Escandinávia. Nela, o rei assassinado tem dois filhos — Hroar e Helgi — que passam a maior parte da história disfarçados sob nomes falsos, ao invés de fingirem estar numa condição de loucura — e é nisso que o texto difere-se do Hamlet de Shakespeare, onde o príncipe finge-se louco.[11] O segundo é a lenda romana de Bruto, registrada em dois trabalhos latinos diferentes. O herói, Lúcio (em latim "iluminado, luz"), muda seu nome para Brutus (em latim "estúpido", "bravo"), mudando também sua personalidade, passando a ser "idiota" para evitar o destino de seu pai e irmãos, acabando por degolar o assassino de sua família, o Rei Tarquinius. Torfaeus, um estudioso nórdico do século XVII, comparou o herói Amlodi e o herói espanhol Príncipe Ambales (da Saga de Ambales) ao Hamlet de Shakespeare. As semelhanças entre os textos, pelo menos, são bastante óbvias: a falsa loucura do príncipe, seu abate acidental do conselheiro do rei no quarto da mãe, e o eventual assassinato do tio.[12]

					A maioria dos primeiros elementos legendários foram entrelaçados no Vita Amlethi ("A Vida de Amleto") que data do século XIII, de Saxão Gramático, fazendo parte do Feitos dos Danos.[13] Escrito em latim, o texto reflete o conceito clássico romano acerca da virtude e do heroísmo, e foi amplamente estudado na época de Shakespeare.[14] Os principais paralelos no enredo são a loucura fingida do príncipe, o casamento apressado de sua mãe com o usurpador, o assassinato que o príncipe comete de um espião escondido e a sorte que ele adquire ao se esquivar da morte e fazer com que outros dois morram em seu lugar. Uma versão fiel e moderada da história de Saxo foi traduzida na França em 1570 por François de Belleforest, em seu Histoires Tragiques.[15] Belleforest, em seu trabalho de tradução, embelezou a obra de Saxo, além de dobrar o tamanho do texto e introduzir um elemento que, com certeza, Shakespeare usaria posteriormente: a melancolia do herói.[16]

					Contudo, a teoria popular diz que a principal fonte do dramaturgo inglês foi uma peça - hoje perdida - conhecida como Ur-Hamlet. Provavelmente escrita por Thomas Kyd, Ur-Hamlet foi encenada pela primeira vez em 1589 e é a primeira versão conhecida da história que incorpora um personagem-fantasma.[17] A companhia de Shakespeare, a Chamberlain's Men, talvez tenha adquirido a peça e encenado uma versão na mesma época, de modo que Shakespeare, que começou sua carreira literária revisando e difundindo textos de outros autores,[18] retrabalhou em cima do enredo.[19] Embora não se tenha notícia de nenhuma cópia do Ur-Hamlet, é impossível comparar seu estilo e linguagem com as obras conhecidas de qualquer autor. Consecutivamente, não há evidências de que Kyd a escreveu, tampouco evidências de que a obra não foi uma primeira versão da Hamlet do próprio Shakespeare. Essa recente ideia - que coloca Hamlet como mais recente do que a data geralmente aceita, com um longo período de desenvolvimento - tem conquistado alguns defensores, conquanto outros estudiosos desmintam essa especulação.[20]

					Concluindo, os estudiosos não possuem domínio com qualquer confidência que prove que Shakespeare se inspirou em alguma coisa do enredo do Ur-Hamlet (afinal, não se sabe nem mesmo se a obra de fato existiu) ou do enredo de Belleforest ou Saxo ou em qualquer outra fonte contemporânea dele. Não existem evidências claras de que Shakespeare construiu alguma referência direta com a versão de Saxo. Embora os elementos da versão de Belleforest apareçam na peça de Shakespeare, eles não estão presentes na história do Saxo. A questão se Shakespeare adotou esses elementos diretamente de Belleforest ou do resto do Ur-Hamlet permanece em aberto.[21]

					Muitos estudiosos rejeitam a ideia de que Hamlet tenha alguma conexão com o único filho de Shakespeare, Hamnet Shakespeare, que morreu em 1596 com apenas onze anos de idade. Ao contrário disto, a sabedoria convencional prega que Hamlet tem uma óbvia conexão com a lenda e que o nome Hamnet era bastante popular naquela época.[22] No entanto, Stephen Greenblatt argumenta acerca da coincidência dos nomes, dizendo que a tristeza de Shakespeare perante a perda do filho talvez o tenha inspirado na criação da tragédia. Greenblatt reforça que o nome de Hamnet Sadler, o vizinho stratfordiano em que o nome Hamnet foi inspirado, tinha seu nome escrito às vezes como "Hamlet Sadler" e que, na delicada ortografia daquela época, os nomes eram constantemente permutáveis.[23] O próprio Shakespeare escreveu o primeiro nome de Sadler como "Hamlett" em seu testamento.[24

					Desde o início do século XVII, a peça era famosa por seus personagens fantasmas e pela vívida dramatização da melancolia e da insanidade, o que levou uma procissão de nobres da corte a ir assisti-la durante a Era Jacobita e a Era Carolina.[43] Apesar de ter permanecido com uma audiência considerável, no final do século XVII os críticos da Restauração inglesa enxergavam Hamlet como uma peça primitiva e reprovaram seu estilo.[44] Essa visão mudou radicalmente a partir do século XVIII, o século seguinte, quando os críticos começaram a considerar Hamlet um herói puro, um jovem de ideias brilhantes e um homem em circunstâncias adversas.[45] Em meados do século XVIII, contudo, o advento da literatura gótica trouxe uma leitura psicológica e mística sobre Hamlet, recolocando a loucura e o fantasma da peça para a ribalta.[46] Até os finais deste século os teatrólogos e profissionais envolvidos no teatro começaram a ver Hamlet como confuso e inconsistente. Até então, ele era ora louco, ora lúcido; ora um herói, ora um fracassado.[47] Estes desenvolvimentos representaram uma mudança fundamental na crítica literária, que veio a se concentrar mais no personagem, em detrimento da trama.[48] O século XIX trouxe o Romantismo e, com ele, críticos e dramaturgos que valorizavam Hamlet como um indivíduo infernal, conturbado, que reflete um conflito contemporâneo de lutas internas e interiores, num caráter aberto e amplo.[49] Depois, os críticos se atentaram a focar na demora de Hamlet em matar seu tio como uma característica do personagem, ao invés de um elemento do enredo.[48] Essa atenção ao caráter do personagem e sua luta interna continuou na entrada do século XX, quando a crítica abordou Hamlet sob vários ângulos, discutindo sua temática e interpretação (que serão apresentadas no próximo capítulo).

					Em um período onde muitas peças eram apresentadas com duas horas de duração ou menos, o texto integral de Shakespeare possui 4.042 linhas, totalizando 29.551 palavras engendradas em cinco atos (é a peça mais longa de Shakespeare)[4] — ou seja, leva-se mais de quatro horas para encená-la fielmente.[51] Hamlet também contém um dos dispositivos mais favoritos de Shakespeare: o teatro no teatro.[52] Dramaticamente, desde o início da obra (a cena de abertura do castelo imperial) existe um clima de tensão que irá tomar conta de todo o resto do enredo da peça. Logo após isso, essa atmosfera ainda misteriosa fica um tanto mais clara com o aparecimento do Fantasma do pai de Hamlet.[7] De forma resumida, podemos dizer que Hamlet afastou-se da convenção dramática de sua época sob várias maneiras: primeiro, na época de Shakespeare, as peças eram usualmente baseadas no ensinamento da Poética de Aristóteles: "o drama precisa focar em sua ação, não em seu personagem."[53] Em Hamlet, no entanto, Shakespeare reverte essa técnica, substituindo as ações pelos solilóquios como meio de explicar para o público os pensamentos e os motivos de Hamlet; Segundo (e ao contrário de outras peças shakespearianas, com exceção de Otelo): não existe nenhum sub-enredo forte, sendo que todos os enredos se entrelaçam diretamente para a veia principal do enredo mais importante, a tentativa de Hamlet vingar seu pai. No entanto, esses sub-enredos, embora não possuam uma presença visivelmente definida, são diversas vezes selecionados de forma simples pelos críticos: o antagonismo de Hamlet e seu tio Cláudio, seus conflitos com a mãe, sua paixão pela infeliz Ofélia, o relacionamento de Ofélia com o irmão Laertes e o de Laertes com o pai Polônio.[7] Dentro desse caleidoscópio de sentimentos e embates psicológicos, a peça está cheia de irregularidades e descontinuidades em suas ações, principalmente no sub-enredo de antagonismo entre o príncipe e o atual rei: num dado momento, como na cena do coveiro,[10] Hamlet parece estar resolvido a matar Cláudio, mas na próxima cena, contudo, quando Cláudio aparece, ele se encontra subitamente manso.[54] Os estudiosos de Shakespeare ainda debatem se estes entrelaçamentos são enganos ou adiantamentos intencionais a acrescentar à temática da peça (confusão e dualidade).[54] Certos estudiosos acreditam que tal estrutura dramática tenha sido o principal fator de sucesso mundial dessa peça shakespeariana que, segundo eles, fascina todo tipo de plateia (desde a que procura o teatro como mera diversão até a que busca formas de pensamento mais profundas).[7]
					<hr>
					<a name='goto2'></a>
					<h1> Personagens </h1>
					<ul>
					</ul>
					<hr>
				</div>
			</div>
			<?php $book = '00000K'; $ech = '2'; include '../design/bookinfo.php'; ?>
		</div>
		<?php $user = 'SHAKESPEAREwilliam'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>