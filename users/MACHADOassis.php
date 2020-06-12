<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='MACHADOassis'");
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

		<?php $user = 'MACHADOassis'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			Joaquim Maria Machado de Assis (Rio de Janeiro, 21 de junho de 1839 — Rio de Janeiro, 29 de setembro de 1908) foi um escritor brasileiro, considerado por muitos <br />
			críticos, estudiosos, escritores e leitores um dos maiores senão o maior nome da literatura do Brasil.[2][3][4][5][6] Escreveu em praticamente todos os gêneros <br />
			literários, sendo poeta, romancista, cronista, dramaturgo, contista, folhetinista, jornalista e crítico literário.[7][8] Testemunhou a Abolição da escravatura e a <br />
			mudança política no país quando a República substituiu o Império, além das mais diversas reviravoltas pelo mundo em finais do século XIX e início do XX, tendo sido <br />
			grande comentador e relator dos eventos político-sociais de sua época.[9] <br />
			 <br />
			Nascido no Morro do Livramento, Rio de Janeiro, mestiço,[10] de uma família pobre, mal estudou em escolas públicas e nunca frequentou universidade.[11] Os biógrafos <br /> 
			notam que, interessado pela boemia e pela corte, lutou para subir socialmente abastecendo-se de superioridade intelectual e da cultura da capital.[12] Para isso, assumiu <br />
			 diversos cargos públicos, passando pelo Ministério da Agricultura, do Comércio e das Obras Públicas, e conseguindo precoce notoriedade em jornais onde publicava suas  <br />
			 primeiras poesias e crônicas. Em sua maturidade, reunido a colegas próximos, fundou e foi o primeiro presidente unânime da Academia Brasileira de Letras.[13] <br />

			Sua extensa obra constitui-se de dez romances, duzentos contos, dez peças teatrais, cinco coletâneas de poemas e sonetos, e mais de seiscentas crônicas.[14][15] Machado <br />
			 de Assis é considerado o introdutor do Realismo no Brasil, com a publicação de Memórias Póstumas de Brás Cubas (1881).[16][17] Este romance é posto ao lado de todas  <br />
			 suas produções posteriores, Quincas Borba, Dom Casmurro, Esaú e Jacó e Memorial de Aires, ortodoxamente conhecidas como pertencentes a sua segunda fase, em que se notam  <br />
			 traços de pessimismo e ironia, embora não haja rompimento de resíduos românticos. Dessa fase, os críticos destacam que suas melhores obras são as da Trilogia  <br />
			 Realista.[1] Sua primeira fase literária é constituída de obras como Ressurreição, A Mão e a Luva, Helena e Iaiá Garcia, onde notam-se características herdadas do  <br />
			 Romantismo, ou "convencionalismo", como prefere a crítica moderna.[18] <br />
			  <br />
			Sua obra foi de fundamental importância para as escolas literárias brasileiras do século XIX e do século XX e surge nos dias de hoje como de grande interesse acadêmico e <br />
			 público.[19] Influenciou grandes nomes das letras, como Olavo Bilac, Lima Barreto, Drummond de Andrade, John Barth, Donald Barthelme e outros. Ainda em vida, alcançou  <br />
			fama e prestígio pelo Brasil e países vizinhos.[20] Hoje em dia, por sua inovação literária e por sua audácia em temas sociais e precoces, é frequentemente visto como o <br />
			 escritor brasileiro de produção sem precedentes,[21] de modo que, recentemente, seu nome e sua obra têm alcançado diversos críticos, influenciados, estudiosos e  <br />
			 admiradores do mundo inteiro. Machado de Assis é considerado um dos grandes gênios da história da literatura, ao lado de autores como Dante, Shakespeare e Camões.[22]  <br />
			 Machado de Assis e Eça de Queiroz são considerados os dois maiores escritores em Língua portuguesa do século XIX.[23][24][25] É homenageado pelo principal prêmio  <br />
			 literário brasileiro, o Prêmio Machado de Assis. <br />
			 <br />
			Fonte: <a href='https://pt.wikipedia.org/wiki/Machado_de_Assis' > Wikipedia </a>
		</div>
		<?php $auctor='MACHADOassis'; include '../design/poemfind.php'; ?>
		<?php $user = 'MACHADOassis'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>