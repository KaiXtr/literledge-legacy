<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='HOMERUS'");
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

		<?php $user = 'HOMERUS'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Homero (em grego: Ὅμηρος, transl. Hómēros) foi um poeta épico da Grécia Antiga, ao qual tradicionalmente se atribui a autoria dos poemas épicos Ilíada e Odisseia. <br />
			<br />
			Os gregos antigos geralmente acreditavam que Homero era um indivíduo histórico, mas os estudiosos modernos são céticos: nenhuma informação biográfica de confiança <br />
			foi transmitida a partir da antiguidade clássica,[1] e os próprios poemas manifestamente representam o culminar de muitos séculos de história contadas oralmente e um <br />
			bem desenvolvido sistema já muitas vezes usado de composição poética. De acordo com Martin West, "Homero" não é "o nome de um poeta histórico, mas um nome fictício ou <br />
			construído".[2] Para o historiador e filósofo Richard Tarnas, Homero - independentemente da polêmica sobre sua existência histórica - foi "uma personificação coletiva <br />
			de toda a memória grega antiga".[3] <br />
			<br />
			Homero teria nascido em Esmirna, atual Turquia, ou em alguma ilha do mar Egeu e vivido no século VIII a.C. Mas a sua origem é tão controversa que oito cidades disputam <br />
			a honra de terem sido a terra natal do poeta.[4] <br />
			<br />
			A data da existência de Homero foi controversa na antiguidade e não o é menos hoje. Heródoto disse que Homero viveu 400 anos antes de seu próprio tempo, o que o <br />
			colocaria em torno de 850 a.C., mas outras fontes antigas deram datas muito mais próximas da suposta época da Guerra de Troia.[5] A data da Guerra de Troia foi <br />
			dada como 1194-1184 a.C. por Eratóstenes, que se esforçou para estabelecer uma cronologia científica dos eventos e esta data tem obtido apoio por causa de pesquisas <br />
			 arqueológicas mais recentes.[carece de fontes] <br />

			Para a ciência moderna, "a data de Homero" refere-se à data de concepção dos poemas tanto quanto à vida de um indivíduo. O consenso dos estudiosos é que <br />
			"a Ilíada e a Odisseia datam dos últimos anos do século IX a.C., ou a partir do século VIII a.C., a Ilíada sendo anterior à Odisseia, talvez por algumas décadas",[6] <br />
			ou seja, um pouco mais cedo do que Hesíodo,[7] e que a Ilíada é o trabalho mais antigo da literatura ocidental. Ao longo das últimas décadas, alguns estudiosos têm <br />
			defendido uma data do século VII a.C. Aqueles que acreditam que os poemas homéricos desenvolveram-se gradualmente durante um longo período de tempo, entretanto, <br />
			geralmente dão uma data posterior para os poemas: de acordo com Pausânias, os textos foram compilados na época do tirano ateniense Pisístrato;[8] de acordo com <br />
			Gregory Nagy, tornaram-se textos fixos apenas no século VI a.C.[9] <br />
			<br />
			Alfred Heubeck afirma que a influência formativa dos trabalhos de Homero modelando e influenciando todo o desenvolvimento da cultura grega foi reconhecida por <br />
			muitos dos próprios gregos, que o consideravam seu instrutor.[10] <br />
			<br />
			Além dessas duas grandes obras, mas sem respaldo histórico ou literário, são a ele atribuídas as obras Margites, poema cômico a respeito de um herói trapalhão; <br />
			a Batracomiomaquia, paródia burlesca da Ilíada que relata uma guerra fantástica entre ratos e rãs, e os Hinos homéricos. <br />
			<br />
			Já antes do início do pensamento filosófico, as riquíssimas obras de Homero (Ilíada e Odisseia) tendem a aproximar os deuses dos homens, num movimento de racionalização <br />
			do divino. Os deuses homéricos, que viviam no Monte Olimpo, possuíam uma série de características antropomórficas. <br />
			<br />
			Apesar de "Homero" ser um nome grego, atestado em regiões de fala eólica,[11] nada de concreto se sabe sobre ele; entretanto, tradições surgiram pretendendo dar <br />
			detalhes sobre o local de seu nascimento e seu contexto: o satírico Luciano, em sua fabulosa Verdadeira História, faz de Homero um Babilônio que assumiu o nome de <br />
			Homero apenas quando tomado "refém" (homeros) pelos gregos.[12] Quando o imperador Adriano perguntou ao oráculo de Delfos quem Homero era realmente, <br />
			Pítia proclamou que ele era um ítaco, filho de Jocasta e Telêmaco, da Odisseia.[13] Essas histórias proliferaram e foram incorporadas a um número[14] de <br />
			Vidas de Homero compiladas a partir do período alexandrino.[15] A versão mais comum diz que Homero nasceu na região jônia da Ásia Menor, em Esmirna, ou <br />
			na ilha de Quios, morrendo em Ios, nas ilhas Cíclades.[15][16] A conexão com Esmirna parece ser em alusão a uma lenda que seu nome original era "Melesigenes" <br />
			("nascido no Meles", um rio que corria por essa cidade), e da ninfa Creteia. Evidências contidas em seus poemas dão algum apoio a esta versão: a familiaridade <br />
			com a topografia da área do litoral da Ásia Menor é vista nos nomes dos locais e nos detalhes, e comparações evocativas do cenário local: as aves dos prados, <br />
			na foz do Caister (Ilíada 2.459ff.), uma tempestade no mar e abisarque Ícaro (Ilíada 2.144ff.), e conhecimento sobre os ventos (Ilíada 2.394ff : 4.422ff: 9,5),[17] <br />
			ou que as mulheres tanto da Meônia quanto da Cária tingem marfim com escarlate (Ilíada 4,142).[18] <br />
			<br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Homero' > Wikipedia </a>
		</div>
		<?php $auctor='HOMERUS'; include '../design/poemfind.php'; ?>
		<?php $user = 'HOMERUS'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>