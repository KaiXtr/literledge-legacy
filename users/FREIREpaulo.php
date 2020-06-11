<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

<html>
	<!--Então você gosta de usar o botão inspecionar né...?-->
	<head>
		<?php
			require '../account/mysql_connect.php';
			if ($notcon == null) {
				$find = $conn->query("SELECT pt,".$_COOKIE['lang']." FROM users WHERE nick='FREIREpaulo'");
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

		<?php $user = 'FREIREpaulo'; include '../design/userinfo.php'; ?>
		<div id='bio'>
			<div lang='pt-br'>
				Paulo Reglus Neves Freire (Recife, 19 de setembro de 1921 — São Paulo, 2 de maio de 1997) foi um educador e filósofo brasileiro. É considerado um dos pensadores mais notáveis na história da pedagogia mundial, tendo influenciado o movimento chamado pedagogia crítica. É também o Patrono da Educação Brasileira.[1]

				Sua prática didática fundamentava-se na crença de que o educando assimilaria o objeto de estudo fazendo uso de uma prática dialética com a realidade, em contraposição à por ele denominada educação bancária, tecnicista e alienante: o educando criaria sua própria educação, fazendo ele próprio o caminho, e não seguindo um já previamente construído; libertando-se de chavões alienantes, o educando seguiria e criaria o rumo do seu aprendizado. Destacou-se por seu trabalho na área da educação popular, voltada tanto para a escolarização como para a formação da consciência política.

				Autor de Pedagogia do Oprimido, livro que propõe um método de alfabetização dialético, se diferenciou do "vanguardismo" dos intelectuais de esquerda tradicionais e sempre defendeu o diálogo com as pessoas simples, não só como método, mas como um modo de ser realmente democrático. Trata-se da terceira obra mais citada em trabalhos acadêmicos da área de humanas em todo o mundo, à frente de clássicos como Vigiar e Punir de Michel Foucault e O Capital de Karl Marx.[2][3]

				Foi o brasileiro mais homenageado da história, com pelo menos 35 títulos de Doutor Honoris Causa de universidades da Europa e América; e recebeu diversos galardões como o prêmio da UNESCO de Educação para a Paz em 1986.[4][5][6] Em 13 de abril de 2012 foi sancionada a Lei nº 12.612, que declara o educador Paulo Freire Patrono da Educação Brasileira.[7] Segundo uma pesquisa envolvendo três estados brasileiros, Paulo Freire é o nome de escola mais comum.[8]
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Paulo_Freire' > Wikipedia </a>
			</div>
			<div lang='en'>
				Hot dog yea trup united states uhuuuu rockn roll <br />
				<br />
				Fonte: <a href='https://pt.wikipedia.org/wiki/Esopo' > Wikipedia </a>
			</div>
			<br />
			<iframe width="560" height="315" src="https://www.youtube.com/embed/2C518zxDAo0?start=141" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<?php $auctor='FREIREpaulo'; include '../design/poemfind.php'; ?>
		<?php $user = 'FREIREpaulo'; include '../design/auctorbooks.php'; ?>

		<?php include '../design/footer.php' ?>
	</body>
</html>